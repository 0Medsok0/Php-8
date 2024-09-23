<?php
// Массив возможных вариантов
$options = ["камень", "ножницы", "бумага"];

// Рандомный выбор компьютера
$computerChoice = $options[array_rand($options)];

// Получение выбора пользователя
$userChoice = $_POST["choice"] ?? null;

// Проверка, сделал ли пользователь выбор
if ($userChoice !== null) {
    // Определение победителя
    if ($userChoice === $computerChoice) {
        $result = "Ничья!";
    } else if (
        ($userChoice === "камень" && $computerChoice === "ножницы") ||
        ($userChoice === "ножницы" && $computerChoice === "бумага") ||
        ($userChoice === "бумага" && $computerChoice === "камень")
    ) {
        $result = "Вы победили!";
    } else {
        $result = "Компьютер победил!";
    }

    // Вывод результата
    echo "<h2>Результат:</h2>";
    echo "<p>Вы выбрали: $userChoice</p>";
    echo "<p>Компьютер выбрал: $computerChoice</p>";
    echo "<p>$result</p>";
} else {
    // Форма для выбора пользователя
    echo "<h2>Выберите вариант:</h2>";
    echo '<form method="POST">';
    echo '<select name="choice">';
    foreach ($options as $option) {
        echo "<option value=\"$option\">$option</option>";
    }
    echo '</select>';
    echo '<button type="submit">Играть</button>';
    echo '</form>';
}
?>
