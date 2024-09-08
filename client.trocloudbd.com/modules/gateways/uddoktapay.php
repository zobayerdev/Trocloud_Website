<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function uddoktapay_config()
{
    return [
        'FriendlyName' => [
            'Type' => 'System',
            'Value' => 'UddoktaPay',
        ],
        'api_key' => [
            'FriendlyName' => 'API KEY',
            'Type' => 'text',
            'Size' => '40',
        ],
        'api_url' => [
            'FriendlyName' => 'API URL',
            'Type' => 'text',
            'Size' => '50'
        ],
        'exchange_rate' => [
            'FriendlyName' => 'Exchange Rate [1 USD = ? BDT]',
            'Type' => 'text',
            'Size' => '50'
        ]
    ];
}

function uddoktapay_link($params)
{
    $url = $params['systemurl'] . '/modules/gateways/callback/' . $params['paymentmethod'] . '.php';
    $invId = $params['invoiceid'];
    $payTxt = $params['langpaynow'];
    $errorMsg = uddoktapay_errormessage();
    $invoiceId = $params['invoiceid'];
    $sessionMessage = $_SESSION["up_pending_invoice_id_{$invoiceId}"];

    if (isset($sessionMessage) && !empty($sessionMessage)) {
        return '<div class="alert alert-danger" style="margin-top: 10px;" role="alert">' . $sessionMessage . '</div>';
    }

    return <<<HTML
    <form method="GET" action="$url">
    <input type="hidden" name="action" value="init" />
    <input type="hidden" name="id" value="$invId" />
    <input class="btn btn-primary" type="submit" value="$payTxt" />
</form>
$errorMsg
HTML;
}


function uddoktapay_errormessage()
{
    $errorMessage = [
        'cancelled' => 'Payment has cancelled',
        'irs'       => 'Invalid response from UddoktaPay API.',
        'tau'       => 'The transaction has been already used.',
        'lpa'       => 'You\'ve paid less than amount is required.',
        'pfv'       => 'Your payment is pending for verification.',
        'sww'       => 'Something went wrong'
    ];

    $code = isset($_REQUEST['error']) ? $_REQUEST['error'] : null;
    if (empty($code)) {
        return null;
    }

    $error = isset($errorMessage[$code]) ? $errorMessage[$code] : $code;

    return '<div class="alert alert-danger" style="margin-top: 10px;" role="alert">' . $error . '</div>';
}
