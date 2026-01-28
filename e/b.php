<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ใบสมัครงาน | TechSolve Innovation Co., Ltd.</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    body {
        background-color: #f8f9fa; /* พื้นหลังสีเทาอ่อน */
        font-family: 'Kanit', sans-serif; /* แนะนำให้ใช้ Font ที่เป็นทางการ เช่น Kanit, Sarabun */
    }
    .main-card {
        margin-top: 50px;
        margin-bottom: 50px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: none;
        border-top: 5px solid #007bff; /* แถบสีน้ำเงินบริษัท */
    }
    .card-header h2 {
        color: #007bff;
        font-weight: 600;
    }
    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
    }
    .section-title {
        color: #343a40;
        font-weight: 500;
        border-bottom: 1px dashed #ced4da;
        padding-bottom: 8px;
        margin-bottom: 20px;
        margin-top: 30px;
    }
</style>
</head>

<body>
<div class="container">
    <div class="card main-card">
        <div class="card-header bg-white pt-4">
            <h2 class="text-center"><i class="bi bi-briefcase-fill me-2"></i> TechSolve Innovation Co., Ltd.</h2>
            <p class="text-center text-muted">ใบสมัครงาน | Driving the Future of Digital Solutions</p>
        </div>
        <div class="card-body p-4 p-md-5">
            <form method="post" action="" enctype="multipart/form-data">

                <h4 class="section-title"><i class="bi bi-gear-fill me-2"></i> 1. ตำแหน่งที่สมัคร</h4>
                <div class="mb-4">
                    <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                    <select class="form-select" id="position" name="position" required>
                        <option value="" disabled selected>--- กรุณาเลือกตำแหน่งงาน ---</option>
                        <option value="Software Developer">Software Developer (Full-Stack)</option>
                        <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                        <option value="Data Analyst">Data Analyst</option>
                        <option value="Human Resources Officer">Human Resources Officer</option>
                    </select>
                </div>

                <h4 class="section-title"><i class="bi bi-person-lines-fill me-2"></i> 2. ข้อมูลส่วนตัว</h4>
                <div class="row g-3 mb-3">
                    
                    <div class="col-md-3">
                        <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                        <select class="form-select" id="prefix" name="prefix" required>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>

                    <div class="col-md-9">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fullname" name="fullname" required placeholder="ชื่อ-นามสกุล (ภาษาไทย)">
                    </div>

                    <div class="col-md-6">
                        <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="email" class="form-label">อีเมลติดต่อ <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="example@techsolve.co.th">
                    </div>
                </div>

                <h4 class="section-title"><i class="bi bi-mortarboard-fill me-2"></i> 3. ระดับการศึกษา</h4>
                <div class="mb-4">
                    <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                    <select class="form-select" id="education" name="education" required>
                        <option value="" disabled selected>--- เลือกวุฒิการศึกษา ---</option>
                        <option value="ปริญญาตรี">ปริญญาตรี</option>
                        <option value="ปริญญาโท">ปริญญาโท</option>
                        <option value="ปริญญาเอก">ปริญญาเอก</option>
                        <option value="ปวส.">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
                    </select>
                </div>

                <h4 class="section-title"><i class="bi bi-stars me-2"></i> 4. ทักษะและประสบการณ์</h4>
                
                <div class="mb-3">
                    <label for="skills" class="form-label">ความสามารถพิเศษ (โปรดระบุทักษะที่เกี่ยวข้อง เช่น ภาษา, โปรแกรม)</label>
                    <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="ตัวอย่าง: ภาษาอังกฤษดีเยี่ยม, Python, React, Microsoft Office"></textarea>
                    <div class="form-text">เน้นทักษะที่โดดเด่นและเป็นประโยชน์ต่อตำแหน่งที่สมัคร</div>
                </div>

                <div class="mb-4">
                    <label for="experience" class="form-label">ประสบการณ์ทำงานที่เกี่ยวข้อง</label>
                    <textarea class="form-control" id="experience" name="experience" rows="5" placeholder="โปรดระบุชื่อบริษัท, ตำแหน่ง, ระยะเวลา, และหน้าที่ความรับผิดชอบโดยสรุป"></textarea>
                </div>
                
                <div class="mb-4">
                    <label for="resume" class="form-label"><i class="bi bi-file-earmark-arrow-up-fill me-1"></i> แนบ Resume/CV <span class="text-danger">*</span></label>
                    <input class="form-control" type="file" id="resume" name="resume" required accept=".pdf,.doc,.docx">
                    <div class="form-text">รองรับไฟล์ PDF, DOC, DOCX เท่านั้น (ขนาดไม่เกิน 5MB)</div>
                </div>
                
                <hr class="my-4">

                <div class="d-grid gap-2">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg">
                        <i class="bi bi-send-fill me-2"></i> ส่งใบสมัคร
                    </button>
                    <button type="reset" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-counterclockwise me-2"></i> ล้างข้อมูล
                    </button>
                </div>

            </form>
        </div>
        <?php
    if (isset($_POST['Submit'])) {
        $position = $_POST['position'] ;
        $prefix = $_POST['prefix'] ;
        $fullname = $_POST['fullname'] ;
        $dob = $_POST['dob'] ;
        $email = $_POST['email'] ;
        $education = $_POST['education'] ;
        $skills = $_POST['skills'] ;
        $experience = $_POST['experience'] ;
        
       include_once("connectdb.php");

       $sql = "INSERT INTO application (a_id, a_position , a_prefix , a_fullname , a_dob , a_email , a_education , a_skills , a_experience) VALUES (NULL, '{$position}','{$prefix}' , '{$fullname}' , '{$dob}' , '{$email}' , '{$education}' , '{$skills}' , '{$experience}');";
       mysqli_query ($conn, $sql) or die ("insert ไม่ได้");

       echo "<script>";
       echo "alert('บันทึกข้อมูลสำเร็จ');";
       echo "</script>";
    }
    ?>


    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>