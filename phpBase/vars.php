<?php
    $a = 1;
    $b = 2;
    $c = $a + $b;
    var_dump($c);
    echo '<br>';
    echo 'Мой первый код<br>';
    echo 'Сумма = '.$c.'<br>';

    // null
    $varNull = null;
    var_dump(is_null($varNull));
    echo '<br>';
    var_dump($varNull);
    echo '<br><br>';

    // boolean
    $bool1 = true;
    $bool2 = false;
    var_dump($bool1);
    echo '<br>';
    var_dump($bool2);
    echo '<br><br>';

    // int
    $varInt = 12;
    var_dump($varInt);
    echo '<br>';
    $varInt2 = 01234;
    var_dump($varInt2);
    echo '<br>';
    echo 15/3;
    echo '<br><br>';

    // float
    $varFloat = 12.34;
    var_dump($varFloat);
    echo '<br><br>';

    // string
    $varString = 'Это текстовая строка';
    var_dump($varString);
    echo '<br><br>';

    // array
    $array1 = array(
        'value1' => 555,
        'value2' => 'Строка текста',
        'value3' => false
    );
    var_dump($array1);
    echo '<br>';

    $array2 = ['znachenie1' => 'Пять', 'znachenie2' => 7.56, 'znachenie3' => null];
    var_dump($array2);
?>
