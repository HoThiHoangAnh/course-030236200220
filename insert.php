<?php
require_once "config.php";
$sql = 
"INSERT INTO course (Course_ID, Course_Name, Credit, Duration, Intructors) 
values('7', 'Cơ sở dữ liệu', ' 5','30','Mr.Nam')";
if (mysqli_query($conn, $sql) > 0) {
echo "Thêm dữ liệu thành công";
}
else {
echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>