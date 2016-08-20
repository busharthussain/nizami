<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Http\JsonResponse;

class userRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        $userId = \Auth::user()->id;
        return [
            'name' => 'required',
            'user_name' => 'required',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'father_name' => 'required',
            'type' => 'required',
            'institute_type' => 'required',
            'admission_date' => 'required',
            'admission_number' => 'required',
            'dob' => 'required',
            'city' => 'required',
            'district' => 'required',
            'blood_group' => 'required',
            'user_id_card_number' => 'required',
            'guardian_id_card_number' => 'required',
            'landlord_number' => 'required',
            'mobile_number' => 'required',
            'guardian_mobile_number' => 'required',
            'academic_background' => 'required',
            'academic_background_institute_name' => 'required',
            'permanent_address' => 'required',
            'current_address' => 'required',
        ];
    }

    public function response(array $errors) {
        return new JsonResponse($errors, 422);

    }
}
