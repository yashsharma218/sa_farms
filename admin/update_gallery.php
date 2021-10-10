<?php
include "include/connect.php";
session_start();

$username = $_SESSION['User_ID'];

if (!isset($username)) {
    header('location: login.php');
}

$id = $_GET['G_ID'];
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
                        <div class="mb-2 md:mx-2 lg:mx-2 border-solid border-gray-200 rounded border shadow-sm w-full md:w-1/2 lg:w-1/2">
                            <br>
                            <div class="font-bold text-xl">
                                &nbsp;&nbsp; Update Product
                            </div>
                            <div class="p-3">
                                <form class="w-full" method="POST" enctype="multipart/form-data">
                                    <?php
                                    $query = "select * from gallery where id=$id";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Image Name *" aria-label="Image Name" value="<?php echo $row['name'] ?>">
                                        </div><br>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                            <select id="category" name="category" class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded">
                                                <option value="<?php echo $row['category'] ?>">--Select Category--</option>
                                                <option value="dominant_fruits">Dominant Fruits</option>
                                                <option value="vegetable">Vegetable</option>
                                                <option value="food_grain">Food Grain </option>
                                                <option value="pulses">Pulses</option>
                                                <option value="spices">Spices</option>
                                            </select>
                                        </div><br>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                            <textarea class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="description" name="description" type="text" placeholder="Description" rows="3" aria-label="Description"><?php echo $row['description'] ?></textarea>
                                        </div><br>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="image" name="image" type="file" aria-label="Image">

                                            <img style="border-radius:50%!important; height:60px; width:60px;" src="<?php echo $row['image']; ?>" alt="Image">
                                        </div><br>
                                    <?php } ?>
                                    <div>
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="update_offer">Update Details</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
if (isset($_POST['update_offer'])) {
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];


    $source = $_FILES['image']['tmp_name'];
    $dest = "" . $_FILES['image']['name'];


    if ($dest == "") {


        if (!isset($name) || $name === '') {
?>
            <script type="text/javascript">
                alert("Please Enter Name.. ");
            </script>
        <?php
        } elseif (!isset($category) || $category === '') {
        ?>
            <script type="text/javascript">
                alert("Please Select Category.. ");
            </script>
            <?php
        } else {
            $query = "UPDATE gallery SET name='$name',category='$category', description='$description' where id=$id";
            $record = mysqli_query($conn, $query);

            if ($record) {
            ?>

                <script type="text/javascript">
                    alert("Your Image Details Update..");
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
    } else {
        $source = $_FILES['image']['tmp_name'];
        $dest = "images/" . $_FILES['image']['name'];

        if (!move_uploaded_file($source, $dest)) {
            echo "<script>alert('Please Select Photo')</script>";
        } else {
            if (!isset($name) || $name === '') {
            ?>
                <script type="text/javascript">
                    alert("Please Enter Name.. ");
                </script>
            <?php
            } elseif (!isset($category) || $category === '') {
            ?>
                <script type="text/javascript">
                    alert("Please Select Category.. ");
                </script>
                <?php
            } else {
                $query = "UPDATE gallery SET name='$name',category='$category', description='$description', image ='$dest' where id=$id";
                $record = mysqli_query($conn, $query);

                if ($record) {
                ?>

                    <script type="text/javascript">
                        alert("Your Image Details Update..");
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
}
?>