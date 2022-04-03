<?php


/**
 * Set Alert 
 */
function setAlert($msg, $type = 'danger'){

    return "<p class=\"alert alert-{$type} d-flex justify-content-between\"> {$msg} <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
}

/**
 * Currency converter basic
 */

function currencyConverterBasic($amount, $currency){
    $factor = null;
    switch($currency){
        case 'USD' :
            $factor = 80;
            break;
        case 'CAD' :
            $factor = 0.014;
            break;
        case 'POUND' :
            $factor = 0.0088;
            break;
            case 'EURO' :
                $factor = 0.010 ;
                break;
                case 'WON' :
                    $factor = 14.13;
                    break;        
        default :
            $factor = 1;
            break;    
    }
        $result=$amount*$factor;
        return "<p class=\"alert alert-success d-flex justify-content-between\"> {$amount} {$currency} = {$result} BDT<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";    
     

    
}
