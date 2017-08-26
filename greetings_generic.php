<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Create a greeting!</title>
</head>
<body>
    <div class="container">
        <h1>Fill in your name and your friend's name to create your custom greeting!</h1>

        <form action="vacation.php">
            <div class="form-group">
                <label for="sender">Your name</label>
                <input id="sender" name="sender" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="recipient">Your friend's name</label>
                <input id="recipient" name="recipient" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="pictureURL">Paste an image URL Here</label>
                <input id="pictureURL" name="pictureURL" class="form-control" type="text">
            </div>
            <input name="color" type="color" value="#C4FFED">
            <button type="submit" class="btn">Go!</button>
        </form>

    </div>
</body>
</html>
