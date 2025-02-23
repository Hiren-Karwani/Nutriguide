<?php
session_start();
include 'config.php';
include 'navbar.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: ../index.php"); // Redirect to dashboard or homepage
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(to right, #3d97ce, #12debb);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Login Container */
        .login-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        /* Form Styling */
        h2 {
            color: #19376D;
            margin-bottom: 20px;
            font-size: 24px;
        }

        input[type="text"], 
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        /* Button Styling */
        button {
            width: 100%;
            background-color: #19376D;
            color: white;
            border: none;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: green;
            transform: scale(1.05);
        }

        /* Error Message */
        .error {
            color: red;
            margin-bottom: 10px;
        }

        /* Links */
        a {
            display: block;
            margin-top: 15px;
            color: #19376D;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        a:hover {
            color: #12debb;
        }

        /* Responsive Design */
        @media screen and (max-width: 600px) {
            .login-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <?php if (!empty($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="register.php">Don't have an account? Register</a>
    </div>

</body>
</html>
