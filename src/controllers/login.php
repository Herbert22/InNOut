<?php
loadModel('Login');
$exception = null;

// count — Conta o número de elementos de uma variável, ou propriedades de um objeto
if(count($_POST) > 0) {
    $login = new Login($_POST);
    try {
        $user = $login->checkLogin();
        header("Location: day_records.php");
    } catch(AppException $e) {
        $exception = $e;
    }
}

loadView('login', $_POST + ['exception' => $exception]);