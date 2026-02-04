<?php
session_start();
include_once("connectdb.php");

$error = "";

if (isset($_POST['Submit'])) {

    $auser = $_POST['auser'];
    $apwd  = $_POST['apwd'];

    // Prepared Statement ป้องกัน SQL Injection
    $sql = "SELECT * FROM admin WHERE a_username = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $auser);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($data = mysqli_fetch_assoc($result)) {
        // ตรวจสอบรหัสผ่าน
        if (password_verify($apwd, $data['a_password'])) {
            $_SESSION['aid']   = $data['a_id'];
            $_SESSION['aname'] = $data['a_name'];
            header("Location: index2.php");
            exit;
        } else {
            $error = "Username หรือ Password ไม่ถูกต้อง";
        }
    } else {
        $error = "Username หรือ Password ไม่ถูกต้อง";
    }
}
?>

<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>เข้าสู่ระบบ</title>

<!-- Bootstrap 5.3 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: linear-gradient(135deg, #e3f2fd, #bbdefb);
    height: 100vh;
}
.login-card {
    max-width: 400px;
    margin: auto;
    margin-top: 10%;
}
</style>
</head>

<body>

<div class="container">
    <div class="card shadow login-card">
        <div class="card-header bg-primary text-white text-center">
            <h4>เข้าสู่ระบบ</h4>
        </div>

        <div class="card-body">
            <?php if ($error): ?>
                <div class="alert alert-danger text-center">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="auser" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="apwd" class="form-control" required>
                </div>

                <div class="d-grid">
                    <button type="submit" name="Submit" class="btn btn-primary">
                        🔐 LOGIN
                    </button>
                </div>
            </form>
        </div>

        <div class="card-footer text-center text-muted">
            ฐิติยา พุทธลา (พรีม)
        </div>
    </div>
</div>

</body>
</html>
