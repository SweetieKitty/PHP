<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма завантаження файлів та список файлів</title>
</head>
<body>

<h1>Форма завантаження файлів</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="submit" value="1">

    <label for="fileName">Ім'я файлу:</label>
    <input type="text" id="fileName" name="fileName" required>
    <br>
    <label for="file">Оберіть файл:</label>
    <input type="file" id="file" name="file" required>
    <br>
    <button type="submit">Завантажити</button>
</form>

<hr>

<?php
// Функція для відображення списку файлів у заданій директорії
function displayFiles($directory) {
    // Відкриття папки
    if ($dh = opendir($directory)) {
        echo "<h2>Список файлів у папці $directory:</h2><ul>";

        // Читання файлів
        while (($file = readdir($dh)) !== false) {
            // Пропускаємо ".", ".." і файли, які починаються з крапки
            if ($file != '.' && $file != '..' && !startsWith($file, '.')) {
                // Виведення назви файлу та кнопки для видалення
                echo "<li>$file <a href=\"upload.php?file=$file\">Видалити</a></li>";
            }
        }

        echo "</ul>";

        // Закриття папки
        closedir($dh);
    } else {
        // Виведення повідомлення, якщо папку не вдалося відкрити
        echo "Папку $directory не вдалося відкрити.";
    }
}

// Функція для перевірки, чи рядок починається з певного символу
function startsWith($string, $startString) {
    $len = strlen($startString);
    return (substr($string, 0, $len) === $startString);
}

// Шляхи до папок
$uploads_directory = 'C:\Users\Коля\PhpstormProjects\hw5\php_task_5\uploads';
$images_directory = 'C:\Users\Коля\PhpstormProjects\hw5\php_task_5\uploads\images';
$docs_directory = 'C:\Users\Коля\PhpstormProjects\hw5\php_task_5\uploads\images\docs';

// Відображення списку файлів у кожній папці
displayFiles($uploads_directory);
displayFiles($images_directory);
displayFiles($docs_directory);
?>

</body>
</html>
