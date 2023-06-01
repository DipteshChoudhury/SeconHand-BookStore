<?php
    include_once 'navbar.php';
    require_once '../dbconfig.php';
    if(isset($_POST['add'])){

        $cat = $_POST['category'];

        $qry = "INSERT INTO category(category) VALUES('$cat')";


        if(mysqli_query($con, $qry)){

        } else {
            echo mysqli_errno($con);
        }
    }
?>

<section id="category">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto my-5">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th ><h3 class="h3">Available Categories</h3></th>
                            <th class="text-end">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                    <i class="fas fa-plus"></i> Add
                                </a>
                            </th>         
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $qry = "select * from category order by category";
                            $res = mysqli_query($con, $qry);
                            while($data = mysqli_fetch_assoc($res)){
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $data['category']; ?> 
                                        </td>
                                        <td class="text-end">
                                           <a href="category_delete.php?cid=<?php echo $data['id']; ?>"> <i class="fas fa-trash-alt" style="color: red;"></i> </a>
                                        </td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="categories.php" method="POST">
            <div class="form-group mb-3">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" required>
            </div>
            <input type="submit" value="Add" name="add" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<?php
    include_once 'footer.php';
?>
