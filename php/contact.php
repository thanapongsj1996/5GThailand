<meta charset="UTF-8">
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>

<?php 
    require_once('connect.php');
    if (isset($_POST['btn-submit'])){
        $secretKey = '6Lfe3IYUAAAAADZ3Bf3DwqNfUxbixstKcDpRcl4S';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$response&remoteip=$remoteip";
        $resp = json_decode(file_get_contents($url));
        if ($resp->success) {
            $sql = "INSERT INTO `contacts` (`name`, `phone`, `email`, `detail`, `created_at`) 
                    VALUES ('".$_POST['name']."',
                    '".$_POST['phone']."',
                    '".$_POST['email']."',
                    '".$_POST['message']."',
                    '".date("Y-m-d")."');";
            $result = $conn->query($sql) or die($conn->error);
            if($result) {
                sendToLine();
            }
        } else {
            echo '<script> alert("Verification Recaptcha Failed!") </script>';
            header('Refresh:0; url=../contact.php');
        }
    } else {
        header('Refresh:0; url=../index.php');
    }
    
    function sendToLine() {
        $text = "มีผู้ติดต่อมาจาก 5G Thailand \n";
        $text .= "Name: ". $_POST['name']."\n";
        $text .= "Phone: ". $_POST['phone']."\n";
        $text .= "E-mail: ". $_POST['email']."\n";
        $text .= "Message: ". $_POST['message'];
        $message = array(
            'message' => $text
        );
        notify_message($message);
    }
    function notify_message($message) {
        define('LINE_API', "https://notify-api.line.me/api/notify");
        define('LINE_TOKEN', "q3N4ME4FhS1v1J25lTNHlrMQxpsvFlKFbVc13MuwcFS");
        $queryData = http_build_query($message, '', '&');
        $headerOption = array(
            'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                            ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                            ."Content-Length: ".strlen($queryData)."\r\n",
                'content' => $queryData
            )
        );

        $context = stream_context_create($headerOption);
        $result = file_get_contents(LINE_API, FALSE, $context);
        $resp = json_decode($result);
        if ($resp->status == 200){
            echo '<script> alert("ส่งข้อความเรียบร้อยแล้ว!") </script>';
            header('Refresh:0; url=../index.php');
        } else {
            echo '<script> alert("ส่งข้อความไม่สำเร็จ โปรดลองใหม่อีกครั้ง") </script>';
            header('Refresh:0; url=../contact.php');
        }
    }

?>