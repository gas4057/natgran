<?php

namespace App\Services;


use function GuzzleHttp\Psr7\str;

class PaymentServices
{
//    public $baseUrl = "https://api.express-pay.by/v1/"; //рабочий тест.
    public $baseUrl = "https://sandbox-api.express-pay.by/v1/"; //тестовый сервер.
    protected $token;
    protected $secretWord;

    public function __construct()
    {
        $this->token = env('PAYMENT_API_TOKEN');
        $this->secretWord = env('PAYMENT_SECRET_WORD');
    }

    //Выставление счета по карте
    function addInvoiceByCard($accountNo, $amount, $currency, $info, $returnUrl, $failUrl, $expiration = "", $language = "", $pageView = "", $sessionTimeoutSecs = "", $expirationDate = "", $returnInvoiceUrl = "")
    {
        $url = $this->baseUrl . "cardinvoices?token=" . $this->token;

        $requestParams = array(
            "AccountNo" => $accountNo,
            "Expiration" => $expiration,
            "Amount" => $amount,
            "Currency" => $currency,
            "Info" => $info,
            "ReturnUrl" => $returnUrl,
            "FailUrl" => $failUrl,
            "Language" => $language,
            "SessionTimeoutSecs" => $sessionTimeoutSecs,
            "ExpirationDate" => $expirationDate,
            "ReturnInvoiceUrl" => $returnInvoiceUrl,
            "token" => $this->token,
            "PageView" => $pageView,
        );
        // Использование цифровой подписи
        $signature = $this->computeSignature($requestParams, $this->secretWord, 'add-card-invoice');
        $url .= "&signature=" . $signature;
        unset($requestParams['token']);
        $this->sendRequestPOST($url, $requestParams);
    }

    // Отправка POST запроса
    function sendRequestPOST($url, $params)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response)->CardInvoiceNo;
        $this->getPaymentForm($response);
    }

    // Форма оплаты
    function getPaymentForm($cardNumberInvoice)
    {
        $url = $this->baseUrl . "cardinvoices/" . $cardNumberInvoice . "/payment?token=" . $this->token;
        // Использование цифровой подписи
        $requestParams = array(
            "token" => $this->token,
            "CardInvoiceNo" => $cardNumberInvoice
        );
        $signature = $this->computeSignature($requestParams, $this->secretWord, "card-invoice-form");
        $url .= "&signature=" . $signature;
        $this->sendRequestGET($url);
    }

    // Отправка GET запроса
    private static function sendRequestGET($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response)->FormUrl;
        header('Location: ' . $response, true, 302);
        exit();
    }

    // Формирование цифровой подписи
    function computeSignature($requestParams, $secretWord, $method)
    {
        $normalizedParams = array_change_key_case($requestParams, CASE_LOWER);
        $mapping = array(
            "add-invoice" => array(
                "token",
                "accountno",
                "amount",
                "currency",
                "expiration",
                "info",
                "surname",
                "firstname",
                "patronymic",
                "city",
                "street",
                "house",
                "building",
                "apartment",
                "isnameeditable",
                "isaddresseditable",
                "isamounteditable"),
            "get-details-invoice" => array(
                "token",
                "id"),
            "cancel-invoice" => array(
                "token",
                "id"),
            "status-invoice" => array(
                "token",
                "id"),
            "get-list-invoices" => array(
                "token",
                "from",
                "to",
                "accountno",
                "status"),
            "get-list-payments" => array(
                "token",
                "from",
                "to",
                "accountno"),
            "get-details-payment" => array(
                "token",
                "id"),
            "add-card-invoice" => array(
                "token",
                "accountno",
                "expiration",
                "amount",
                "currency",
                "info",
                "returnurl",
                "failurl",
                "language",
                "pageview",
                "sessiontimeoutsecs",
                "expirationdate"),
            "card-invoice-form" => array(
                "token",
                "CardInvoiceNo"),
            "status-card-invoice" => array(
                "token",
                "CardInvoiceNo",
                "language"),
            "reverse-card-invoice" => array(
                "token",
                "CardInvoiceNo"),
            "get-qr-code" => array(
                "token",
                "invoiceid",
                "viewtype",
                "imagewidth",
                "imageheight"),
            "add-web-invoice" => array(
                "serviceid",
                "accountno",
                "amount",
                "currency",
                "expiration",
                "info",
                "surname",
                "firstname",
                "patronymic",
                "city",
                "street",
                "house",
                "building",
                "apartment",
                "isnameeditable",
                "isaddresseditable",
                "isamounteditable",
                "emailnotification",
                "smsphone",
                "returntype",
                "returnurl",
                "failurl"),
            "add-webcard-invoice" => array(
                "serviceid",
                "accountno",
                "expiration",
                "amount",
                "currency",
                "info",
                "returnurl",
                "failurl",
                "language",
                "sessiontimeoutsecs",
                "expirationdate",
                "returntype")
        );
        $apiMethod = $mapping[$method];
        $result = "";
        if ($method == 'card-invoice-form') {
            foreach ($apiMethod as $item) {
                $result .= $requestParams[$item];
            }
            $hash = strtoupper(hash_hmac('sha1', $result, $secretWord));


        } else {
            foreach ($apiMethod as $item) {
                $result .= $normalizedParams[$item];
            }
            $hash = strtoupper(hash_hmac('sha1', $result, $secretWord));
        }
        return $hash;
    }

}

