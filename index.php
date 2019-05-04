<!DOCTYPE html>

<script src="script/script.js"></script>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>News Site</title>
</head>
<body>
    <div class="navbar-fixed">
        <nav class="red accent-4" style="width: 80%; margin-left: 10%">
            <div class="nav-wrapper">
                <a data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <img src="images/logo.png" style="height: 100%; margin-left: 1%">
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admin-page.php">Admin</a></li>
                </ul>
            </div>
        </nav>
    </div>
    <?php
    include 'db-funcs.php';
    include 'showNews.php';

    $connection = connectDB();

    $query = "SELECT title, date, text FROM news ORDER BY date DESC";
    $res = $connection->query($query) or die($connection->error);
    $connection->close();

    while ($row = $res->fetch_assoc()) {
        showNewsHome($row['title'], $row['date'], $row['text']);
    } ?>
</body>