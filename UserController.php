<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    public function index()
    {
        $url = url('/register');
        $title = 'Register Customer';
        $data = compact('url', 'title');
        return view('form')->with($data);
    }
    public function register(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',
            ]
        );

        $customer = new Customers;

        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];
        $customer->save();
        return redirect('/customer/view');
    }

    public function view()
    {
        // $customer = Customers::all();
        // $customer = $customer->toArray();
        // print_r($customer);
        // die('++++++');
        //$data = compact('customer');
        return view('customer_view')->with('customer', Customers::all());
    }
    public function delete_user($id)
    {
        $customer = Customers::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }

        return redirect('customer/view');
    }
    public function edit($id)
    {
        $customer = Customers::find($id);
        if (!is_null($customer)) {
            $url = url('/customer/update/') . '/' . $id;
            $title = "Update Customer";
            $data = compact('customer', 'url', 'title');
            return view('form')->with($data);
        } else {
            return redirect('customer/view');
        }
    }

    public function update($id, Request $request)
    {
        $customer = Customers::find($id);
        if (is_null($customer)) {
            return redirect('/customer/view');
        } else {
            $customer->name = $request['name'];
            $customer->email = $request['email'];

            $customer->save();
            return redirect('/customer/view');
        }
    }
}
