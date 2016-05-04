<?php
// ini_set('display_errors', 0);
/*
 Необходимо создать калькулятор. В него передается 2 значения, по результатам которых выводится ответ в зависимости от выбранной операции.
Данные, введенные в форму, должный сохраняться в соответствующих окнах.
 */
$timeBegin = microtime(true);
/*
if (!empty($_POST['var_1']) && !empty($_POST['var_2']))
{
    // echo "Значение VAR_1 переданное в скрипт : ". $_POST['var_1']."<br>";
    // echo "Значение VAR_2 переданное в скрипт : ". $_POST['var_2']."<br>";
    echo var_dump($_POST['var_1'])."<br>";
    echo var_dump($_POST['var_2'])."<br>";
    $first = is_string($_POST['var_1']);
    $second = is_string($_POST['var_2']);
    if ($first == "true" ) {$c="Вы ввели не числовые данные.";}
    if ($second == "true") {$c="Вы ввели не числовые данные.";}
    echo var_dump($first)."<br>";
    echo $first."<br>";
    echo $second."<br>";

}
*/
if ( isset($_POST['var_1']) && isset($_POST['var_2']) && isset($_POST['operat']) && is_numeric($_POST['var_1']) && is_numeric($_POST['var_2']) )
{
    echo "Значение VAR_1 переданное в скрипт : ". $_POST['var_1']."<br>";
    echo "Значение VAR_2 переданное в скрипт : ". $_POST['var_2']."<br>";
    echo "Значение оператора переданное в скрипт : ". $_POST['operat']."<br>";
$operation = $_POST['operat'];
    switch($operation)
    {
        case '+': $c = ( ($_POST['var_1']+0) + ($_POST['var_2']+0) ); break;
        case '-': $c = ( ($_POST['var_1']+0) - ($_POST['var_2']+0) ); break;
        case '*': $c = ( ($_POST['var_1']+0) * ($_POST['var_2']+0) ); break;
        case '/':
                 if($_POST['var_2']==0)
                    {$c ='Деление на ноль недопустимо'; break;}
                 else
                     {$c = ($_POST['var_1']+0) / ($_POST['var_2']+0); break;}
    }
    /*
    if ($_POST['operat'] == "sum") {$c = $_POST['var_1']*1 + $_POST['var_2']*1; }
    if ($_POST['operat'] == "diff") {$c = $_POST['var_1']*1 - $_POST['var_2']*1; }
    if ($_POST['operat'] == "mult") {$c = $_POST['var_1']*1 * $_POST['var_2']*1; }
    if ($_POST['operat'] == "div") {$c = $_POST['var_1']*1 / $_POST['var_2']*1; }
    */
}

else {$c='';}

echo "Этот скрипт - учебный, созданный для работы с маленькими числовыми формами. <br>В нем буду делать калькулятор.<br>";

?>
<!doctype=html>
<html>
<form  method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> " >
    <fieldset>
        <legend>Лучший в мире калькулятор за всю историю человечества</legend>
        <input type="text" name="var_1" maxlength="15" value="<?php if(isset($_POST['var_1'])) {echo $_POST['var_1'];} else echo "";?> "  />
        <select name = "operat" >
            <option name="1" <?php if (isset($_POST['operat']) &&  $_POST['operat']=='+') echo "selected"; ?> >+</option>
            <option name="2" <?php if (isset($_POST['operat']) && $_POST['operat']=='-') echo "selected"; ?> >-</option>
            <option name="3" <?php if (isset($_POST['operat']) && $_POST['operat']=='*') echo "selected"; ?> >*</option>
            <option name="4" <?php if (isset($_POST['operat']) && $_POST['operat']=='/') echo "selected"; ?> >/</option>
        </select>
        <input type="text" name="var_2" id="id_2" size=6 maxlength=15 value="<?php if(isset($_POST['var_2'])) {echo $_POST['var_2'];} else echo "";?>"/>
        <input type="submit" value="=">
        <?php
        echo "Ответ: ".$c." </br>";
        echo "скрипт выполнился за ". (microtime(true)-$timeBegin) . " секунд";
        ?>
    </fieldset>
</form>
</html>