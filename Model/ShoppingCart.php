<?php
namespace Model;

class ShoppingCart{

    private array  $articles=array();
    private int $id;

    /**
     * @param int $id
     */
    public function __construct()
    {
        if (!isset($GLOBALS['idShopCart'])) {
            $GLOBALS['idShopCart'] = 1 ;
            $this->id = $GLOBALS['idShopCart'];
        }else{

            $GLOBALS['idShopCart'] = $GLOBALS['idShopCart'] + 1;
            $this->id =  $GLOBALS['idShopCart'];
        }

    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * @param array $articles
     */
    public function setArticles(array $articles): void
    {
        $this->articles = $articles;
    }



     function addItem(Item $item){
        if($item->getWeight()<=10000){
            $this->articles[] = $item;
        }else{

            echo "le poids d'article ne doit pas dépasser 10kg";
        }

     }

     function removeItem(Item $item){
        $key=array_search($item,$this->articles);
        if($key!==false){
            unset($this->articles[$key]);
            echo "article supprimer";
            return true;

        }else{
            return false;
        }

     }


     function itemCount(){
        return count($this->articles);
     }

     function totalPrice(){
        $total=0;
        foreach ($this->articles as $article){
            $total+=$article->getPrice();
        }
        return $total;
     }


     function toString(){
         $str = "Panier: " . $this->id . " contien" . $this->itemCount() . " items. Total de panier: " . $this->totalPrice();
         $str .= "<br>";
         $str .= "Items: <br>";
         foreach($this->articles as $article){
             $str .= $article->getName() . " : " . $article->getPrice() . " : " . $article->getWeight() . " g <br>";
         }
         echo $str;

     }




}




