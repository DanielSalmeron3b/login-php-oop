<?php
// Using autoload classes
function __autoload($classname)
{
    require "class/" . $classname . ".class.php";
}

// Checking if there are dato using $_POST
if ($_POST) {
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $pass = isset($_POST["pass"]) ? $_POST["pass"] : '';

    // Instantiating classes
    $User = new User($name, $pass);
    $Login = new Login($name, $pass);

    $rowUser = $User->get_data();
    $login = $Login->checkUser($rowUser);

    if ($login) {
        header("Location: index.php?user=" . $User->getName());
    } else {
        header("Location: login.php?error=1");
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../Guia6/css/main.css">
</head>

<body>
    <section id="login">
        <header>
            <h2>Login</h2>
        </header>
        <form method="post" action="login.php">
            <?php
            if (isset($_GET["error"]) and $_GET["error"] == 1) {
            ?>
                <h3>Error trying to login :(</h3>
            <?php
            }
            ?>
            <div>
                <label for="name">Name:</label>
                <input type="text" name="name" value="">
                <label for="pass">Password:</label>
                <input type="password" name="pass" value="">
            </div>
            <input type="submit" value="Login">
        </form>
    </section>
</body>

</html>