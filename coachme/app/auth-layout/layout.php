<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .auth-container {
            width: 400px;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .auth-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .auth-container form {
            display: flex;
            flex-direction: column;
        }
        .auth-container form input {
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
        .auth-container form button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .auth-container form button:hover {
            background-color: #45a049;
        }
        .auth-container p {
            text-align: center;
        }
        .auth-container a {
            color: #4CAF50;
            text-decoration: none;
        }
        .auth-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="auth-container">
        <h1><?= $title ?></h1>
        <?= $content ?>  <!-- Dynamic content goes here -->
    </div>
</body>
</html>
