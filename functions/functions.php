<?php
//Database Connection
$db= mysqli_connect("localhost","root","","cuisine_world");
//ip
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 
    return $ip;
}
//cart

function cart(){
    if(isset($_GET['add_cart'])){
        Global $db;
        $pro_id = $_GET['add_cart'];
        $ip= getIp();
        $check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
        $run_check = mysqli_query($db, $check_pro);
        if(mysqli_num_rows($run_check)>0){
            echo "";
        }
        else{
            $insert_pro = "insert into cart (p_id, ip_add) values ('$pro_id','$ip')";
            $run_insert = mysqli_query($db, $insert_pro);
            echo "<script>window.open{'index.php','_self'}</script>";
        }
    }
}
//ghetting the totasl added items
function total_items(){
    if (isset($_GET['add_cart'])) {
        Global $db;
        $ip = getIp();
        $get_items = "select * from cart where ip_add = '$ip'";
        $run_items = mysqli_query($db, $get_items);
        $count_item = mysqli_num_rows($run_items);
    }
    else{
        Global $db;
        $ip = getIp();
        $get_items = "select * from cart where ip_add = '$ip'";
        $run_items = mysqli_query($db, $get_items);
        $count_item = mysqli_num_rows($run_items);
    }
    echo $count_item;
}
//foods Sidebar 
function GetFoods(){
            Global $db;
            $get_foods = "select * from food";
         $run_foods = mysqli_query($db, $get_foods);
         while($row_foods=mysqli_fetch_array($run_foods)){
            $food_id = $row_foods['food_id'];
            $food_title=$row_foods['food_title'];
        echo "<li class='side-items'><a href='index.php?food=$food_id' style='color:#665353'>$food_title</a></li>";  
}
}
//cuiageries Sidebar
function GetCuisines(){
 Global $db;   
$get_cuis = "select * from cuisines";
        $run_cuis = mysqli_query($db, $get_cuis);
        while($row_cuis=mysqli_fetch_array($run_cuis)){
            $cui_id = $row_cuis['cui_id'];
            $cui_title=$row_cuis['cui_title'];
        echo "<li class='side-items'><a href='index.php?cui=$cui_id' style='color:#665353'>$cui_title</a></li>";
}}
//All Products Main
function GetProduct(){
    Global $db;
            if (!isset($_GET['cui'])){
                if (!isset($_GET['food'])){
            $load_product = "select * from products LIMIT 0,12";
            $run_load_product = mysqli_query($db,$load_product);
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
                              <p><a href='details.php?pro_id=$pro_id' class='btn btn-primary' role='button' style='background:#665353' >Details</a>
							  <a href='index.php?add_cart=$pro_id' class='btn btn-default' role='button'>Add to Favourites </a></p>
                             </div>
                        </div>
                    </div>      
";}}}}


function GetcuiProduct(){
    Global $db;
            if (isset($_GET['cui'])){
            $cui_id = $_GET['cui'];
            $load_product_cui = "select * from products where cui_id='$cui_id'";
            $run_load_product_cui = mysqli_query($db,$load_product_cui);
            $count = mysqli_num_rows($run_load_product_cui);
            if($count==0){
                echo"<h2>there is no Product in this cuiagery</h2>";
            }
            while ($row_cui_products = mysqli_fetch_array($run_load_product_cui)){
                $pro_id = $row_cui_products['product_id'];
                $pro_title = $row_cui_products['product_title'];
                $pro_cui = $row_cui_products['cui_id'];
                $pro_food = $row_cui_products['food_id'];
                $pro_desc = $row_cui_products['product_desc'];
                $pro_price = $row_cui_products['product_price'];
                $pro_image = $row_cui_products['product_img1'];
                echo "                    
                    <div class='col-sm-6 col-md-4 '>
                        <div class='thumbnail'>
                            <div class='pic-box'>
                                <img src='admin/product_images/$pro_image' alt='Product Image'>
                            </div>
                            <div class='caption caption-product'>
                            <h3>$pro_title</h3>
                              <p><a href='details.php?pro_id=$pro_id' class='btn btn-primary' role='button' style='background:#665353' >Details</a>
							  <a href='details.php?add_cart=$pro_id' class='btn btn-default' role='button'>Add to Favourites</a></p>
                             </div>
                        </div>
                    </div>      
";}}}

function GetProductFoods(){
    Global $db;
                if (isset($_GET['food'])){
                    $food_id = $_GET['food'];
            $load_product_food = "select * from products where food_id='$food_id'";
            $run_load_product_food = mysqli_query($db,$load_product_food);
            $count = mysqli_num_rows($run_load_product_food);
				if($count==0){
					echo"<h2>There is no Product for this food</h2>";
				}
            while ($row_products_food = mysqli_fetch_array($run_load_product_food)){
                $pro_id = $row_products_food['product_id'];
                $pro_title = $row_products_food['product_title'];
                $pro_cui = $row_products_food['cui_id'];
                $pro_food = $row_products_food['food_id'];
                $pro_desc = $row_products_food['product_desc'];
                $pro_price = $row_products_food['product_price'];
                $pro_image = $row_products_food['product_img1'];								
				echo "                    
                    <div class='col-sm-6 col-md-4 '>
                        <div class='thumbnail'>
                            <div class='pic-box'>
                                <img src='admin/product_images/$pro_image' alt='Product Image'>
                              </div>
                            <div class='caption caption-product'>
                            <h3>$pro_title</h3>
                              <p><a href='details.php?pro_id=$pro_id' class='btn btn-primary' role='button' style='background:#665353' >Details</a>
							  <a href='details.php?add_cart=$pro_id' class='btn btn-default' role='button'>Add to Favourites </a></p>
                             </div>
                        </div>
                    </div>      
";}}}
