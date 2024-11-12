<?php
$subject = $_REQUEST['subject'];
$status = $_REQUEST['status'];
$req_list = $_REQUEST;
?>

<h1>
    <?="pengirim : $subject";?>
</h1><br>
<h1>
    <?="status : $status";?>
</h1><br>
<h1>
    <?php var_dump($req_list);?>
</h1>