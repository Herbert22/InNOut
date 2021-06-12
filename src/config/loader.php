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

function loadTemplateView($viewName, $params = array()) {
    // count — Conta o número de elementos de uma variável, ou propriedades de um objeto
    if(count($params) > 0) {
        foreach($params as $key => $value) {
            // strlen — Retorna o tamanho de uma string
            if(strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/left.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
}

function renderTitle($title, $subtitle, $icon = null) {
    require_once(TEMPLATE_PATH . "/title.php");
}