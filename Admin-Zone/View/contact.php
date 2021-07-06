<?php include'header.php'; ?>



<section class='ml-3 contact' id='content' style='margin-top:100px'>

    <h2 class='text-center my-4 display-5'>Message from Customers</h2>

    <?php 
$contact =  get_contact_us();
if($contact)
{ 
    while($row = $contact->fetch_assoc())
    {  
    echo "<div class='table-responsive'><table class='my-4 mx-5' style='table-layout:fixed;'><tr><th colspan='2' class='text-center contactor-name' style='font-size: large'>Message From : "
    . $row['name'] . "</th></tr><tr><th>"
    .$row['email']."</th><th >" . $row['phone'] . "</th></tr><tr><td colspan='2' style='width:1400px'>"
    .$row['message']."</td></tr></table></div>";}}?>
</section>

<?php include'footer.php'; ?>