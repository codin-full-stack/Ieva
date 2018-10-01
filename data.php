<?php

// // MySql= įveda naujus vartotojus į anketą, jie automatiškai nueina į duomenų bazę
// var_dump($_POST);



$sql = "SELECT email FROM users WHERE email = '" . $_POST['email'] . "'" ;
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
//          ar jau toks email yra
   if (! empty($row)) {
       echo "Error! Toks email egzistuoja";
   } else {


// privalomi laukeliai
if (! empty($_POST['firstname']) and $_POST['email']!='' and $_POST['pass']!=''){

    if ($_POST['pass'] == $_POST['pass_con']){ 
        $_POST['pass'] = md5($_POST['pass']);

                
        $sql = "INSERT INTO users (`first_name`, `last_name`, `age`, `gender`, `city`, `email`, `password`, `phone`) 
        VALUES ('" . $_POST['firstname'] . "' , '" . $_POST['lastname'] . "' , '" . $_POST['age'] . "' , '" . $_POST['gender'] . "' , '" . $_POST['city'] . "' , '" . $_POST['email'] . "' , '" . $_POST['pass'] . "' , '" . $_POST['tel'] . "')";
            
        // var_dump($con);
        // exit;
    // užklausos įvykdymas
        if(mysqli_query($con, $sql)){
            echo "Sėkminga registracija";
        } else {
            echo "Klaida" . mysqli_error($con);
        }
    }
} else {
//     echo 'Fill the fields!';
       echo 'Užpildyk laukelius!';
}
   }


