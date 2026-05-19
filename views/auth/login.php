<?php
$title = $title ?? 'Staff Login';
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
        </nav>
    </header>

    <main class="container">
        <h1>Staff Login Demo</h1>
        <p>This page demonstrates AuthController and redirect response.</p>

        <form class="form-card" method="POST" action="/login">
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="staff@example.com">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="123456">
            </div>

            <button class="button" type="submit">Login</button>
        </form>
    </main>
</body>
</html>