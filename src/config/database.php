<?php

// realpath() expande todos os links simbólicos e resolve referências para '/./', '/../' e extra caracteres '/' na entrada pelo path, e retorna o path absoluto canonicalizado.
// parse_ini_file() carrega o arquivo INI especificado em filename e retorna as configurações contidas nele em um array associativo.
// mysqli - Representa uma conexão entre PHP e um banco de dados MySQL.

class Database {

    public static function getConnection() {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli($env['host'], $env['username'], 
            $env['password'], $env['database']);

        if($conn->connect_error) {
            die("Erro: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function getResultFromQuery($sql) {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
}