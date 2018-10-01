<link rel="stylesheet"  href="style.css">

<form action="" method="POST">
    <br><br>  
    Vardas:
    <br> 
    <input type="text", select name="firstname" placeholder="Your name..." Your name...="">
        
    <br><br>

    Pavardė:
    <br>
    <input type="text" name="lastname"  placeholder="Your last name..." Your last name...="">
    <br><br>

    Amžius: 
    <br>
    <input type="text" name="age" placeholder="Your age" Your age="">

  
    <br><br>

    Lytis: 
    <br>
    <input type="radio" name="gender" value="Moteris" checked>moteris
    <input type="radio" name="gender" value="Vyras"  checked> vyras

    <br><br>

    Miestas: 
    <br>

    <select name='city'>
        <option selected="selected"> Pasirinkti</option>

        <?php
        // pasiulymai  masyvas  
            //   key     value
            $citiesArray = [
                'vln'   => 'Vilnius',
                'kau'   => 'Kaunas',
                'klai'  => 'Klaipėda',
                'siau'  => 'Šiauliai',
                'pan'   => 'Panevėžys',
                'pln'   => 'Plungė',
            ];
            // kodas, kad isvestu ir duotu pasirinkima miestu     ciklas <option value="<?php echo $key; ?>"> 
        ?>
        
        <?php foreach($citiesArray as $key => $value){ ?>
            <option value="<?php echo $value; ?>">
                <?php echo $value; ?>
            </option>
        <?php } ?>
    </select> 
    <br><br>

    El paštas:
    <br>
    <input type="text" name="email"  placeholder="Your email" Your emai="">
    <br><br>

    Slaptažodis:
    <br>
    <input type="password" name="pass"  placeholder="Your password" Your password="">
    <br><br>

    Pakartoti slaptažodi:
    <br>
    <input type="password" name="pass_con"  placeholder="Your password" Your password="">
    <br><br>


    Telefonas:
    <br>
    <input type="text" name="tel" placeholder="Your tel" Your tel=""> 

    <br><br>

    <button type= "submit" value="Patvirtinti">Patvirtinti</button>

    <br><br>

    <input type="reset">
    <br><br>

<!-- <button type= "back" value="Grįžti į pradžią">Grįžti į pradžią</button>  --> 

    <!-- <input class="mygtukas" style="border: none" type="button" onclick="location.href = 'index.php';" value="Back" /> -->
            
</form>