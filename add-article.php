<?php
include 'db-funcs.php';

if ($_POST["title"] && $_POST["text"]) {
    addArticle($_POST["title"], $_POST["text"]);
}
header('Location: ../admin-page.php');
exit;