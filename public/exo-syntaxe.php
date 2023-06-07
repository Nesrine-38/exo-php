<?php

function repeatName(string $name, int $count){
    for($i=0;$i <= $count; $i ++){
        for($j=0; $j < strlen($name);$j++){ // strlen === string length 
            echo "<span>{$name[$j]}</span>";
           
        }
        echo "</p>";
    }
}
repeatName("nesrine",60);
?>
