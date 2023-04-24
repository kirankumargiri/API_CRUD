<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOKES</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form method="get" action="add.php">
        <div class="list"><label>TITLE: </label><input type="text" name="title" placeholder="Enter the title" required></div>
        <div class="list"><label>IMAGE: </label><input type="url" name="image" placeholder="Enter the image URL"></div>
        <div class="list"><label>AUTHOR: </label><input type="text" name="author" placeholder="Enter author's name" required></div>
<div class="submit"><button type="submit">ADD</button></div>
    </form>
</body>
</html>