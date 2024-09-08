<?php
/* E-PayBD WHMCS Gateway
 *
 * Copyright (c) 2024 e-paybd.com
 * Website: https://e-paybd.com
 * Developer: E-PayBD
 * Dont Remove Copyright
 * 
 */

/* 
How to use ?

Go to Module of your file - then go to gateway and upload file in root folder 
then again upload it on Callback file.

 */


if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function epaybd_MetaData(){
    return array(
        'DisplayName' => 'ePaybd Gateway',
        'APIVersion' => '1.0',
        'DisableLocalCredtCardInput' => true,
        'TokenisedStorage' => false,
    );
}




function epaybd_link($params){
    $host_config = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $host_config =pathinfo($host_config, PATHINFO_FILENAME);  
        
    if(isset($_POST['pay'])){
        $response = epaybd_payment_url($params);
        if ($response->status) {
            return '<form action="' . $response->payment_url . ' " method="GET">
            <input class="btn btn-primary" type="submit" value="' . $params['langpaynow'] . '" />
            </form>';
        }
    
        return $response->message;
    }
        
        
    if($host_config == "viewinvoice"){
        return '<form action="" method="POST">
        <input class="btn btn-primary" name="pay" type="submit" value="' . $params['langpaynow'] . '" />
        </form>';
    }else{
        $response = epaybd_payment_url($params);
        if ($response->status) {
            return '<form action="' . $response->payment_url . ' " method="GET">
            <input class="btn btn-primary" type="submit" value="' . $params['langpaynow'] . '" />
            </form>';
        }
    
        return $response->message;
    }
}


function epaybd_config(){
    return array(
        'FriendlyName' => array(
            'Type' => 'System',
            'Value' => 'ePaybd Payment Gateway',
        ),
        'apiKey' => array(
            'FriendlyName' => 'API Key',
            'Type' => 'text',
            'Size' => '150',
            'Default' => '',
            'Description' => 'Enter Your Api Key',
        ),
        'clientKey' => array(
            'FriendlyName' => 'Client Key',
            'Type' => 'text',
            'Size' => '150',
            'Default' => '',
            'Description' => 'Enter Your Client Key',
        ),
        'secretKey' => array(
            'FriendlyName' => 'Secret Key',
            'Type' => 'text',
            'Size' => '150',
            'Default' => '',
            'Description' => 'Enter Your Secret Key',
        ),
        'hostName' => array(
            'FriendlyName' => 'Host Name',
            'Type' => 'text',
            'Size' => '150',
            'Default' => '',
            'Description' => 'Enter Your Host Name',
        ),
        'currency_rate_edokan' => array(
            'FriendlyName' => 'Currency Rate',
            'Type' => 'text',
            'Size' => '150',
            'Default' => '85',
            'Description' => 'Enter Dollar Rate',
        )
    );
}

function epaybd_payment_url($params){
    $cus_name = $params['clientdetails']['firstname'] . " " . $params['clientdetails']['lastname'];
    $cus_email = $params['clientdetails']['email'];

    $apikey = $params['apiKey'];
    $clientkey = $params['clientKey'];
    $secretkey = $params['secretKey'];

    $currency_rate_edokan = $params['currency_rate_edokan'];

    $invoiceId = $params['invoiceid'];

    if($params['currency'] == "USD"){
       $amount = $params['amount']*$currency_rate_edokan;
    }else{
        $amount = $params['amount'];
    }
    $hostname = $params['hostName'];


    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    $systemUrl = $url;

    $success_url = $systemUrl . '/modules/gateways/callback/epaybd.php?api='.$apikey.'&client='.$clientkey.'&secret='.$secretkey.'&host='.$hostname.'&invoice='.$invoiceId;
    $cancel_url = $systemUrl . 'viewinvoice.php?id='.$invoiceId;


    $data   = array(
        "cus_name"          => $cus_name,
        "cus_email"         => $cus_email,
        "amount"            => $amount ,
        "success_url"       => $success_url,
        "cancel_url"        => $cancel_url,
    );

    $header   = array(
        "api"               => $apikey,
        "client"            => $clientkey,
        "secret"            => $secretkey,
        "position"          => $hostname,
        "url"               => 'https://pay.e-paybd.com/checkout/payment/create',
    );


    $headers = array(
        'Content-Type: application/x-www-form-urlencoded',
        'app-key: ' . $header['api'],
        'client-key: ' . $header['client'],
        'client-secret: ' . $header['secret'],
        'client-position: ' . $header['position'],
    );
    $url = $header['url'];
    $curl = curl_init();
    $data = http_build_query($data);
    
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_VERBOSE =>true
    ));
     
    $response = curl_exec($curl);
    curl_close($curl);

    echo $response;

}
