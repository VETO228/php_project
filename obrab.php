<?php
// Получаем значения переменных, переданных методом GET
$login = $_GET["login"];
$password = $_GET["password"];
$button = $_GET["button"];

// Выводим результат
echo "<h2>Результат обработки формы (метод GET)</h2>";
echo "<p>Вы ввели:</p>";
echo "<ul>";
echo "<li>Логин: <b>" . htmlspecialchars($login) . "</b></li>";
echo "<li>Пароль: <b>" . htmlspecialchars($password) . "</b></li>";
echo "<li>Нажата кнопка: <b>" . htmlspecialchars($button) . "</b></li>";
echo "</ul>";

// Демонстрация: выводим весь массив $_GET
echo "<h3>Содержимое массива \$_GET:</h3>";
echo "<pre>";
print_r($_GET);
echo "</pre>";
?>