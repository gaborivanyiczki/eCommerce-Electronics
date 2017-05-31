<?php require_once("config.php"); ?>


<?php

if(isset($_GET['add'])) {

   $query = query("select * from products where product_id=" .  escape_string($_GET['add']) . " ");
   confirm($query);

   while($row = fetch_array($query)){

       if($row['product_quantity'] != $_SESSION['product_' . $_GET['add']]){

           ++$_SESSION['product_' . $_GET['add']];
           redirect("../checkout.php");

       }else{
           set_message("Exista doar " . $row['product_quantity'] . " " . " bucati din " . $row['product_name'] . " " . "pe stoc.");
           redirect("../checkout.php");
       }

   }



 }

if(isset($_GET['remove'])) {

    $_SESSION['product_' . $_GET['remove']]--;

    if($_SESSION['product_' . $_GET['remove']] <1){
        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);
        redirect("../checkout.php");
    }else {

        redirect("../checkout.php");
    }
}


if(isset($_GET['delete'])){

    $_SESSION['product_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);
    redirect("../home.php");

}

function cart()
{

   $total = 0;
   $item_quantity = 0;

   $item_name = 1;
   $item_number = 1;
   $amount = 1;
   $quantity = 1;




    foreach ($_SESSION as $name => $value) {

        if ($value > 0) {

            if (substr($name, 0, 8) == "product_") {

                $lenght = strlen($name - 8);
                $id = substr($name, 8 , $lenght);


                $query = query("select * from products where product_id=" . escape_string($id) . "");
                confirm($query);

                while ($row = fetch_array($query)) {

                    $sub = $row['product_price']*$value;
                    $item_quantity +=$value;

                    $cart = <<<DELIMITER
                <tr>
                    <td>{$row['product_name']}</td>
                    <td>&#8364;{$row['product_price']}</td>
                    <td>{$value}</td>
                    <td>&#8364;{$sub}</td>
                    <td><a class="btn btn-primary" href="resources/cart.php?add={$row['product_id']}"><span class="glyphicon glyphicon-plus"></span></a> <a class="btn btn-warning" href="resources/cart.php?remove={$row['product_id']}"><span class="glyphicon glyphicon-minus"></span></a> <a class="btn btn-danger" href="resources/cart.php?delete={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
                 </tr>
                  <input type="hidden" name="item_name_{$item_name}" value="{$row['product_name']}">
                  <input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
                  <input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
                  <input type="hidden" name="quantity_{$quantity}" value="{$row['product_quantity']}">


DELIMITER;

                    echo $cart;

                    $item_name++;
                    $item_number++;
                    $amount++;
                    $quantity++;
                }

                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;


            }
        }

    }
}

?>