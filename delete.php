<?php
require_once "config.php";
$sql = 
"DELETE FROM course
where Course_ID = '7' ";
if (mysqli_query($conn, $sql) > 0) {
echo "Xóa dữ liệu thành công";
}
else {
echo "Lỗi: ". $sql . "<br>".mysqli_error($conn);
}
mysqli_close($conn);
?>