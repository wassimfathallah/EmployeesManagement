
<?php


 use Illuminate\Http\Request;

class EmployeeRequest extends Request
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
        return [
            

            'first_name' => 'required|sFtring|max:255',
            'last_name' => 'required|string|max:255',
            'cin' => 'required|string|max:25',
            'cnss' => 'required|string|max:255',
            'stuation' => 'required|string|max:255', 
            'email' => 'unique:employees',
            'contact' => 'required|string|max:255',
            'departement_id' => 'required|string|max:255'






            
        ];
    }
}
