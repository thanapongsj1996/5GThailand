<?php 
    include_once('../authen.php');
?>
<?php

    if (isset($_POST['submit'])){
        $tag = 'all,'.join(',', $_POST['tags']);
        $status = isset($_POST['status']) ? 'true': 'false';
        $writer = $_SESSION['first_name'].' '.$_SESSION['last_name'];
        $temp = explode('.', $_FILES['file']['name'] );
        $detail = str_replace('../../../', './', $_POST['detail']);
        $new_name = round( microtime(true)*9999 ). '.' . end($temp);
        $url_upload = '../../../assets/images/blog/'.$new_name;
        if ( move_uploaded_file($_FILES['file']['tmp_name'], $url_upload)) {
            $sql = "INSERT INTO `articles` (`writer`, `subject`, `sub_title`, `detail`, `image`, `tag`, `status`, `updated_at`, `created_at`) 
                    VALUES ('".$writer."', 
                            '".$_POST['subject']."', 
                            '".$_POST['sub_title']."', 
                            '".$detail."', 
                            '".$new_name."', 
                            '".$tag."', 
                            '".$status."', 
                            '".date("Y-m-d H:i:s")."', 
                            '".date("Y-m-d H:i:s")."')";
            $result = $conn->query($sql) or die($conn->error);
            if($result){
                echo '<script> alert("Add article successfully!") </script>';
                header('Refresh:0; url=index.php');
            } else {
                echo '<script> alert("Add article failed!") </script>';
            }
        } else {
            echo 'Upload failed!';
        }
    } else {
        header('location:index.php');
    }
?>