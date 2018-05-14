<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

/**
* 
*/
class ProductController extends Controller
{
  
  function __construct()
  {
    // $this->middleware('auth');
  }

  public function get_data(Request $request)
  {
    $product = Product::all();

    if ($product !== null) {
      $res['success'] = true;
      $res['message'] = $product;

      return response($res);
    } else {
      $res['success'] = false;
      $res['message'] = 'There is no data!';

      return response($res);
    }
  }
}