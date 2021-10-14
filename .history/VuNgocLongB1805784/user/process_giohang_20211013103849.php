<?php
    session_start();
    include "../admin/process/mysql_connect.php";
    
    if(isset($_POST['themgiohang'])){
        $mshh = $_GET["mshh"];
        $result = $conn->query("SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH JOIN loaihanghoa lh ON lh.MaLoaiHang = hh.MaLoaiHang WHERE hh.MSHH='".$_GET['mshh']."'");
        $row = $result->fetch_assoc();
        if(isset($_SESSION['giohang']) == FALSE){
            $_SESSION['giohang']=[];
        }

        $soluong =1;
        $item_giohang=$_SESSION["giohang"][$mshh];
        
        if($item_giohang!=NULL){
            if($item_giohang["soluong"] < $row["SoLuongHang"]){
				$soluong=$item_giohang["soluong"]+1;
			}else{
				$soluong=$item_giohang["soluong"]+0;
			}
        }

        $_SESSION['giohang'][$mshh] = [ 'TenHinh' => $row['TenHinh'],
                                    'tensach' => $row['TenHH'],
                                    'giasach' => $row['Gia'],
                                    'soluong' => $soluong,
                                    'tientong' => $soluong * $row['Gia']
        ];

        echo  $_SESSION['giohang'][$mshh]['TenHinh'];
    }
?>