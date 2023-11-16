<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>
    <link data-n-head="ssr" rel="shortcut icon" type="image/png" href="https://www.nidprotech.com/images/big-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: whitesmoke;
        }

        .login-container {
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .login-container h3 {
            text-align: center;
            margin-bottom: 5px;
            color: black;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-color: black;
            /* สีของกรอบ input */
        }

        .btn-primary {
            background-color: green;
            /* สีปุ่ม */
            border-color: green;
            /* สีขอบปุ่ม */
            width: 35%;
        }

        .btn-primary:hover {
            background-color: red;
            /* สีปุ่มเมื่อ hover */
            border-color: red;
            /* สีขอบปุ่มเมื่อ hover */
        }
    </style>
</head>

<body>

    <div class="container" style="margin-top: 165px;">
        <div class="login-container">
            <div class="card">
                <div class="card-header">
                    <h3>LOGIN🔐</h3>
                </div>
                <div class="card-body">
                    <form action="login_process.php" method="post">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <center><button type="submit" class="btn btn-primary">LOGIN</button></a right>
                            <center>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>