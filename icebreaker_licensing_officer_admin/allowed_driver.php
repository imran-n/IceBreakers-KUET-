
<?php include 'header.php';?>
<br><br><center><h2>All the drivers who are allowed to get the license</h2></center><br><br>
    <div class="container">
        <div class="row">
            <?php
                //We will fetch these data from firebase database. But for the limitation of time, we are going to print these div manually to make a better understandable UI.
            $i = 0;
            while($i < 100){
                echo '
                <div class="col-md-3">
                    <div class="driverState"><br>   
                       <center> <img src="images/driver.jpeg"></center>
                       <br><h5>Driver Name  </h5>
                       <p>Progress: 90% &nbsp;&nbsp; <br>Registered at: 12/2/2020 <br>  Unique key:<font color="#ff5722"> 7f5dbe689hads7df5sadf8</font></p>
                    </div>
            </div>  ';
            $i++;
            }
            

            ?>
    
        </div>
    </div>


<?php include 'footer.php';?>