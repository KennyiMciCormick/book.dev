<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Default</title>

    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<h1>Hello, WORLD!</h1>
<?= $content ?>

<?= debug(\vendor\core\Db::$countSql);?>
<?= debug(\vendor\core\Db::$queries);?>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>