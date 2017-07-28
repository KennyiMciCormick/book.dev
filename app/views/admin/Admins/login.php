<form action="/admin/login" method="post">
    <div class="input-group input-group-sm">
        <input type="text" name="login" class="form-control" placeholder="Нік">
    </div>
    <div class="input-group input-group-sm">
        <input type="password" name="pass" class="form-control" placeholder="Пароль">
    </div>
    <div class="checkbox">
        <label><input type="checkbox" name="rememberMe" value="on">Запамятати мене</label>
    </div>
    <button type="submit" class="btn btn-default">Увійти</button>
</form>
<p><?= (!empty($error)) ? $error : '' ?></p>