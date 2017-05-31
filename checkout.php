<?php require_once ("resources/config.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "head.php") ?>

<?php include (TEMPLATE_FRONT . DS . "logo-bar.php") ?>
<h4 class="text-center bg-danger"><?php display_message();?></h4>
    <!-- Page Content -->
    <div class="container center-block">

    <div class="clearfix"> </div>


    <!-- /.row -->
    <div class="row">
        <h1>Cos de cumparaturi</h1>

        <form action="thank_you.php" method="post">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Produs</th>
                    <th>Pret</th>
                    <th>Bucati</th>
                    <th>Sub-total</th>
                </tr>
                </thead>
                <tbody>
               <?php cart(); ?>
                </tbody>
            </table>
            <input type="submit" name="upload" value="Cumpara" class="button" />
        </form>



        <!--  ***********CART TOTALS*************-->

        <div class="col-xs-4 pull-right ">
            <h2>Total cos</h2>

            <table class="table table-bordered" cellspacing="0">

                <tr class="cart-subtotal">
                    <th>Produse:</th>
                    <td><span class="amount">
                            <?php echo isset($_SESSION['item_quantity']) ? $_SESSION['item_quantity'] : $_SESSION['item_quantity']="0"; ?>
                        </span></td>
                </tr>
                <tr class="shipping">
                    <th>Livrare</th>
                    <td>Livrare gratuita</td>
                </tr>

                <tr class="order-total">
                    <th>Total plata</th>
                    <td><strong><span class="amount">
                     &#8364;
                                <?php echo isset($_SESSION['item_total']) ? $_SESSION['item_total'] : $_SESSION['item_total']="0"; ?>


                            </span></strong> </td>
                </tr>


                </tbody>

            </table>

        </div><!-- CART TOTALS-->


    </div>

    <div class="clearfix"> </div>

    <div class="clearfix"></div>

    <!-- //banner -->
<?php include (TEMPLATE_FRONT . DS . "newsletter.php")  ?>

<?php include (TEMPLATE_FRONT . DS . "footer.php")  ?>