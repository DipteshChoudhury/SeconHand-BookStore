<?php
  include_once 'navbar.php';
  require_once '../dbconfig.php';

  if(isset($_POST['add'])){
        // var_dump($_POST);
        // var_dump($_FILES);
        $name = $_POST['name'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $img_name = $_FILES['image']['name'];
        $tmp_loc = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_loc, '../images/products/'.$img_name);
        $qry = "INSERT INTO products VALUES(0, '$name', '$author', '$category', '$description', $price, $discount, '$img_name',1)";
        // echo $qry;
        if(mysqli_query($con,$qry)){
            echo("<script>alert('Product Added')</script>");
        } else {
            echo("<script>alert('Something Wrong')</script>");
            // echo mysqli_error($con);
        }
  }
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-4">
                <div class="card-header">
                    <h2>Add Product</h2>
                </div>
                <div class="card-body">
                    <form action="product_add.php" method="POST" enctype="multipart/form-data" onsubmit="return validateProduct();">
                        <div class="mb-1">
                            <label for="">Product Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Author Name</label>
                            <input type="text" name="author" class="form-control" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Category</label>
                            <select name="category" class="form-control" required>
                            <?php
                                 $qry = "select * from category order by category";
                                 $res = mysqli_query($con, $qry);
                                 while($data = mysqli_fetch_assoc($res)){
                                ?>
                                    <option value="<?php echo $data['category'] ?>"><?php echo $data['category'] ?></option>
                                <?php
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                        </div>
                        <div class="mb-1">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Discount</label>
                            <input type="text" name="discount" class="form-control" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Photo</label>
                            <input type="file" name="image" id="image" accept="image/*" class="form-control" required>
                        </div>
                        <div class="mt-2">
                            <input type="submit" name="add" value="Add" class="form-control btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/admin_validator.js"></script>