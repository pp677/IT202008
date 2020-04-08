<!DOCTYPE html>
<html>
<head>
  <title> See # </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
  <div class="container">
    <a href="project/prject.php" class="navbar-brand">Sky Blue</a>
    <ul class "nav navbar-nav">
    <!--drop down menu-->
    <li class="dropdown">
      <a hrefs="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Eyeglasses<span class="caret></span>"</a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Women's glasses</a></li>
        <li><a href="#">Men's glasses</a></li>
        <li><a href="#">Clearance</a></li>
    </ul>
      <a hrefs="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Sunglasses<span class="caret></span>"</a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Women'sSunglasses</a></li>
        <li><a href="#">Men's sunglasses</a></li>
        <li><a href="#">Clearance on sunglasses</a></li>
    </ul>
      <a hrefs="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Contacts<span class="caret></span>"</a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Daily</a></li>
        <li><a href="#">Monthly</a></li>
        <li><a href="#">Single Vision</a></li>
    </ul>
      <a href="project/prject.php" class="navbar-Appointment">Make An Appointment</a>
      <a href="project/prject.php" class="navbar-Deal">Deals</a>

      <a hrefs="#" class="dropdown-toggle" data-toggle="dropdown" id="text">My Profile<span class="caret></span>"</a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">Orders</a></li>
        <li><a href="#">My cart</a></li>
    </ul>

  </div>
</nav>

 <!--Space removing between pictures-->
    <div class"col-md-2"></div>

 <!--Inserting Images-->



 <div class="col-md-8">
   <div class="row">
     <h2 class="text-center">Featured Products</h2>

     <div class="col-md-3"
     <h4>Women's glasses design 1</h4>
     <img src="images/Untitled.PNG" alt="Glasses1" id="images"  />
     <p class= "list-price text-danger">List Price: <s>$100.00</s></p>
     <p class="price">Now For $60.00</p>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-1">Add to Cart</button>

     </div>

     <div class="col-md-3"
     <h4>Women's glasses design 2</h4>
     <img src="images/Untitled-2.PNG" alt="Glasses2" id="images"  />
     <p class= "list-price text-danger">List Price: <s>$90.00</s></p>
     <p class="price">Now For $55.00</p>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-1">Add to Cart</button>
     </div>

     <div class="col-md-3"
     <h4>Men's glasses design 1</h4>
     <img src="images/Untitled-3.PNG" alt="Glasses" id="images"  />
     <p class= "list-price text-danger">List Price: <s>$78.00</s></p>
     <p class="price">Now For $40.00</p>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-1">Add to Cart</button>
     </div>

     <div class="col-md-3"
     <h4>Men's glasses design 2</h4>
     <img src="images/Untitled-4.PNG" alt="Glasses" id="images"  />
     <p class= "list-price text-danger">List Price: <s>$80.00</s></p>
     <p class="price">Now For $30.00</p>
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="details-1">Add to Cart</button>
     </div>
    </div>
</div>


</html>
