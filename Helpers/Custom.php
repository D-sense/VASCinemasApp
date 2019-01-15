<?php
namespace App\Helpers;
use Validator;

class Custom {


  public static function returnResponseWithErrorMessage($error)
  {
    return response()->json([
      'status_code' => 500,
      'body' => [
        'message' => $error->getMessage()
      ]
    ], 500);
  }


  /**
   * Get a validator for an incoming registration request.
   *
   * @param  array  $data
   * @return \Illuminate\Contracts\Validation\Validator
   */
  public static function validator(array $data, $rules)
  {
    return Validator::make($data, $rules);
  }

  

}