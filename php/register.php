<?php
include 'config.php';
include 'navbar.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $message = "Passwords do not match!";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashed_password);

        if ($stmt->execute()) {
            header("Location: login.php"); // Redirect to login page after successful registration
            exit();
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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

        /* Registration Container */
        .register-container {
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

        /* Error & Success Messages */
        .message {
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
            .register-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="register-container">
        <h2>Register</h2>
        <?php if (!empty($message)): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <a href="login.php">Already have an account? Login</a>
    </div>

</body>
</html>
