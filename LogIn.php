<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <section>
    <div class="form-box">
        <div class="form-value">
            <form action="">
                <h2>Login</h2>
                <div class="input-box">
                <ion-icon name="person-circle-outline"></ion-icon>
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-box">
                <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="Password" required>
                    <label for="">Password</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <button>Login</button>
                <div class="register">
                    <p>Don't have an account? <a href="#">SignUp</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>