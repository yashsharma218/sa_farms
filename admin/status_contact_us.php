<?php
include 'include/connect.php';

if(isset($_GET['C_ID'])){
             $id = $_GET['C_ID'];

            $sql="select status from contact_us where id=$id";
            $record = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($record);

            if($row['status']=='Pending'){
                $query = "UPDATE contact_us SET status='Done' where id=$id";
                $record = mysqli_query($conn, $query);
                
                if($record){
        ?>
<script type="text/javascript">
alert("Status is Done");
window.location = "index.php";
</script>
<?php
   
       }

            }
            else{
                $query = "UPDATE contact_us SET status='Pending' where id=$id";
                $record = mysqli_query($conn, $query);
                    if($record){
        ?>
<script type="text/javascript">
alert("Status is Pending");
window.location = "index.php";
</script>
<?php
   
       }

            }

       
      }
?>