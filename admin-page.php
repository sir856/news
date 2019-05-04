<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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

    <?php include 'db-funcs.php';
    include 'showNews.php';

    $connection = connectDB();

    $query = "SELECT id, title, date FROM news ORDER BY date DESC";
    $res = $connection->query($query) or die($connection->error);
    $connection->close();
    ?>


    <div class="card" style='width: 80%; margin-left: auto; margin-right: auto; margin-top: 10px'>
        <div class="card-content">
            <span class="card-title">Add New Article</span>
            <form method="post" action="add-article.php">
                <input type="text" name="title" placeholder="Title">
                        <textarea placeholder="Text" name="text" id="text_area_add"
                                  class="materialize-textarea"></textarea>
                <button class="btn red accent-4" type="submit" name="sent">Add</button>
            </form>
        </div>
    </div>


    <?php
    while ($row = $res->fetch_assoc()) {
        showNewsAdmin($row['id'], $row['title'], $row['date']);
    } ?>
</body>