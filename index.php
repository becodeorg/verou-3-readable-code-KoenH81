<?php

// fw = for who
function orderPizza($pizzaType, $who) {

$toPrint = 'A '.$pizzaType;
$p = calc_cts($pizzaType);
$address = '';

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

$toPrint .= " pizza should be sent to " . $who . ". <br>The address: {$address}.";
echo "A ". $pizzaType . " pizza should be sent to " . $who . ". <br>The address: {$address}. <br>";
echo'The bill is €'.$p.'.<br>';
echo "Order finished.<br><br>";
}
function calc_cts($pizzaType){
    $cost = 'unknown';

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    }
    else
        {
        if ($pizzaType == 'golden')
        {
            $cost = 100;
        }

            if ($pizzaType == 'calzone')
            {
                $cost = 10;
            }

        if ($pizzaType == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }
    return $cost;
}
function ordr_piz_all()
{
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