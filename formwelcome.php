<?php
// Set cookies
if (isset($_POST['setCookies'])) {
    setcookie("name", $_POST['name'], time() + 3600);
    setcookie("theme", $_POST['theme'], time() + 3600);
    setcookie("color", $_POST['color'], time() + 3600);
    setcookie("language", $_POST['language'], time() + 3600);

    echo "Cookies have been set!<br>";
}

// Delete cookies
if (isset($_POST['deleteCookies'])) {
    setcookie("name", "", time() - 3600);
    setcookie("theme", "", time() - 3600);
    setcookie("color", "", time() - 3600);
    setcookie("language", "", time() - 3600);

    echo "Cookies deleted!<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie Form</title>
</head>
<body>

<h2>User Preferences</h2>

<form method="post">

    Name: <br>
    <input type="text" name="name"
        value="<?php echo $_COOKIE['name'] ?? ''; ?>"><br><br>

    Theme: <br>
    <input type="text" name="theme"
        value="<?php echo $_COOKIE['theme'] ?? ''; ?>"><br><br>

    Color: <br>
    <input type="text" name="color"
        value="<?php echo $_COOKIE['color'] ?? ''; ?>"><br><br>

    Language: <br>
    <input type="text" name="language"
        value="<?php echo $_COOKIE['language'] ?? ''; ?>"><br><br>

    <button type="submit" name="setCookies">Set Cookies</button>
    <button type="submit" name="deleteCookies">Delete Cookies</button>

</form>

</body>
</html>