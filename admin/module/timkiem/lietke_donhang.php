
<?php include('module/config.php') ?>
<?php 
	if (isset($_REQUEST['timkiem'])) {
	$search = addslashes($_GET['search']);
	$sql_timkiem="SELECT*from donhang  where id_thanhtoan=0 and (iddonhang like '%$search%' or hoten like '%$search%' or address like '%$search%'  or email like '%$search%' ) ";
	$run_timkiem=mysqli_query($conn,$sql_timkiem) or die("ERROR: ".mysqli_error($conn));
   	$num = mysqli_num_rows($run_timkiem);
   	if ($num > 0&& $search != "") {
?>

<form action="module/quanlydonhang/xuli.php" method="post"  enctype="multipart/form-data">

<table width="900px" border="1" align="center" style=" margin-left:0px">
   <tr> 
   <td colspan="11" style="background:#CCC"> <strong>Bảng quản lý đơn hàng </strong></td>
   </tr>
  <tr>
    <td>STT</td>
    <td>Id don hang </td>
    <td>Họ tên</td>
    <td>Phone</td>
    <td>Email</td>
    <td>Địa chỉ</td>
    <td>Tổng tiền</td>
    <td>Hình thức thanh toán</td>
        <td > Xem </td>
   
    <td>Xóa</td>
    <td>Thanh toán</td>

    
  
  <?php
 $stt="1";
  while ($dong=mysqli_fetch_array ($run_timkiem,MYSQLI_ASSOC)) {
    
 ?>
 </tr>
  <tr>
    <td> <?php echo $stt ; ?></td>
    <td><?php echo $dong['iddonhang']?> </td>
     <td><?php echo $dong['hoten']; ?></td>
    <td><?php echo $dong['phone']; ?></td>
    <td><?php echo $dong['email']?></td>
    <td><?php echo $dong['address']; ?></td>
    <td><?php echo $dong['tongtien']; ?></td>
    <td><?php echo $dong['hinhthucthanhtoan']?> </td>
   
    <td ><a href="qlchitietdonhang.php?quanli=chitietdonhang&ac=lietke&id=<?php echo $dong['iddonhang']?>" >Chi tiết </a></td>
    <?php
    /*

    <td>
    <?php
              $sql_thanhtoan="select * from thanhtoan  " ;
              $run_thanhtoan=mysqli_query($conn,$sql_thanhtoan);
           ?>
    <select name="id_thanhtoan">
   
  <?php 
                   while ($dong_thanhtoan=mysqli_fetch_array($run_thanhtoan,MYSQLI_ASSOC) ) {
                    if($dong['id_thanhtoan']==$dong_thanhtoan['id_thanhtoan']) {
               ?>
      <option selected="selected" value="<?php echo $dong_thanhtoan['id_thanhtoan']; ?>"> <?php echo $dong_thanhtoan['thanhtoan']; ?> </option>
      <?php
    }else{
       ?>
      <option  value="<?php echo $dong_thanhtoan['id_thanhtoan']; ?>"> <?php echo $dong_thanhtoan['thanhtoan']; ?> </option>
      <?php 
        }
      }
      ?>
      </select>

    </td>
  
    */
    ?>
   
  
 <td>

  <a onclick="return confirm('Bạn có thật sự muốn xóa không');" href="module/quanlydonhang/xuli_xoa.php?id=<?php 
    echo $dong['iddonhang']?>"><i class="fa fa-trash" aria-hidden="true" style="font-size: 150%;"></i></a></td>

  <td>
    <a href="module/quanlydonhang/xuli_thanhtoan.php?id=<?php 
    echo $dong['iddonhang']?>">
         <i class="fa fa-credit-card" aria-hidden="true" style="color:black;font-size: 150%"></i>
   </a>
  </td>
  </tr>
  <?php 
   $stt++;
}
  }
  else {echo "<strong> <h2> Không tìm thấy sản phẩm nào với từ khóa '<b>$search</b>'. Mời bạn nhập vào từ khóa khác </h2> </strong>" ;}
}
  ?>
</table>

</form>
