

<h1 class="page-header">
  Product Categories

</h1>


<div class="col-md-4">
    
    <form action="" method="post">
        <?php insert_category(); ?>
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name="category" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="submit" name="insertc" class="btn btn-primary" value="Add Category">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>ID</th>
            <th>Titlu</th>
        </tr>
            </thead>


    <tbody>
        <?php get_categories_admin(); ?>
    </tbody>

        </table>

</div>



