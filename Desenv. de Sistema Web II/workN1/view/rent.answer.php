<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="website to rent a car" name="description">
    <meta content="cars, rentcar, CarsRental, rent" name="keywords">
    <meta content="Luiz Souza, Bruno Koster" name="author">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Main CSS File -->
    <link rel="stylesheet" href="../css/styleRegister.css">

    <title>CarsRental - Answer</title>
</head>
<body>
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div id="date">
            <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo date('d/m/y H:i');
            ?>
        </div>     
        <div class="container" style="text-align: center">
            <fieldset>    
                <h1 class="mb-3">Answer</h1>
                <?php
                    echo "<h2>Name: " .$_GET['inputname'];
                    echo "<br>CPF: " .$_GET['inputcpf'];
                    echo "<br>Age: " .$_GET['inputage'];
                    echo "<br>Vehicle model: " .$_GET['inputvehiclemodel'];
                    echo "<br>Vehicle type: " .$_GET['inputvehicletype'];
                    echo "<br>Fuel type: " .$_GET['inputfueltype'];
                    echo "<br>Rent amount " .$_GET['inputrent'];
                    echo "<br>Days: " .$_GET['inputdays'];
                    echo "<br>Total: " .$_GET['totalRent'];
                ?>                  
            </fieldset>     
        </div>
    </section>
</body>
</html>