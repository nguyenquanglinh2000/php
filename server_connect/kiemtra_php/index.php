<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <div class="all">
        <h2>ĐĂNG KÝ ĐỂ MỞ THẺ NGAY ĐỂ NHẬN QUÀ TẶNG!</h2>
        <form action="xuly.php" method="POST">
            <div class="form_in">
               <div class="form_in_top">
                    <div class="inf">
                        <label for="#">Họ và tên</label>
                        <input type="text" name="name"class="pd-name">
                    </div>

                    <div>
                        <label for="#">Điện thoại</label>
                        <input type="text" name="phone" class="pd"> 
                    </div>

                    <div>
                        <label for="#">Email</label>
                        <input type="text" name="email"class="pd-em">
                    </div>

                    <div class="inf-all">
                        <label for="#">Thu nhập hàng tháng qua chuyển khoản ngân hàng</label>
                        <select name="thunhap" class="h6c">
                            <option value="Vui lòng chọn">Vui lòng chọn</option>
                            <option value="Nhỏ hơn 6 triệu">Nhỏ hơn 6 triệu</option>
                            <option value="Từ 6 triệu đến 30 triệu">Từ 6 triệu đến 30 triệu</option>
                            <option value="Từ 30 triệu trở lên">Từ 30 triệu trở lên</option>
                        </select>
                    </div>                        
               </div>

               <div class="form_in_bottom">
                    <h3>Chi nhánh tư vấn</h3>
                    
                    <div>
                        <label for="#">Tỉnh/Thành phố</label>
                        <select name="tinh_thanhpho">
                            <option value="Chọn tỉnh thành phố ">Chọn tỉnh thành phố </option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                            <option value="Hải Phòng">Hải Phòng</option>
                            <option value="Cần Thơ">Cần Thơ</option>
                            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        </select>
                    </div>

                    <div>
                        <label for="#">Quận/Huyện</label>
                        <select name="quanhuyen" disabled="disabled" class="pd en">
                            <option value="">Quận/Huyện</option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                            <option value=""></option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="#">Chi nhánh</label>
                        <select name="chi_nhanh" class="pd ep">
                            <option value="Techcombank Ba Đình">Techcombank Ba Đình</option>
                            <option value="Techcombank Bà Triệu">Techcombank Bà Triệu</option>
                            <option value="Techcombank Bắc Cường">Techcombank Bắc Cường</option>
                            <option value="Techcombank Bắc Giang">Techcombank Bắc Giang</option>
                        </select>
                    </div>
               </div>

                <div class="submit">
                    <input type="submit" value="Gửi thông tin">
                </div>
            </div>
        </form>
    </div>
</body>
</html>