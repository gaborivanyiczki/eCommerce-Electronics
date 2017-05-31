<?php require_once ("/resources/config.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "head.php") ?>

<?php include (TEMPLATE_FRONT . DS . "logo-bar.php") ?>


    <!-- products-breadcrumb -->
    <div class="products-breadcrumb">
        <div class="container">
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php">Home</a><span>|</span></li>
                <?php breadcrumb_products(); ?>

            </ul>
        </div>
    </div>
    <!-- //products-breadcrumb -->
<?php  include (TEMPLATE_FRONT . DS . "navbar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "cat-rightside.php") ?>

     <?php product_details(); ?>

    <div class="clearfix"></div>

    <!-- //banner -->



            <div class="clearfix"> </div>

    <div class="clearfix"></div>

    <!-- //banner -->
<?php include (TEMPLATE_FRONT . DS . "newsletter.php")  ?>

<?php include (TEMPLATE_FRONT . DS . "footer.php")  ?>