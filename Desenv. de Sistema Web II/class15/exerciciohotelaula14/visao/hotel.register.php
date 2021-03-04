<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/estilo.css">
    <title>Hotel Reservation</title>
</head>
<body class="p-3 mb-2 bg-dark d-flex ">
    
    
    <div class="container mt-5 text-center " style="text-align: center">
    
        
        
        <form action="../controle/hotel.control.php" method="post" >
        <fieldset>    
        <h1 class="mb-3">Fill the Form</h1>
            <div class="form-group " >
                    <h2><label for="name">Name</label></h2>
                    <input type="text" name="txtname" id="name" placeholder="Type your name: ">
                    
            </div>
            <div class="form-group">
                    <h2><label for="email">E-mail</label></h2>
                    <input type="email" name="txtemail" id="email" placeholder="Type your email: ">
            </div>
            <div class="form-group">
                    <h2><label for="phone">Phone Number</label></h2>
                    <input type="text" name="txtphonenumber" id="phone" placeholder="Type your Phone Number: ">
            </div>
            <div class="form-group">
                    <h2><label for="rg">RG</label></h2>
                    <input type="number" name="txtrg" id="rg" placeholder="Type your RG: ">
            </div>

            <div class="form-group">
                    <h2><label for="suite">Suite</label></h2>
                    <select name="txtsuite" id="suite">
                        <option value="1">Single Suite</option>
                        <option value="2">Master Double Suite</option>
                        <option value="3">Family Suite</option>
                    </select>
            </div>

            <div class="form-group">
                    <h2><label for="days">Days</label></h2>
                    <input type="number" name="txtdays" id="days" placeholder="">
            </div>
       
            <div class="form-group" >
                    <input type="submit" class="btn btn-success" value="Register">
                    <input type="reset" class="btn btn-warning" value="Limpar Dados">   
            </div>
        </fieldset>
        </form>
    </div>   




</body>
</html>