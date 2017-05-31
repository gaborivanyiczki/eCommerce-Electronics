<?php require_once ("../resources/config.php");  ?>
<?php  include (TEMPLATE_BACK . DS . "admin-head.php") ?>

   <?php if(!isset($_SESSION['username'])){

       redirect("../home.php");
   } ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Panou de control <small>Statistici</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Panou de control
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <?php

                if($_SERVER['REQUEST_URI'] == "/eCommerce/admin/" or $_SERVER['REQUEST_URI'] == "/eCommerce/admin/index.php") {

                    include(TEMPLATE_BACK . DS . "admin-content.php");


                }
                if(isset($_GET['orders'])){

                include (TEMPLATE_BACK . DS . "orders.php");

                }
                if(isset($_GET['categories'])){

                    include (TEMPLATE_BACK . DS . "categories.php");

                }
                if(isset($_GET['products'])){

                    include (TEMPLATE_BACK . DS . "products.php");

                }
                if(isset($_GET['addproduct'])){

                    include (TEMPLATE_BACK . DS . "add_product.php");

                }
                if(isset($_GET['users'])){

                    include (TEMPLATE_BACK . DS . "users.php");

                }



                ?>





                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php  include (TEMPLATE_BACK . DS . "footer.php") ?>
