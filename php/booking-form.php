<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

    #Below used backtick (`) for query to correspond!
    #$_REQUEST= "insert into booking-form (name, email, phone, address, location, guests, arrivals, leaving)
    $_REQUEST= "insert into `booking-form` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`)
    values ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    mysqli_query($connection, $_REQUEST);
    header('location:book.php');
}
else{
    echo 'Something went wrong, Please try again, check typos or check connections';
}