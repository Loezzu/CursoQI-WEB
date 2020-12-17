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

    <title>CarsRental - Register</title>
</head>
<body>
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" style="text-align: center">
            <form action="../controller/rent.controller.php" method="post" >
                <fieldset>    
                    <h1 class="mb-3">Fill in the details below:</h1>
                    <div class="form-group " >
                        <h2><label for="name">Name</label></h2>
                        <input type="text" name="inputname" id="name" style="width: 220px" pattern="^[A-zÁ-ù ]{3,50}$" placeholder="Type your name" required autofocus>
                    
                    </div>
                    <div class="form-group">
                        <h2><label for="cpf">CPF</label></h2>
                        <input type="text" name="inputcpf" id="cpf" pattern="\d{3}.\d{3}.\d{3}-\d{2}" style="width: 220px" placeholder="Type your CPF" required>
                    </div>
                    <div class="form-group">
                        <h2><label for="age">Age</label></h2>
                        <input type="number" name="inputage" id="age" pattern="\d{1,3}" style="width: 220px" placeholder="Type your age" required>
                    </div>
                    <div class="form-group " >
                        <h2><label for="vehiclemodel">Vehicle Model</label></h2>
                        <input type="text" name="inputvehiclemodel" id="vehiclemodel" style="width: 220px" pattern="^[A-zÁ-ù ]{3,50}$" placeholder="Type a vehicle model" required>
                    </div>
                    <div class="form-group " >
                        <h2><label for="rentamount">Rent Amount</label></h2>
                        <input type="number" name="inputrent" id="rentamount" style="width: 220px" pattern="\d{1,3}" placeholder="Type rent amount" required>
                    </div>
                    <div class="form-group " >
                        <h2><label for="days">Days</label></h2>
                        <input type="number" name="inputdays" id="days" style="width: 220px" pattern="\d{1,3}" placeholder="Type how many rental days" required>
                    </div>
                    <div class="form-group">
                    <select class="form-select mt-3"  style="width: 220px" aria-label="Default select example" name="inputvehicletype">
                        <option selected>Vehicle Type</option>
                        <option value="Tour">Tour</option>
                        <option value="Executive">Executive</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <select class="form-select" style="width: 220px" aria-label="Default select example" name="inputfueltype">
                        <option selected>Fuel Type</option>
                        <option value="GNV">GNV - $50,00</option>
                        <option value="Gasoline">Gasoline - $100,00</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn" style="background-color: #0816db; color: white; width: 220px;" value="Finish">
                    </div>
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>