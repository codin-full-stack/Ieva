<!-- SLAPTAZODZIO KOREGAVIMAS  -->

<?php include "header.php"?>
    
<?php
// var_dump($_POST);

if (!empty($_POST['password']) && ($_POST['new_pass']!=="") && ($_POST['new_pass_con']!=="") ) {     
        
    if ($_POST['new_pass'] == $_POST['new_pass_con']){  
                            
        $userSql = "SELECT id,password FROM users WHERE id = '" . $_SESSION['id'] . "' LIMIT 1";
        
       // execute MYSQL query
        $result = mysqli_query($con, $userSql);

        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_assoc($result); // ateina duomenu masyvas is DB
            $oldPassword = md5($_POST['password']);

            // patikrinam ar passwordai sutampa su isaugotu ir postinamu
            if($row['password'] == $oldPassword) {
                //atnaujinam info
                $newPassword = md5($_POST['new_pass']);
                
                $updateSql = "UPDATE `users` SET `password`='" . $newPassword . "' WHERE id='" . $_SESSION['id'] . "'";

                if(mysqli_query($con, $updateSql)) {
                    echo 'Slaptažodis pakeistas';
                } else {
                    echo 'Error! Įvyko klaida, duomenys neatsinaujino';
                }                 
            } else {
                echo 'Error! Senas password įvestas blogai';
            }

           
        } else {
            echo "Error! Toks vartotojas neegzistuoja.";
        }
    
    } else {
        echo "Error! Password nesutampa";
    }

} else {
    echo "Nesuvesti slaptažodžiai";
}

echo "<br><br><a href='profile.php'>Pagrindinis puslapis</a><br>";

?>
  </div>
<?php
include "footer.php";
?>




