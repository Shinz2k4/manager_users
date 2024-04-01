<!-- các hàm xử lí liên quan đến cơ sở dữ liệu  -->
<?php
if(!defined('_CODE')) {
    die('Access denied...');
}

function query($sql,$data=[]) {
    global $conn;
    $ketqua = false;
    try {
        $statement = $conn -> prepare($sql);

        if(!empty($data)) {
            $ketqua = $statement -> execute($data);  
        } else {
            $ketqua = $statement -> execute();
        }

    }catch(Exception $exp) {
        echo $exp -> getMessage().'<br>';
        echo 'File'.$exp -> getFile().'br';
        echo 'Line'.$exp -> getLine();
        die();
    }
    return $ketqua;
}
 
function insert($table, $data) {
    $key = array_keys($data);
    $truong = implode(',', $key);
    $valuetb = ':' . implode(', :', $key);

    $sql = 'INSERT INTO ' . $table . '(' . $truong . ') VALUES (' . $valuetb . ')';

    $kq = query($sql, $data);
    return $kq;
}