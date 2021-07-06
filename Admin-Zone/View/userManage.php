<?php 
include "header.php";
?>
<section id="content" style="margin-top:100px;">
    <?php include 'flash.php'; ?>
    <h1 class=' m-4'>User Info!!</h1>
    <?php
$users = view_users();
if($users)
{
    ?>
    <div class='table-responsive m-4'>
        <table class='table table-bordered border-dark '>
            <thead style="border:1px solid black; color:white;background-color:#deac46;">
                <tr class="text-center ">
                    <th>Id</th>
                    <th>first Name </th>
                    <th>Last Name </th>
                    <th>Email</th>
                    <th>Phone </th>
                    <th>Address </th>
                    <th>Password</th>
                    <th>Joined Date</th>
                    <th>User Type </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>
                <?php 
            while($row = $users->fetch_assoc())
            {
            echo "<tr>
                <td>". $row["u_id"] .
                    "</td>
                <td>" . $row["u_fname"] .
                    "</td>
                <td>" . $row["u_lname"] .
                    "</td>
                <td>" . $row["u_email"] .
                    "</td>
                <td>" . $row["u_phone"] .
                    "</td>
                <td>" . $row["u_address"] .
                    "</td>
                <td>" . $row["u_password"] .
                    "</td>
                <td>" . $row["u_created_date"] .
                    "</td>
                <td>" . $row["u_type"] .
                    "</td>
                <td class='text-center'><a class='user-edit' href='" . $base_url . 
	"?r=editUser&id=" . $row["u_id"] . 
	"'><i class='fas fa-edit'></i> </a> <a class='user-delete' href='" . $base_url . 
	"?r=deleteUser&id=" . $row["u_id"] . 
	"'><i class='far fa-trash-alt'></i> </a></td>
            </tr>" ;
            }}
            else
        {
        echo "no users found";
        }
        ?>
                <tr height="50">
                    <td colspan='10'>
                        <a class="btn-addUser" href="<?= $base_url ?>?r=addUser">Add Admin</a>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>
</section>

<?php

include "footer.php";

?>