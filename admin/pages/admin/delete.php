<?php include_once('../authen.php') ?>
<?php
    // echo '<script> alert("Finished Deleting!")</script>'; 
    // header('Refresh:0; url=index.php');

    $id = $_GET['id'];
    if (isset($id) && $id != 1) {
        $sql = "DELETE FROM `admin` WHERE `id` = '".$id."';";
        $result = $conn->query($sql);
        if ($conn->affected_rows) {
            echo '<script> alert("Finished Deleting!")</script>'; 
            header('Refresh:0; url=index.php');
        } else {
            echo '<script> alert("Nothing Deleted!")</script>'; 
            header('Refresh:0; url=index.php');  
        }
    } else {
        header('Refresh:0; url=index.php');
    }
?>