<?php require_once ("resources/config.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "head.php") ?>

<?php include (TEMPLATE_FRONT . DS . "logo-bar.php") ?>


<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="home.php">Home</a><span>|</span></li>
            <?php breadcrumb_categories(); ?>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<?php  include (TEMPLATE_FRONT . DS . "navbar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "cat-rightside.php") ?>

</br></br>



           <?php get_subcategories_details(); ?>


            <div class="clearfix"> </div>





        <div class="w3ls_w3l_banner_nav_right_grid">
            <h3>Noutati din categorie</h3>
            <div class="w3ls_w3l_banner_nav_right_grid1">

                <?php get_products_categories(); ?>


                <div class="clearfix"> </div>
            </div>

                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->
<?php include (TEMPLATE_FRONT . DS . "newsletter.php")  ?>

<?php include (TEMPLATE_FRONT . DS . "footer.php")  ?>