<?php 

if(!defined('security')){
	die('Bạn không thể truy cập trang này');
	
	}

$conn = mysqli_connect('localhost','root','','vietprophp175');
if($conn){
    mysqli_query($conn,"SET NAMES 'utf8'");// giá trị kết nối
    // print_r('Kết nối thành công');
}
else {
    die('kết nối thất bại');
    
}

?>