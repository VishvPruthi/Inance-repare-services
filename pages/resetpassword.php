<?php
include 'db_connect.php';

$message = "";
$toastClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Sanitize email to prevent SQL Injection
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Basic validation for email and password
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format";
        $toastClass = "warning";
    } elseif ($password === $confirmPassword) {
        // Hash password before storing it
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and execute
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashedPassword, $email);

        if ($stmt->execute()) {
            $message = "Password updated successfully";
            $toastClass = "success";
        } else {
            $message = "Error updating password";
            $toastClass = "danger";
        }

        $stmt->close();
    } else {
        $message = "Passwords do not match";
        $toastClass = "warning";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/295/295128.png">
    <title>Reset Password</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        .container {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 30px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .header {
            margin-bottom: 30px;
        }

        .header i {
            font-size: 40px;
            color:rgb(54, 121, 194);
        }

        .header h5 {
            font-weight: 700;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 14px;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            background-color: #fafafa;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #4a90e2;
        }

        .btn {
            width: 100%;
            padding: 12px;
            background-color: #4a90e2;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #4a90e2;
        }

        .links {
            margin-top: 20px;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
            margin: 0 5px;
        }

        .toast {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            color: #fff;
            display: none;
            font-size: 16px;
            text-align: center;
        }

        .toast.success {
            background-color: #4a90e2;
        }

        .toast.danger {
            background-color: #dc3545;
        }

        .toast.warning {
            background-color: #ffc107;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Toast Message -->
        <?php if ($message): ?>
            <div class="toast <?php echo $toastClass; ?>" id="toast">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>

        <div class="header">
            <i class="fa fa-user-circle-o"></i>
            <h5>Change Your Password</h5>
        </div>

        <form action="" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>

            <button type="submit" class="btn">Reset Password</button>

            <div class="links">
                <p>Create an Account or <a href="./login.php">Login</a></p>
            </div>
        </form>
    </div>

    <script>
        // Display toast for 3 seconds
        if (document.querySelector('.toast')) {
            const toast = document.querySelector('.toast');
            toast.style.display = 'block';
            setTimeout(() => {
                toast.style.display = 'none';
            }, 3000);
        }
    </script>
</body>
</html>
