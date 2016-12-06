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
</div>
<?php cart(); ?>
<div class="container-fluid">
   <center><form action="" method="post" enctype="multipart/form-data">
     
     <table align="center" border="1" width="900px">
      <tr align="center">
        <td colspan="5"><h2>Favorites</h2></td>
      </tr>

      <tr align="center">
        <th >Remove</th>
        <th>Product(s)</th>
        <th>Ingredients</th>
        <th>Recipes</th>
      </tr>

    <?php 
    $ip = getIp();
    $get_rec = "select * from cart where ip_add = '$ip'";
     $run_rec = mysqli_query($db, $get_rec);
 
     while($row_rec=mysqli_fetch_array($run_rec)){
        $pro_id = $row_rec['p_id'];
        $product_rec = "select * from products where product_id = '$pro_id'";
        $run_pro_rec = mysqli_query($con, $product_rec);
        while ($dp_price = mysqli_fetch_array($run_pro_rec)) {
            $product_price = array($dp_price['product_price']);
            $product_title = $dp_price['product_title'];
            $product_image = $dp_price['product_img1'];
            $single_price  = $dp_price['product_price'];
			$product_desc  = $dp_price['product_desc']; 
     ?>
  <tr align="center">
    <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"/></td>
    <td><?php echo $product_title ?><br>
  <img src="admin/product_images/<?php echo $product_image;?>" alt="productimage" width="80" height=""/>
    </td>
    <td><?php echo  $single_price; ?></td>
    <td><?php echo  $product_desc; ?></td>
  </tr>
  
<?php }} ?>

  <tr align="center">
    <td colspan="2"><input type="submit" name="update_cart" value="Update Cart"></td>
    <td><input type="submit"  name="continue" value="continue Shopping"></td>
    <td><button><a href="checkout.php">Checkout</a></button></td>
  </tr>
     </table></form></center>
   

   <?php
    $ip = getIp();

   if (isset($_POST['update_cart'])){
    foreach ($_POST['remove'] as $remove_id) {

    $delete_product = "delete from cart where p_id = '$remove_id' AND ip_add = '$ip'";
    $run_del = mysqli_query($con, $delete_product);

    if($run_del){
      echo "<script>window.open('cart.php','_self')</script>";
    }

    }
   }
   if(isset($_POST['continue'])){
    echo "<script>window.open('index.php','_self')</script>";
   }
    ?>



</div>

     
       
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
