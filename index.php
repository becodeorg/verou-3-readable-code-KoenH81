<?php

// fw = for who
function orderPizza($pizzaType, $who) {

$toPrint = 'A '.$pizzaType;
$p = calc_cts($pizzaType);
$address = 'unknown';

echo 'Creating new order... <br>';

if($who == 'koen'){
    $address = 'a yacht in Antwerp';
} 
if ($who == 'manuele'){
    $address = 'somewhere in Belgium';
} 
if ($who == 'students'){
    $address = 'BeCode office';
}

    $toPrint .=   ' pizza should be sent to ' . $who . ". <br>The address: {$address}.";
echo $toPrint; echo '<br>';
echo'The bill is €'.$p.'.<br>';




    echo "Order finished.<br><br>";
}

    function total_price($p) {
            return $p;
    }

        function test($p_type) {
            echo "Test: type is {$p_type}. <br>";
        }

function calc_cts($p_type)
{
    $cst = 'unknown';

    if ($p_type == 'marguerita') {
        $cst = 5;
    }
    else
        {
        if ($p_type == 'golden')
        {
            $cst = 100;
        }

            if ($p_type == 'calzone')
            {
                $cst = 10;
            }

        if ($p_type == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }

    return $cst;
}

            function ordr_piz_all()
            {
            $test= 0;
            orderPizza('calzone', 'koen');
            orderPizza('marguerita', 'manuele');

            orderPizza('golden', 'students');
            }

function make_Allhappy($do_it) {
if ($do_it) {
        ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);