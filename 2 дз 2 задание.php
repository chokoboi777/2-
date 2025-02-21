<?php

function DanilaMosunov($a, $b, $c) {
    
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
        return "Треугольник не существует.";
    }

    if ($a == $b && $b == $c) {
        return "Треугольник равносторонний.";
    } elseif ($a == $b || $a == $c || $b == $c) {
        return "Треугольник равнобедренный.";
    } else {
        return "Треугольник разносторонний.";
    }
}
$a = (float)readline("Введите длину первой стороны: ");
$b = (float)readline("Введите длину второй стороны: ");
$c = (float)readline("Введите длину третьей стороны: ");


if ($a <= 0 || $b <= 0 || $c <= 0) {
    echo "Длины сторон должны быть положительными числами.\n";
} else {
    echo DanilaMosunov($a, $b, $c) . "\n";
}
