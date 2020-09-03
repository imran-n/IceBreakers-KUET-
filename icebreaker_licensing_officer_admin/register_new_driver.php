<?php include 'header.php';?>

<body>
<br><br> 
<center>
    <div class="register_newdriver">
        <div class="container">
        <br><h3>Register new driver for training</h3><br>
        <br>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Driver Name">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Driver Phone number">
                </div>
                <div class="form-group">
                    <small>Date of birth</small>
                    <input type="date" class="form-control" >
                </div>
                <div class="form-group">
                    <small>Training started from</small>
                    <input type="date" class="form-control" placeholder="Driver Name">
                </div>
                <div class="form-group">
                    <small>A clear image of driver(not less than 2MB and not greater than 10MB)</small>
                    <input type="file" class="form-control" placeholder="Driver Name">
                </div>
            </div>
            <div class="col-md-4">

                <div class="motionde">
                    1) You need to upload a very clear and front view image of this driver to help traffic police and others get the license of this driver using quick facial recognization.
                    <br><br>2) After verify phone number, driver will get a password to access to his/her account. But they can't modify any data due to security purpose.
                </div>
<br>
                <button class="form-control btn-primary">Register</button>
            </form>
            </div>
        </div>
        
    </div></div>
</center>


<?php include 'footer.php';?>