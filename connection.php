<?php
ob_start();
if (!isset($_SESSION)) {
    session_start();
}


class connect
{
    public function connection()
    {
        $con = mysqli_connect("localhost", "admin", "090327298");
        if ($con) {
            mysqli_select_db($con, "finaldb");
            mysqli_query($con, "SET NAMES UTF8");
            return $con;
        } else {
            echo 'Kết nối database thất bại';
            exit;
        }
    }
}
