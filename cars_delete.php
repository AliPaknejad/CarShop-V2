<?php
include("includes/header.php");
?>


<?php
// اتصال به دیتابیس
$link = mysqli_connect("localhost", "root", "", "carshop");

// بررسی اتصال
if (!$link) {
    die("اتصال به دیتابیس ناموفق بود: " . mysqli_connect_error());
}

// دریافت id و پیش‌گیری از SQL Injection
$id = intval($_GET["id"]); // تبدیل id به عدد برای امنیت بیشتر

// بررسی وجود رکورد قبل از حذف
$stmt = mysqli_prepare($link, "SELECT * FROM `cars` WHERE `id`=?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result);

if ($row) {
    // حذف فایل تصویر اگر وجود دارد
    if (file_exists($row["imageurl"])) {
        unlink($row["imageurl"]);
    }

    // حذف رکورد از دیتابیس
    $stmt = mysqli_prepare($link, "DELETE FROM `cars` WHERE `id`=?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    // بررسی موفقیت‌آمیز بودن حذف
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        ?>
        <script>
            location.replace("manage.php");
        </script>
        <?php
    } else {
        echo "حذف نشد: " . mysqli_error($link);
    }
} else {
    echo "رکوردی با این id وجود ندارد.";
}

// بستن اتصال
mysqli_close($link);
?>







<?php
include("includes/footer.php");
?>