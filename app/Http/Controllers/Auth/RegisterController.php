<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Category;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    // ---------------------------------------------------------------------------|
    // Override the showRegistrationForm function by passing it the category data.|
    // ---------------------------------------------------------------------------|
    
    protected function showRegistrationForm() {
        $categories = Category::all();

        $data = [
            'categories' => $categories
        ];

        return view('auth.register', $data);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['string', 'max:45'],
            'surname' => ['string', 'max:45'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'vat_number' => ['required', 'max:20', 'unique:users'],
            'restaurant_name' => ['required', 'max:100', 'string'],
            'restaurant_address' => ['required', 'max:100', 'string'],
            'categories' => ['nullable', 'exists:categories,id']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {        
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'vat_number' => $data['vat_number'],
            'restaurant_name' => $data['restaurant_name'],
            'restaurant_address' => $data['restaurant_address']
        ]);

        if(isset($data['categories']) && is_array($data['categories'])) {
            $user->categories()->sync($data['categories']);
        }

        return $user;
    }
}
