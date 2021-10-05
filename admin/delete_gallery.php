<?php
include 'include/connect.php';

if(isset($_GET['G_ID'])){
             $id = $_GET['G_ID'];

       $query = "DELETE FROM gallery WHERE id=$id";

      
       $record = mysqli_query($conn, $query);
          if($record){
        ?>
<script type="text/javascript">
alert("Image Delete");
window.location = "gallery.php";
</script>
<?php
   
       }
      }
?>