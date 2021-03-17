<?php

// fw = for who
function ordr_pz($pizzatype, $fw)
{
    echo 'Creating new order... <br>';
    $type = $pizzatype;
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $p = calc_cts($type);
    $address = 'unknown';

    if($fw == 'koen')
    {
        $address = 'a peniche in Liège';
    } else if ($fw == 'nico') {
        $address = 'somewhere in Belgium';
    } else if ($fw == 'students') {
        $address = 'BeCode office';
    }

        $toPrint .=   ' pizza should be sent to ' . $fw . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$p.'.<br>';
    echo "Order finished.<br><br>";
}

function ordr_piz_all()
{
    ordr_pz('calzone', 'nico');
    ordr_pz('marguerita', 'nick');
    ordr_pz('golden', 'students');
}

function calc_cts($p_type)
{
    $cst = 'unknown';

    switch($p_type) {
        case 'marguerita':
            $cst = 5;
            break;
        case'golden':
            $cst = 100;
            break;
        case'calzone':
            $cst= 10;
            break;
        case'hawai':
            throw new Exception('Computer says no');
    }
    return $cst;
}


function make_Allhappy($do_it)
{
    if ($do_it) {
        ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}
make_Allhappy(true);
