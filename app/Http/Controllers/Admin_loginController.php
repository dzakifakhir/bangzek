<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Product;
use App\User;
use App\Transactions;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin_loginController extends Controller
{
  public function adminform()
  {
    return view('admin.login');
  }

  public function adminLogin(Request $request)
  {
    $this->validate($request, [
      'email'   => 'required|email',
      'password' => 'required|min:6'
    ]);

    //$adminid = Auth::user()->id;
    $admin = Admin::where('email', $request->email)
            ->where('password', $request->password)->first();

    //dd($admin);
    if ($admin) {
      session(["login" => $admin->toArray()]);
      return redirect(route('admin.dashboard'));
    }

    else
    {
      return redirect(route('admin'));
    }
  }

  public function admin_dashboard(Request $request)
  {
    $total = Product::count('id');
    $totalusers = User::count('id');
    $transaction = Transactions::count('id');
    $prodct_list = Product::latest()->paginate(5)->appends(request()->except('page'));
    $notifications = Transactions::latest()->paginate(5)->appends(request()->except('page'));

    return view('admin.dashboard', compact('total', 'totalusers', 'transaction', 'notifications', 'prodct_list'));
  }

  public function logout(Request $request)
  {
    // Auth::logout();
    session(["login" => NULL]);
    return redirect()->route('admin');
  }

}
