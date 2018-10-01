<?php include 'header.php'; ?>
<div class="lentele">       
<?php
    if(empty($_POST)) {
        include 'form.php';
    } else {
        include 'data.php';
    }

?>
</div>
<?php include 'footer.php'; ?>