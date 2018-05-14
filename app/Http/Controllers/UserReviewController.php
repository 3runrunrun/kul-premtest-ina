<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserReview;

/**
* 
*/
class UserReviewController extends Controller
{
  
  function __construct()
  {
    // $this->middleware('auth');
  }

  public function create(Request $request)
  {
    $this->validate($request, [
      'order_id' => 'required|numeric',
      'product_id' => 'required|numeric',
      'user_id' => 'required|numeric',
      'rating' => 'required|numeric|between:1,5',
      'review' => 'required',
    ]);

    $userReview = new UserReview;

    $userReview->fill([
      'order_id' => $request->input('order_id'),
      'product_id' => $request->input('product_id'),
      'user_id' => $request->input('user_id'),
      'rating' => $request->input('rating'),
      'review' => $request->input('review'),
    ]);
    
    if ($userReview->save()) {
      $res['success'] = true;
      $res['message'] = 'Review has been saved!';

      return response($res);
    } else {
      $res['success'] = false;
      $res['message'] = 'Error!';

      return response($res);
    }
  }

  public function get_data(Request $request)
  {
    $userReview = UserReview::with('user')->get();

    if ($userReview !== null) {
      $res['success'] = true;
      $res['message'] = $userReview;

      return response($res);
    } else {
      $res['success'] = false;
      $res['message'] = 'There is no data!';

      return response($res);
    }
  }

  public function show(Request $request, $id)
  {
    $userReview = UserReview::with('user')->find($id);

    if ($userReview !== null) {
      $res['success'] = true;
      $res['message'] = $userReview;

      return response($res);
    } else {
      $res['success'] = false;
      $res['message'] = 'There is no data!';

      return response($res);
    }
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'id' => 'numeric',
      'order_id' => 'numeric',
      'product_id' => 'numeric',
      'user_id' => 'numeric',
      'rating' => 'numeric|between:1,5',
    ]);

    $newData = array_filter($request->all());

    if ($request->has('id')) {
      $res['success'] = false;
      $res['message'] = 'You cannot change the data id!';

      return response($res);
    } 

    $result = UserReview::find($id)
      ->update($newData);

    if ($result) {
      $res['success'] = true;
      $res['message'] = 'Review has been updated!';

      return response($res);
    } else {
      $res['success'] = true;
      $res['message'] = 'Sorry we got a problem :(';

      return response($res);
    }
  }

  public function destroy(Request $request, $id)
  {
    $userReview = UserReview::find($id);

    if ($userReview->delete($id)) {
      $res['success'] = true;
      $res['message'] = 'Review has been deleted!';

      return response($res);
    } else {
      $res['success'] = false;
      $res['message'] = 'Oops, sorry we got a problem!';

      return response($res);
    }
  }
}