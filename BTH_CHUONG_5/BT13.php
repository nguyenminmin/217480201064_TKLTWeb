<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <form method="post">
        <label>Nhập danh sách các số nguyên (cách nhau bởi dấu phẩy):</label>
        <input type="text" name="danh_sach_so" required>
        <br><br>
        <label>Chọn công việc:</label>
        <select name="cong_viec">
            <option value="lon_nhat">Tìm số lớn nhất</option>
            <option value="nho_nhat">Tìm số nhỏ nhất</option>
            <option value="so_chinh_phuong">Tìm các số chính phương</option>
            <option value="so_chan">In ra các số chẵn</option>
            <option value="so_le">In ra các số lẻ</option>
            <option value="sap_xep_tang_dan">Sắp xếp tăng dần</option>
        </select>
        <br><br>
        <input type="submit" name="thuc_hien" value="Thực hiện">
    </form>

    <?php
    if (isset($_POST['thuc_hien'])) {
        $danh_sach_so = explode(',', $_POST['danh_sach_so']);
        $danh_sach_so = array_map('intval', $danh_sach_so);
        $cong_viec = $_POST['cong_viec'];

        function timSoLonNhat($mang) {
            return max($mang);
        }

        function timSoNhoNhat($mang) {
            return min($mang);
        }

        function timSoChinhPhuong($mang) {
            return array_filter($mang, function($so) {
                return $so >= 0 && sqrt($so) == floor(sqrt($so));
            });
        }

        function timSoChan($mang) {
            return array_filter($mang, function($so) {
                return $so % 2 == 0;
            });
        }

        function timSoLe($mang) {
            return array_filter($mang, function($so) {
                return $so % 2 != 0;
            });
        }

        function sapXepTangDan($mang) {
            sort($mang);
            return $mang;
        }

        switch ($cong_viec) {
            case 'lon_nhat':
                echo "Số lớn nhất: " . timSoLonNhat($danh_sach_so);
                break;
            case 'nho_nhat':
                echo "Số nhỏ nhất: " . timSoNhoNhat($danh_sach_so);
                break;
            case 'so_chinh_phuong':
                $so_chinh_phuong = timSoChinhPhuong($danh_sach_so);
                echo "Các số chính phương: " . implode(', ', $so_chinh_phuong);
                break;
            case 'so_chan':
                $so_chan = timSoChan($danh_sach_so);
                echo "Các số chẵn: " . implode(', ', $so_chan);
                break;
            case 'so_le':
                $so_le = timSoLe($danh_sach_so);
                echo "Các số lẻ: " . implode(', ', $so_le);
                break;
            case 'sap_xep_tang_dan':
                $mang_sap_xep = sapXepTangDan($danh_sach_so);
                echo "Mảng sau khi sắp xếp tăng dần: " . implode(', ', $mang_sap_xep);
                break;
        }
    }
    ?>
</body>
</html>
