
<?php
if(!defined('_CODE')) {
    die('Access denied...');
    
}
$data = [
    'full_name' => 'Đăng ký tài khoản',
    'email' => '0xzminhzx0@gmail.com',
    'phone' => '0983234862',
    'password' => 'dminh2k4',

];

insert('users',$data);


layouts('header',$data);
?>



<div class="row">
    <div class="col-4" style="margin:100px auto">
    <h2 class="text-center text-uppercase">Đăng kí tài khoản</h2>
        <form action="" method="post">
            <label for="">Họ tên:</label>
            <div class="form-group mg-form">
                <input type="fullname" class="form-control" placeholder="Họ và tên">
            </div>
            <label for="">Email:</label>
            <div class="form-group mg-form">
                <input type="email" class="form-control" placeholder="Địa chỉ email">
            </div>
            <label for="">Số điện thoại:</label>
            <div class="form-group mg-form">
                <input type="numberphone" class="form-control" placeholder="Số điện thoại">
            </div>
            <label for="">Password:</label>
            <div class="form-group mg-form">
                <input type="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <label for="">Nhập lại password:</label>
            <div class="form-group mg-form">
                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu">
            </div>
            <button type="submit" class=" btn btn-primary btn-block mg-btn">
                Đăng kí 
            </button>
            <hr>
            <p class="text-center"><a href="?module=auth&action=login">Đăng nhập tài khoản</a></p>
        </form>
    </div>
</div>

<?php 
layouts('footer');
?>