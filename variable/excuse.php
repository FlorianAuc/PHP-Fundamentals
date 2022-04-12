<form method="get" action="">
	<label for="age"></label>
	Name : <input type="" name="Name" placeholder = " Enter child's name ">
    <br>
    Gender: Girl <input type="radio" name="sexe" value="F">
    Boy <input type="radio" name="sexe" value="M">
    <br>
    Name of the teacher : <input type="" name="teacher" placeholder = " Enter teacher's name ">
    <br>
    Reason of absence :
    <br>
    Diseases <input type="radio" name="absent" value="dis">
    <br>
    Deceased family member<input type="radio" name="absent" value="death">
    <br>
    Dentist <input type="radio" name="absent" value="dent">
    <br>
    any other excuse of your choice <input type="radio" name="absent" value="any">
    <br>
    <br>
	<input type="submit" name="submit" value="Greet me now">
</form>


<?php

$teach = $_GET["teacher"];
$nom = $_GET["Name"];

if (isset($_GET["sexe"]) and ($_GET["sexe"])) {
    // Form processing
    if ($_GET["sexe"] == "M" and $_GET["absent"] == "dis") {
        echo 'Sorry, ' . $teach . ' my son ' . $nom . ' was sick yesterday';

    } else if ($_GET["sexe"] == "M" and $_GET["absent"] == "death") {
        echo 'Sorry, dear ' . $teach . ' my son ' . $nom . ' had a death in this family yesterday';

    } else if ($_GET["sexe"] == "M" and $_GET["absent"] == "dent") {
        echo 'Sorry, dear ' . $teach . ' my son ' . $nom . ' had a dentist appointment';

    } else if ($_GET["sexe"] == "M" and $_GET["absent"] == "any") {
        echo 'Sorry, dear ' . $teach . ' my dauchter ' . $nom . ' had a problem waking up';

    } else if ($_GET["sexe"] == "F" and $_GET["absent"] == "dis") {
        echo 'Sorry, dear ' . $teach . ' my dauchter ' . $nom . ' was sick yesterday';

    } else if ($_GET["sexe"] == "F" and $_GET["absent"] == "death") {
        echo 'Sorry, dear ' . $teach . ' my daucher ' . $nom . ' had a death in this family yesterday';

    } else if ($_GET["sexe"] == "F" and $_GET["absent"] == "dent") {
        echo 'Sorry, dear ' . $teach . ' my son ' . $nom . ' had a dentist appointment';

    } else if ($_GET["sexe"] == "F" and $_GET["absent"] == "any") {
        echo 'Sorry, dear ' . $teach . ' my dauchter ' . $nom . ' had a problem waking up';

    }

}

?>