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
