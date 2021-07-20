<?php
function getDateAsDateTime($date) {
    // is_string — Informa se a variável é do tipo string
    return is_string($date) ? new DateTime($date) : $date;
}

function isWeekend($date) {
    // format('N') — Representação numérica ISO-8601 do dia da semana / 1 (para Segunda) até 7 (para Domingo)
    $inputDate = getDateAsDateTime($date);
    return $inputDate->format('N') >= 6;
}

function isBefore($date1, $date2) {
    $inputDate1 = getDateAsDateTime($date1);
    $inputDate2 = getDateAsDateTime($date2);
    return $inputDate1 <= $inputDate2;
}

function getNextDay($date) {
    $inputDate = getDateAsDateTime($date);
    $inputDate->modify('+1 day');
    return $inputDate;
}

function sumIntervals($interval1, $interval2) {
    $date = new DateTime('00:00:00');
    // add - Adiciona uma quantidade de dias, meses, anos, horas, minutos e segundos a um objeto DateTime
    $date->add($interval1);
    $date->add($interval2);
    // diff - Retorna a diferença entre dois objetos que implementam a classe DateTimeInterface.
    return (new DateTime('00:00:00'))->diff($date);
}

function subtractInterval($interval1, $interval2) {
    $date = new DateTime('00:00:00');
    $date->add($interval1);
    $date->sub($interval2);
    return (new DateTime('00:00:00'))->diff($date);
}

function getDateFromInterval($interval) {
    return new DateTimeImmutable($interval->format('%H:%i:%s'));
}

function getDateFromString($str) {
    return DateTimeImmutable::createFromFormat('H:i:s', $str);
}