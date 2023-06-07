<?php 
// phpinfo();
$mavariable ="bonjour"; // pour creer une variable on utilise $ ensuite camelCase comme en js 
// le typage est dynamique pour les variables pour les variables sans possibliténde typer celle ci (contrairement à ts)
echo $mavariable; // affichage
var_dump($mavariable); // savoir les details de la variable  

//boucle comme javascript aussi 
for ($i=0; $i <10; $i++){
    echo "<p>bloup</p>"; // 1 methode 
    ?> <p>bloup</p>
    <?php // 2eme methode 
}

if($mavariable === 'bonjour'){
    echo "<p>oui bonjour</p>";

} // les conditions en php sont les memes qu'en js 

// first("bonjour"); fausse parce qu'on a intialiser le type de parametre est integer donc c'est pas le bon type de données. 
function first(int $param):void{

}
// concatination se fait avec . au debut et poin à la fin 



