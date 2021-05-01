<?php

if(!isset($_SESSION['loggedin'])){
  $loggedin = false;
}

else{
  $loggedin = true;
}


?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="img/header_logo.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="Courselog">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <?php
        if(!$loggedin){
          echo '<li class="nav-item">
            <a class="nav-link" href="/courselog/logout.php">Logout</a>
          </li>';
        }
        ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      

        <!-- // if($loggedin){
        //   echo '<button type="button" href="/courselog/logout.php" class="btn btn-primary">logout</button>';
        // }

        // if(!$loggedin){
        //   echo '<button type="button" class="btn btn-primary">login</button>';
        // } -->

      
    </div>
  </div>
</nav>

