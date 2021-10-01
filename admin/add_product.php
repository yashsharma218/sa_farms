<?php
    include "include/connect.php";
    session_start();

    $username=$_SESSION['User_ID'];

    if(!isset($username)){
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords"
        content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Dashboard | Tailwind Admin</title>
</head>

<body>
    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <?php
            include "include/header.php";
        ?>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <?php
            include "include/sidebar.php";
        ?>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                    <div class="flex flex-col">
                        <!-- Card Sextion Starts Here -->


                        <div
                            class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <br>
                            <div class="font-bold text-xl">
                                &nbsp;&nbsp; Add New Product
                            </div>
                            <div class="p-3">
                                <form class="w-full" method="POST" enctype="multipart/form-data">
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded"
                                            id="product_name" name="product_name" type="text" required=""
                                            placeholder="Product Name *" aria-label="Product Name">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <select name="category" id="category"
                                            class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
                                            <option value="Fruit">Fruit</option>
                                            <option value="Vegetable">Vegetable</option>
                                        </select>
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="price" name="price" type="number" required="" placeholder="Price *"
                                            aria-label="Price">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <select id="stock" name="stock"
                                            class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
                                            <option value="In Stock">In Stock</option>
                                            <option value="Out of Stock">Out of Stock</option>
                                        </select>
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="photo"
                                            name="photo" type="file" aria-label="Photo">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                            <textarea class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="description" id="description" placeholder="Short Description *  Descirption Should be less than 200 words" cols="30" rows="5" required></textarea>
                                    </div><br>
                                    <div>
                                        <button
                                            class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                                            type="submit" name="add_product">Add Product</button>
                                    </div>
                                </form>
                            </div>
                        </div><br>



                        <hr class="border-t mx-2 border-grey-ligght"><br>




                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row">

                            <!-- card -->

                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Product List</div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-grey-darkest">
                                        <thead class="bg-grey-dark text-white text-normal">
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Availability</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = "select * from product";
                                                $result = mysqli_query($conn,$query);
                                                $srno = 0;
                                                while($row = mysqli_fetch_array($result))
                                                {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo ++$srno; ?></th>
                                                <td><?php echo $row['veg_name']; ?></td>
                                                <td><?php echo $row['categories']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td><?php echo $row['price']; ?></td>
                                                <td><?php echo $row['stock']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><img style="border-radius:50%!important; height:60px; width:70px;" src="<?php echo $row['photo']; ?>" alt="Image"></td>
                                                <td>
                                                    <a href='update_product.php?P_ID=<?php echo $row['id'] ?>'><i
                                                            class="fas fa-edit"></i></a>&nbsp;&nbsp;&nbsp;
                                                    <a href='delete_product.php?P_ID=<?php echo $row['id'] ?>'><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!-- /card -->

                        </div>
                        <!-- /Cards Section Ends Here -->


                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <?php
                include "include/footer.php";
            ?>
            <!--/footer-->

        </div>

    </div>
    <script src="./main.js"></script>
</body>

</html>

<?php
    if(isset($_POST['add_product']))
    {
        $product_name=$_POST['product_name'];
        $category=$_POST['category'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];
        $description=$_POST['description'];
        
        $source = $_FILES['photo']['tmp_name'];
		$dest = "images/".$_FILES['photo']['name'];

        if(!move_uploaded_file($source, $dest)){
			echo "<script>alert('Select Photo')</script>";	
}else{	

        if (!isset($product_name) || $product_name === '') {
            ?>
<script type="text/javascript">
alert("Please Enter Product Name.. ");
</script>
<?php
          }
        elseif (!isset($category) || $category === '') {
          ?>
<script type="text/javascript">
alert("Please Select Category.. ");
</script>
<?php
        
        }
        elseif (!isset($price) || $price === '') {
            ?>
<script type="text/javascript">
alert("Please Enter Price.. ");
</script>
<?php
        }elseif (!isset($stock) || $stock === '') {
            ?>
<script type="text/javascript">
alert("Please Select Stock.. ");
</script>
<?php
        }elseif (!isset($description) || $description === '') {
            ?>
<script type="text/javascript">
alert("Please Enter Price.. ");
</script>
<?php
        }
        else{
       $query = "INSERT INTO product(veg_name,categories,price,photo,stock,description) VALUES ('$product_name','$category','$price','$dest','$stock','$description')";
    //    echo $query;
    //    exit();
       $record = mysqli_query($conn, $query);
      
       if( $record){
       ?>

<script type="text/javascript">
alert("Your Product Add");
window.location = "add_product.php";
</script>
<?php
      
      }else{
        ?>

<script type="text/javascript">
alert("Have Some Issue..");
window.location = "add_product.php";
</script>
<?php
      }              
      }
    }
    }
?>