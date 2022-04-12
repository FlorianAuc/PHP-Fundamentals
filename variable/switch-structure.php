
<h2>Note the student</h2>
<form method = "get" action = "switch-structure.php">
    <label for="note">What grade does he/she have ?
    <input type="text" name = "note">
    </label>
    <input type="submit" name="submit" value="Greet me now">
</form>
<?php
//9. The "Switch" structure.
if (isset($_GET['note'])) {
    switch ($_GET['note']) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
            echo 'this work is really bad. What a dumb kid! ';
            break;
        case 5;
        case 6;
        case 7;
        case 8;
        case 9;
            echo 'This is not sufficient. More studying is required. ';
            break;
        case 10;
            echo 'Barely enough! ';
            break;
        case 11;
        case 12;
        case 13;
        case 14;
            echo 'Not bad! ';
            break;
        case 15;
        case 16;
        case 17;
        case 18;
            echo 'Bavo, bravissimo! ';
            break;
        case 19;
        case 20;
            echo 'too good to be true : confront the cheater! ';
            break;
        default:
            echo 'too good to be true : confront the cheater! ';
    }
}

?>