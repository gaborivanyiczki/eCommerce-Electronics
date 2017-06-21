<?php


//helpers

function set_message($msg){

    if(!empty($msg)){

        $_SESSION['message'] = $msg;

    }else {

        $msg = "";
    }

}

function display_message(){

    if(isset($_SESSION['message'])){

        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

}



function redirect ($location){
header("Location: $location");
}

function query($sql){

global $connection;
return mysqli_query($connection,$sql);
}

function confirm($result){
global $connection;

if(!$result){
die("Problema accesare db." . mysqli_error($connection));
}
}

function escape_string($string){
global  $connection;
return mysqli_real_escape_string($connection,$string);
}

function fetch_array($result){
return mysqli_fetch_array($result);
}

//functions


function get_products_home(){

    $query = query("SELECT * FROM products LIMIT 4");
    confirm($query);

    while($row = fetch_array($query)){

        $product = <<<DELIMITER

       <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="product.php?id={$row['product_id']}"><img title=" " alt=" " width="200px" height="auto" src="{$row['product_image']}" /></a>
                                        <p>{$row['product_name']}</p>
                                        <h4>&#8364;{$row['product_price']}</h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
											<form action="resources/cart.php?add={$row['product_id']}" method="post">
			            <input type="submit" name="submit" value="Adauga in cos" class="button" />
											</form>
										</div>
                                  </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

DELIMITER;

        echo $product;
    }


}

function get_categories(){

    $query = query("SELECT * FROM `categories`");
    confirm($query);


    while($row = fetch_array($query)){

        $category = <<<DELIMITER

       <li><a href='category.php?id={$row['cat_id']}'>{$row['name']}</a></li>

DELIMITER;

        echo $category;

    }


}



function breadcrumb_categories (){

     $query = query("select name from categories where cat_id=" . escape_string($_GET['id']) . " ");
     confirm($query);

     while($row = fetch_array($query)){

         $bread = <<<DELIMITER


       <li><a href="home.php">{$row['name']}</a></li>

DELIMITER;

 echo $bread;

     }



}


function breadcrumb_subcategories (){

    $query = query("select subcat_name from subcategories where subcat_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        $bread = <<<DELIMITER


       <li><a href="home.php">{$row['subcat_name']}</a></li>

DELIMITER;

        echo $bread;

    }



}



function breadcrumb_products (){

    $query = query("select products.product_name, subcategories.subcat_name from products join products_subcategories on products.product_id=products_subcategories.product_id join subcategories on subcategories.subcat_id=products_subcategories.subcategory_id where products.product_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        $bread = <<<DELIMITER

   <li><a href="home.php">{$row['subcat_name']}</a><span>|</span></li>
   <li><a href="home.php">{$row['product_name']}</a><span>|</span></li>

DELIMITER;

        echo $bread;

    }



}

function get_products_categories(){

    $query = query("select * from products join products_subcategories on products_subcategories.product_id = products.product_id join subcategories on subcategories.subcat_id=products_subcategories.subcategory_id where category_id=" . escape_string($_GET['id']) . " order by date limit 4 ");
    confirm($query);


    while($row = fetch_array($query)){

   $products = <<<DELIMITER

   <div class="col-md-3 w3ls_w3l_banner_left">
                    <div class="hover14 column">
                        <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                            <div class="agile_top_brand_left_grid_pos">
                                <img src="images/offer.png" alt=" " class="img-responsive" />
                            </div>
                            <div class="agile_top_brand_left_grid1">
                                <figure>
                                    <div class="snipcart-item block">
                                        <div class="snipcart-thumb">
                                        <a href="product.php?id={$row['product_id']}"><img title=" " alt=" " width="200px" height="auto" src="{$row['product_image']}" /></a>
                                            <p>{$row['product_name']}</p>
                                        <h4>&#8364;{$row['product_price']}</h4>
                                        </div>
                                        <div class="snipcart-details">
                                            <form action="resources/cart.php?add={$row['product_id']}" method="post">
			            <input type="submit" name="submit" value="Adauga in cos" class="button" />
                                            </form>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>


DELIMITER;

echo $products;

    }

}

function get_categories_top_page(){

    $query = query("SELECT * FROM `categories`");
    confirm($query);


    while($row = fetch_array($query)){

        $categories = <<<DELIMITER

   <li><i class="fa fa-check" aria-hidden="true"></i><a href="category.php?id={$row['cat_id']}">{$row['name']}</a></li>


DELIMITER;

    echo $categories;


    }



}

function product_details(){

    $query = query("SELECT * from products where product_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        $product = <<<DELIMITER

     <div class="agileinfo_single">
        <h5>{$row['product_name']}</h5>
        <div class="col-md-4 agileinfo_single_left">
            <img id="example" src="{$row['product_image']}" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-8 agileinfo_single_right">
            <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
            </div>
            <div class="w3agile_description">
                <h4>Descriere :</h4>
                <p>>{$row['product_description']}</p>
            </div>
            <div class="snipcart-item block">
                <div class="snipcart-thumb agileinfo_single_right_snipcart">
                    <h4>&#8364;{$row['product_price']}</h4>
                </div>
                <div class="snipcart-details agileinfo_single_right_details">
                    <form action="resources/cart.php?add={$row['product_id']}" method="post">
			            <input type="submit" name="submit" value="Adauga in cos" class="button" />
                    </form>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

DELIMITER;


        echo $product;

    }


}


function login(){

    if(isset($_POST['login'])){

        $username = escape_string($_POST['Username']);
        $password = escape_string($_POST['Password']);

        $query = query("select * from users where username= '{$username}' and password= '{$password}' ");
        confirm($query);

        if(mysqli_num_rows($query) == 1){

            $_SESSION['username'] = $username;
            redirect("admin");
        }else {
            set_message("Utilizator sau Parola incorecta!");
            redirect("login.php");
                }


    }



}

function register() {

    if(isset($_POST['register'])){

        $username = escape_string($_POST['Username']);
        $password = escape_string($_POST['Password']);
        $email = escape_string($_POST['Email']);

        $query = query("insert into users(username,email,password) values ('$username', '$email', '$password')");
        confirm($query);


    }


}



function show(){


    $query = query("select * from users");
    confirm($query);

    while($row = fetch_array($query)) {

        $users = <<<DELIMITER

       <tr>
           <td>{$row['username']}</td>
           <td>{$row['email']}</td>
           <td>{$row['password']}</td>
           <td><a href="update.php?id={$row['user_id']}" class="btn btn-info" role="button">Update</a><a href="delete.php?id={$row['user_id']}" class="btn btn-danger" role="button">Delete</a></td>
       </tr>

DELIMITER;

        echo $users;
    }



}


function users_details(){

    $query = query("SELECT * from users where user_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        $product = <<<DELIMITER

    <tr>
           <td>{$row['username']}</td>
           <td>{$row['email']}</td>
           <td>{$row['password']}</td>
       </tr>

DELIMITER;


        echo $product;

    }


}


function delete_user(){

    if(isset($_POST['delete'])){

        $query = query("DELETE FROM users WHERE user_id=". escape_string($_GET['id']) . " ");
        confirm($query);
        redirect("show.php");
    }


}
function update_user(){

    if(isset($_POST['update'])){

        $user_new = escape_string($_POST['username_change']);
        $email_new = escape_string($_POST['email_change']);
        $password_new = escape_string($_POST['password_change']);

       $query = query("update users set username = '$user_new', email = '$email_new', password = '$password_new' WHERE user_id=" . escape_string($_GET['id']) . " ");
        confirm($query);
        redirect("show.php");
    }


}

function get_subcategories_details(){

    $query = query("select * from subcategories where category_id=". escape_string($_GET['id']) . " ");
    confirm($query);


    while($row = fetch_array($query)) {

        $details = <<<DELIMITER

      
    <div class="col-md-4 w3l_banner_nav_right_banner3_btml">
                <div class="view view-tenth">
                    <a href="subcategory.php?id={$row['subcat_id']}"><img src="{$row['image']}" alt="" width="320px" height="180px" /></a>
                    <div class="mask">
                        <h4>{$row['subcat_name']}</h4>
                        <p>{$row['description']}</p>
                    </div>
                </div>
                 <a href="subcategory.php?id={$row['subcat_id']}"><h4>{$row['subcat_name']}</h4></a>
					<ol>
						<li>{$row['description']}</li>
					</ol>
            </div>
    

DELIMITER;

        echo $details;
    }


}


function get_products_subcategory_page(){

    $query = query("SELECT * FROM products join products_subcategories on products.product_id=products_subcategories.product_id where subcategory_id=" . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)){

        $product = <<<DELIMITER

       <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block" >
                                    <div class="snipcart-thumb">
                                        <a href="product.php?id={$row['product_id']}"><img title=" " alt=" " src="{$row['product_image']}" /></a>
                                        <p>{$row['product_name']}</p>
                                        <h4>&#8364;{$row['product_price']}</h4>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
											<form action="resources/cart.php?add={$row['product_id']}" method="post">
			            <input type="submit" name="submit" value="Adauga in cos" class="button" />
											</form>
										</div>
                                  </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

DELIMITER;

        echo $product;
    }


}


function get_what_in_stores(){

    $query = query("SELECT * FROM `categories` LIMIT 6");
    confirm($query);


    while($row = fetch_array($query)){

        $categories = <<<DELIMITER

      <li><a href="category.php?id={$row['cat_id']}">{$row['name']}</a></li>


DELIMITER;

        echo $categories;


    }

}


?>