<?php
namespace App\Helpers;
use Validator;
use Modules\Cinema\Entities\Cinema;

class Custom {

  /**
   * Get an exception 
   *
   * @param  Exception  $error
   * @return Exception 
   */
  public static function returnResponseWithErrorMessage($error)
  {
    return $error->getMessage();
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


  /**
   * Get Cinema name.
   *
   * @param  $id
   * @return string $result->name
   */
  public static function getCinemaName($id)
  {
    $result = Cinema::FindOrFail($id);
    return $result->name;
  }

  

}