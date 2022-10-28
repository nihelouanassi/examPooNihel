<?php
namespace Model;
class FreshItem extends \Model\Item {
    use Payable;
    private $bestBeforeDate;


    public function __construct($name, $price, $weight,$bestBeforeDate)
    {
        parent::__construct($name, $price, $weight);

        $this->bestBeforeDate=$bestBeforeDate;
    }


    /**
     * @return mixed
     */
    public function getBestBeforeDate()
    {
        return $this->bestBeforeDate;
    }

    /**
     * @param mixed $bestBeforeDate
     */
    public function setBestBeforeDate($bestBeforeDate): void
    {
        $this->bestBeforeDate = $bestBeforeDate;
    }

    public function formatShow()
    {
        parent::formatShow();
        echo " : " . $this->bestBeforeDate;
    }

    public function taxRatePerTenThousand()
    {
        if($this->getWeight()<1000){
            $this->taxe=1000;
        }elseif ($this->getWeight()<2&&$this->getWeight()>1){
            $this->taxe=900;

        }
    }


}
