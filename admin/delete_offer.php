<?php
include 'include/connect.php';

if(isset($_GET['O_ID'])){
             $id = $_GET['O_ID'];

       $query = "DELETE FROM offer WHERE id=$id";

      
       $record = mysqli_query($conn, $query);
          if($record){
        ?>
<script type="text/javascript">
alert("Offer Deleted");
window.location = "add_offer.php";
</script>
<?php
   
       }
      }
?>