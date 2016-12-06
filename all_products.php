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
        <!-- navbar Starts Here
            ------------------------------------------------------------------------------------------------------------>
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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="all_products.php">All Products</a></li>
            <li><a href="#contact">Offers</a></li>
            <li><a href="#contact">Order</a></li>
            <li><a href="#contact">Contact Us</a></li>            
          </ul>
          <form class="navbar-form navbar-right" role="search" method="get" action="result.php" enctype="multipart/form-data">
  <div class="form-group">
    <input type="text" name="user_query" class="form-control" placeholder="Search a product">
  </div>
  <button type="submit" name="search" class="btn btn-default">Search</button>
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
   
      <div class="products-container">
          <div class='row'>
         <?php
         $load_product = "select * from products";
            $run_load_product = mysqli_query($con,$load_product);
            while ($row_products = mysqli_fetch_array($run_load_product)){
                $pro_id = $row_products['product_id'];
                $pro_title = $row_products['product_title'];
                $pro_cui = $row_products['cui_id'];
                $pro_food = $row_products['food_id'];
                $pro_desc = $row_products['product_desc'];
                $pro_price = $row_products['product_price'];
                $pro_image = $row_products['product_img1'];
                echo "                    
                    <div class='col-sm-6 col-md-4 '>
                        <div class='thumbnail'>
                            <div class='pic-box'>
                                <img src='admin/product_images/$pro_image' alt='Product Image'>
                            </div>
                            <div class='caption caption-product'>
                            <h3>$pro_title</h3>
                              <p><a href='details.php?pro_id=$pro_id' class='btn btn-primary' role='button' style='background:#665353' ; >Details</a>
							  <a href='details.php?add_cart=$pro_id' class='btn btn-default' role='button'>Add to Favorites</a></p>                             </div>

                        </div>
                    </div>      
			";}
         ?>
      </div>   
      </div>
      </div>
        <div class="bottom-container" style="background:#665353">
        <p><h1>Who we Are</h1></p>
        <div class="map">
          <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:340px;width:500px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">                 embed google maps             </a></small></div><div><small><a href="http://buywebtrafficexperts.com">buy website traffic</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(51.56452113060458,0.11052586322944258),mapTypeId: google.maps.MapTypeId.HYBRID};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.56452113060458,0.11052586322944258)});infowindow = new google.maps.InfoWindow({content:'<strong>Data Enterprises Limited</strong><br>Data Enterprises Limited, 76 Goodmayes Rd, Ilford, Greater London IG3 9UU<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
