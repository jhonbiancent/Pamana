<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Accounts;

use function Laravel\Prompts\alert;

class AccountsController extends Controller
{
    public function create()
    {
        return view('signup_and_login.signup1');
    }

    // when user clicks his/her profile without loggin in first//
    public function verifyUserSession()
    {
        if (!session()->has('account_id')) {
            return redirect('/login')->withErrors('Please login first.');
        }

        $accountId = session('account_id');

        $accounts = Accounts::find($accountId);

        if (!$accounts) {
            return redirect('/signup1')->withErrors('account error.');
        }

        return view('profile.userInfo', compact('accounts',));
    }



    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $account = Accounts::where('email', $request->email)->first();

        if (!$account || !Hash::check($request->password, $account->password)) {
            return back()
                ->withErrors(['email' => 'Invalid credentials'])
                ->withInput();
        }

        //  Manually log user in (session)
        session(['account_id' => $account->id]);

        return redirect('/sell');
    }

    /*---------------------sign up step1--------------------*/
    public function step1()
    {
        return view('signup_and_login.signup1');
    }

    public function postStep1(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact' => 'required|string|max:50',
        ]);

        session(['signup_and_login.signup1' => $validated]);

        return redirect()->route('signup_and_login.signup2');
    }
    /*---------------------sign up step2--------------------*/
    public function step2()
    {
        // Prevent skipping step 1
        if (!session()->has('signup_and_login.signup1')) {
            return redirect()->route('signup_and_login.signup1');
        }

        return view('signup_and_login.signup2');
    }

    public function postStep2(Request $request)
    {
        $validated = $request->validate([
            'birth_date' => 'required|date',
            'address' => 'required|string|max:500',
        ]);

        session(['signup_and_login.signup2' => $validated]);

        return redirect()->route('signup_and_login.signup3');
    }
    /*---------------------sign up step3--------------------*/

    public function step3()
    {
        if (
            !session()->has('signup_and_login.signup1') ||
            !session()->has('signup_and_login.signup2')
        ) {
            return redirect()->route('signup_and_login.signup1');
        }

        return view('signup_and_login.signup3');
    }

    public function complete(Request $request)
    {
        $step1 = session('signup_and_login.signup1');
        $step2 = session('signup_and_login.signup2');

        if (!$step1 || !$step2) {
            return redirect()->route('signup_and_login.signup1');
        }

        $validated = $request->validate([
            'email' => 'required|email|unique:accounts,email',
            'password' => 'required|min:8|confirmed',
        ]);

        Accounts::create([
            'first_name' => $step1['first_name'],
            'last_name' => $step1['last_name'],
            'contact' => $step1['contact'],
            'birth_date' => $step2['birth_date'],
            'address' => $step2['address'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Clear signup session
        session()->forget('signup_and_login');

        return redirect('/login')->with('success', 'Account created successfully!');
    }

    public function logout()
    {
        session()->forget('account_id');
        alert("successfully logged out!");
        return redirect('/login');
    }
    public function showLogin()
    {
        return view('signup_and_login.login');
    }
}
