<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="style/style.css">
    <title>Insert_Product</title>
      
    <?php include("includes/connection.php")?>
</head>
<body>
   <div class="Insert_form">
    <form action="insert_product.php" method="post" enctype="multipart/form-data">
        <table width="700" height="500" align="center" border="2" class="insert_product_table">
            <tr align="center">
                <td colspan="2"><h2>Insert New Product</h2></td>
            </tr>
            <tr><td align="right"><b>Product title:</b></td><td><input type="text" name="product_title" size="50" class="cell"></td></tr>
            <tr>
               <td align="right"><b>Product catagery: </b></td>
               <td>
                <select name="product_cat" class="cell" style="color:#000; padding:2px;"">
                    <option>select cuisine</option>
                      <?php   
					  
        $get_cats = "select * from cuisines";
        $run_cats = mysqli_query($con, $get_cats);
        while($row_cats=mysqli_fetch_array($run_cats)){
            $cat_id = $row_cats['cui_id'];
            $cat_title=$row_cats['cui_title'];
        echo "<option value='$cat_id'>$cat_title</option>";
            }?>
                </select>
            </td></tr>
            <tr>
               <td align="right"><b>Select Cuisine type :</b></td>
               <td>
                <select name="product_brand" class="cell" style="color:#000; padding:2px;">
                    <option> Select Food</option>
                     <?php   
        $get_brands = "select * from food";
        $run_brands = mysqli_query($con, $get_brands);
        while($row_brands=mysqli_fetch_array($run_brands)){
            $brand_id = $row_brands['food_id'];
            $brand_title=$row_brands['food_title'];
        echo "<option value='$brand_id'>$brand_title</option> ";            
        }?>
                </select>
            </td></tr>
            <tr><td align="right"><b>Product Image 1 :  </b></td><td><input type="file" name="product_img1" class="btn btn-primary"></td></tr>
            <tr><td align="right"><b>Product Image 2 :  </b></td><td><input type="file" name="product_img2" class="btn btn-success"></td></tr>
            <tr><td align="right"><b>Product Image 3 :  </b></td><td><input type="file" name="product_img3" class="btn btn-info"></td></tr>
            <tr><td align="right"><b>Product Price :  </b></td><td><input type="text" name="product_price" class="cell"></td></tr>
            <tr><td align="right"><b>Product Description :  </b></td><td><textarea name="product_desc" class="cell" cols="50" rows="10"></textarea></se></td></tr>
            <tr><td align="right"><b>Product Keywords :  </b></td><td><input type="text" name="product_keywords" size="50" class="cell"></td></tr>
            <tr align="center"><td colspan="2"><input type="submit" name="insert_product" value="insert product" class="btn btn-primary"></td></tr>       
     </table>
    </form>
    </div>
  
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

  <?php
	if(isset($_POST['insert_product'])){
		
	$product_title=$_POST['product_title'];	
	$product_cat=$_POST['product_cat'];	
	$product_brand=$_POST['product_brand'];	
	$product_price=$_POST['product_price'];	
	$product_desc=$_POST['product_desc'];	
	$product_keywords=$_POST['product_keywords'];
	$status='on';
    
    $product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];
        
        
	$temp_name1=$_FILES['product_img1']['tmp_name'];
	$temp_name2=$_FILES['product_img2']['tmp_name'];
	$temp_name3=$_FILES['product_img3']['tmp_name'];                
        
	if($product_title=='' OR $product_price=='' OR $product_cat=='' OR $product_brand=='' OR $product_desc=='' OR $product_keywords=='' OR $product_img1==''){
		echo "<script>alert('Please fill all the fields')</script>";
		exit();
	}
	else{
		move_uploaded_file($temp_name1,"product_images/$product_img1");
		move_uploaded_file($temp_name2,"product_images/$product_img2");
		move_uploaded_file($temp_name3,"product_images/$product_img3");
                $insert_product= "insert into products (cui_id,food_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords,status) values ('$product_cat','$product_brand',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords','$status')";
		$run_product = mysqli_query($con, $insert_product);
                
                if($run_product){
                    echo "<script>alert('Product Inserted Succefully')</script>";  
                }
	}	
		
	}

	