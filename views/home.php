<?php
$title = $title ?? 'Home';
$message = $message ?? '';
$loginSuccess = ($_GET['login'] ?? '') === 'success';
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
            <a href="/supplies">Supplies</a>
            <a href="/supplies/create">Create Supply</a>
            <a href="/health">Health</a>
            <a href="/login">Login</a>
            <a href="/logout">Logout</a>
        </nav>
    </header>

    <main class="container">
        <?php if ($loginSuccess): ?>
            <div class="alert success">
                Staff login request processed successfully.
            </div>
        <?php endif; ?>

        <section class="hero">
            <h1><?= htmlspecialchars($title) ?></h1>
            <p><?= htmlspecialchars($message) ?></p>
        </section>

        <section class="grid">
            <div class="card">
                <h3>HTML Response</h3>
                <p>Visit <code>/</code> or <code>/supplies</code>.</p>
            </div>

            <div class="card">
                <h3>JSON Response</h3>
                <p>Visit <code>/health</code>.</p>
            </div>

            <div class="card">
                <h3>Redirect Response</h3>
                <p>Visit <code>/go-home</code> or submit login form.</p>
            </div>

            <div class="card">
                <h3>404 / 405</h3>
                <p>Try <code>/unknown</code> or <code>POST /health</code>.</p>
            </div>
        </section>
    </main>
</body>
</html>