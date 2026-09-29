<?php
// Получаем значения переменных, переданных методом POST
$login = $_POST["login"];
$password = $_POST["password"];
$button = $_POST["button"];

// Выводим результат
echo "<h2>Результат обработки формы (метод POST)</h2>";
echo "<p>Вы ввели:</p>";
echo "<ul>";
echo "<li>Логин: <b>" . htmlspecialchars($login) . "</b></li>";
echo "<li>Пароль: <b>" . htmlspecialchars($password) . "</b></li>";
echo "<li>Нажата кнопка: <b>" . htmlspecialchars($button) . "</b></li>";
echo "</ul>";

// Демонстрация: выводим весь массив $_POST
echo "<h3>Содержимое массива \$_POST:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";

// Пояснение: при методе POST переменные НЕ видны в адресной строке!
echo "<p><i>Обратите внимание: в адресной строке браузера нет переменных — они переданы в теле HTTP-запроса.</i></p>";
?>