<?php

namespace App\Imports;

use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\Importable;

class UsersImport implements ToModel,WithHeadingRow,WithValidation
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new User([
            'name'     => $row['name'],
            'email'    => $row['email'], 
            'password' => \Hash::make($row['password']),
        ]);
    }

    public function rules() {
        return [
            'name' => Rule::in(['required','unique:users']),
            'email' => Rule::in(['required','unique:users']),
            'password' => Rule::in(['required'])
            // 'name' => 'required | unique:users,name',
            // 'email' => 'required | unique:users,email',
            // 'password' => 'required'
        ];
    }
}
