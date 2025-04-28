<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Skincare Glow</title>
    <style>
        body {
            background-color: #ffe4ec;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-box {
            width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(255, 105, 180, 0.3);
        }
        h2 {
            color: #ff69b4;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ff69b4;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background: #ff69b4;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login Skincare Glow</h2>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color:red"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <form action="/login" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
