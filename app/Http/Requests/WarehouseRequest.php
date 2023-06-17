<?php

namespace App\Http\Requests;

use App\Domain\Models\warehouse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class WarehouseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'code' => ['required','string', 'min:3','max:3',Rule::unique(warehouse::class)->ignore($this->warehouse->id)],
            'description' => 'string|nullable',
            'is_active' => 'boolean'
        ];
    }
}
