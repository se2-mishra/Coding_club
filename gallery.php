<!DOCTYPE html>
<html>
<head>
    <title>Coding And Ethical Club</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">


  
  <style>
    
    main
    {
        width:80%;
        margin:0px auto;

    }
    body{
        margin:0;
        padding:0;
        background:#ccc;
    }
    .thnail{
        width:30%;
        float:left;
        margin:10px;
        background:#fff;
        padding:20px;
        box-sizing:border-box;

    }
    .thnail img{
        width:100%;
        height:auto;

    }
  </style>
</head>
<body>

<header>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Coding and Ethical Hacking Club</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sponsors.php">Our Sponsors</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Events
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="competitions.php">Competitions</a>
          <a class="dropdown-item" href="workshops.php">Workshops</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="pstevents.php">Past Events</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Contacts.php">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</header>


<main>
    <section class="gallery-links">
  
  <div class="container">
  <div class="jumbotron">
    <center><h2>Gallery</h2></center>
  </div>
  <?php
$con=mysqli_connect('localhost','root');

mysqli_select_db($con, 'codingclub');
$sql='SELECT * FROM gallery_images';
$result=mysqli_query($con,$sql) or die("Bad Insert: $sql");


?>


 

<div> 
<table>
    <?php
    $i=0;
    while($row=mysqli_fetch_assoc($result))
        {if($i%2==0)
            {
                echo"<tr>";
            }
        echo"<td><img src='Gallery/Images/{$row['image_loc']}' alt='{$row['image_name']}' class='thnail'></td>";
        if($i%2==2)
        {
            echo"</tr>";
        }
        $i++;
        } 
    ?>
</table>

</div>


        </div>
    </section>
</main>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
