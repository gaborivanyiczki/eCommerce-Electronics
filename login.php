<?php require_once ("/resources/config.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "head.php") ?>

<?php include (TEMPLATE_FRONT . DS . "logo-bar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "navbar.php") ?>

<?php  include (TEMPLATE_FRONT . DS . "cat-rightside.php") ?>

        <!-- login -->
        <div class="w3_login">
            <h3>Sign In & Sign Up</h3>
            <div class="w3_login_module">
                <div class="module form-module">
                    <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">Inregistrare click aici</div>
                    </div>
                    <?php  display_message();  ?>
                    <div class="form">
                        <h2>Login to your account</h2>
                        <form action="" method="post">
                            <?php login(); ?>
                            <input type="text" name="Username" placeholder="Username" required>
                            <input type="password" name="Password" placeholder="Password" required>
                            <input type="submit" name="login" value="Login">
                        </form>
                    </div>
                    <div class="form">
                        <h2>Create an account</h2>
                        <form action="#" method="post">
                            <?php register(); ?>
                            <input type="text" name="Username" placeholder="Username" required>
                            <input type="password" name="Password" placeholder="Password" required>
                            <input type="email" name="Email" placeholder="Email Address" required>
                            <input type="submit" name="register" value="Register">
                        </form>
                    </div>

                    <div class="cta"><a href="#">Forgot your password?</a></div>
                </div>
            </div>
            <script>
                $('.toggle').click(function(){
                    // Switches the Icon
                    $(this).children('i').toggleClass('fa-pencil');
                    // Switches the forms
                    $('.form').animate({
                        height: "toggle",
                        'padding-top': 'toggle',
                        'padding-bottom': 'toggle',
                        opacity: "toggle"
                    }, "slow");
                });
            </script>
        </div>
        <!-- //login -->



    <div class="clearfix"> </div>

    <div class="clearfix"></div>

    <!-- //banner -->
<?php include (TEMPLATE_FRONT . DS . "newsletter.php")  ?>

<?php include (TEMPLATE_FRONT . DS . "footer.php")  ?>