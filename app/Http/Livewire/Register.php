<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $country;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'firstName' => 'required|string|min:2|max:191',
        'lastName' => 'required|string|max:191',
        'email' => 'required|email',
        'phone' => 'required|numeric|min:1000000000|max:9999999999',
        'address' => 'required|string|min:4|max:191',
        'city' => 'required|string|min:2|max:191',
        'country' => 'required|string|min:2|max:191',
        'password' => 'required|string|min:6|max:191|confirmed',
    ];

    public function register()
    {
        $this->validate();

        $user = User::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'country' => $this->country,
            'password' => Hash::make($this->password),
        ]);

        $token = $user->createToken('user_token');

        $this->reset();

        session()->flash('success', "User has been registered successfully. Token : {$token->plainTextToken}");
    }

    public function render()
    {
        return view('livewire.register');
    }
}
