<?php
include('../config/database.php');
//GET DATA
    $f_name = $_POST ['fname'];
    $l_name = $_POST ['lname'];
    $e_mail = $_POST ['email'];
    $m_phone = $_POST ['mphone'];
    $p_sswd = $_POST ['passwd'];
//Query to insert into SQL
    $sql = "Insert into users (firstname, lastname, email, password, mobile_phone) values ( '$f_name', '$l_name', '$e_mail', '$p_sswd', '$m_phone')";
    
    //EXECUTE QUERY
    pg_query($sql);
?>