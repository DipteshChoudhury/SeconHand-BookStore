<?php
  include_once 'navbar.php';
  require_once '../dbconfig.php';
  if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    if(isset($_POST['available'])){
        $available = 1;
    } else{
        $available = 0;
    }
    $img_name = $_FILES['image']['name'];
    $tmp_loc = $_FILES['image']['tmp_name'];
    if($_FILES['image']['name'] == ""){
        $qry = "UPDATE products SET name='$name', author='$author', category='$category', description='$description',price=$price, discount=$discount, available=$available WHERE id=$id";
    } else {
        move_uploaded_file($tmp_loc, '../images/products/'.$img_name);
        $qry = "UPDATE products SET name='$name', author='$author', category='$category', description='$description',price=$price, discount=$discount, image='$img_name', available=$available WHERE id=$id";
    }
    // echo $qry;
    if(mysqli_query($con,$qry)>0){
        echo("<script>alert('Product is updated');</script>");
    }else{
        echo("<script>alert('Something Wrong !!!');</script>");
    }
  }
  if(isset($_GET['id'])){
    $pid = $_GET['id'];
    $qry = "SELECT * FROM products WHERE id=$pid";
    $res = mysqli_query($con,$qry);
    if(mysqli_num_rows($res) <= 0){
        header('location:products.php');
    }
  } else {
    header('location:products.php');
  }

  $product = mysqli_fetch_assoc($res);
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card my-4">
                <div class="card-header">
                    <h2>Update Product</h2>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                        <div class="mb-1">
                            <label for="">Product Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $product['name']; ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Author Name</label>
                            <input type="text" name="author" class="form-control" value="<?php echo $product['author']; ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Category</label>
                            <select name="category" class="form-control" required>
                            <?php
                                 $qry = "select * from category order by category";
                                 $res = mysqli_query($con, $qry);
                                 while($data = mysqli_fetch_assoc($res)){
                                ?>
                                    <option 
                                        value="<?php echo $data['category'] ?>"
                                        <?php if($product['category'] == $data['category']) echo 'selected' ?>
                                    ><?php echo $data['category'] ?></option>
                                <?php
                                 }
                            ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="">Description</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control" required>
                                <?php echo $product['description']; ?>
                            </textarea>
                        </div>
                        <div class="mb-1">
                            <label for="">Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $product['price']; ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Discount</label>
                            <input type="text" name="discount" class="form-control" value="<?php echo $product['discount']; ?>" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Photo</label>
                            <img src="../images/products/<?php echo $product['image']; ?>" alt="" height="150" width="150">
                            <input type="file" name="image" id="image" accept="image/*" class="form-control">
                            <p class="text-muted">Note: Chose an image if you wnat to update it. Else keep it blank</p>
                        </div>
                        <div class="mb-1">
                            <label for="">Available</label>
                            <input type="checkbox" name="available" class=""  <?php if($product['available'] == 1) echo 'checked' ?>>
                        </div>
                        <div class="mt-2 text-end">
                            <a href="product_delete.php?id=<?php echo $pid; ?>" class="btn btn-danger">Delete</a>
                            <input type="submit" name="update" value="Update" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>