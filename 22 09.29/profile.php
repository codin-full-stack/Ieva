<?php 
include 'header.php'; 

if(isset($_SESSION['id'])) {
    
    $sql = "SELECT * FROM users WHERE id='" . $_SESSION['id'] . "' LIMIT 1";
    $result = $con->query($sql);

    if($result = mysqli_query($con, $sql)){
        
        if(mysqli_num_rows($result) > 0){
            
            
            echo "<table>";
        
            while($row = mysqli_fetch_assoc($result)){
                
                echo "<tr>";
                    echo "<td>";
                    echo "name: " . $row['first_name'] . "<br>";
                    echo "last name: " . $row['last_name'] . "<br>";
                    // pati prirašiau
                    echo "city: " . $row['city']. "<br>";
                    if(! empty($row['city'])) {
                        echo " " . city($row['city']);
                    }

                    echo "age: " . $row['age'] . "<br>";
                    echo "email: " . $row['email'] . "<br><br>";
                    
                    // nuorodos į kitus psl
                    // echo "<br><br><a href='post_edit.php'>Posto redagavimas</a><br>";

                    echo "<a href='edit_form.php'>Vartotojo slaptažodžio redagavimas</a>
                    <br><br>";
                   
                    echo "<a href='edit_all.php'>Vartotojo duomenų keitimas</a><br>";


                    // echo "<a href='post_delete.php'>Duomenų naikinimas</a><br>";
                    echo "</td>";
                echo "</tr>";
                
                
            }
            echo "</table>";
        
            // Free result set
            mysqli_free_result($result);
            
            

        } else{
            echo "Nerasta įrašų.";
        }
    } else{
        echo "ERROR" . mysqli_error($link);
    }
}



include 'footer.php';
?>
      
















































