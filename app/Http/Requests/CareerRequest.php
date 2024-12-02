<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
{
    /**
     * Tentukan apakah user diizinkan melakukan request ini.
     */
    public function authorize(): bool
    {
        return true; // Set ke true jika tidak ada pembatasan
    }

    /**
     * Aturan validasi untuk request.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'posted_date' => 'required|date',
            'expired_date' => 'nullable|date|after_or_equal:posted_date',
            'posted_by' => 'nullable|string|max:255', // Jika menggunakan nama/role
        ];
    }

    /**
     * Ubah pesan error default (opsional).
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Judul wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.',
            'posted_date.required' => 'Tanggal posting wajib diisi.',
            'expired_date.after_or_equal' => 'Tanggal kadaluarsa harus sama atau setelah tanggal posting.',
        ];
    }
}
