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

function currencyConverterBasic($amount, $currency, $convert_currency){
    $factor_1 = null;
    $factor_2 = null;
    switch($currency){
        case 'USD' :
            $factor_1 = 80;
            break;
        case 'CAD' :
            $factor_1 = 0.014;
            break;
        case 'POUND' :
            $factor_1 = 0.0088;
            break;
            case 'EURO' :
                $factor_1 = 0.010 ;
                break;
                case 'WON' :
                    $factor_1 = 14.13;
                    break;        
        default :
            $factor_1 = 1;
            break;    
    }
        $result_BDT=$amount*$factor_1;
        switch($convert_currency){
            case 'USD' :
                $factor_2 = 80;
                break;
            case 'CAD' :
                $factor_2 = 0.014;
                break;
            case 'POUND' :
                $factor_2 = 0.0088;
                break;
                case 'EURO' :
                    $factor_2 = 0.010 ;
                    break;
                    case 'WON' :
                        $factor_2 = 14.13;
                        break;        
            default :
                $factor_2 = 1;
                break;    
        }
        $result = $result_BDT*$factor_2;

        return "<p class=\"alert alert-success d-flex justify-content-between\"> {$amount} {$currency} = {$result} {$convert_currency}<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";    
     

    
}
