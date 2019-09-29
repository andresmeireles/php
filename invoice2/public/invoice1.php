<?php

use WebChemistry\Invoice\Data\Account;
use WebChemistry\Invoice\Data\Company;
use WebChemistry\Invoice\Data\Customer;
use WebChemistry\Invoice\Data\Order;
use WebChemistry\Invoice\Data\PaymentInformation;
use WebChemistry\Invoice\Invoice;

require __DIR__.'/../vendor/autoload.php';

$company = new Company('Andre CORP', 'Ananindeua', 'Cidade Nova', '611', 'BR', '3333', '4444');
$customer = new Customer('Zezinho', 'Belém', 'Rua dos lobos 10', '66711000', 'BR', '530', '222');
$account = new Account('4445500', '903', '802');
$payment = new PaymentInformation('R$', '80250', '1234', 1.62);
$order = new Order('20645', new \DateTime('now'), $account, $payment, new \DateTime('now'), false);
$order->addItem('Gaming Nektok', 1500, 2);

$invoice = new Invoice($company);

echo $invoice->create($customer, $order);