<?php $__env->startSection('orderadd'); ?>
<form action="" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
 <div class="bodythanhtoan">
 <div class="thanhtoan">

            <div class="thanhtoanleft">
                <div class="ctdh"><h2>CHI TIẾT ĐƠN HÀNG</h2></div>
                <div class="nhapthanhtoan">
                    <div class="nhapten">
                    <p>Tên <i style="color: red;">*</i></p>
                    <input name="name" class="inputten" type="text">
                    </div>
                    <div class="nhapten ho">
                    <p>Họ <i style="color: red;">*</i></p>
                    <input name="surname" class="inputten " type="text">
                    </div>
                </div>
                <div class="nhapdiachi">
                <div class="nhapdiachi-1">
                    <p>Quốc gia/Khu vực <i style="color: red;">*</i></p>
                        <select name="country" class="inputdiachi">
                            <option selected value="Việt Nam">Việt Nam</option>
                            <option value="Nhật Bản">Nhật Bản</option>
                            <option value="Trung Quốc">Trung Quốc</option>
                        </select>
                </div>
                <div class="nhapdiachi-1">
                    <p>Tỉnh thành <i style="color: red;">*</i></p>
                        <select name="city" class="inputdiachi">
                            <option selected value="Hà Nội">Hà Nội</option>
                            <option value="Hà Nam">Hà Nam</option>
                        </select>
                </div>
                <div class="nhapdiachi-1">
                    <p>Quận huyện <i style="color: red;">*</i></p>
                        <select name="district" class="inputdiachi">
                            <option selected value="Sơn Tây">Sơn Tây</option>
                            <option value="Duy Tiên">Duy Tiên</option>
                            <option value="Ba Vì">Ba Vì</option>
                        </select>
                </div>
                <div class="nhapdiachi-1">
                <p>Địa chỉ <i style="color: red;">*</i></p>
                    <input name="address" class="inputdiachi" type="text">
                </div>
                <div class="nhapdiachi-1">
                <p>Số điện thoại <i style="color: red;">*</i></p>
                    <input name="phone" class="inputdiachi" type="text">
                </div>
                <div class="nhapdiachi-1">
                <p>Địa chỉ Email (Tùy chọn)</i></p>
                    <input name="email" class="inputdiachi" type="text">
                </div>
                <div class="nhapdiachi-1">
                <p>Ghi chú</i></p>
                    <input name="description" class="inputghichu" type="text">
                </div>
            </div>
        </div>
        <div class="thanhtoanright">
            <div class="boder-thanhtoan">
            <div class="ctdh"><h2>THÔNG TIN</h2></div>
                <div class="sanpham">
                    <p>SẢN PHẨM</p>
                    <input class="inputgiamgia" type="text" name="product_name" value="<?php echo e($hanghoashow->name); ?>">
                    <input class="inputgiamgia" type="text" name="price" value="<?php echo e($hanghoashow->price); ?>" >
                    <div class="giamgia">
                        <input class="inputgiamgia" name="amount" placeholder="NHẬP SỐ LƯỢNG" type="text">
                        <input class="inputgiamgia" name="voucher" placeholder="NHẬP MÃ GIẢM GIÁ" type="text">
                        <input class="inputgiamgia" name="total" placeholder="TỔNG GIÁ" type="text" >
                        <p style="border:1px;border-radius:5px;width:200px; padding-left:35px" id="tinhtong" class="buttonapdung">TÍNH TỔNG GIÁ</p>
                    </div>
                    <p>Tổng tiền<i style="padding-left:59%;"></i></p>
                <div class="nhapdiachi-1">
                    <p class="phigiaohang">* Phí giao hàng sẽ được thông báo khi nhân viên chăm sóc khách hàng liên hệ xác nhận đơn hàng</p>
                    <p>Phương thức thanh toán</p>
                        <select name="payment" class="inputdiachi1">
                            <option selected value="Trả tiền mặt khi nhận hàng">Trả tiền mặt khi nhận hàng</option>
                            <option value="Trả tiền bằng thẻ khi nhận hàng">Trả tiền bằng thẻ khi nhận hàng</option>
                        </select>
                     <p style="font-size: small;">(Nhân viên giao hàng sẽ mang máy quẹt thẻ tới khi giao hàng)</p>
                </div>
                <p style="color: grey;"><i style="font-size: small;">Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, tăng trải nghiệm sử dụng website,
                    và cho các mục đích cụ thể khác đã được mô tả trong</i><i style="color: red;"><a href="">chính sách riêng tư</a></i>.</p>
                </div>
                <input type="submit" style="cursor: pointer;" value="submit" class="buttondathang">
            </div>

        </div>
    </div>
 </div>
</form>
 <script>
    $(function(){
        $("#tinhtong").click(function () {
           var a = parseInt($("input[name='price']").val());
          var b = parseInt($("input[name='amount']").val());
          $("input[name='total']").val(a*b);
        }).change();
    });
</script>
 <?php $__env->stopSection(); ?>



<?php echo $__env->make('index.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\laraveldemoabc\resources\views/admin/order/order.blade.php ENDPATH**/ ?>