<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'cpf' => [ 'string', 'max:11'],
            'dt_nascimento' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'string', 'max:20'],
            'cidade' => ['required', 'string', 'max:50'],
            'estado' => ['required', 'string', 'max:50'],
            'pais' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'cpf' => $input['cpf'],
            'dt_nascimento' => $input['dt_nascimento'],
            'telefone' => $input['telefone'],
            'cidade' => $input['cidade'],
            'estado' => $input['estado'],
            'pais' => $input['pais'],
        ]);
    }
}
