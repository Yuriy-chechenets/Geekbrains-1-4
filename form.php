<?php

/*
 Необходимо создать калькулятор. В него передается 2 значения, по результатам которых выводится ответ в зависимости от выбранной операции.
Данные, введенный в форму, должный сохраняться.
 */

$timeBegin = microtime(true);
echo "Этот скрипт - учебный, созданный для работы с формами. В нем буду делать калькулятор.<br>";


?>
<html>
<form action="form.php" method=POST>
    <fieldset>
        <legend>Калькулятор человечества</legend>
        <input type="text" name="var_1" id="id_1" size=6 maxlength=15 placeholder="Число 1">
        <select name="option" required id="option_id">
              <option value="1">+</option>
              <option value="2">-</option>
              <option value="3">*</option>
              <option value="4">/</option>
        </select>
        <input type="text" name="var_2" id="id_2" size=6 maxlength=15 placeholder="Число 2">
    </fieldset>
</form>
</html>