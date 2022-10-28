<?php

class Invoice{

    public $listArticles = array();
    public $listTickets= array();

    public function __construct($listArticles,$listTickets)
    {
        $this->listArticles=$listArticles;
        $this->listTickets=$listTickets;
    }

    public function add(\Model\Payable $payable){

        $this->list[]=$payable;
    }

    /**
     * @return array
     */
    public function getListArticles(): array
    {
        return $this->listArticles;
    }

    /**
     * @return array
     */
    public function getListTickets(): array
    {
        return $this->listTickets;
    }

    public function getTotalAmount(){
        $totalAmount = 0;
        foreach($this->listArticles as $item){
            $totalAmount += $item->getTax();
        }
        foreach($this->listTickets as $ticket){
            $totalAmount += $ticket->getTax();
        }
        return $totalAmount;
    }

    public function getTotalTax(){
        $totalTax = 0;
        foreach($this->listArticles as $item){
            $totalTax += $item->getTax() - $item->getPrice();
        }

        foreach($this->listTickets as $ticket){
            $totalTax += $ticket->getTax() - $ticket->getPrice();



        }
        return $totalTax;
    }

}
