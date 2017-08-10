<?php //TODO Сделать поле автора дропдаун ?>


<form class="form-horizontal">
    <fieldset>
        <legend>Добавление новости</legend>
        <div class="form-group">
            <label for="title" class="col-lg-2 control-label">Заголовок</label>
            <div class="col-lg-10">
                <input class="form-control" id="title" placeholder="Краткий заголовок новости" type="text">
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-lg-2 control-label">Текст</label>
            <div class="col-lg-10">
                <textarea class="form-control" rows="3" id="text"></textarea>
                <span class="help-block">Полный текст новости</span>
            </div>
        </div>

        <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Автор</label>
            <div class="col-lg-10">
                <select class="form-control" id="select">
                    <option>1</option>
                    <option>2</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Cбросить</button>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
    </fieldset>
</form>