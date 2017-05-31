<?php require_once ("/resources/config.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "head.php") ?>

<?php include (TEMPLATE_FRONT . DS . "logo-bar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "navbar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "cat-rightside.php") ?>

    </br>
    </br>



    <div class="container center-block">

        <div class="container">
            <h2>Tabel utilizator</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                </thead>
                <tbody>
                <?php users_details();  ?>
                </tbody>
            </table>
        </div>
        <form action="" method="post">
        <?php delete_user();  ?>
            <a href="show.php" class="btn btn-success">Inapoi</a>
            <input type="submit" name="delete" value="Delete" class="btn btn-danger" />
        </form>


        <div class="clearfix"> </div>

        <div class="clearfix"></div>



    </div>

    </br>

    </br>

    <!-- //banner -->
<?php include (TEMPLATE_FRONT . DS . "newsletter.php")  ?>

<?php include (TEMPLATE_FRONT . DS . "footer.php")  ?>