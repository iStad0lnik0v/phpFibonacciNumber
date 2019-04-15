<?php

//F1 = 1
//F2 = 1
//Fn = Fn-1 + Fn-2

function fibonacci($f)
{
    if ($f < 3) {
        return 1;
    } else {
        return fibonacci($f - 1) + fibonacci($f - 2);
    }
}

//определить в цикле количество проходов
for ($f = 1; $f <= 25; $f++) {
    print(fibonacci($f) . PHP_EOL);
}
print('Конец.' . PHP_EOL);
