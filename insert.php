<?php
include 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO `users`(`name`, `email`, `phone`, `msg`) VALUES (' $name', ' $email' ,' $phone' ,' $msg')";

    if (mysqli_query($conn, $sql)){
        echo "new record";
    }
    else{
        echo "error:";
    }
}
?>
  $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `phone`, `image`) VALUES (' $fname','$lname',' $email',' $phone ','$img_des')";

if (mysqli_query($conn, $sql)){
    echo "new record";
}
else{
    echo "error:";
}
}