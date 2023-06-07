<style >
    section{
     display:flex;
     flex-direction: row;
     justify-content: space-between;
    }
    section article {
    padding: 10px;
    box-shadow: 2px 2px 5px gray;
    margin: 10px;
    transition: all 0.3s;
}
section article:hover {
    box-shadow:  5px 5px 10px gray;
}

.folder {
    background-color: rgba(255, 0, 0, 0.1);
}
</style>


<?php
// scandir pour afficher les elements dans un ficher precise,  "." il nous donne les fichers de notre dossier actuel  
// il nous  donne le resultat en tableau 
$dir = "../";
$res = scandir($dir);
echo'<pre>';
print_r($res);
echo'</pre>';

echo "<section>";
foreach ($res as $value) {
    $classname = "";
    if(is_dir($dir.$value)) {
        $classname = "folder";
    }
    if($value != "." && $value != "..") {
        echo "<article class=\"{$classname}\">{$value}</article>";
    }
}
echo "</section>";
// pou emttre une classe     echo '<article class=\"{$classname}"\>{$value}</article>';
?>