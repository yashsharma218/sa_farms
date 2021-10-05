<?php
    include "include/connect.php";

    $username=$_SESSION['User_ID'];

    if(!isset($username)){
        header('location: login.php');
    }
?>
<header class="bg-nav">
    <div class="flex justify-between">
        <div class="p-1 mx-3 inline-flex items-center">
            <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
            <h1 class="text-white p-2">Logo</h1>
        </div>
        <div class="p-1 flex flex-row items-center">
            <!-- <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full"
                src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt=""> -->
            <?php 
                    $query = "SELECT name FROM sa_farms.admin where username='$username'";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($result);
                ?>
            <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $row['name'];?></a>
            <!-- <div id="ProfileDropDown" style="padding-right: 200px;" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r">
                <ul class="list-reset" style="padding-right: 200px;">
                    <li>
                        <hr class="border-t mx-2 border-grey-ligght">
                    </li>
                    <li><a href="logout.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout
                        </a>
                    </li>
                    <li><a href="logout.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout
                        </a>
                    </li>
                    <li><a href="logout.php" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout
                        </a>
                    </li>
                </ul>
            </div> -->
        </div>
    </div>
</header>