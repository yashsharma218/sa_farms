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
                                    <div class="font-bold text-xl">Product Order List</div>
                                </div><br>
                                <div class="table-responsive">
                                    <table class="table text-grey-darkest">
                                        <thead class="bg-grey-dark text-white text-normal">
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">User Name</th>
                                                <th scope="col">email</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Payment Method</th>
                                                <th scope="col">Shipping Method</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = "select * from product_order";
                                                $result = mysqli_query($conn,$query);
                                                $srno = 0;
                                                while($row = mysqli_fetch_array($result))
                                                {
                                            ?>
                                            <tr>
                                                <th scope="row"><?php echo ++$srno; ?></th>
                                                <td><?php echo $row['first_name']; ?></td>
                                                <td><?php echo $row['last_name']; ?></td>
                                                <td><?php echo $row['user_id']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['address']; ?><br><?php echo $row['country']; ?><br><?php echo $row['state']; ?><br><?php echo $row['zip_code']; ?>
                                                </td>
                                                <td><?php echo $row['payment_method']; ?></td>
                                                <td><?php echo $row['shipping_method']; ?></td>
                                                <td><?php echo $row['quantity']; ?>Item</td>
                                                <td><?php echo $row['grand_total']; ?>Rs/-</td>

                                                <td>
                                                    <a href='delete_product_order.php?O_ID=<?php echo $row['id'] ?>'><i
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