<?php
include 'include/connect.php';

if(isset($_GET['P_ID'])){
             $id = $_GET['P_ID'];

       $query = "DELETE FROM product WHERE id=$id";

      
       $record = mysqli_query($conn, $query);
          if($record){
        ?>
<script type="text/javascript">
alert("Product Deleted");
window.location = "add_product.php";
</script>
<?php
   
       }
      }
?>