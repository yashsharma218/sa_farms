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
                                &nbsp;&nbsp; Update User Name
                            </div>
                            <div class="p-3">
                                <form class="w-full" method="POST">
                                    <?php
                                    $query = "select * from admin where username='$username'";
                                    $result = mysqli_query($conn, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">User ID <em style="color:red;">&nbsp;*</em>
                                        </div>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" value="<?php echo $row['username'] ?>" type="text" required="" placeholder="User ID *" aria-label="User ID">
                                        </div><br>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">User Name<em style="color:red;">&nbsp;*</em>
                                        </div>
                                        <div class="flex items-center border-b border-b-1 border-teal-500 py-2">
                                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" value="<?php echo $row['name'] ?>" type="text" required="" placeholder="User Name *" aria-label="User Name">
                                        </div><br>
                                    <?php } ?>
                                    <div>
                                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" name="update_username">Update User Details</button>
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
if (isset($_POST['update_username'])) {
    $name = $_POST['name'];
    $username1 = $_POST['username'];

    $query = "select username from admin";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {

        if ($row['username'] == $username1) {
            $account++;
        }
    }
    if ($account == 0) {
        if (!isset($name) || $name === '') {
?>
            <script type="text/javascript">
                alert("Please Enter User ID.. ");
            </script>
        <?php
        }
        if (!isset($username1) || $username1 === '') {
        ?>
            <script type="text/javascript">
                alert("Please Enter User Name.. ");
            </script>
            <?php
        } else {
            $query = "UPDATE admin SET name='$name', username='$username1' where username='$username'";

            $record = mysqli_query($conn, $query);

            if ($record) {
            ?>

                <script type="text/javascript">
                    alert("Your Details Update, Now you are Going to Login Page..");
                    window.location = "logout.php";
                </script>
            <?php

            } else {
            ?>

                <script type="text/javascript">
                    alert("Have Some Issue..");
                    window.location = "change_user_name.php";
                </script>
        <?php
            }
        }
    } else {
        ?>

        <script type="text/javascript">
            alert("User already exist, Please Chnage Your User ID..");
            window.location = "change_user_name.php";
        </script>
<?php
    }
}
?>