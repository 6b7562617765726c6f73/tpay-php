<?php

require_once dirname(dirname(__FILE__)) . '/src/_class_tpay/paymentBasic.php';

class TpayBasic
{

    public function __construct()
    {
        $this->getDataForTpay();
    }
    public function getDataForTpay()
    {

        $config = array(
            'kwota'     => 999.99,
            'opis'      => 'Transaction description',
            'crc'       => '100020003000',
            'wyn_url'   => 'http://example.pl/examples/paymentBasic.php?transaction_confirmation',
            'wyn_email' => 'shop@example.com',
            'pow_url'   => 'http://example.pl/examples/paymentBasic.php',
            'email'     => 'customer@example.com',
            'imie'      => 'Jan',
            'nazwisko'  => 'Kowalski',
        );

        $tpay = new tpay\PaymentBasic();

        /*
         * This method return HTML form
         */
        $paymentForm = $tpay->getTransactionForm($config);

        echo $paymentForm;

    }
}
