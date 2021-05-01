<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">

<style>
    *{
        font-family: 'Baloo Bhai 2', cursive;
    }
</style>
<?php
include "partials/_nav.php";

session_start();
if($_SESSION['loggedin'] != true){
    header("location: index.php");
}
else{
    echo '<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Login Successfull!</h4>
        <p>You Entered the Correct Username and Password. So now, You can use this Website </p>
        <hr>
        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
      </div>
</div>';


}


?>