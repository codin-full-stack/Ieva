<?php
$menuJson = file_get_contents("menu.json");

$menuArray = json_decode($menuJson, true);
$menuArray = $menuArray["menu"]["items"];

// var_dump($menuArray);

foreach($menuArray as $key => $value){
   // var_dump($value);
   if(! empty($value)) {
       ?>
           <a href="<?php echo $value["id"] ." "; ?>">
               <?php
               if(! empty($value["label"])){
               echo $value["label"] ." ";
               } else {
                //    echo "empty";
                echo $value["id"];
               } ?>
           </a>
       <?php
   }
}
?>




<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_topnav  PAKIESTI MENIU??? -->