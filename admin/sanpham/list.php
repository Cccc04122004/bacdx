
<style>
    /* Các phần tử chung */
.row {
    margin-bottom: 20px;
}

/* Tiêu đề trang */
.frmtitle {
    background-color: #343a40;
    color: #fff;
    padding: 10px;
    text-align: center;
}

/* Bảng danh sách sản phẩm */
table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

th, td {
    border: 1px solid #dee2e6;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #343a40;
    color: #fff;
}

/* Ảnh sản phẩm */
td img {
    max-width: 80px;
    max-height: 80px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Cột hành động */
td a {
    margin-right: 5px;
    text-decoration: none;
    color: #007bff;
}

/* Nút nhập thêm */
input[type="button"] {
    background-color: #28a745;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Nút xóa và sửa */
input[type="button"]:hover {
    background-color: #218838;
}
</style>
<div class="row2">
    <div class="row2 font_title">
        <h1>DANH SÁCH LOẠI ĐIỆN THOẠI</h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
                <form action="index.php?act=listsp" method="post">
                    <select name="iddm" id="">
                        <option value="0" selected>Tất cả</option>
                        <?php 
                            foreach($listdanhmuc as $danhmuc){  
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$tendm.'</option>';
                            }
                        ?>
                        <input type="submit" value="GO" name="clickOK">
                    </select>
                </form>
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐIỆN THOẠI</th>
                        <th>TÊN ĐIỆN THOẠI</th>
                        <th>GIÁ CŨ</th>
                        <th>GIA MỚI</th>
                        <th>ẢNH ĐIỆN THOẠI</th>
                        <th style="text-align:center;">MÔ TẢ</th>
                        <th>CHỨC NĂNG</th>
                        
                    </tr>
                    <?php 
                        foreach($listsanpham as $sanpham){
                            extract($sanpham);
                            $hard_delete = "index.php?act=hard_delete&id=".$id;
                            $soft_delete = "index.php?act=soft_delete&id=".$id;
                            $suasp = "index.php?act=suasp&id=".$id;
                            $hinhpath = "../upload/".$img;
                            if(is_file($hinhpath)){
                                $hinh = '<img src="'.$hinhpath.'" alt="" width="100px" height="100px">';
                            }else{
                                $hinh = "not file img!";
                            }
                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$giacu.'</td>
                                    <td>'.$giamoi.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>'.$mota.'</td>
                                    <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a>
                                    <a href="'.$hard_delete.'"><input type="button" value="Xóa cứng" onclick="return confirm(\'bạn có chắc chắn muốn xóa\')"></a> 
                                    <a href="'.$soft_delete.'"><input type="button" value="Xóa mềm" onclick="return confirm(\'bạn có chắc chắn muốn xóa\')"></a> 
                                </tr>';
                        }
                    ?>
                    
                  
                </table>
            </div>
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>