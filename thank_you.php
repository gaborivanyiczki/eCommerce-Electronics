<?php require_once("resources/config.php"); ?>


<?php

  if(isset($_GET['upload'])){

      $amount = $_GET['amount_{$amount}'];
      $prod_id = $_GET['item_number_{$item_number}'];
      $status = "Completed";
      $quantity = $_GET['quantity_{$quantity}'];

   $query = query("insert into orders(order_amount, product_id, order_status, quantity) values ('$amount', '$prod_id', '$status', '$quantity')");
   confirm($query);

   session_destroy();
  }



?>