<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];

        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()):
            case "POST":
                switch ($currentAction):
                    case 'checkout':
                        $rules = [
                            "name" => 'required',
                            "email" => 'required|email',
                            "phone" => 'required|min:10|max:10',
                            "address" => 'required',
                        ];
                        break;
                    default:
                        break;
                endswitch;
        endswitch;
        return $rules;
    }
}
