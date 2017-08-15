<html>
<head>
    <script src="clear_form.js"></script>

</head>
<body>

<form role="form" action="admin.php?ctrl=admin&act=saveUser" method="POST" class="form-horizontal novalidate">
    <fieldset>
        <legend>Сохранение(Добавление/Редактирование)/Удаление пользователя</legend>
        <div class="form-group">
            <label for="id" class="col-lg-2 control-label" hidden>ID Пользователя</label>
            <div class="col-lg-10">
                <input class="form-control" id="id" name="id" placeholder="ID пользователя" type="number" readonly hidden value="<?php echo $selected_user->id; ?>">
            </div>
            <label for="name" class="col-lg-2 control-label">Пользователь</label>
            <div class="col-lg-10">
                <input class="form-control" id="name" name="name" placeholder="Имя пользователя" type="text" value="<?php if(!empty($selected_user->name)) echo $selected_user->name;  ?>">
            </div>
            <label for="email" class="col-lg-2 control-label">e-mail</label>
            <div class="col-lg-10">
                <input class="form-control" id="email" name="email" placeholder="Адрес электронной почты" type="email"  value="<?php if(!empty($selected_user->email)) echo $selected_user->email; ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="button" class="btn btn-default" onclick="clearForm(this.form);">Очистить</button>
                <button type="reset" class="btn btn-default">Cбросить</button>

                <?php if(!empty($selected_user->id)): ?>
                    <button type="submit" class="btn btn-primary">Изменить</button>
                    <button type="button" class="btn btn-default" onclick="admin.php?ctrl=admin&act=deleteUser&id=<?php echo $selected_user->id; ?>">Удалить</button>
                <?php else: ?>
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                <?php endif; ?>
            </div>
        </div>
    </fieldset>
</form>

</body>
</html>