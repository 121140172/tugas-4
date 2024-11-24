<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Simpan data dalam sesi
    session_start();
    $_SESSION["formData"] = $_POST;

    // Proses file
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] === UPLOAD_ERR_OK) {
        $file = $_FILES["file"];
        if (pathinfo($file["name"], PATHINFO_EXTENSION) === "txt" && $file["size"] <= 1024 * 1024) {
            $fileContent = file_get_contents($file["tmp_name"]);
            $_SESSION["fileContent"] = explode("\n", $fileContent);
        } else {
            die("File tidak valid.");
        }
    }

    // Redirect ke result.php
    header("Location: result.php");
    exit();
}
?>
