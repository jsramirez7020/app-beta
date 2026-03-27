<?php
include('../config/database.php');
//GET DATA
    $f_name = $_POST ['fname'];
    $l_name = $_POST ['lname'];
    $e_mail = $_POST ['email'];
    $m_phone = $_POST ['mphone'];
    $p_sswd = $_POST ['passwd'];
    $enc_pass = md5($p_sswd);

//Query to insert into SQL
    $sql = "Insert into users (firstname, lastname, email, mobile_phone, password) 
    values ( '$f_name', '$l_name', '$e_mail', '$m_phone', '$enc_pass')";
    
    //EXECUTE QUERY
    //pg_query($sql);
    //email 
$check_email = "SELECT email FROM users WHERE email = '$e_mail'";
$res_email = pg_query($local_conn, $check_email);

if (pg_num_rows($res_email) > 0) {
    echo "Error: El correo electrónico '$e_mail' ya está registrado. Por favor, use uno diferente.\n";
    exit();


$res_local = pg_query($local_conn, $sql); 
}
?>