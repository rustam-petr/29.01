<?php include "if.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <div class="form">
        <form action="?" method="post">
            <div>
                <p>Name:</p>
                <input tabindex="1" type="text" name="name" placeholder="name" target="fr2">
            </div>
            <div>
                <p>Email:</p>
                <input tabindex="2" type="email" name="email" placeholder="@">
            </div>
            <div>
                <p>Message:</p>
                <textarea tabindex="3" name="text" id="" cols="22" rows="3"></textarea>
            </div>
<br>
            <div>
                <button tabindex="4" type="submit">Отправить</button>
            </div>
        </form>
    </div>
    <div class="include">
        <?php include "table.php" ?>
    </div>
</body>

</html>