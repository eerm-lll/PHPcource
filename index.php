<?php

// 3 задание
echo "I like pizza<br>";

// 4 задание
// однострочный комментарий

/*
многострочный
комментарий
*/

echo "I love PHP<br>";

// 5 задание
$name = "Alex";
$age = 20;

echo "Hello {$name}<br>";
echo "You are {$age} years old<br>";

// 6 задание
$x = 10;
$y = 5;
$sum = $x + $y;

echo "Sum: {$sum}<br>";

?>
<hr>

<form action="index.php" method="post">
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <input type="submit" value="Send">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    echo "Username: {$username}<br>";
}
?>

<?php
// 8 задание
$number = -5.75;
echo abs($number) . "<br>";
echo round($number) . "<br>";

// 9 задание
?>

<form action="index.php" method="post">
    <label>Radius:</label><br>
    <input type="text" name="radius"><br>
    <input type="submit" value="Calculate">
</form>

<?php
if (isset($_POST['radius'])) {
    $r = $_POST['radius'];
    echo "Circumference: " . round(2 * pi() * $r, 2) . "<br>";
    echo "Area: " . round(pi() * $r * $r, 2) . "<br>";
}
?>
<?php
// 10–11
$age = 25;

if ($age >= 18 && $age < 100) {
    echo "You may enter<br>";
} else {
    echo "Access denied<br>";
}

// 12
$grade = "B";

switch ($grade) {
    case "A": echo "Great"; break;
    case "B": echo "Good"; break;
    default: echo "Invalid grade";
}
?>
<?php
// for
for ($i = 1; $i <= 5; $i++) {
    echo $i . "<br>";
}

// while
$counter = 0;
while ($counter < 3) {
    echo "Counter: {$counter}<br>";
    $counter++;
}
?>
<?php
// 16
$foods = ["Pizza", "Burger", "Taco"];
foreach ($foods as $food) {
    echo $food . "<br>";
}

// 17–18
$capitals = [
    "USA" => "Washington",
    "Japan" => "Tokyo"
];

echo $capitals["USA"];
?>
<form method="post">
    <input type="radio" name="card" value="Visa">Visa
    <input type="radio" name="card" value="MasterCard">MasterCard
    <br>
    <input type="checkbox" name="food[]" value="Pizza">Pizza
    <input type="checkbox" name="food[]" value="Burger">Burger
    <br>
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['card'])) {
        echo $_POST['card'] . "<br>";
    }

    if (isset($_POST['food'])) {
        foreach ($_POST['food'] as $f) {
            echo $f . "<br>";
        }
    }
}
?>
<?php
function greet($name) {
    return "Hello {$name}";
}

echo greet("Alex");

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<?php
session_start();

// cookie
setcookie("food", "pizza", time()+3600);

// session
$_SESSION['user'] = "Alex";

// password
$hash = password_hash("1234", PASSWORD_DEFAULT);
echo password_verify("1234", $hash);
?>
