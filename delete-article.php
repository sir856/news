<?php
include 'db-funcs.php';

if ($_POST["id"]) {
    removeArticle($_POST["id"]);
}

header('Location: ../admin-page.php');
exit;