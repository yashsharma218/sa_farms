<?php
include 'include/connect.php';

if(isset($_GET['O_ID'])){
             $id = $_GET['O_ID'];

       $query = "DELETE FROM product_order WHERE id=$id";

      
       $record = mysqli_query($conn, $query);
          if($record){
        ?>
<script type="text/javascript">
alert("Order Delete..");
window.location = "order.php";
</script>
<?php
   
       }
      }
?>