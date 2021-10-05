<?php
include 'include/connect.php';

if(isset($_GET['C_ID'])){
             $id = $_GET['C_ID'];

       $query = "DELETE FROM contact_us WHERE id=$id";

      
       $record = mysqli_query($conn, $query);
          if($record){
        ?>
<script type="text/javascript">
alert("User Request Delete");
window.location = "index.php";
</script>
<?php
   
       }
      }
?>