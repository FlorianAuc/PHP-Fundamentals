<?php
function capitalize($word)
{
    return ucfirst($word);
}

echo capitalize('florian');
echo '<br>';
echo date('Y');
echo '<br>';
echo date('d/m/y - h:i:s');

//function sum
function sum($a, $b)
{
    //The gettype() function returns the type of a variable. (integer for the number)
    if (gettype($a) == "integer" and gettype($b) == "integer") {
        return $a + $b;
    } else {
        echo "Error: argument is not a number.";
    }
}
echo '<br>';
echo sum(2, 5);

//Acronym

function acronym($string)
{
    $texte = 'In code we trust!';
    $letters = array();
    //explode() retourne un tableau de chaînes de caractères, chacune d'elle étant une sous-chaîne du paramètre $string extraite en utilisant le séparateur
    $words = explode(" ", $string);

    foreach ($words as $words) {
        //Retourne le segment de string défini par offset et length.
        $words = (substr($words, 0, 1));
        array_push($letters, $words);
    }
    //strtoupper() retourne $letters, après avoir converti tous les caractères alphabétiques en majuscules.
    $shorttext = strtoupper(implode($letters));
    return $shorttext;

}
echo '<br>';
echo acronym("In code we trust!");

//function that replaces the letters "a" and "e" with "æ".

function letter($a)
{
    $a = array("caecotrophie", "chaenichthys", "microsphaera", "sphaerotheca");
}

$words = "caecotrophie chaenichthys microsphaera sphaerotheca";
//str_replace rechercher et remplacer ae par æ dans m'as variable words
$words = str_replace("ae", "æ", $words);
echo '<br>';
echo $words;

//Feedback
/*function feedback($message, $type = "info")
{

}*/


//random words
function randomOne($length = 5) {
    $length = rand(1, 5);
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $length);
}

function randomTwo($length = 7) {
    $length = rand(7, 15);
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $length);
}
?>
<h1>Generate two words: </h1>
<form method="get" action="function.php">
    <p><?php echo randomOne(); ?></p>
    <p><?php echo randomTwo(); ?></p>
    <input type="submit" name="submit" value="Generate">
</form>

<?php
//De-capitalize the string 
echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!")
?>

<?php
//maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume 
function calculate_cone_volume($r, $h){
    $volume = $r * $r * 3.14 * $h * (1/3);  
    echo '<br> <br>';
    echo "The volume of the cone is $volume cm<sup>3</sup>";
}
calculate_cone_volume(6, 111);



/* Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  */
?>
