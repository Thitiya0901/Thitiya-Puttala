<?php
// กำหนด Content Type และ Charset
header('Content-Type: text/html; charset=utf-8');

// ตรวจสอบว่าฟอร์มได้ถูก Submit เข้ามาหรือไม่ (ตรวจสอบจากชื่อปุ่ม submit_application)
if (isset($_POST['submit_application'])) {
    
    // ดึงข้อมูลทั้งหมดจาก $_POST
    $position = $_POST['position'] ?? 'ไม่ได้ระบุ';
    $prefix = $_POST['prefix'] ?? 'ไม่ได้ระบุ';
    $fullname = $_POST['fullname'] ?? 'ไม่ได้ระบุ';
    $dob = $_POST['dob'] ?? 'ไม่ได้ระบุ';
    $email = $_POST['email'] ?? 'ไม่ได้ระบุ';
    $education = $_POST['education'] ?? 'ไม่ได้ระบุ';
    $skills = $_POST['skills'] ?? 'ไม่ได้ระบุ';
    $experience = $_POST['experience'] ?? 'ไม่ได้ระบุ';

    // *** หมายเหตุเรื่องไฟล์ ***
    // การจัดการไฟล์ที่อัปโหลด (Resume/CV) ต้องใช้ $_FILES
    // แต่เพื่อความเรียบง่ายในการแสดงผล เราจะแสดงเพียงชื่อไฟล์ที่ถูกส่งมา (ถ้ามี)
    $resume_info = 'ไม่มีไฟล์แนบ';
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $resume_info = $_FILES['resume']['name'] . ' (ขนาด: ' . number_format($_FILES['resume']['size'] / 1024, 2) . ' KB)';
        // ในสถานการณ์จริง จะต้องมีการย้ายไฟล์ไปยังที่เก็บถาวรด้วยฟังก์ชัน move_uploaded_file()
    }
    
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ข้อมูลการสมัครงาน | TechSolve Innovation Co., Ltd.</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    body {
        background-color: #f8f9fa;
        padding: 40px 0;
    }
    .result-card {
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: 1px solid #007bff; /* ขอบสีน้ำเงินเด่น */
    }
    .card-header h3 {
        color: #007bff;
        font-weight: 600;
    }
    .list-group-item strong {
        display: inline-block;
        min-width: 150px;
        color: #343a40;
    }
    .list-group-item:nth-child(even) {
        background-color: #f0f8ff; /* แถบสีอ่อนสลับกัน */
    }
</style>
</head>

<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card result-card">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0"><i class="bi bi-check-circle-fill me-2"></i> ข้อมูลการสมัครงานที่ได้รับ</h3>
                </div>
                <div class="card-body p-4">
                    
                    <h5 class="mt-2 mb-3 text-primary"><i class="bi bi-person-workspace me-2"></i> ข้อมูลการสมัคร</h5>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">
                            <strong>ตำแหน่งที่สมัคร:</strong> <?php echo htmlspecialchars($position); ?>
                        </li>
                    </ul>

                    <h5 class="mt-2 mb-3 text-primary"><i class="bi bi-person-fill me-2"></i> ข้อมูลส่วนตัว</h5>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">
                            <strong>ชื่อ-สกุล:</strong> <?php echo htmlspecialchars($prefix) . ' ' . htmlspecialchars($fullname); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>วันเดือนปีเกิด:</strong> <?php echo htmlspecialchars($dob); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>อีเมลติดต่อ:</strong> <?php echo htmlspecialchars($email); ?>
                        </li>
                    </ul>

                    <h5 class="mt-2 mb-3 text-primary"><i class="bi bi-file-earmark-text-fill me-2"></i> การศึกษาและประสบการณ์</h5>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">
                            <strong>ระดับการศึกษา:</strong> <?php echo htmlspecialchars($education); ?>
                        </li>
                        <li class="list-group-item">
                            <strong>ความสามารถพิเศษ:</strong> 
                            <p class="mt-2 mb-0 border p-2 bg-light rounded"><?php echo nl2br(htmlspecialchars($skills)); ?></p>
                        </li>
                        <li class="list-group-item">
                            <strong>ประสบการณ์ทำงาน:</strong> 
                            <p class="mt-2 mb-0 border p-2 bg-light rounded"><?php echo nl2br(htmlspecialchars($experience)); ?></p>
                        </li>
                        <li class="list-group-item">
                            <strong>เอกสารแนบ (Resume):</strong> 
                            <span class="badge bg-success"><?php echo htmlspecialchars($resume_info); ?></span>
                        </li>
                    </ul>
                    
                    <div class="text-center mt-4">
                        <a href="javascript:history.back()" class="btn btn-secondary"><i class="bi bi-arrow-left me-2"></i> กลับสู่หน้าฟอร์ม</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php

} else {
    // ถ้าไม่มีการ Submit ฟอร์มเข้ามาโดยตรง ให้แสดงข้อความแจ้งเตือน
    echo '
    <!doctype html>
    <html lang="th">
    <head>
        <meta charset="utf-8">
        <title>ข้อผิดพลาด</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading">⚠️ ข้อผิดพลาดในการเข้าถึง!</h4>
                <p>คุณต้องกรอกและส่งใบสมัครจากหน้าฟอร์มสมัครงานก่อน</p>
                <hr>
                <a href="[ชื่อไฟล์ฟอร์ม HTML ของคุณ].html" class="btn btn-warning">ไปยังหน้าสมัครงาน</a>
            </div>
        </div>
    </body>
    </html>';
}
?>