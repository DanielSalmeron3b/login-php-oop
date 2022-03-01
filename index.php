<?php
$name = isset($_GET['user']) ? $_GET('user') : null;
if (!isset($name)) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login Index</title>
    <link rel="stylesheet" href="../Guia6/css/main.css">
</head>

<body>
    <header>
        <h1>Home</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Start</a></li>
        </ul>
    </nav>
    <section id="intro">
        <header>
            <h2>Welcome <?php echo $name; ?> to the control Panel</h2>
        </header>
        <section>
            <h3>Work</h3>
        </section>
    </section>
    <aside>
    </aside>
    <footer>
        <p>Login System</p>
    </footer>
</body>
</html>