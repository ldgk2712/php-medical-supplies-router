<?php
$title = $title ?? 'About';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header class="topbar">
        <strong>Medical Supplies App</strong>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/supplies">Supplies</a>
            <a href="/supplies/create">Create Supply</a>
            <a href="/health">Health</a>
            <a href="/login">Login</a>
        </nav>
    </header>

    <main class="container">
        <section class="hero">
            <h1>About Medical Supplies App</h1>
            <p>
                This application is built to demonstrate a PHP Front Controller,
                Router, Controller organization, and standard responses for a
                medical supplies management scenario.
            </p>
        </section>

        <section class="grid">
            <div class="card">
                <h3>Purpose</h3>
                <p>Manage sample medical supplies data using PHP array.</p>
            </div>

            <div class="card">
                <h3>Architecture</h3>
                <p>All requests go through public/index.php and are handled by Router.</p>
            </div>

            <div class="card">
                <h3>Response Types</h3>
                <p>The app supports HTML, JSON, Redirect, 404 and 405 responses.</p>
            </div>

            <div class="card">
                <h3>Learning Goal</h3>
                <p>Practice clean URL routing and controller-based structure.</p>
            </div>
        </section>
    </main>
</body>
</html>