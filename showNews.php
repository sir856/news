<?php

function showNewsHome($title, $date, $text){ ?>
    <div class='card' style='width: 80%; margin-left: auto; margin-right: auto; margin-top: 10px; background-image:
    url("images/article.jpg"); background-size: 100%'>

            <div class="card-content">
                <div class="card-tabs">
                    <ul class="tabs" style="background: none">
                        <li class="tab" style=" width: 89%; font-size: 25pt; color: white">
                            <?php echo $title; ?></li>
                        <li class="tab" style=" width: 10%; font-size: 10pt; color: white">
                            <?php echo $date; ?></li>
                    </ul>
                </div>
            </div>
        <div class="card-content"  style="  color: white">
                <?php echo nl2br(htmlspecialchars($text)); ?>
        </div>
    </div>
<?php
}


function showNewsAdmin($id, $title, $date){
?>
<div class='card' style='width: 80%; margin-left: auto; margin-right: auto; margin-top: 10px'>
    <div class="card-content">
        <div class="card-tabs">
            <ul class="tabs" style="background: none">
                <li class="tab" style=" width: 15%; font-size: 15pt">
                    <?php echo $date; ?></li>
                <li class="tab" style=" width: 70%; font-size: 15pt">
                    <?php echo $title; ?></li>
                <li class="tab" style=" width: 14%; font-size: 15pt">
                    <form action="delete-article.php" method="post" >
                        <input type="hidden" value="<?php echo $id ?>" name="id">
                        <button class="btn red accent-4" type="submit" name="action">Delete</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
}
