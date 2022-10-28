<?php
namespace Model;
class Item  {
    use Payable;
    private $name;
    private $price;
    private $weight;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @param $name
     * * @param $price
     * * @param $weight
     */
    public function __construct($name,$price,$weight)
    {
        $this->name = $name;
        $this->price=$price;
        $this->weight=$weight;
        $this->taxe=1000;
    }

    public function taxRatePerTenThousand()
    {
        return $this->taxe;

    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function formatShow(){
        echo $this->name;
        $price = $this->price;
        $price = substr_replace($price, '.', -2, 0);
        $price = " : ". $price . ' €';
        echo $price;
        echo " : " . $this->weight . "g";

    }




}


