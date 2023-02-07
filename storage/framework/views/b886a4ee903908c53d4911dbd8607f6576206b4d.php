<?php $__env->startSection('orderadd'); ?>
 <div class="bodythanhtoan">
 <div class="thanhtoan">
            <div class="thanhtoanleft">
                <div class="ctdh"><h2>CHI TIẾT ĐƠN HÀNG</h2></div>
                <div class="nhapthanhtoan">
                    <div class="nhapten">
                    <p>Tên <i style="color: red;">*</i></p>
                    <input class="inputten" type="text">
                    </div>
                    <div class="nhapten ho">
                    <p>Họ <i style="color: red;">*</i></p>
                    <input class="inputten " type="text">
                    </div>
                </div>
                <div class="nhapdiachi">
                <div class="nhapdiachi-1">
                    <p>Quốc gia/Khu vực <i style="color: red;">*</i></p>
                        <select  class="inputdiachi">
                            <option value="">Việt Nam</option>
                            <option value="">Nhật Bản</option>
                            <option value="">Trung Quốc</option>
                        </select>
                </div>
                <div class="nhapdiachi-1">
                    <p>Tỉnh thành <i style="color: red;">*</i></p>
                        <select  class="inputdiachi">
                            <option value="">Hà Nội</option>
                            <option value="">Hà Nam</option>
                            <option value="">Sơn La</option>
                        </select>
                </div>
                <div class="nhapdiachi-1">
                    <p>Quận huyện <i style="color: red;">*</i></p>
                        <select  class="inputdiachi">
                            <option value="">Sơn Tây</option>
                            <option value="">Duy Tiên</option>
                            <option value="">Ba Vì</option>
                        </select>
                </div>
                <div class="nhapdiachi-1">
                <p>Địa chỉ <i style="color: red;">*</i></p>
                    <input class="inputdiachi" type="text">
                </div>
                <div class="nhapdiachi-1">
                <p>Số điện thoại <i style="color: red;">*</i></p>
                    <input class="inputdiachi" type="text">
                </div>
                <div class="nhapdiachi-1">
                <p>Địa chỉ Email (Tùy chọn)</i></p>
                    <input class="inputdiachi" type="text">
                </div>
                <div class="nhapdiachi-1">
                <p>Ghi chú</i></p>
                    <input class="inputghichu" type="text">
                </div>
            </div>
        </div>
        <div class="thanhtoanright">
            <div class="boder-thanhtoan">
            <div class="ctdh"><h2>THÔNG TIN</h2></div>
                <div class="sanpham">
                    <p>SẢN PHẨM</p>
                    <p>Trà sữa x 1<i style="padding-left:55%;">150.000 đ</i></p>
                    <p>Nếu bạn có mã giảm giá, vui lòng điền vào phía bên dưới.</p>
                    <div class="giamgia">
                        <input class="inputgiamgia" placeholder="NHẬP MÃ GIẢM GIÁ" type="text">
                        <button class="buttonapdung">ÁP DỤNG</button>
                    </div>
                    <p>Tạm tính<i class="tien">150.000 đ</i></p>
                    <p>Tổng tiền<i style="padding-left:59%;">150.000 đ</i></p>
                <div class="nhapdiachi-1">
                    <p class="phigiaohang">* Phí giao hàng sẽ được thông báo khi nhân viên chăm sóc khách hàng liên hệ xác nhận đơn hàng</p>
                    <p>Phương thức thanh toán</p>
                        <select  class="inputdiachi1">
                            <option value="">Trả tiền mặt khi nhận hàng</option>
                            <option value="">Trả tiền bằng thẻ khi nhận hàng</option>
                        </select>
                     <p style="font-size: small;">(Nhân viên giao hàng sẽ mang máy quẹt thẻ tới khi giao hàng)</p>
                </div>
                <p style="color: grey;"><i style="font-size: small;">Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website,
                    và cho các mục đích cụ thể khác đã được mô tả trong</i><i style="color: red;"><a href="">chính sách riêng tư</a></i>.</p>
                </div>
                <input type="button" style="cursor: pointer;" value="ĐẶT HÀNG" class="buttondathang">
            </div>

        </div>
    </div>
 </div>
 <?php $__env->stopSection(); ?>



<?php echo $__env->make('index.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/index/order.blade.php ENDPATH**/ ?>