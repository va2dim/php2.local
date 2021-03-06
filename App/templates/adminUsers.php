<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <h1>Админка пользователей</h1>
    <div class="input-group">
        <div class="btn-group text-right">
            <button type="button" class="btn-default">Все пользователи</button>
            <button type="button" class="btn-default">Редактирование</button>
            <button type="button" class="btn-default">Сохранение</button>
        </div>
    </div>

    <?php foreach($users as $user): ?>
    <div class="panel panel-info">
        <div class="panel-heading">
            <a href="?ctrl=admin&act=changeUser&id=<?php echo $user->id; ?>">
                <?php echo $user->id.'. '.$user->name; ?> -
                <span class="glyphicon glyphicon-edit"  aria-label="Редактировать">E</span>
            </a> -
            <a href="?ctrl=admin&act=deleteUser&id=<?php echo $user->id; ?>">
                <span class="glyphicon glyphicon-delete"  aria-label="Удалить">x</span>
            </a>
        </div>
        <div class="panel-body"><?php echo $user->email; ?></div>
    </div>
    <?php endforeach;?>







    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
