<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - My App</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <div class="login-container">
        <div class="login-card">

            <!-- Brand / Logo -->
            <div class="login-header">
                <div class="login-brand">S</div>
                <h2 class="login-title">Sign In</h2>
                <p class="login-subtitle">Access your application</p>
            </div>

            <!-- Login Form -->
            <!-- ACTION: Change action to your PHP file, e.g. action="index.php?route=login" -->
            <form action="dashboard.html" method="GET" class="login-form">
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <input type="email" name="email" placeholder="e.g. user@example.com" class="form-control">
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" placeholder="Enter your password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary" style="margin-top: 8px; width: 100%;">
                    Sign In
                </button>
            </form>

        </div>
    </div>

</body>
</html>
