<?php
    $conn = new mysqli("localhost", "root", "", "bookmyshow");
    if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $shows = $_POST['movie'];
    $seats = $_POST['seat_no'];
	
    foreach($seats as $seat):
        $sql = "INSERT INTO shows (showname, uname, seatno) VALUES ('$shows', '$uname', $seat)";
        mysqli_query($conn, $sql);
    endforeach;

    $conn->close();
    header('Location: index.php');
    }
?>