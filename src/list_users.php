<?php
require("../config/database.php");
$sql_users="
    Select 
        u.firstname||''||u.lastname as fullname, 
        u.email,
        u.mobile_phone,
        case
            when u.status = true then 'Active' else 'Inactive' END as status,
            u.profile_photo 
            From 
                users u";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1" align = "center">
        <tr>
            <th>Fullname</th>
            <th>E-mail</th>
            <th>Mobile phone</th>
            <th>Status</th>
            <th>Photo</th>
            <th>Options</th>
        </tr>
        <tr>
            <td>Peter loza</td>
            <td>Peter@mail.com</td>
            <td>3001234567</td>
            <td>Active</td>
            <td><img src = "profile_photos\user_default.png.jpg" width="50" alt="User photo"> </td>
            <td>
            <a href = "#"> 
                <img src = "icons/pencil.png" width = "30" alt = "Edit user">
            </a>
            &nbsp;&nbsp;
            <a href = "#">
                <img src = "icons/delete.png" width = "30" alt ="Delete user">
            </a>
            </td>
</tr>
</table>




</body>
</html>