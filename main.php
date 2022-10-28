<?php

use Model\Item;

require_once('autoload.php');
require_once ('Model\ShoppingCart.php');


$item= new Model\Item("corn flakes",500,600);
echo "<pre>"; var_dump($item->getPrice()) ;echo "</pre>";
echo "<pre>"; var_dump($item->getName()) ;echo "</pre>";

$item=new Model\Item("hello",200,700);
$panier=new Model\ShoppingCart();

echo "<pre>"; var_dump($panier->getArticles()) ;echo "</pre>";
$panier->addItem($item);
echo "<pre>"; var_dump($panier->getArticles()) ;echo "</pre>";
$item2=new Model\Item("test2",900,690);
$panier->removeItem($item2);
echo "<pre>"; var_dump($panier->removeItem($item2)) ;echo "</pre>";
echo "<pre>"; var_dump($panier->removeItem($item)) ;echo "</pre>";
echo "<pre>"; var_dump($panier->getArticles()) ;echo "</pre>";

$panier->addItem($item);
$panier->addItem($item2);
$item3= new Model\Item("corn flakes",500,50000);
$item5= new Model\FreshItem("corn flakes",500,50000,"20-04-2023");


echo "<pre>"; var_dump($panier->itemCount()) ;echo "</pre>";
echo "<pre>"; var_dump($panier->totalPrice()) ;echo "</pre>";
echo "<pre>"; var_dump($panier->addItem($item3)) ;echo "</pre>";
echo "<pre>"; var_dump($panier->toString()) ;echo "</pre>";
echo "<pre>"; var_dump($item3->formatShow()) ;echo "</pre>";
echo "<pre>"; var_dump($item5->formatShow()) ;echo "</pre>";

 $ticket = new Model\Ticket("RGBY17032012 - Walles-France", 9000);
echo "<pre>"; var_dump($ticket) ;echo "</pre>";
echo "<pre>"; var_dump($ticket->cost()) ;echo "</pre>";
echo "<pre>"; var_dump($ticket->taxRatePerTenThousand()) ;echo "</pre>";
echo "<pre>"; var_dump($ticket->label()) ;echo "</pre>";









