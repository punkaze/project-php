<?php
    session_start();
    
    if (isset($_POST['email']) && isset($_POST['passwd'])) {
        $connect = mysqli_connect("localhost","root","","sport");
        $sql = 'select * from member where Mmail="'.$_POST['email'].'" and Mpasswd="'.$_POST['passwd'].'"';
        $result = mysqli_query($connect,$sql);

        if ($row = mysqli_fetch_array($result)) {
            
            $_SESSION['usr_id'] = $row['MID'];
            $_SESSION['usr_name'] = $row['Mname'];

            if ($row['Mstatus'] == "user") {
                header("Location: part-user/selectfeild.php");
            } else {
                header("Location: part-admin/admin.php");
            }
        } else {
            include "index.php";
            echo '<br><h3 id="warning">Incorrect Email or Password!!!</h3>';
        }
    }
?>