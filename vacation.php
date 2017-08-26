<!DOCTYPE html>
<?php

    $friendName = $_GET["recipient"];
    $yourName = $_GET["sender"];
    $pictureURL = $_GET["pictureURL"];
    $color = $_GET["color"];
?>

<html>
<head>
    <title>Greetings!</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body style="background-image: url(<?php echo $pictureURL ?>); background-size:cover;">
    <div class="letter">
      <div class="content">
        <h1>Greetings From Afar</h1>
        <p>Dear <?php echo $friendName ?>,</p>
        <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming! </p>
        <p><?php echo $friendName ?>, you would not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
        <p>Looking forward to seeing you soon. I'll bring you back a souvenir. </p>
        <p>Cheers,</p>
        <p><?php echo $yourName ?></p>
      </div>
      <div class="image">
        <img src="<?php echo $pictureURL ?>" alt="">
      </div>
    </div>
</body>
</html>
