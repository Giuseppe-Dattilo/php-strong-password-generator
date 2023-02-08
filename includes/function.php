<?php

 session_start();

if (!empty( $_GET ['password_length'])) {
    $pass_length = $_GET ['password_length'];
    $password = create_password($pass_length);
    $_SESSION['password'] = $password;
}


function create_password($length) {
    $characters = '0123456789bcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$&%£/()=?^*ç°§#@¶[]';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
};


