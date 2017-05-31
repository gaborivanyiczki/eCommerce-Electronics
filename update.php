<?php require_once ("/resources/config.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "head.php") ?>

<?php include (TEMPLATE_FRONT . DS . "logo-bar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "navbar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "cat-rightside.php") ?>

    </br>
    </br>



    <div class="container center-block">

        <div class="container">
            <h2>Date utilizator curent</h2>
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
        <div class="container">
            <h2>Date noi utilizator</h2>
            <form action="" method="post">
            <table class="table">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                </thead>
                <tbody>
                <td><input type="text" name="username_change" placeholder="User-ul nou" /></td>
                <td><input type="text" name="email_change" placeholder="Email nou" /></td>
                <td><input type="text" name="password_change" placeholder="Parola noua" /></td>
                </tbody>
            </table>
        </div>
            <?php update_user(); ?>
            <a href="show.php" class="btn btn-success">Inapoi</a>
            <input type="submit" name="update" value="Update" class="btn btn-info" />
        </form>


        <div class="clearfix"> </div>

        <div class="clearfix"></div>



    </div>

    </br>

    </br>

    <!-- //banner -->
<?php include (TEMPLATE_FRONT . DS . "newsletter.php")  ?>

<?php include (TEMPLATE_FRONT . DS . "footer.php")  ?>