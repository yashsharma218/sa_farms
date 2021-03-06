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
    <title>SARUBAI AGRO FARMER ADMIN ADD ACCOUNT</title>
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
                                &nbsp;&nbsp; Add Admin Account
                            </div>
                            <div class="p-3">
                                <form class="w-full" method="POST" enctype="multipart/form-data">
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Full Name *" aria-label="Full Name">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" required="" placeholder="Username *" aria-label="Username">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="Password *" aria-label="Password">
                                    </div><br>
                                    <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="c_password" name="c_password" type="password" required="" placeholder="Confirm Password *" aria-label="Confirm Password">
                                    </div><br>

                                    <div>
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="register">Ragister</button>
                                    </div>
                                </form>
                            </div>
                        </div><br>



                        <hr class="border-t mx-2 border-grey-ligght"><br>




                        <div class="flex flex-1 flex-col md:flex-row lg:flex-row">

                            <!-- card -->

                            <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                                <div class="px-6 py-2 border-b border-light-grey">
                                    <div class="font-bold text-xl">Admin List</div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-grey-darkest">
                                        <thead class="bg-grey-dark text-white text-normal">
                                            <tr>
                                                <th scope="col">Sr No.</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">User ID</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = "select * from admin";
                                            $result = mysqli_query($conn, $query);
                                            $srno = 0;
                                            while ($row = mysqli_fetch_array($result)) {
                                                if ($row['id'] == 1) {}
                                                else{
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?php echo ++$srno; ?></th>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['username']; ?></td>
                                                        <td>
                                                            <a href='delete_admin.php?A_ID=<?php echo $row['id'] ?>'><i class="fas fa-trash"></i> Remove Admin</a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
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
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $query = "select username from admin";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {

        if ($row['username'] == $username) {
            $account++;
        }
    }

    if ($account == 0) {
        if ($password == $c_password) {

            if (!isset($name) || $name === '') {
?>
                <script type="text/javascript">
                    alert("Please Enter Admin Name.. ");
                </script>
            <?php
            } elseif (!isset($username) || $username === '') {
            ?>
                <script type="text/javascript">
                    alert("Please Enter Admin Username.. ");
                </script>
            <?php

            } elseif (!isset($password) || $password === '') {
            ?>
                <script type="text/javascript">
                    alert("Please Enter Password.. ");
                </script>
                <?php
            } else {
                $query = "INSERT INTO admin VALUES ('','$name','$username','$password')";
                $record = mysqli_query($conn, $query);

                if ($record) {
                ?>

                    <script type="text/javascript">
                        alert("Admin Account Create");
                        window.location = "add_admin_account.php";
                    </script>
                <?php

                } else {
                ?>

                    <script type="text/javascript">
                        alert("Have Some Issue..");
                        window.location = "add_admin_account.php";
                    </script>
            <?php
                }
            }
        } else {
            ?>

            <script type="text/javascript">
                alert("Password Do not Match..");
                window.location = "add_admin_account.php";
            </script>
        <?php
        }
    } else {
        ?>

        <script type="text/javascript">
            alert("User already exist, Please Chnage Your User ID..");
            window.location = "add_admin_account.php";
        </script>
<?php
    }
}

?>