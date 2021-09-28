
<!doctype html>
<html lang="en">

<head>
    <title>SARUBAI AGRO FARMER LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="admin/./dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<style>
        .login{
            background: url('admin/./dist/images/login-new.jpeg')
        }
    </style>

<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post">
                    <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="username">Username</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username"
                            type="text" required="" placeholder="User Name" aria-label="username">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-600" for="password">Password</label>
                        <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password"
                            type="password" required="" placeholder="*******" aria-label="password">
                    </div>
                    <div class="mt-4 items-center justify-between" align=center>
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                            type="submit">Login</button>
                        <a class="inline-block right-0 align-baseline  font-bold text-sm text-500 hover:text-blue-800"
                            href="#">
                            Forgot Password?
                        </a>
                    </div>
                    <div class="mt-4 items-center justify-between" align=center>
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800"
                        href="user_registration.php">
                        Not registered Click Here?
                    </a><br>
                    <a class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                        href="index.php">Skip Login..</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
    include "include/connect.php";
    session_start();
                     
       if($_SERVER["REQUEST_METHOD"] == "POST") {
                                      
        $User_ID = mysqli_real_escape_string($conn,$_POST['username']);
        $Password = mysqli_real_escape_string($conn,$_POST['password']); 
        $_SESSION['User_ID'] = $User_ID;
        $sql = "select email, password from user";
        $result= mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_array($result)) {
             if ($User_ID==$row['email'] & $Password==$row['password']){                                    
                   header("location: index.php");                                           
              }else{
              ?>
<script type="text/javascript">
alert("Incorrect Username or Password..");
</script>
<?php
                                    }
                                    }
                                    }
                                ?>