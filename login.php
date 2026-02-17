<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Group 1 University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Removed inline <style> tag, all CSS is now in style.css -->
</head>
<body class="login-modern">
<div class="login-container">
    <div class="login-illustration d-flex align-items-center justify-content-center" style="background: #f7d469;">
        <div style="background: #eeb6e9; border-radius:24px; width:340px; height:150px; display:flex; align-items:center; justify-content:center; box-shadow:0 4px 24px rgba(0,0,0,0.10);">
            <img src="img/new logo group 1.png" alt="Group 1 University Logo" style="max-width:140px; max-height:110px; width:auto; height:auto;">
        </div>
    </div>
    <div class="login-form-area">
        <h2>Group 1 University</h2>
        <form method="post" action="req/login.php">
            <input type="hidden" name="role" value="1">
            <label class="form-label" for="uname">Username</label>
            <input type="text" class="form-control" id="uname" name="uname" placeholder="Username" required>
            <label class="form-label" for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
            <label class="form-label" for="role">Login as</label>
            <select class="form-control mb-3" id="role" name="role" required style="border-radius:24px;">
                <option value="1">Admin</option>
                <option value="2">Teacher</option>
                <option value="3">Student</option>
                <option value="4">Registrar Office</option>
            </select>
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
               
            </div>
            <button type="submit" class="btn btn-login w-100">LOGIN</button>
           
            <a href="index.php" class="btn btn-outline-secondary btn-sm mt-2" style="border-radius:16px; font-weight:500; width:90px;">&larr; Back</a>
        </form>
        <div class="text-center mt-4" style="color:#e91e63; font-weight:600;">Group 1 University</div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>