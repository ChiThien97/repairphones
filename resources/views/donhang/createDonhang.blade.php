@extends('layouts.app-demo')

@section('content')
<div class="container bg-white"> 
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <button class="btn btn-dark" href="#"><i class="fas fa-arrow-left"></i> Quay lại trang sản phẩm</button>
                    </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-4">
                        <h5 class="card-title text-uppercase h2">Thông tin đơn đặt hàng của bạn</h5>
                    </div>
                    <form action="" method="POST">
                        <div class="row justify-content-center">
                            <div class="form-group col-4">
                                <label for="hoTen">Họ và tên:</label>
                                <input type="text" class="form-control" id="hoTen" aria-describedby="hoTenHelp" placeholder="VD: Nguyễn Văn A" required>
                                <small id="hoTenHelp" class="form-text text-muted">* Vui lòng nhập chính xác tên người sử dụng dịch vụ</small>
                            </div>
                            <div class="form-group col-4">
                                <label for="phone">Số điện thoại:</label>
                                <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại">
                                <small id="hoTenHelp" class="form-text text-muted">* Vui lòng nhập chính xác số điện thoại người sử dụng dịch vụ</small>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-4">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="VD: example@gmail.com" required>
                                <small id="emailHelp" class="form-text text-muted">* Chúng tôi sẽ không chia sẻ email của quý khách hàng dưới bất kì hình thức nào</small>
                            </div>
                            <div class="form-group col-4">
                                <label for="address">Chọn địa chỉ RepairphoneS gần bạn:</label>
                                <select class="form-control custom-select custom-select-md" name="" id="address">
                                    <option selected>--Chọn địa chỉ--</option>
                                    <option value="180CLHCM">180, Cao Lỗ, P. 4, Q. 8, Hồ Chí Minh</option>
                                    <option value="180CLHCM">126, Hồ Tùng Mậu, P. Mai Dịch, Q. Cầu Giấy, Hà Nội</option>
                                </select>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col-8">DỊCH VỤ</th>
                                    <th scope="col-4">TẠM TÍNH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>Thay màn hình iphone xs max chính hãng pisen</td>
                                    <td class="text-danger">1.000.000 VNĐ</td>
                                    </tr>
                                    <tr>
                                    <td>Thay màn hình iphone xs max chính hãng pisen</td>
                                    <td class="text-danger">1.000.000 VNĐ</td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-light">
                                    <tr>
                                        <td>Tổng cộng:</td>
                                        <td class="text-danger h5 font-weight-bolder">1.000.000 VNĐ</td>
                                    </tr>
                                </tfoot>
                            </table>

                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-dark btn-lg font-weight-bold" type="submit">ĐẶT LỊCH SỬA CHỮA</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection