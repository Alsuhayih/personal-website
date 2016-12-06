<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>.:. Cuisines' World.:.</title>
        <link rel="stylesheet" href="css/custom.css"/>
        <link rel="stylesheet" href="css/animate.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <?php include("includes/connection.php")?>
        <?php include("functions/functions.php")?>
        
        
    </head>
    <body>
        <?php
        include('public_header/header.html'); 
     ?>
            <div id="navbarcustom">
             <nav class="navbar navbar-red" >
      <div class="container">
        <div class="navbar-header">
          <button type="button"  style="color:#fff; background-color: #28a4c9" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="glyphicon glyphicon-home"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse" >
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="all_products.php">All Products</a></li>
            <li><a href="#contact">Offers</a></li>
            <li><a href="#contact">Order</a></li>
            <li><a href="#contact">Contact Us</a></li>            
          </ul>
          <form class="navbar-form navbar-right" role="search" method="get" action="result.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" class="form-control" name="user_query" placeholder="Search a product">
  </div>
  <button type="submit" name="search" class="btn btn-default">search</button>
</form>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
       </div>
        <div class="panel left-panel">
  <div class="panel-heading" style="background:#3B0404; color:#ffffff;">Cuisines</div>
  <div class="panel-body">
    <ul class="list-group">
    <?php GetCuisines(); ?>
            
    </ul>
  </div>
  
 
    <div class="panel-heading" style="background:#3B0404; color:#ffffff;">Foods</div>
  <div class="panel-body">
    <ul class="list-group">
    <?php GetFoods();?>
        
    </ul>
  </div>
  
  
</div>
<div class="col-xs-12 col-sm-4 col-md-9" style="float:right;">
    <div id="slider-top" class="carousel slide" data-ride="carousel">
  <!-- Indicuiors -->
  <ol class="carousel-indicators">
    <li data-target="#slider-top" data-slide-to="0" class="active"></li>
    <li data-target="#slider-top" data-slide-to="1"></li>
    <li data-target="#slider-top" data-slide-to="2"></li>
    <li data-target="#slider-top" data-slide-to="3"></li>
    <li data-target="#slider-top" data-slide-to="4"></li>
    <li data-target="#slider-top" data-slide-to="5"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <div>
      <img src="images/banner.jpg" alt="...">
      </div>
      <div class="carousel-caption">        
      </div>
    </div>

    <div class="item"><!-- slider image -->
      <img src="images/specialmenu_banner.jpg" alt="...">
      <div class="carousel-caption">       
      </div>

    </div>
        <div style="background:#665353; padding:2px; color:#ffffff;">
            <Marquee> Welcome To the Cuisine World </Marquee></div>
  </div>
  </div>
      <div class="products-container">
          <div class='row'>
         <?php
         GetProduct();
         GetcuiProduct();
         GetProductFoods();
         ?>
            </div>   
      </div></div>

      <!--Bottom Conatiner -->
        <div class="bottom-container" style="background:#665353">
        <p><h1>Who we Are</h1></p>
        <div class="map">
          <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:340px;width:500px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">                 embed google maps             </a></small></div><div><small><a href="http://buywebtrafficexperts.com">buy website traffic</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(51.56452113060458,0.11052586322944258),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.56452113060458,0.11052586322944258)});infowindow = new google.maps.InfoWindow({content:'<strong>Data Enterprises Limited</strong><br>Data Enterprises Limited, 76 Goodmayes Rd, Ilford, Greater London IG3 9UU<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
        <!-- map Descripton-->
        
        <div class="map-txt">
        <p><h2><strong>Cuisines' Worlds</strong></h2></p>
        <p><h3></h3></p>
        <p><h3>London, Uk</h3></p>
        <p><h3>Phone: 020 3441 6997</h3></p>
        </div>        
        </div>
       
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
