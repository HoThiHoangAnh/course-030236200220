<?php
require_once "config.php";
$sql = 
"INSERT INTO course (Course_ID, Course_Name, Credit, Duration, Intructors) 
values('9', 'OOPS', ' 15','56','Mr.Vũ');";
$sql .= 
"INSERT INTO course (Course_ID, Course_Name, Credit, Duration, Intructors) 
values('110', 'TPS ', ' 20','70','Mr.Thanh');";
if (mysqli_multi_query($conn, $sql) > 0) {
echo "Thêm dữ liệu thành công";
}
else {
echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>