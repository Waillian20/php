<?php
    session_start(); // start session before any HTML

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);

        if ($username == "admin" && $password == "12345") {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $username;
            header("Location: profile.php");
            exit();
        } else {
            echo "Login Failed";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Form</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-card {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px 30px;
            width: 350px;
        }

        .form-card h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #1d1d3f;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            border: none;
            border-bottom: 1px solid #ccc;
            background-color: transparent;
            font-size: 14px;
            outline: none;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #888;
        }

        button {
            width: 100%;
            padding: 15px;
            background-color: #1d1d3f;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background-color: #2b2b60;
        }
    </style>
</head>
<body>
    <div class="form-card">
        <h2>User Information</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Fullname</label>
                <input type="text" id="username" name="username" placeholder="Your name" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password" required>
            </div>

            <button type="submit">Log In</button>
        </form>

        
    </div>
</body>
</html>

