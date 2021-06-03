<?php
// date_default_timezone_set - Define o fuso horário padrão usado por todas as funções de data / hora em um script.
// setlocale - Definir informações de localidade.

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');



// Pastas

// define - define uma constante nomeada.
// realpath - Retorna o caminho absoluto canonizado.
// dirname - Retorna o caminho de um diretório pai.

define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('CONTROLLERS_PATH', realpath(dirname(__FILE__) . '/../controllers'));


// Arquivos

require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(MODEL_PATH. '/Model.php'));