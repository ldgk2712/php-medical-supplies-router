<?php
$title = $title ?? 'Medical Supplies';
$supplies = $supplies ?? [];
$created = $created ?? false;

function supplyStatus(int $quantity): string
{
    if ($quantity <= 0) {
        return 'Out of stock';
    }

    if ($quantity <= 10) {
        return 'Low stock';
    }

    return 'Available';
}

function supplyClass(int $quantity): string
{
    if ($quantity <= 0) {
        return 'danger';
    }

    if ($quantity <= 10) {
        return 'warning';
    }

    return 'success';
}
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
        <?php if ($created): ?>
            <div class="alert success">
                Medical supply form submitted successfully. Redirect response worked.
            </div>
        <?php endif; ?>

        <div class="page-header">
            <div>
                <h1>Medical Supplies</h1>
                <p>This page is handled by SupplyController@index.</p>
            </div>

            <a class="button" href="/supplies/create">Create Supply</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Supply Name</th>
                    <th>Group</th>
                    <th>Supplier</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($supplies as $supply): ?>
                    <tr>
                        <td><?= htmlspecialchars($supply['code']) ?></td>
                        <td><?= htmlspecialchars($supply['name']) ?></td>
                        <td><?= htmlspecialchars($supply['group']) ?></td>
                        <td><?= htmlspecialchars($supply['supplier']) ?></td>
                        <td><?= number_format($supply['price']) ?> VND</td>
                        <td><?= htmlspecialchars((string) $supply['quantity']) ?></td>
                        <td>
                            <span class="badge <?= supplyClass((int) $supply['quantity']) ?>">
                                <?= supplyStatus((int) $supply['quantity']) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>