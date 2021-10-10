<?php
include 'include/connect.php';

if(isset($_GET['A_ID'])){
             $id = $_GET['A_ID'];

       $query = "DELETE FROM admin WHERE id=$id";

      
       $record = mysqli_query($conn, $query);
          if($record){
        ?>
<script type="text/javascript">
alert("Admin Account Delete");
window.location = "add_admin_account.php";
</script>
<?php
   
       }
      }
?>