<?php
header("Content-Type: text/html; charset=utf-8");
$timeBegin=microtime(true);
if(isset($_POST['var_1']) && isset($_POST['var_2']) && is_numeric($_POST['var_1']) && is_numeric($_POST['var_2']))
{
    $operation = $_POST['operation'];
    switch ($operation)
    {
        case 1: $operationChar = "+"; $answer = $_POST['var_1'] + $_POST['var_2']; break;
        case 2: $operationChar = "-"; $answer = $_POST['var_1'] - $_POST['var_2']; break;
        case 3: $operationChar = "*"; $answer = $_POST['var_1'] * $_POST['var_2']; break;
        case 4: $operationChar = "/"; $answer = $_POST['var_1'] / $_POST['var_2']; break;
        case 'Очистить': $operationChar = ""; $answer = ''; break;

    }
    /* Эта хрень не работает )))))
    echo $_POST['operation']."<br>";
    if (($_POST['operation']) == "+") { $operationChar = "+"; $answer = $_POST['var_1'] + $_POST['var_2']; }
    if (($_POST['operation']) == "-") { $operationChar = "-"; $answer = $_POST['var_1'] - $_POST['var_2']; }
    if (($_POST['operation']) == "*") { $operationChar = "*"; $answer =( $_POST['var_1']) * ($_POST['var_2']); }
    if (($_POST['operation']) == "/") { $operationChar = "/"; $answer = $_POST['var_1'] / $_POST['var_2']; }
    else $answer="Введены некорректные данные";
    // print_r($_POST);
    */
}


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
        <button type="submit" name="operation" value="1">+</button>
        <button type="submit" name="operation" value="2">-</button>
        <button type="submit" name="operation" value="3">*</button>
        <button type="submit" name="operation" value="4">/</button>
        <button type="submit" name="operation" value="5">Очистить</button>
    </fieldset>
</form>
</html>
<?php
echo "<br>скрипт выполнился за ". (microtime(true)-$timeBegin) . " секунд";
?>