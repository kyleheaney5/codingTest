<?php
  include("includes/header.php");
?>
    <div class="part1 items">
      <div class="container">
        <center>
            <div class="texto item">
              <h1 class="display-4">Hey there - Sign up for a job.</h1>
              <p class="txt">
                
                <!-- sign up form -->

                <form action="" method="POST">
                  <input type="text" name="name" class="form-control" placeholder="Enter your name.. " />
                  <input type="email" name="email" class="form-control" placeholder="Enter your email address.. " />
                  <button name="signup" style="float:left;" class="btn btn-outline-light">Register my details!</button>
                </form>
    <br />
    <br />
                <?php

                  signup();

                  ?>

              </p>
            </div>
          </center>
        </div>
    </div>
  
<?php
  include("includes/footer.php");
?>