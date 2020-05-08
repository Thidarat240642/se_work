<table border = 1>
<tr><td>รูปอุปกรณ์</td><td>ชื่ออุปกรณ์</td><td>รหัสครุภัณฑ์</td><td>รายละเอียด</td><td>หมวดหมู่</td><td>ยืม</td></tr>
<?php foreach($equipmentList as $equipment)

    echo"<tr> <td>$equipment->equ_img</td>
    <td>$equipment->equ_name</td>
    <td>$equipment->equ_serialnumber</td>
    <td>$equipment->equ_detils</td>
    <td>$equipment->equ_type</td>
    <td><a href=?controller=equipment&action=borrow_order.php&us_id=$equipment->equ_id>ยืม</a></td>
    </tr>"; 
}
echo "</table>";
?>
