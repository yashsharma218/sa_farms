<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="admin./dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <style>
    .login {
        background: url('admin/./dist/images/login-new.jpeg')
    }
    </style>
    <title>Register</title>
</head>

<body class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="POST" enctype="multipart/form-data">
                    <p class="text-gray-800 font-medium">Register</p>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="name">Name <em style="color: red;">*</em></label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name"
                            type="text" required="" placeholder="Your Name" aria-label="Name">
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-gray-00" for="email">Email<em style="color: red;">*</em>

                        </label>
                        <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email"
                            type="text" required="" placeholder="Your Email" aria-label="Email">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="password">Password<em
                                style="color: red;">*</em></label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password"
                            type="password" required="" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="c_password">Confirm Password<em
                                style="color: red;">*</em></label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="c_password"
                            name="c_password" type="password" required="" placeholder="Confirm Password"
                            aria-label="Confirm Password">
                    </div>
                    <div class="">
                        <label class="block text-sm text-gray-00" for="photo">Photo</label>
                        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="photo" name="photo"
                            type="file">
                    </div>
                    <div class="mt-4">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit"
                            name="register">Register</button>
                    </div>
                    <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800"
                        href="login.php">
                        Already have an account ?
                    </a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

<?php
include "include/connect.php";
    if(isset($_POST['register']))
    {
        $id='';
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $c_password=$_POST['c_password'];
        
        
        $source = $_FILES['photo']['tmp_name'];
		$dest = "images/".$_FILES['photo']['name'];

        	

        if (!isset($name) || $name === '') {
            ?>
<script type="text/javascript">
alert("Please Enter Name.. ");
</script>
<?php
          }
        elseif (!isset($email) || $email === '') {
          ?>
<script type="text/javascript">
alert("Please Enter E-mail.. ");
</script>
<?php
        
        }
        elseif (!isset($password) || $password === '') {
          ?>
<script type="text/javascript">
alert("Please Enter Password.. ");
</script>
<?php
        }
        elseif (!isset($c_password) || $c_password === '') {
            ?>
<script type="text/javascript">
alert("Please Enter Confirm Password.. ");
</script>
<?php
        }
        else{
            if($password==$c_password){
       $query = "insert INTO user(name,email,password,photo) VALUES ('$name', '$email','$password','$dest')";
    //    echo $query;
    //    exit();
       $record = mysqli_query($conn, $query);
      
       if($record){
       ?>

<script type="text/javascript">
alert("Now You are Register User");
window.location = "login.php";
</script>
<?php
      
      }else{
        ?>

<script type="text/javascript">
alert("Have Some Issue..");
window.location = "user_registration.php";
</script>
<?php
      }              
      }else{
        ?>

<script type="text/javascript">
alert("Password Does not Match..");
window.location = "user_registration.php";
</script>
<?php
      }
    }
    }
?>