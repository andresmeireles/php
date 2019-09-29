<?php

require __DIR__.'/../vendor/autoload.php';

use Konekt\PdfInvoice\InvoicePrinter;

$invoice = new InvoicePrinter('A4', 'R$', 'en');

$lang = [
    'number'   => 'Número',
    'date'     => 'Data de Cobrança',
    'time'     => 'Tempo',
    'due'      => 'vencimento',
    'to'       => 'Para',
    'from'     => 'De',
    'product'  => 'Produto',
    'qty'      => 'qnt',
    'price'    => 'Preço',
    'discount' => 'Desconto',
    'vat'      => 'vat',
    'total'    => 'Total',
    'page'     => 'Pagina',
    'page_of'  => 'de',
];
$invoice->lang = $lang;
$invoice->setColor('#ff7733');
//$invoice->setLogo('image.jpg');
$invoice->setType('Cobrança doidona');
$invoice->setReference('Cobra Kay 02');
$invoice->setDate((new \DateTime('now'))->format('d/m/Y'));
$invoice->setDue((new \DateTime('now'))->add(new \DateInterval('P1M'))->format('d/m/Y'));
$invoice->setFrom(['Minha empresa em jupter', 'jp']);
$invoice->setTo(['A empresa que vai receber o que irei mandar', 'br', 'rua dos lobos']);

$invoice->addItem('Casco do cachorro velho de fogo', 'peçado milenar de um casco de cavalo imbuido de fogo eterno e azul', 34, 8, 200, 30, 1000);

$invoice->addTotal('Desconto', 200, true);
$invoice->addTotal('Total', 200, true);
$invoice->addBadge('MALUCO!', '#ff3322');

$invoice->addTitle('Fred com fogo na venta');
$invoice->addParagraph('Fred era um rapaz muito legal cheio de amigos e viva feliz na floresta');

$invoice->addItem('Casco do cachorro velho de fogo', 'peçado milenar de um casco de cavalo imbuido de fogo eterno', 3, 8, 200, 350, 10);

$invoice->setFooternote('Pagina cheia de peripercias');


$invoice->render('exp2.pdf', 'I');

//header("Content-type: application/pdf");
//header("Content-Disposition: inline; filename=filename.pdf");

//readfile('/tmp/exp2.pdf');
//echo '<a href="/tmp/exp2.pdf">baxar</a>';
//$filepath = '/tmp/exp2.pdf';
//header('Content-Description: File Transfer');
//        header('Content-Type: application/octet-stream');
//        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
//        header('Expires: 0');
//        header('Cache-Control: must-revalidate');
//        header('Pragma: public');
//        header('Content-Length: ' . filesize($filepath));
//        flush(); // Flush system output buffer
//        readfile($filepath);