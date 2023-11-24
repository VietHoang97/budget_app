<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function currencyListquotes()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://currency-exchange.p.rapidapi.com/listquotes',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'x-rapidapi-host: currency-exchange.p.rapidapi.com',
                'x-rapidapi-key: 0e67f2779cmsh1f02b37aa255950p134aa8jsnf33e5c6759e2' 
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        return $response;
    }

    public function currencyConverter($currency_from, $currency_to)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://currency-exchange.p.rapidapi.com/exchange?q=1.0&from=" . $currency_from. "&to=" .$currency_to,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                'x-rapidapi-host: currency-exchange.p.rapidapi.com',
                'x-rapidapi-key: 0e67f2779cmsh1f02b37aa255950p134aa8jsnf33e5c6759e2' 
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        return $response;
    
    }
}
