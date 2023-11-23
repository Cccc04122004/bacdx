<?php 
    // hiện thị 9 sản phẩm mới nhất
    function loadall_sanpham_home(){
        $sql = "SELECT * FROM sanpham WHERE 1 ORDER BY id desc LIMIT 0,9";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    // hiện thị top10 san phâm có lượt xem cao nhât

    function loadone_sanpham($id){
        $sql = "SELECT * FROM sanpham WHERE id = $id";
        $result = pdo_query_one($sql);
        return $result;
    }

    function loadsp_cung_loai($id, $iddm){
        $sql = "SELECT * FROM sanpham WHERE iddm = $iddm and id <> $id";
        $result = pdo_query($sql);
        return $result;
    }

    function loadall_sanpham($kyw = '', $iddm){
        $sql = "SELECT * FROM sanpham  WHERE trangthai=0";

        if($kyw != ''){
            $sql .= " and name like '%".$kyw."%' ";
        }
        if($iddm != 0){
            $sql .= ' and iddm = '.$iddm.'';
        }
        $sql .= " ORDER BY id desc";
        $listsanpham=pdo_query($sql);
        return  $listsanpham;
    }

    function insert_sanpham($name,$giacu,$giamoi,$hinh,$mota,$iddm){
        $sql = "INSERT INTO sanpham(name,giacu,giamoi,img,mota,iddm) VALUES ('$name','$giacu','$giamoi','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function update_sanpham($id,$iddm,$name,$giacu,$giamoi,$mota,$hinh){
        if($hinh != ""){
            
            $sql = "UPDATE sanpham SET name='$name',giacu='$giacu',giamoi='$giamoi',img='$hinh',mota='$mota',iddm='$iddm' WHERE id=".$id;
        }else{
            $sql = "UPDATE sanpham SET name='$name',giacu='$giacu',giamoi='$giamoi',mota='$mota',iddm='$iddm' WHERE id=".$id;
        }
        pdo_execute($sql);
    }

    // câu truy vấn xóa cứng 
    function hard_delete($id){
        $sql = "DELETE FROM sanpham WHERE id=".$id;
        pdo_execute($sql);
    }

    // câu truy vấn xóa mềm 
    function soft_delete($id){
        $sql = "UPDATE sanpham SET trangthai = 1 WHERE id=".$id;
        pdo_execute($sql);
    }

?>