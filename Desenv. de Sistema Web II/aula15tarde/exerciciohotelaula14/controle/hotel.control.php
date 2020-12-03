<?php
    include '../modelo/hotel.class.php';

    $hotel = new Hotel();
    $hotel->name = $_POST['txtname'];
    $hotel->email = $_POST['txtemail'];
    $hotel->phoneNumber = $_POST['txtphonenumber'];
    $hotel->rg = $_POST['txtrg'];

    header("location:../visao/hotel.answer.php?txtname=$hotel->name&txtemail=$hotel->email&txtphonenumber=$hotel->phoneNumber&txtrg=$hotel->rg&totaldaily={$hotel->calculateDaily($_POST['txtsuite'], $_POST['txtdays'])}");
    ?>