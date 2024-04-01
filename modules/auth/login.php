
<?php
if(!defined('_CODE')) {
    die('Access denied...');
    
}

$data = [
    'pageTitle' => 'Đăng nhập tài khoản'
];
layouts('header',$data);
?>


<div class="row">
    <div class="col-4" style="margin:200px auto">
    <h2 class="text-center text-uppercase">Đăng nhập</h2>
        <form action="" method="post">
            <label for="">Email:</label>
            <div class="form-group mg-form">
                <input type="email" class="form-control" placeholder="Địa chỉ email">
            </div>
            <label for="">Password:</label>
            <div class="form-group mg-form">
                <input type="password" class="form-control" placeholder="Mật khẩu">
            </div>
            <button type="submit" class="btn btn-primary btn-block mg-btn">
                Đăng nhập
            </button>
            <hr>
            <p class="text-center"><a href="?module=auth&action=forgot">Quên mật khẩu</a></p>
            <p class="text-center"><a href="?module=auth&action=register">Đăng ký tài khoản</a></p>
        </form>
    </div>
</div>

<?php 
layouts('footer');
?>