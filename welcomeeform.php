<?php
// Start PHP

// Initialize variables
$name = $language = $color = $theme = "";
$visit_count = 0;

// Check if cookies already exist
if(isset($_COOKIE['visit_count'])) {
    $visit_count = $_COOKIE['visit_count'] + 1;
} else {
    $visit_count = 1;
}

// Set visit count cookie
setcookie("visit_count", $visit_count, time() + (86400 * 30));

// Get stored cookies
if(isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    $language = $_COOKIE['language'];
    $color = $_COOKIE['color'];
    $theme = $_COOKIE['theme'];
}

// Handle form submission
if(isset($_POST['setcookie'])) {
    $name = $_POST['name'];
    $language = $_POST['language'];
    $color = $_POST['color'];
    $theme = $_POST['theme'];

    setcookie("name", $name, time() + (86400 * 30));
    setcookie("language", $language, time() + (86400 * 30));
    setcookie("color", $color, time() + (86400 * 30));
    setcookie("theme", $theme, time() + (86400 * 30));

    header("Location: index.php");
}

// Destroy cookies
if(isset($_POST['destroy'])) {
    setcookie("name", "", time() - 3600);
    setcookie("language", "", time() - 3600);
    setcookie("color", "", time() - 3600);
    setcookie("theme", "", time() - 3600);
    setcookie("visit_count", "", time() - 3600);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Form</title>
</head>

<body style="background-color: <?php echo $color ? $color : '#ffffff'; ?>;">

<h2>Cookie Form</h2>

<form method="post">
    Name: <input type="text" name="name" required value="<?php echo $name; ?>"><br><br>

    Language:
    <select name="language">
        <option>English</option>
        <option>Hindi</option>
        <option>French</option>
    </select><br><br>

    Color:
    <select name="color">
        <option value="lightblue">Light Blue</option>
        <option value="lightgreen">Light Green</option>
        <option value="lightpink">Light Pink</option>
    </select><br><br>

    Theme:
    <select name="theme">
        <option>Light</option>
        <option>Dark</option>
    </select><br><br>

    <button type="submit" name="setcookie">Set Cookie</button>
    <button type="submit" name="destroy">Destroy Cookie</button>
</form>

<hr>

<?php if($name): ?>
    <h3>Hello <?php echo $name; ?> 👋</h3>
    <p>Your favorite color is <b><?php echo $color; ?></b></p>
    <p>Your preferred language is <b><?php echo $language; ?></b></p>
    <p>Your theme is <b><?php echo $theme; ?></b></p>
    <p>You have visited this page <b><?php echo $visit_count; ?></b> times</p>

    <p>Custom Message: Welcome back! Your personalized settings are applied.</p>
<?php else: ?>
    <p>No cookie set yet. Please fill the form.</p>
<?php endif; ?>

</body>
</html>