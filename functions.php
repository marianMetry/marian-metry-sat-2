<?php
// //write a function getNumMatches that searches for a word in an array of words and returns 
// the number of matches (repetitions).

function getNumMatches($term)
{
   $count=0;
   $arr=['h','h','j','j','j','j','u','h','h','h','h'];
   for($i=0;$i<count($arr);$i++)     //count($arr)=>btgeeb the length of array
   {
      if($term==$arr[$i])
      {
   
         $count++;
      }
   }
   echo $count;
}
// getNumMatches("j");

//+++++++++++++++++++++++++++++++++++++++++++++++++++++

function getPriceWithDiscount ($price)
{
   if ($price <1000) {
     
    $totalPrice =(10/100)*$price;

    return $totalPrice;

   }elseif ($price >=1000) {
    $totalPrice =(5/100)*$price;
    
    return $totalPrice;
      
   }
}

