<?php
echo "<h2>Часть 1. Циклы и условия</h2>";

// --- Задание 1 ---
echo "<h3>Задание 1</h3>";

// 1а) друг за другом в одной строке через пробел
echo "<p>1а) ";
for ($i = 1; $i <= 10; $i++) {
    echo "Helloworld!!! ";
}
echo "</p>";

// 1б) по одному разу в каждой строке
echo "<p>1б)<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Helloworld!!!<br>";
}
echo "</p>";

// 1в) по два раза в каждой строке
echo "<p>1в)<br>";
for ($i = 1; $i <= 10; $i++) {
    echo "Helloworld!!! ";
    if ($i % 2 == 0) {
        echo "<br>";
    }
}
echo "</p>";


// --- Задание 2 ---
echo "<h3>Задание 2</h3>";
// Распечатать 10 раз, но с помощью if пропустить 5-й вывод (демонстрация for + if)
echo "<p>2) ";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Пропускаем 5-ю итерацию
    }
    echo "Helloworld!!!<br>";
}
echo "</p>";


// --- Задание 3 ---
echo "<h3>Задание 3</h3>";

// 3а) в четных строках жирным, в нечетных курсивом
echo "<p>3а)<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "<b>Helloworld!!!</b><br>";
    } else {
        echo "<i>Helloworld!!!</i><br>";
    }
}
echo "</p>";

// 3б) в четных строках красным, в нечетных зеленым
echo "<p>3б)<br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "<span style='color:red;'>Helloworld!!!</span><br>";
    } else {
        echo "<span style='color:green;'>Helloworld!!!</span><br>";
    }
}
echo "</p>";


// --- Задание 4 ---
echo "<h3>Задание 4</h3>";
$day = 3; // Присваиваем значение от 1 до 7 (например, 3)

echo "<p>4) ";
switch ($day) {
    case 1: echo "$day - Понедельник"; break;
    case 2: echo "$day - Вторник"; break;
    case 3: echo "$day - Среда"; break;
    case 4: echo "$day - Четверг"; break;
    case 5: echo "$day - Пятница"; break;
    case 6: echo "$day - Суббота"; break;
    case 7: echo "$day - Воскресенье"; break;
    default: echo "Неверный день недели";
}
echo "</p>";


// --- Задание 5 ---
echo "<h3>Задание 5</h3>";
$arr = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", 
        "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"];

echo "<p>5)<br>";
$i = 0;
while ($i < count($arr)) {
    $monthNumber = $i + 1; // Чтобы считать месяцы с 1, а не с 0
    if ($monthNumber % 2 == 0) {
        echo "<b>$monthNumber. {$arr[$i]}</b><br>";
    } else {
        echo "<i>$monthNumber. {$arr[$i]}</i><br>";
    }
    $i++;
}
echo "</p>";
?>