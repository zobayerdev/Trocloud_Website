<?php
    /* E-PayBD WHMCS Gateway
     *
     * Copyright (c) 2024 E-PayBD
     * Website: https://e-paybd.com
     * Developer: E-PayBD
     */
    
    require_once __DIR__ . '/../../../init.php';
    require_once __DIR__ . '/../../../includes/gatewayfunctions.php';
    require_once __DIR__ . '/../../../includes/invoicefunctions.php';
    
    use WHMCS\Config\Setting;


    $invoiceId = $_GET['invoice'];
    $transactionId = $_GET['transactionId'];
    $paymentAmount = $_GET['paymentAmount'];
    $paymentFee = $_GET['paymentFee'];
    $gatewayModuleName = "Bkash/Nagad/Rocket - E-PayBD";


    $transaction_id_epaybd = $transactionId;

    $data   = array(
        "transaction_id"          => $transaction_id_walletmaxpay,
    );
    $apikey = $_GET['api'];
    $clientkey = $_GET['client'];
    $secretkey = $_GET['secret'];
    $hostname = $_GET['host'];
    
    $data= ['transaction_id'=>$transactionId] ;

    $header   = array(
        "api"               => $apikey,
        "client"            => $clientkey,
        "secret"            => $secretkey,
        "position"          => $hostname,
        "url"               => 'https://pay.e-paybd.com/checkout/payment/verify',
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
    $data = json_decode($response,true);
    
    if($data['status'] == 1){
        addInvoicePayment(
            $invoiceId,
            $transactionId,
            $paymentAmount,
            $paymentFee,
            $gatewayModuleName
        );
        
        $systemUrl = Setting::getValue('SystemURL');
?>
        <script>
            location.href="<?php echo $systemUrl . '/viewinvoice.php?id=' . $invoiceId;?>";
        </script>
<?php
    }else{
        echo "Failed. Id Not Match";
    }
?>