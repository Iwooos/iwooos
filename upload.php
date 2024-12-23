
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    $fileType = strtolower(pathinfo($uploadFile, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            echo "تم رفع الصورة بنجاح!";
        } else {
            echo "حدث خطأ أثناء رفع الصورة.";
        }
    } else {
        echo "الملف ليس صورة صالحة.";
    }
}
?>
