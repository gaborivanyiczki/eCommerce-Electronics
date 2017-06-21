<h1 class="page-header">
    Utilizatori

</h1>


<div class="col-md-4">

    <form action="" method="post">

        <div class="form-group">
            <label for="category-title">Username</label>
            <input type="text" name="username" class="form-control" required>
            <label for="category-title">E-mail</label>
            <input type="text" name="email" class="form-control" required>
            <label for="category-title">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="submit" name="insertc" class="btn btn-primary" value="Add user">
        </div>


    </form>


</div>


<div class="col-md-8">

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Photo</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Data inregistrare</th>
        </tr>
        </thead>
        <tbody>
        <?php get_users_admin(); ?>
        </tbody>

      </table>

</div>