<?php

require_once(dirname(__FILE__) . '/../src/config/config.php');
require_once(dirname(__FILE__) . '/../src/models/User.php');

// $user = new User(['name' => 'Lucas', 'email' => 'lucas@abc.com']);
// print_r($user);
// echo '<br><br>';
// $user->email = 'lucas@alterado.com';
// print_r($user->email);

echo User::getSelect(['id' => 1], 'name, email');
echo '<br>';
echo User::getSelect(['name' => 'Chaves', 'email' => 'chaves@cod3r.com.br']);