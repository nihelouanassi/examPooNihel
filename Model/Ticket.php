<?php
namespace Model;
class Ticket  {
    use Payable;

    private $reference;
    private $price;




    public function __construct($reference, $price)
    {

        $this->reference=$reference;
        $this->price=$price;


        $this->taxe=2500;

    }

    public function cost()
    {
        $cout = $this->price;
        $cout = substr_replace($cout, '.', -2, 0);
        $cout = $cout . ' €';
        echo $cout;
    }

    public function taxRatePerTenThousand()
    {
        return $this->taxe;
    }

    public function label()
    {
        return $this->reference;
    }


    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference): void
    {
        $this->reference = $reference;
    }



}
