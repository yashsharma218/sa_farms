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
    <title>SARUBAI AGRO FARMER HOME</title>
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
                        <!-- Stats Row Starts Here -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                            <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <?php
                                    $query = "select id from contact_us";
                                    $result = mysqli_query($conn, $query);
                                    $total_user = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $total_user++;
                                    } ?>
                                    <a href="#" class="no-underline text-white text-2xl">
                                        <?php echo $total_user; ?>
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Total Request
                                    </a>
                                </div>
                            </div>

                            <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <?php
                                    $query = "select id from offer";
                                    $result = mysqli_query($conn, $query);
                                    $total_order = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $total_order++;
                                    }
                                    ?>
                                    <a href="#" class="no-underline text-white text-2xl">
                                        <?php echo $total_order; ?>
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Total Offer
                                    </a>
                                </div>
                            </div>
                            <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <?php
                                    $query = "select id from gallery";
                                    $result = mysqli_query($conn, $query);
                                    $total_product = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $total_product++;
                                    } ?>
                                    <a href="#" class="no-underline text-white text-2xl">
                                        <?php echo $total_product; ?>
                                    </a>

                                    <a href="#" class="no-underline text-white text-lg">
                                        Total Products
                                    </a>
                                </div>
                            </div>
                            <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                                <div class="p-4 flex flex-col">
                                    <?php
                                    $query = "select grand_total from product_order";
                                    $result = mysqli_query($conn, $query);
                                    $total = 0;
                                    while ($row = mysqli_fetch_array($result)) {
                                        $total = $total + $row['grand_total'];
                                    }
                                    ?>
                                    <a href="#" class="no-underline text-white text-2xl">
                                        
                                    </a>
                                    <a href="#" class="no-underline text-white text-lg">
                                        Blank
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- /Stats Row Ends Here -->

                        <!-- Card Sextion Starts Here -->
                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                            <!-- card -->

                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Contact Us List</div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-grey-darkest">
                                        <thead class="bg-grey-dark text-white text-normal">
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">Number</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Requirement</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "select * from contact_us";
                                            $result = mysqli_query($conn, $query);
                                            $srno = 0;
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo ++$srno; ?></th>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['gender']; ?></td>
                                                    <td><?php echo $row['number']; ?></td>
                                                    <td><?php echo $row['address']; ?>&nbsp;<?php echo $row['pincode']; ?></td>
                                                    <td><?php echo $row['requirement']; ?></td>
                                                    <td><?php echo $row['description']; ?></td>
                                                    <td><a href="status_contact_us.php?C_ID=<?php echo $row['id'] ?>" style="color: blue;"><?php echo $row['status']; ?></a></td>
                                                    <td>
                                                        <a href='delete_contact_us.php?C_ID=<?php echo $row['id'] ?>'><i class="fas fa-trash"></i></a>
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

                        <!-- Progress Bar -->
                        <!-- <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 mt-2">
                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full pt-2">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Progress Among Projects</div>
                                </div>
                                <div class="">
                                    <div class="w-full">

                                        <div class="shadow w-full bg-grey-light">
                                            <div class="bg-blue-500 text-xs leading-none py-1 text-center text-white"
                                                style="width: 45%">45%
                                            </div>
                                        </div>


                                        <div class="shadow w-full bg-grey-light mt-2">
                                            <div class="bg-teal-500 text-xs leading-none py-1 text-center text-white"
                                                style="width: 55%">55%
                                            </div>
                                        </div>


                                        <div class="shadow w-full bg-grey-light mt-2">
                                            <div class="bg-orange-500 text-xs leading-none py-1 text-center text-white"
                                                style="width: 65%">65%
                                            </div>
                                        </div>


                                        <div class="shadow w-full bg-grey-300 mt-2">
                                            <div class="bg-red-800 text-xs leading-none py-1 text-center text-white"
                                                style="width: 75%">75%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--Profile Tabs-->
                        <!-- <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">
                            Top user 1
                            <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                                <img src="https://i.imgur.com/w1Bdydo.jpg" alt="" class="w-full" />
                                <div class="flex justify-center -mt-8">
                                    <img src="https://i.imgur.com/8Km9tLL.jpg" alt="" class="rounded-full border-solid border-white border-2 -mt-3">
                                </div>
                                <div class="text-center px-3 pb-6 pt-2">
                                    <h3 class="text-black text-sm bold font-sans">Olivia Dunham</h3>
                                    <p class="mt-2 font-sans font-light text-grey-700">Hello, i'm from another the other
                                        side!</p>
                                </div>
                                <div class="flex justify-center pb-3 text-grey-dark">
                                    <div class="text-center mr-3 border-r pr-3">
                                        <h2>34</h2>
                                        <span>Photos</span>
                                    </div>
                                    <div class="text-center">
                                        <h2>42</h2>
                                        <span>Friends</span>
                                    </div>
                                </div>
                            </div>
                            Top user 2
                            <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                                <img src="https://i.imgur.com/w1Bdydo.jpg" alt="" class="w-full" />
                                <div class="flex justify-center -mt-8">
                                    <img src="https://i.imgur.com/8Km9tLL.jpg" alt="" class="rounded-full border-solid border-white border-2 -mt-3">
                                </div>
                                <div class="text-center px-3 pb-6 pt-2">
                                    <h3 class="text-black text-sm bold font-sans">Olivia Dunham</h3>
                                    <p class="mt-2 font-sans font-light text-grey-dark">Hello, i'm from another the
                                        other
                                        side!</p>
                                </div>
                                <div class="flex justify-center pb-3 text-grey-dark">
                                    <div class="text-center mr-3 border-r pr-3">
                                        <h2>34</h2>
                                        <span>Photos</span>
                                    </div>
                                    <div class="text-center">
                                        <h2>42</h2>
                                        <span>Friends</span>
                                    </div>
                                </div>
                            </div>
                            Top user 3
                            <div class="rounded rounded-t-lg overflow-hidden shadow max-w-xs my-3">
                                <img src="https://i.imgur.com/w1Bdydo.jpg" alt="" class="w-full" />
                                <div class="flex justify-center -mt-8">
                                    <img src="https://i.imgur.com/8Km9tLL.jpg" alt="" class="rounded-full border-solid border-white border-2 -mt-3">
                                </div>
                                <div class="text-center px-3 pb-6 pt-2">
                                    <h3 class="text-black text-sm bold font-sans">Olivia Dunham</h3>
                                    <p class="mt-2 font-sans font-light text-grey-dark">Hello, i'm from another the
                                        other
                                        side!</p>
                                </div>
                                <div class="flex justify-center pb-3 text-grey-dark">
                                    <div class="text-center mr-3 border-r pr-3">
                                        <h2>34</h2>
                                        <span>Photos</span>
                                    </div>
                                    <div class="text-center">
                                        <h2>42</h2>
                                        <span>Friends</span>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!--/Profile Tabs-->
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