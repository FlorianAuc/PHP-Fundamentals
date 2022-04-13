

<?php
//exercice 1
$pronouns = array ('I ', 'You ', 'He/She ','We ', 'You ', 'They ');
foreach($pronouns as $pronouns){
    if($pronouns == 'He/She '){
        echo $pronouns. 'codes<br>';
    }else{
        echo $pronouns. 'code<br>';
    }
}

?>
<br>
<?php
//exercice 2
$number = 1;

while($number <= 120){
    echo $number. ", ";

    $number ++;
}
echo "<br> <br>";

for($number = 1;$number <= 120; $number++)
echo $number. ", ";

?>


<?php
//exercice 3
echo "<br> <br>";
$names = array("alex", "ali", "amoryne", "anais", "axel", "chris", "elena", "fidelys", "florian", "jason", "julie", "kevin", "loic", "nicolas", "philippe", "pierre", "sarah" );

foreach($names as $names){
    echo ucfirst($names). " ";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pays</title>
</head>
<body>
<br> <br>
<label for="pays">Select your countries: </label>


<?php
echo '<br> <br>';
//exercice 4
$pays = array ('Belgique', 'France', 'Turquie', 'Espane', 'Allemagne', 'Italie','Irlande','Malte','Pays-Bas','Qatar');


foreach ($pays as $pays) {
    print ($pays);
    echo "<br />";
    print " ";
    
}


?>

<select name="pays" id="">
    <option value="">Choose an option</option>
    <option value="">
        <?php
        //exercice 5
        $Pays = array('BE' => 'Belgique', 'FR' => 'France', 'TR' => 'Turquie', 'ES' => 'Espagne', 'GE' => 'Allemagne', 'IT' => 'Italie', 'IE' => 'Irlande', 'MT' => 'Malte', 'NL' => 'Pays-Bas', 'QA' => 'Qatar');

        foreach($Pays as $key => $value){
            print_r($Pays);
            echo "<option value = '$key'>$value</option>";
            print ' ';
        }
        ?>
    </option>
</select>

</body>
</html>