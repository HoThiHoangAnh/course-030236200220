<?php
require_once "config.php";
$sql = 
"UPDATE course set Credit = '50' , Duration = '120'
where Course_ID = '9'";
if (mysqli_query($conn, $sql) > 0) {
echo "Cập nhật dữ liệu thành công";
}
else {
echo "Lỗi: " . $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);
?>