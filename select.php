<?php

require_once "config.php";

$sql = "SELECT * FROM course";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row 

    echo "<table border = 1>";
    echo "<td>Mã môn học</td>";
    echo "<td>Tên môn học</td>";
    echo "<td>Số tín chỉ</td>";
    echo "<td>Số tiết</td>";
    echo "<td>Tên giảng viên</td>";
    echo "<tr>";
//tạo bảng cho csdl, sử dụng echo để in ra 


while($row =mysqli_fetch_assoc($result)){
// xử lý hiển thị dữ liệu
    echo"<tr>";
    echo "<td>" .$row["Course_ID"]."</td>"; 
    echo "<td>" .$row["Course_Name"]. "</td>";
    echo "<td>" .$row["Credit"]. "</td>";
    echo "<td>" .$row["Duration"]. "</td>";
    echo "<td>" .$row["Intructors"]. "</td>";
   
}
}
else {
echo "0 results";
}
mysqli_close($conn);
?>