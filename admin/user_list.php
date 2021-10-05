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




                        <br>
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row">

                            <!-- card -->

                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">User Register List</div>
                                </div><br>
                                <div class="table-responsive">
                                    <table class="table text-grey-darkest">
                                        <thead class="bg-grey-dark text-white text-normal">
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">email</th>
                                                <th scope="col">Photo</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = "select * from user";
                                                $result = mysqli_query($conn,$query);
                                                $srno = 0;
                                                while($row = mysqli_fetch_array($result))
                                                {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo ++$srno; ?></th>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><img style="border-radius:50%!important; height:60px; width:70px;" src="<?php echo $row['photo']; ?>" alt="No Image"></td>
                                                <td>
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