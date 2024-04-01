<?php 
try {
    echo "kêt nối thành công";
    accounts();

} catch (Error $exception) { 
    echo $exception -> getMessage().'<br>';
    echo 'File'.$exception -> getFile().'<br>';
    echo 'Line'.$exception -> getLine();
}
echo "Vẫn chạy bình thường ";