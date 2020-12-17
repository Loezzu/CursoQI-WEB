<?php


    include '../model/rent.class.php';


    $rent = new Rent();
    $rent->clientName = $_POST['inputname'];
    $rent->cpf = $_POST['inputcpf'];
    $rent->age = $_POST['inputage'];
    $rent->vehicleModel = $_POST['inputvehiclemodel'];
    $rent->vehicleType = $_POST['inputvehicletype'];


    
    header("location:../view/rent.answer.php?inputname=$rent->clientName&inputcpf=$rent->cpf&inputage=$rent->age&inputvehiclemodel=$rent->vehicleModel&inputvehicletype=$rent->vehicleType&inputfueltype={$_POST['inputfueltype']}&inputdays={$_POST['inputdays']}&inputrent={$_POST['inputrent']}&totalRent={$rent->calculateRent($_POST['inputfueltype'], $_POST['inputdays'], $_POST['inputrent'])}");

?>