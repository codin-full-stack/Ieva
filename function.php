<?php

// sukuria atskira failą, kiekvieno žmnogaus (create jsosn file) FUNKCIONALUMAS

function createFileName($data) {

    // $datafile = 'json' . DIRECTORY_SEPARATOR . $data['email'] . '.json'; pirma failą kūrė pagal firstaname and lastname, dabar turi sukurti pagal email ir slaptažodi
    $datafile = 'json' . DIRECTORY_SEPARATOR . $data['email'] . '.json'; 
    // $datafile = 'json' . DIRECTORY_SEPARATOR . $data['firstname'], ['lastname']. '.json'; 
    return $datafile;
}

function arrayToJsonFile($data) {    
    $myjson = json_encode ($data, JSON_PRETTY_PRINT);
    var_dump($data);
    // saugo duomenis į atskirus failus.
    $datafile = createFileName($data);

    file_put_contents($datafile, $myjson); //FILE_APPEND - tęsia failą, o ne užrašo jau ant buvusio.
}

// KODAS, originalus..........................
// iš kurio buvo sukurta funkcija

// A  $myjson = json_encode ($_POST, JSON_PRETTY_PRINT);
// B  var_dump($_POST);
// //saugo duomenis į vieną failą
// C  $datafile = 'form_data.json'; 

// // return

// 1 d. $datafile = 'json' . DIRECTORY_SEPARATOR . $_POST['firstname'] . "_" . $_POST['lastname'] . '.json'; // saugo duomenis į atskirus failus.

// D  file_put_contents($datafile, $myjson); //FILE_APPEND - tęsia failą, o ne užrašo jau ant buvusio.)

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// // parodo, kokie buvo įvesti vartotojai!!!!!!!!!!!!!!!!!!!!!!!!!!!

// function showAllUsers($data){
//     $arrayDataJson = json_decode($strDataJson, true);

//     foreach($arrayDataJson as $key => $value){
//         echo '<br>';
//         if (is_array($value)){
//             foreach($value as $key1 => $value1){
//                 echo '<br>';
//                 if (is_array($value1)){
//                     foreach($value1 as $key2 => $value2){
//                         echo ' ' .$value2;
//                     }
//                 } else {
//                     echo $value1;
//                 }
//             }
//         } else {
//             echo $value;
//         }
//     } 

//     return $file;

// $arrayDataJson = json_decode($strDataJson, true);
// }
  



//KODAS, originalus.................................

// $strDataJson = file_get_contents("jsondata.json");
// // naudoti iš jau padarytos funkcijos dali
// $arrayDataJson = json_decode($strDataJson, true);

// foreach($arrayDataJson as $key => $value){
//     echo '<br>';
//     if (is_array($value)){
//         foreach($value as $key1 => $value1){
//             echo '<br>';
//             if (is_array($value1)){
//                 foreach($value1 as $key2 => $value2){
//                     echo ' ' .$value2;
//                 }
//             } else {
//                 echo $value1;
//             }
//         }
//     } else {
//         echo $value;
//     }
// }   
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// prisijungimas su vardu, el paštu ir slaptažodžiu

//   reikia patikrinti ar geras, ir vietoj post turiu sudelioti tik vardas pastas ir slaopta=odis NAMUOSE PABAIGTI 09.18

// login($vardas.$pastas,$slapt){
        // if (($_POST['firstname']!==$name) && ($_POST['email']!==$surname) && ($_POST['password']!==$pass)){

//   {

    // var_dump ($_POST);

    // if(! empty($_POST)) {
    
    //     $filename = filePath($_POST['email']); 
    //     //passimti filename pilna su DIR pagal email
    
    //     if(file_exists($filename)){
    //         echo "Egzistuoja<br>";
    
    //         // prie funkciju galima prideti///////galima deti kiekvienma psl, kuriame bus galima atvazduotiu prisijungusi zmogu
    //         // $json = file_get_contents($filename);
    //         // $masJson = json_decode($json, true);  
    
    //         $json = file_get_contents($filename);
    //         $masJson = json_decode($json, true);   
    
    //         if (md5($_POST['password']) == $masJson['pass']){
    
    //             $_SESSION['email'] = $masJson['email'];
    
    //             echo "<br>Prisijungimas pavyko<br>";
    
    //         } else {
    //             echo "Neteisinga";
    //         }
            
    //     } else {
    //         echo "Vartotojas neegzistuoja";
    //     }  
    // }
    
    
    
    // include "footer.php";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    // LOGIN funkcija, FUNKCIONALUMAS
    function filePath($mail){
        $path=('json'.DIRECTORY_SEPARATOR.$mail.'.json');
            return $path;
    }

















  
    
// KODAS originalus..............................................................................

// if(! empty($_POST)) {

//     $filename = filePath($_POST['email']); 
//     //passimti filename pilna su DIR pagal email

//     if(file_exists($filename)){
//         echo "Egzistuoja<br>";

//         // prie funkciju galima prideti///////galima deti kiekvienma psl, kuriame bus galima atvazduotiu prisijungusi zmogu
//         // $json = file_get_contents($filename);
//         // $masJson = json_decode($json, true);  

//         $json = file_get_contents($filename);
//         $masJson = json_decode($json, true);   

//         if (md5($_POST['password']) == $masJson['pass']){

//             $_SESSION['email'] = $masJson['email'];

//             echo "<br>Prisijungimas pavyko<br>"; 
//             echo 'labas'. $_SESSION['username'];

//         } else {
//             echo "Neteisinga";
//         }
        
//     } else {
//         echo "Vartotojas neegzistuoja";
//     }  
// }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// profile funckcija


// function is edit_all_2

//@TODO: remove this func
function city ($key) {
    // var_dump($key);
}

// 'Vilnius','Kaunas','Klaipeda','Siauliai','Panevezys','Plunge'
function cities() {
    $cities = [
        'Vilnius',
        'Kaunas',
        'Klaipeda',
        'Siauliai',
        'Panevezys',
        'Plunge',
    ];

    return $cities;
}
