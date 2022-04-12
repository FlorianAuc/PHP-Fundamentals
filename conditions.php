<?php
//1.1. Read, then fix this code
$room_is_filthy = true;

if (!$room_is_filthy) {
    echo "Yuk, Room is dirty : let's clean it up !";
    // cleanup_room();
    echo "<br>Room is now clean!";
    $room_is_filthy = false;
} else {
    echo "<br>Nothing to do, room is neat.";
}
// / 1.2 Clean your room Exercise, improved
// Create the array of possible states
$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[4];

if ($room_filthiness == $possible_states[0]) {
    echo "<br>Yuk, your room is health hazard! let's clean it up!";
} else if ($room_filthiness == $possible_states[1]) {
    echo "<br>Yuk, your room is filthy! let's clean it up!";
} else if ($room_filthiness == $possible_states[2]) {
    echo "<br>Yuk, your room is dirty! let's clean it up!";
} else if ($room_filthiness == $possible_states[3]) {
    echo "<br>Nothing to do, room is neat";
} else {
    echo "<br>Nothing to do, room is immaculte.";
}

// 2. "Different greetings according to time" Exercise
date_default_timezone_set('Europe/Belgium');
$now = date('H');
echo "<br>" . date('h:i:sa');
// Test the value of $now and display the right message according to the specifications.
if ($now >= "5" and $now <= "9") {
    echo " Good morning! ";}
if ($now >= "9" and $now <= "12") {
    echo " Good day! ";}
if ($now >= "12" and $now <= "16") {
    echo " Good afternoon! ";}
if ($now >= "16" and $now <= "21") {
    echo " Good evening! ";}
if ($now >= "21" and $now < "5") {
    echo " Good night! ";}
?>



<?php
//3. "Different greetings according to age" Exercise
if (isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['english'])) {
    if ($_GET['english'] == "yes") {
        echo "<br>Hello ";
    } else {
        echo "<br>Aloha ";
    }

    if ($_GET['age'] < 12) {
        if ($_GET['gender'] == "male") {
            echo " Mister kiddo!";
        }

        if ($_GET['gender'] == "female") {
            echo " Miss kiddo!";
        }

    }
    if ($_GET['age'] >= 12 and $_GET['age'] < 18) {
        if ($_GET['gender'] == "male") {
            echo " Mister Teenager !";
        }

        if ($_GET['gender'] == "female") {
            echo " Miss Teenager !";
        }

    }
    if ($_GET['age'] >= 18 and $_GET['age'] <= 115) {
        if ($_GET['gender'] == "male") {
            echo " Mister Adult !";
        }

        if ($_GET['gender'] == "female") {
            echo " Miss Adult !";
        }

    }
    if ($_GET['age'] > 115) {
        if ($_GET['gender'] == "male") {
            echo "Wow Mister ! Still alive ? Are you a robot, like me ? Can I hug you ?";
        }

        if ($_GET['gender'] == "female") {
            echo "Wow Miss ! Still alive ? Are you a robot, like me ? Can I hug you ?";
        }

    }
}

?>
<br/> <br/>
<form method="get" action="conditions.php">
    <label for="age">What's your age
        <input type="number" name="age">
    </label>

    <br/>

    You are Man or Female ?

    <label for="gender">Man
    <input type="radio" name="gender" value="male" checked>
    </label>

    <label for="gender">Female
        <input type="radio" name="gender" value="female">
    </label>

    <br/>

    Do you speak english ?

    <label for="gender">yes
        <input type="radio" name="english" value="yes" checked>
    </label>

    <label for="gender">no
        <input type="radio" name="english" value="no">
    </label>

    <br/>

    <input type="submit" name="submit" value="Greet me now">
</form>
<?php
//6., 7. The Girl Soccer team
$soccer_text = "Sorry you don't fit the criteria";
if (isset($_GET['soccer_age'])) {
    if ($_GET['soccer_age'] > 20 and $_GET['soccer_age'] < 41 and $_GET['soccer_gender'] == "female") {
        $soccer_text = "welcome to the team !";
    }
}
?>
<h1>Soccer girl team</h1>

<form method="get" action="conditions.php">
    <label for="soccer_name">What's your name
        <input type="text" name="soccer_name" placeholder = " Enter your name ">
    </label>
    <br> <br>
    <label for="soccer_age">How old are you ?
        <input type="number" name="soccer_age" placeholder = " Enter your age ">
    </label>
    <br> <br>
    <label for="soccer_gender">Male
        <input type="radio" name="soccer_gender" value="male" checked>
    </label>
    <label for="soccer_gender">Female
        <input type="radio" name="soccer_gender" value="female">
    </label>
    <br> <br>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (isset($_GET['soccer_age'])) {
    echo $soccer_text;
}
?>
<h2>Note the student</h2>
<form method = "get" action = "conditions.php">
    <label for="note">What grade does he/she have ?
    <input type="text" name = "note">
    </label>
    <input type="submit" name="submit" value="Greet me now">
</form>
<?php
//8. "School sucks!" Exercise
if (isset($_GET["note"])) {
    $note = $_GET["note"];
}

if ($note < 4) {
    echo "This work is really bad. What a dumb kid!";
} else if ($note >= 5 and $note <= 9) {
    echo "This is not sufficient. More studying is required.";
} else if ($note == 10) {
    echo "barely enough!";
} else if ($note > 10 and $note <= 14) {
    echo "Not bad!";
} else if ($note > 14 and $note <= 18) {
    echo "Bravo, bravissimo!";
} else if ($note > 18) {
    echo "Too good to be true : confront the cheater!";
}
?>
