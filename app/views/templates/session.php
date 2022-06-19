<?php
    if (!isset($_SESSION)){
        session_start();
    }
    $staff = null;
    if(!empty($_SESSION['staff_name'])){
        $staff = ['staff_id' => $_SESSION['staff_id'],
                  'staff_name' => $_SESSION['staff_name']];
    } else {
        header('Location: /staff/login');
        exit();
    }
?>