<?php
//11. Ternary exercices
$img = $_POST['type'] == "human" ? "human" : ($_POST['type'] == "cat" ? "cat" : "unicorn");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Unicorn</title>
</head>
<body>
    <form action="unicorn.php" method = "post">
        <label for="type">
            <select name="type" id="">
                <option value="human">Human</option>
                <option value="cat">Cat</option>
                <option value="unicorn">Unicorn</option>
            </select>
        </label>
        <input type="submit" value='send'>
    </form>
    <img src="<?php echo $img; ?>.gif" alt="<?php echo $img; ?>" />
</body>
</html>