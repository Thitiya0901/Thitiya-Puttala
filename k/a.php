<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ฐิติยา พุทธลา (พรีม)</title>
</head>

<body>


<h1>งาน k 66010914026 ฐิติยา พุทธลา (พรีม)</h1>
<br>
<img src="images/1.jpg" width="400">
<button onclick="showImage('1.jpg', this)" 
        style="background-color:green; color:white; padding:10px; border:none;">
    เปิดรูปที่ 1
</button>

<button onclick="showImage('2.jpg', this)" 
        style="background-color:orange; color:white; padding:10px; border:none;">
    เปิดรูปที่ 2
</button>

<script>
function showImage(imgSrc, btn){
    btn.innerHTML = "<img src='" + imgSrc + "' width='150'>";
}
</script>

</body>
</html>