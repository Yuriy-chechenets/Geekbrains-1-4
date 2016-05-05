<?php
header("Content-Type: text/html; charset=utf-8");
$timeBegin=microtime(true);
/**
 * Created by PhpStorm.
 * User: NotePad.by
 * Date: 05.05.2016
 * Time: 3:05
 */

?>

<!doctype=html>
<html>
<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> " >
    <fieldset>
        <legend>Тоже лучший в мире калькулятор за всю историю человечества после предыдущего</legend>
        <input type="text" name="var_1" maxlength="15" value="<?php if(isset($_POST['var_1'])) {echo $_POST['var_1'];} else echo "";?> "  />
        <?php if(isset($answer)) echo "$operationChar";?>
        <input type="text" name="var_2" maxlength="15" value="<?php if(isset($_POST['var_2'])) {echo $_POST['var_2'];} else echo "";?>"/>
        <?php if(isset($answer)) echo "=";?>
        <input type="text" name="answer" maxlength=15 value="<?php if(isset($answer)) {echo $answer;} else echo "";?>"/>
        <br>
        <input type="submit" name="sum" value="+">
        <input type="submit" name="dif" value="-">
        <input type="submit" name="mult" value="*">
        <input type="submit" name="div" value="/">



<?php

echo "<br>скрипт выполнился за ". (microtime(true)-$timeBegin) . " секунд";
?>
</fieldset>
</form>
</html>