<?php require 'components/Setup.php' ?>
<!DOCTYPE html>
<html>
   <?php require 'views/Header.php' ?>
   <body>
      <div class="container text-center">
         <div class="col-lg-12">
            <h1> To Do App </h1>
            <?php require 'views/Input.php' ?>
         </div>
         <br>
         <div class="col-lg-12">
            <?php require 'views/List.php' ?>
         </div>
      </div>
      <?php require 'views/Footer.php' ?>
   </body>
</html>