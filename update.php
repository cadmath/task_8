<?php
require_once 'db.php';

    $id = $_POST['id'];
    $fname = trim(htmlspecialchars($_POST['fname']));
    $lname = trim(htmlspecialchars($_POST['lname']));
    $uname = trim(htmlspecialchars($_POST['uname']));
    $sql_ins = 'UPDATE task SET First_Name = :First_Name, Last_Name = :Last_Name, Username = :Username WHERE id = :id';
    $pre = $db->prepare($sql_ins);
    $alert = $pre->execute(['First_Name'=>$fname, 'Last_Name'=> $lname, 'Username'=>$uname, 'id'=>$id]);
    
    if($alert){
        header('Location: task_8.php');
    }else{
        echo '<script>alert(\'Ошибка при обновлении\')</script>';
    }