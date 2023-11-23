<?php 
    function loadall_danhmuc(){
        $sql = "SELECT * FROM danhmuc ORDER BY id desc";
        $listdanhmuc = pdo_query($sql);
        return $listdanhmuc;
    }

    function load_ten_dm($id){
        $sql = "SELECT * FROM danhmuc WHERE id =".$id;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $tendm;
    }
    function update_danhmuc($id,$tendm){
        $sql = "UPDATE danhmuc SET tendm = '$tendm' WHERE id=".$id;
        pdo_execute($sql);
    }

    function add_danhmuc($tendm){
        $sql = "INSERT INTO danhmuc( tendm) VALUES ('$tendm')";
        pdo_execute($sql);
    }

    function delete_danhmuc($id){
        $sql = "DELETE FROM danhmuc WHERE id =" .$id;
        pdo_execute($sql);
    }
?>