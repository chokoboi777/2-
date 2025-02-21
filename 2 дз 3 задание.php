<?php
function getDaysInMonth($month) {
    $daysInMonths = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    if ($month < 1 || $month > 12) {
        return "Некорректный номер месяца. Введите число от 1 до 12.";
    }

    return $daysInMonths[$month - 1];
}

$month = (int)readline("Введите порядковый номер месяца (1-12): ");

echo getDaysInMonth($month) . "\n";
