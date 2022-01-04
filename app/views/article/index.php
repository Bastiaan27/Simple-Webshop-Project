<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Articles!</h1>

<?php
foreach($model as $article) {
    ?>
    <h4><?= ucfirst($article->getTitle())?></h4>
    <small>By: <?= $article->getAuthor()?> at <?=$article->getPostedAt()?></small>
    <p><?= $article->getContent()?></p>
    <?php
}
?>
</body>

</html>


