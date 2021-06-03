<?php

function loadModel($modelName) {
    require_once(MODEL_PATH . "/{$modelName}.php");
}

function loadView($viewName, $params = array()) {
    // count — Conta o número de elementos de uma variável, ou propriedades de um objeto
    if(count($params) > 0) {
        foreach($params as $key => $value) {
            // strlen — Retorna o tamanho de uma string
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH . "/{$viewName}.php");
}