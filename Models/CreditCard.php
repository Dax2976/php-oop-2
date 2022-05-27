<?php
 class CreditCard{
    private $numbers;
    private $scadenza = TRUE;
    private $cvv;

   public function __construct($numbers,$scadenza,$cvv)
   {
      $this-> Setnumbers($numbers);
      $this-> Setscadenza($scadenza);
      $this-> Setcvv($cvv);
   }
   // funzioni get
   public function getNumber()
   {
      return $this-> numbers;
   }

  

   public function getScadenza()
   {
      return $this->scadenza;
   }

   public function getCvv()
   {
      return $this->cvv;
   }

   //funzioni set

   public function Setnumbers($numbers)
   {
      if(is_numeric($numbers)==16){
         $this->numbers = $numbers;
      }else{
         echo ('error credit card unviable');
      }
   }

   public function Setcvv($cvv)
   {
      if(strlen($cvv)==3){
         $this->cvv = $cvv;
      } else{
         echo('error cvv unviable');
      }
   }

   public function Setscadenza($scadenza)
   {
      return $this->scadenza;
   }

   // public function Datascadenza($numbers,$scadenza,$cvv)
   // {
   //    $this->cvv = $cvv;
   //    $this-> numbers = $numbers; 
   // }

 }
?>