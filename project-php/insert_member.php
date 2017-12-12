<?php
    session_start();

    $error = false;
    if (!isset($_POST['suName'])
    && !isset($_POST['suTel'])
    && !isset($_POST['suMail'])
    && !isset($_POST['suPass'])
    && !isset($_POST['cfPass'])) {
        include "signup.php";
        echo '<br><h3 id="warning">โปรดกรอกข้อมูลให้ครบทุกช่อง</h3>';
    } else {
        if (!preg_match("/^[a-zA-Z ]+$/",$_POST['suName'])) {
            $error = true;
            $errorstr = "Name must contain only alphabets and space";
        }
        if(!preg_match('/^[0-9]{10}$/',$_POST['suTel'])) {
            $error = true;
            $errorstr = "Telephone number must have at least 10";
        }
        if(!filter_var($_POST['suMail'],FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $errorstr = "Please Enter Valid Email ID";
        }
        if(strlen($_POST['suPass']) < 6) {
            $error = true;
            $errorstr = "Password must be minimum of 6 characters";
        }
        if($_POST['suPass'] != $_POST['cfPass']) {
            $error = true;
            $errorstr = "Password and Confirm Password doesn't match";
        }
        if (!$error) {
            $connect = mysqli_connect("localhost","root","","sport");
            $sql = 'INSERT INTO member (MID, Mname, Mtel, Mmail, Mpasswd, Mstatus) VALUES (null,"'.$_POST['suName'].'","'.$_POST['suTel'].'","'.$_POST['suMail'].'","'.$_POST['suPass'].'","user")';
            $result = mysqli_query($connect,$sql);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                include "index.php";
                echo '<br><h3 id="warning">สมัครสมาชิกเรียบร้อยแล้ว ขอบคุณที่มาเป็นส่วนหนึ่งของเรา</h3>';
            }
        } else {
            include "signup.php";
            echo '<br><h3 id="warning">'.$errorstr.'</h3>';
        }
    }
    
?>