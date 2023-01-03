<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	 <link rel="stylesheet" href="style.css" />
    <title>bookmyshow</title>
	<style type="text/css">
	.d-none{
		display: none;
	}
	</style>
  </head>
  <body>
    <form action="seats.php" method="post">
	<center label for="movie">Select Movie:</label>
		<select name="movie" ><option value="Avatar">Avatar</option>
							 </select>
     <br/>
	 <label for="uname" >Your Name:</label>
      <input type="text" name="uname" required />
      <br/>
	  <div class="container">
      <div class="screen"></div>
      <br/>
	  <center label for="seats" required>Select Seat Type:</label>
		<select name="standard" id="standard" required><option value="" >Select</option>
													   <option value="standard" >Standard</option>
													   <option value="Premium" >Premium</option></select>
										
										  <br/>
        <label for="seats">Select Seats:</label>
		<select name="seats" id="mySelect" >
        <?php
          for($x = 1; $x <= 5; $x++) {
            echo "<option value='$x'>$x</option>";
          }
        ?>
        </select>
      <br/>
      <br/>
      <?php
          $conn = new mysqli("localhost", "root", "", "bookmyshow");
          $sql = "SELECT seatno FROM shows";
          $result = mysqli_query($conn, $sql);
          $booked=array();
          while($row = $result->fetch_assoc()) {
            array_push($booked, $row['seatno']);
          }
          $seat_count = 1;
          $booked_seat = 0;
          echo "<h4>Standard</h4>";
          for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 10; $j++) {
              if(in_array($seat_count, $booked)) {
                echo "<input type='checkbox' name='seat_no[]' value='$seat_count' checked disabled />";
                ++$booked_seat;
              } else {
                echo "<script>
                  function myFunction(el) {
                    var x = document.getElementById('mySelect').value;
                
                    var values = [];
                    
                    var select = parseInt(el.value) - $booked_seat;

                    var inputs = document.querySelectorAll('.selectSeats'); 
                    var i = 0; 
                    while(i < (x-1)) {   
                        inputs[select++].checked = true;  
                        i++;
                    }   
                  }
              </script>";
                echo "<input type='checkbox' name='seat_no[]' class='selectSeats' value='$seat_count' onclick='myFunction(this)'/>";
              }
              $seat_count++;
            }
            echo "<br/>";
          } 
          echo "<h4 >Premium</h4>";
          for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 10; $j++) {
              if(in_array($seat_count, $booked)) {
                echo "<input type='checkbox' name='seat_no[]' value='$seat_count' checked disabled/>";
                ++$booked_seat;
              } else {
                echo "<script>
                  function myFunction(el) {
                    var x = document.getElementById('mySelect').value;
                
                    var values = [];
                    
                    var select = parseInt(el.value) - $booked_seat;

                    var inputs = document.querySelectorAll('.selectSeats'); 
                    var i = 0; 
                    while(i < (x-1)) {   
                        inputs[select++].checked = true;  
                        i++;
                    }   
                  }
              </script>";
                echo "<input type='checkbox' name='seat_no[]' class='selectSeats' value='$seat_count' onclick='myFunction(this)'/>";
              }
              $seat_count++;
            }
            echo "<br/>";
          } 
      ?>
      <br/>
      <input type="submit" name="submit" value="submit">
    </center></form>
  </body>
</html>
