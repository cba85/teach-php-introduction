<?php
if ($_POST['name']) {
    echo 'Hello ' . $_POST['name'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>

<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <button type="submit">Ok</button>
    </form>
</body>

</html>