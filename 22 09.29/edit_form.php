<!-- iš edit formos eimane į edit.php, kad galėtumėm koreguoti -->



<!-- SLAPTAZODZIO KOREGAVIMO mygtukai -->


<?php include 'header.php'; ?>

<form action="edit.php" method="post">


    Slaptažodis: <br>
    <input class="input" type="password" name="password"><br>
    <br><br>

    Naujas slaptažodis: <br>
    <input class="input" type="password" name="new_pass"><br>
    <br><br>

    Pakartoti slaptažodį: <br>
    <input class="input" type="password" name="new_pass_con"><br> 
    <br><br>
  
	<button type="submit" class="button">Patvirtinti</button>
    <br><br>
       
	
</form>

<?php include 'footer.php'; ?>
  