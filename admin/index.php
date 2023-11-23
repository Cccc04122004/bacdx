<?php
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    // include "../model/thongke.php";
    // include "../model/binhluan.php";
    // include "../model/taikhoan.php";
    
    include "header.php";
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case "listdm":
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "adddm":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tendm = $_POST['tendm'];
                    add_danhmuc($tendm);
                }
                include "danhmuc/add.php";
                break;
            case "suadm":
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $tendm = load_ten_dm($_GET['id']);
                }  
                include "danhmuc/update.php";
                break;
            case "updatedm":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $tendm = $_POST['tendm'];
                    
                    update_danhmuc($id,$tendm);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "xoadm" :
                if(isset($_GET['id'])){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            case "listsp":
                if (isset($_POST['clickOK']) && ($_POST['clickOK'])) {
                    $keyw = $_POST['keyw'];
                    $iddm = $_POST['iddm'];
                } else {
                    $keyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($keyw, $iddm);
                include "sanpham/list.php";
                break;
            case "addsp":
                if(isset($_POST['themmoi']) && $_POST['themmoi']){

                    $iddm = $_POST['iddm'];
                    $id= $_POST['id'];
                    $name = $_POST['name'];
                    $giacu = $_POST['giacu'];
                    $giamoi= $_POST['giamoi'];
                    $mota= $_POST['mota'];
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = '../upload/';
                    $target_file = $target_dir.basename($hinh);
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                        // echo "thành công";
                    }else{
                        // echo " không thành công";
                    }
                    $mota = $_POST['mota'];


                    insert_sanpham($name,$giacu,$giamoi,$hinh,$mota,$iddm);
                    $thanhcong = "add sản phẩm thành công";
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/add.php";
                break;
            
            case "suasp":
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $sanpham = loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case "updatesp":
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $iddm = $_POST['iddm'];
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $giacu = $_POST['giacu'];
                    $giamoi= $_POST['giamoi'];
                    
                    $hinh = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir.basename($_FILES['hinh']['name']);
                    $mota = $_POST['mota'];
                    if(move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file)){
                        echo "thanh công";
                    }else{
                        echo "lỗi";
                    }
                    update_sanpham($id,$iddm,$name,$giacu,$giamoi,$mota,$hinh);
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham('',0);
                include "sanpham/list.php";
                break;
            case "hard_delete":
                if(isset($_GET['idsp'])){
                    hard_delete($_GET['idsp']);
                }
                $listsanpham = loadall_sanpham('', 0);
                include "sanpham/list.php";
                break;
            case "soft_delete":
                if(isset($_GET['idsp'])){
                    soft_delete($_GET['idsp']);;
                }
                $listsanpham = loadall_sanpham('',0);
                $listdanhmuc = loadall_danhmuc();
                include "sanpham/list.php";
                break;
           
        }
    } else {
        include "home.php";
    }
    include "footer.php";
?>