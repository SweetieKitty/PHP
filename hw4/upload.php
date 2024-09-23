<?php

$uploadsDir = 'C:\Users\Коля\PhpstormProjects\hw5\php_task_5\uploads';

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["submit"])) {
        header("Location: index.php");
        exit; // Prevent further execution
    }

    // Get file information from $_FILES
    $fileName = $_FILES["file"]["name"];
    $fileSize = $_FILES["file"]["size"];
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $tmpFilePath = $_FILES["file"]["tmp_name"];

    // Check if file already exists
    $targetFolder = ($fileExtension === 'jpg' || $fileExtension === 'jpeg' || $fileExtension === 'png' || $fileExtension === 'gif') ? $uploadsDir . '\images' : $uploadsDir . '\images\docs';

    if (file_exists($targetFolder . '\\' . $fileName)) {
        echo "Файл з ім'ям $fileName вже існує.";
    } else {
        // Validate file extension
        $allowedExtensions = ['txt', 'doc', 'docx', 'pdf', 'jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileExtension, $allowedExtensions)) {
            // Generate unique filename with timestamp
            $date = date('Ymd_His');
            $newFileName = $_POST["fileName"] . '_' . $date . '.' . $fileExtension;

            // Create subfolders if they don't exist
            if (!is_dir($targetFolder)) {
                mkdir($targetFolder, 0777, true); // Create recursively with full permissions
            }

            // Move the uploaded file to the target folder
            if (move_uploaded_file($tmpFilePath, $targetFolder . '\\' . $newFileName)) {
                echo "File uploaded successfully: " . $newFileName . "\n";
            } else {
                echo "Failed to upload file: " . $fileName . "\n";
            }
        } else {
            echo "Invalid file extension: " . $fileExtension . ". Allowed extensions: " . implode(', ', $allowedExtensions) . "\n";
        }
    }

    // Check file size (optional)
    if ($fileSize > 10000000) {
        echo "Файл занадто великий. Максимальний розмір файлу - 10MB.";
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["file"])) {
        $fileToDelete = $_GET["file"];
        $filePath = $uploadsDir . '\\' . $fileToDelete;
        if (file_exists($filePath)) {
            if (unlink($filePath)) {
                echo "File $fileToDelete deleted successfully.";
            } else {
                echo "Failed to delete file $fileToDelete.";
            }
        } else {
            echo "File $fileToDelete does not exist.";
        }
    }
}

?>
<p>
    <a href="index.php">Go home</a>
</p>
