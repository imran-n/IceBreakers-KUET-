<?php include 'header.php';?>

<body>
<br><br> 
<center>
    <div class="register_newdriver">
        <div class="container">
        <br><h3>Upload a drivers license</h3><br>
        <br>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Driver unique key. You will get it at the bottom of driver's card  in allowed for license list">
                </div>
               
                <div class="form-group">
                    <small>Date of license arrival.</small>
                    <input type="date" class="form-control" >
                </div>
                <div class="form-group">
                    <small>A clear image of a valid license(not less than 2MB and not greater than 10MB)</small>
                    <input type="file" class="form-control" placeholder="Driver Name">
                </div>
              
                <div class="form-group">
                    <small>Validity of license(last valid day of this license)  </small>
                    <input type="date" class="form-control" placeholder="Driver Name">
                </div>
                
            </div>
            <div class="col-md-4">

                <div class="motionde">
                    1) Please upload a high resolution image of licenses.
                    <br><br>2) You can't modify these data. Please upload them carefully.
                    <br><br>3) Please uplaod the image of a valid license.
                </div>
<br>
                <button class="form-control btn-primary">Register</button>
            </form>
            </div>
        </div>
        
    </div></div>
</center>


<?php include 'footer.php';?>