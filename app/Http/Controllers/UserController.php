<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

/**
* 
*/
class UserController extends Controller
{
  
  function __construct()
  {
    // $this->middleware('auth');
  }

  public function get_data(Request $request)
  {
    $user = User::all();
    $user->userReviews()->get();

    if ($user !== null) {
      $res['success'] = true;
      $res['message'] = $user;

      return response($res);
    } else {
      $res['success'] = false;
      $res['message'] = 'There is no data!';

      return response($res);
    }
  }

  public function show(Request $request)
  {
    if ($request->has('id')) {
      $user = User::find($request->input('id'));

      if ($user !== null) {
        $res['success'] = true;
        $res['message'] = $user;

        return response($res);
      } else {
        $res['success'] = false;
        $res['message'] = 'There is no data!';

        return response($res);
      }
    } else {
      $res['success'] = false;
      $res['message'] = 'Values are invalid!';

      return response($res);
    }    
  }

}