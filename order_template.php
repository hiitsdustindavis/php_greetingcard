<!DOCTYPE html>
<?php

    $cups_quantity = array(
        "208_5th" => 300,
        "1978_19th" => 500,
        "1493_2nd" => 700
    );

    $address = array(
        "208_5th" => '208 SW 5th Ave #105, Portland, OR 97204',
        "1978_19th" => '1978 19th Ave, Portland, OR 97209',
        "1493_2nd" => '1493 SW 2nd Ave, Portland, OR 97201'
    )

?>


<html>
<head>
    <title>Order Form</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <p>Hi Ed, </p>
    <p>Just making my weekly order. Details are below.</p>
    <p><span class="text-highlight-salmon"><?php echo $address['208_5th'] ?></span> : <strong class='text-highlight-green'><?php echo $cups_quantity['208_5th']; ?> Cups</strong></p>
    <p><span class="text-highlight-salmon"><?php echo $address['1978_19th'] ?></span> : <strong class='text-highlight-green'><?php echo $cups_quantity['1978_19th']; ?> Cups</strong></p>
    <p><span class="text-highlight-salmon"><?php echo $address['1493_2nd'] ?></span> : <strong class='text-highlight-green'><?php echo $cups_quantity['1493_2nd']; ?> Cups</strong></p>
    <p>Thanks,</p>
    <p>Diane</p>
</body>
</html>
