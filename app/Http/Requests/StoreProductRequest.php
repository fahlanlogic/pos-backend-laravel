<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Ubah ke true agar bisa di ubah oleh siapa saja
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    // Ini sejenis DTO nya Laravel, bisa reusable dan wajib pakai namanya rules (aturan baku)
    public function rules(): array
    {
        return [
            'sku' => 'nullable|string|max:255|unique:products,sku', // urutan penting, sometimes dan nullable harus diawal, unique a/ pengecekan ke db yang membutuhkan waktu
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'sometimes|integer|min:0',
            'discount_percentage' => 'sometimes|numeric|min:0|max:100',
            'category' => 'required|string|max:255',
            'description' => 'nullable|string',
        ];
    }
}
