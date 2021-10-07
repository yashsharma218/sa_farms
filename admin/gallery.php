<?php
include "include/connect.php";
session_start();

$username = $_SESSION['User_ID'];

if (!isset($username)) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="./dist/styles.css">
    <link rel="stylesheet" href="./dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>SARUBAI AGRO FARMER FOOD GALLERY</title>
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


                        <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <br>
                            <div class="font-bold text-xl">
                                &nbsp;&nbsp; Add Your Food Gallery Image
                            </div>
                            <div class="p-3">
                                <form class="w-full" method="POST" enctype="multipart/form-data">
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Image Name *" aria-label="Image Name">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" required="" aria-label="Image">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <select id="category" name="category"
                                            class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
                                            <option value="dominant_fruits">Dominant Fruits</option>
                                            <option value="vegetable">Vegetable</option>
                                            <option value="food_grain">Food Grain </option>
                                            <option value="pulses">Pulses</option>
                                            <option value="spices">Spices</option>
                                        </select>
                                    </div><br>
                                    <div>
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="add_image">Add Image</button>
                                    </div>
                                </form>
                            </div>
                        </div><br>



                        <!-- <hr class="border-t mx-2 border-grey-ligght"><br> -->




                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row">

                            <!-- card -->

                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">FOOD Gallery Image List</div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-grey-darkest">
                                        <thead class="bg-grey-dark text-white text-normal">
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "select * from gallery";
                                            $result = mysqli_query($conn, $query);
                                            $srno = 0;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo ++$srno; ?></th>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><img style="border-radius:50%!important; height:60px; width:60px;" src="<?php echo $row['image']; ?>" alt="Image"></td>
                                                    <td>
                                                        <a href='delete_gallery.php?G_ID=<?php echo $row['id'] ?>'><i class="fas fa-trash"></i></a>
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
if (isset($_POST['add_image'])) {
    $name = $_POST['name'];
    $category=$_POST['category'];
    $source = $_FILES['image']['tmp_name'];
    $dest = "images/" . $_FILES['image']['name'];

    if (!move_uploaded_file($source, $dest)) {
        echo "<script>alert('Select Photo')</script>";
    } else {



        if (!isset($name) || $name === '') {
?>
            <script type="text/javascript">
                alert("Please Enter Name.. ");
            </script>
            <?php
        }elseif (!isset($category) || $category === '') {
            ?>
                        <script type="text/javascript">
                            alert("Please Select Category.. ");
                        </script>
                        <?php
                    } else {
            $query = "INSERT INTO gallery VALUES ('','$dest','$name','$category')";
            $record = mysqli_query($conn, $query);

            if ($record) {
            ?>

                <script type="text/javascript">
                    alert("Your Image Add");
                    window.location = "gallery.php";
                </script>
            <?php

            } else {
            ?>

                <script type="text/javascript">
                    alert("Have Some Issue..");
                    window.location = "gallery.php";
                </script>
<?php
            }
        }
    }
}
?>