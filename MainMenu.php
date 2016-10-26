<html>
<head>
<title>Main Menu</title>
</head>
<body>

<h3>Welcome To the App</h3>


<?php foreach ($Poster as $Poster_item): ?>

        <h3><?php echo $Poster_item['Title']; ?></h3>
        <div class="main">
                <?php echo $Poster_item['PFirst']; ?>
        </div>
        <p><a href="<?php echo site_url('JudgingApp/view/'.$Poster_item['PosterID']); ?>">Judge Poster</a></p>

<?php endforeach; ?>



</body>
</html>
