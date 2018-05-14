<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
* 
*/
class AlgorithmTest extends Controller
{

  protected $n1 = 0;
  protected $n2 = 1;
  protected $n3 = 0;
  
  public function primeNumber(Request $request)
  {
    $this->validate($request, [
      'max' => 'required|numeric'
    ]);

    $numbers = array();

    for ($i=0; $i <= $request->input('max'); $i++) { 
      $counter = 0;

      for ($j=$i; $j >= 1; $j--) { 
        if ($i % $j == 0) {
          $counter = $counter + 1;
        }
      }

      if ($counter == 2) {
        array_push($numbers, $i);
      }
    }

    $res['success'] = true;
    $res['message'] = $numbers;

    return response($res);
  }

  public function fiboNumber($max)
  {
    if ($this->n1 == 0 && $this->n2 == 1) {
      echo $this->n1 . " " . $this->n2;
    }

    if ($max > 0) {
      $this->n3 = $this->n1 + $this->n2;
      $this->n1 = $this->n2;
      $this->n2 = $this->n3;
      echo " " . $this->n3;
      $this->fiboNumber($max - 1);
    }
  }

  public function bringTheZero($number)
  {
    $strNum = strlen($number);
    $arrNum = str_split($number);

    for ($i=$strNum; $i >= 1; $i--) { 
      $zero = '';
      for ($j = 0; $j < $i - 1; $j++) { 
        $zero .= '0';
      }
      echo $arrNum[$strNum - $i] . $zero . "<br />";
    }
  }
}