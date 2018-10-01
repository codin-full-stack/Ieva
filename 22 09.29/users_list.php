<?php


include 'header.php'; 

// MySqL, atvaizduoja duomenis 

$sql = "SELECT * FROM  users";
// padaro masyva???
$result=$con->query($sql);
// užklausos įvykdymas
if($result = mysqli_query($con, $sql)){
    // užklausos grąžinimas
    // grąţina iš duomenų bazės ištrauktų eilučių skaičių pagal užklausą
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
                echo "<th>id</th>";
                echo "<th>vardas</th>";
                echo "<th>pavarde</th>";
                echo "<th>amzius</th>";
                echo "<th>lytis</th>";
                echo "<th>miestas</th>";
                echo "<th>el_pastas</th>";
                echo "<th>slaptazodis</th>";
                echo "<th>tel_numeris</th>";
            echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            // grąžinama viena EINAMOJI eilutė iš viso eilučių sąrašo
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                
            echo "</tr>";
        }

        echo "</tbody>";
        
        echo "</table>"; 
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR $sql. " . mysqli_error($con);
}

include 'footer.php'; 

?>
