<?php
namespace Model;

trait Payable{

    public $taxe;

    /**
     * @param $taxe
     */
    public function __construct()
    {
        $this->taxe = 0;
    }


    public  function label(){
    }
    public  function  cost(){



    }
    public  function  taxRatePerTenThousand() {

        return $this->taxe;



    }

}
