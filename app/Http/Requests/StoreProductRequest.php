<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'  => 'required|string',
            'price' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required'  => 'اسم المنتج مطلوب',
            'price.required' => 'السعر مطلوب ويجب أن يكون أكبر من صفر',
            'stock.required' => 'الكمية مطلوبة ولا يمكن أن تكون سالبة',
        ];
    }
}
