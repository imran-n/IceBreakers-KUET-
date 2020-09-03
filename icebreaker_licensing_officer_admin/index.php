<?php require_once './vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;


// $serviceAccount = ServiceAccount::fromJsonFile(filePath: __DIR__.'/google-service-account.json');

// $firebase = (new Factory)
//     ->withServiceAccount($serviceAccount)
//     ->withDatabaseUri(uri: 'https://my-project,firebaseio.com');
//     ->create();

// $database = $firebase->getDatabase();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">    
</head>
  <body style="background-image: url('https://images.pexels.com/photos/769892/pexels-photo-769892.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');">
      <center>
        <div class="container">
            <div class="formPage">
            <div class="form_access">
                <br><h4>Drive dive licensing officer admin </h4>
                <form action="home.php" method="post">
                    <div class='form-group'> <input type="text" name="username" class="form-control" placeholder="Username"></div>
                    <div class='form-group'> <input placeholder="password" name= "password" type="text" class="form-control"></div>
                    <div class='form-group'> <input type="submit" class="form-control" value="Login"></div>
                </form>
            </div>
            </div>
        </div>
</center>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>