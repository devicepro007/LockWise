<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

session_start();

// ---------------- CONFIG ----------------
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Safely read env values
define('ADMIN_PASSWORD', $_ENV['ADMIN_PASSWORD']);
// --------------------------------------

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Login check
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    if (isset($_POST['password'])) {
        if ($_POST['password'] === ADMIN_PASSWORD) {
            $_SESSION['loggedin'] = true;
        } else {
            $error = "Invalid password!";
        }
    }
}

// Login page
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true): ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Login Required</title>
        <style>
            body {
                font-family: sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background: #f0f2f5;
            }

            .login-box {
                background: white;
                padding: 2rem;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            input[type="password"],
            input[type="submit"] {
                padding: 10px;
                width: 220px;
                margin-top: 10px;
            }

            input[type="submit"] {
                background: #007bff;
                color: white;
                border: none;
                cursor: pointer;
            }
        </style>
    </head>

    <body>
        <div class="login-box">
            <form method="post">
                <h2>Access Protected</h2>
                <?php if (isset($error))
                    echo "<p style='color:red'>$error</p>"; ?>
                <input type="password" name="password" placeholder="Enter Password" required>
                <input type="submit" value="Login">
            </form>
        </div>
    </body>

    </html>
    <?php exit; endif; ?>

<?php
// ---------------- DATABASE (PDO + .env) ----------------
$dsn = "mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// ---------------- DELETE MESSAGE ----------------
if (isset($_POST['delete_id'])) {
    $delete_id = (int) $_POST['delete_id'];

    $stmt = $pdo->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->execute([$delete_id]);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// ---------------- FETCH MESSAGES ----------------
$stmt = $pdo->query("SELECT * FROM messages ORDER BY sent_at DESC");
$messages = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Messages Viewer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        th {
            background: #f4f4f4;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        .header-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logout-btn {
            color: #d9534f;
            text-decoration: none;
        }

        .delete-btn {
            background: #d9534f;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 4px;
        }

        .delete-btn:hover {
            background: #c9302c;
        }
    </style>
</head>

<body>

    <div class="header-flex">
        <h1>All Messages</h1>
        <a class="logout-btn" href="?logout=1">Logout</a>
    </div>

    <?php if (count($messages) === 0): ?>
        <p>No messages found.</p>
    <?php else: ?>

        <table>
            <thead>
                <tr>
                    <th>Sent At</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($messages as $msg): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($msg['sent_at']); ?></td>
                        <td><?php echo htmlspecialchars($msg['name']); ?></td>
                        <td><?php echo htmlspecialchars($msg['email']); ?></td>
                        <td><?php echo htmlspecialchars($msg['phone']); ?></td>
                        <td><?php echo htmlspecialchars($msg['address']); ?></td>
                        <td><?php echo nl2br(htmlspecialchars($msg['message'])); ?></td>
                        <td>
                            <form method="post" onsubmit="return confirm('Delete this message?');">
                                <input type="hidden" name="delete_id" value="<?php echo $msg['id']; ?>">
                                <button type="submit" class="delete-btn">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    <?php endif; ?>

</body>

</html>