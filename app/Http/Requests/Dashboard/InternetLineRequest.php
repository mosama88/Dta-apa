<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\TypeLineEnum;

class InternetLineRequest extends FormRequest
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
        $InternetLineId = $this->route('InternetLine') ? $this->route('InternetLine')->id : null;

        return [
            'prosecution_id' => 'required|exists:prosecutions,id',
            'code_line' => 'required|string|max:20|unique:internet_lines,code_line' . $InternetLineId,
            'order_number' => 'required|string|max:20|unique:internet_lines,order_number' . $InternetLineId,
            'internet_speed' => 'required|string|max:20',
            'type_line' => [
                'required',
                Rule::in(array_column(TypeLineEnum::cases(), 'value')),
            ],
            'ip_address' => 'nullable|ip|unique:internet_lines,ip_address' . $InternetLineId,
            'mac_address' => 'nullable|mac_address|unique:internet_lines,mac_address' . $InternetLineId,
            'governorate_id' => 'required|exists:governorates,id',
        ];
    }


    public function messages(): array
    {
        return [
            'prosecution_id.required' => 'الجهه مطلوبة.',
            'prosecution_id.exists' => 'الجهه المحددة غير موجودة.',

            'code_line.required' => 'كود الخط مطلوب.',
            'code_line.unique' => 'كود الخط مسجل بالفعل.',
            'code_line.max' => 'كود الخط يجب ألا يتجاوز 20 حرفًا.',

            'order_number.required' => 'رقم الطلب مطلوب.',
            'order_number.unique' => 'رقم الطلب مسجل بالفعل.',
            'order_number.max' => 'رقم الطلب يجب ألا يتجاوز 20 حرفًا.',

            'internet_speed.required' => 'سرعة الإنترنت مطلوبة.',
            'internet_speed.max' => 'سرعة الإنترنت يجب ألا تتجاوز 20 حرفًا.',

            'type_line.required' => 'نوع الخط مطلوب.',
            'type_line.max' => 'نوع الخط يجب ألا يتجاوز 200 حرفًا.',

            'ip_address.ip' => 'عنوان الـ IP غير صالح.',
            'mac_address.mac_address' => 'عنوان الـ MAC غير صالح.',

            'governorate_id.required' => 'المحافظة مطلوبة.',
            'governorate_id.exists' => 'المحافظة المحددة غير موجودة.',
        ];
    }
}
