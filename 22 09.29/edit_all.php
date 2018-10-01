<!-- VISOS informacijos koregavimo mygtukai  -->

<?php include 'header.php'; ?>

<?php
  
    if(isset($_SESSION['id'])) {

        // $name=$_SESSION['firstname'].$_SESSION['last name'];

        $sql = "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "' LIMIT 1";
        
        if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
                
                $row = mysqli_fetch_assoc($result);                        
                ?>
                <form action="" method="post" >
                    
                    Vardas: <br>
                    <input type="text" name="first_name" value="<?php echo $row['first_name'] ?>" ><br>
                    <br><br>


                    Pavardė: <br>
                    <input type="text" name="last name" value="<?php echo $row['last_name'] ?>"><br>
                    <br><br>

                    Amžius: <br>
                    <input type="number" name="age" value="<?php echo $row['age'] ?>"><br>
                    <br><br>

                    Miestas:<br>
                    <select id="city" name="city" required>
                        <option value="">Pasirinkti miesta</option>
                        <?php foreach (cities() as $city) { ?>
                         <!-- jei miestas sutampa su DB esanciu miestu pridedam prie <option> attribute  "selected" -->
                            <option value="<?php echo $city; ?>" <?php echo ($row['city'] == $city ? 'selected' : ''); ?>>
                            <!-- gali ilgas variantas būti -->
                                <?php echo $city; ?>
                            </option>

                           <?php
                                /**
                                 * 
                                 * 
                                 * 
                                 * 
                                 * Identiskas kodas virsutiniam kodui
                                 * 
                                 *  <?php if($row['city'] == $city) { ?>
                                 *       <option value="<?php echo $city; ?>" selected>
                                 *           <?php echo $city; ?>
                                 *      </option>
                                 *  <?php } else { ?>
                                 *       <option value="<?php echo $city; ?>">
                                 *           <?php echo $city; ?>
                                 *       </option>
                                 *   <?php } ?>
                                 * 
                                 * Dokumentacija: http://php.net/manual/en/control-structures.if.php
                                 * 
                                 * 
                                 *              
                                 *              - row, tai ką gauname iš DB 
                                 *              -tai yra sąlyga---------------------------------------------visa šią eilutę, galima rašyti prie vardo, pavardės ir t.t
                                 * <?php echo (! empty($row['first_name']) ? $row['first_name'] : ''); ?>
                                 * 
                                 */
                           ?>

                        <?php } ?>
                    </select>


                    <br><br>
                   
                    El paštas: <br>
                    <input type="email" name="email" value="<?php echo $row['email'] ?>"><br>
                    <br><br>
                    

                    Telefonas:
                    <br>
                    <input type="text" name="phone" value="<?php echo $row['phone'] ?>"<br> 

                    <br><br>

    
                    <button type= "submit" value="OK! Atnaujinta">Patvirtinti</button>

                    <br><br>

                  
                </form>
                <?php
             
                
                // Free result set
                mysqli_free_result($result);
                
                

            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

     
    } else {
        echo 'Error';
    }

// INFORMACJOS KOREGAVIMAS
if(! empty($_POST)) {
    $sql = "UPDATE users SET first_name = '".$_POST['first_name']."', last_name = '".$_POST['last_name']."', age = '".$_POST['age']."', city = '".$_POST['city']."', email = '".$_POST['email']."', phone = '".$_POST['phone']."' WHERE id = '". $_SESSION['id']."'";

    if (mysqli_query($con, $sql)) {
        echo "OK! Informacija atnaujinta";
    } else {
        echo "ERROR! klaida, informacija neatnaujinta: " . $con->error;
    }
}

?>


</div>


<br><br><a href='profile.php'>Grįžti į, Mano profilį</a><br>

<br><br>
<br><br>

<?php include 'footer.php'; ?>
  