<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        $customers = Customer::where('delflag',0)->get();

        return view('customer.index',compact('customers'));
    }

    /**
     * Show the form for creating new User.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get()->pluck('name', 'name');

        return view('customer.create', compact('roles'));
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomersRequest $request)
    {
        $request['goods_id'] = json_encode($request->input('goods_id'));
        $request['created_at'] = date("Y-m-d H:i:s",time());
        $request['updated_at'] = $request['created_at'];

        $customer = Customer::create($request->all());

        return redirect()->route('customers.index');
    }

    /**
     * Show the form for editing User.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $customer = Customer::findOrFail($id);

        return view('customer.edit', compact('customer'));
    }

    /**
     * Update User in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomersRequest $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $request['goods_id'] = json_encode($request->input('goods_id'));
        $request['updated_at'] = date("Y-m-d H:i:s",time());
        $customer->update($request->all());

        return redirect()->route('customers.index');
    }

    /**
     * Remove User from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delflag = 1;
        $customer->save();
//        $customer->delete();

        return redirect()->route('customers.index');
    }

    public function complete(Request $request)
    {
        $completes = Customer::where('pay_status',1)->get();

        return view('customer.complete',compact('completes'));
    }


    public function uncomplete(Request $request)
    {
        $uncompletes = Customer::where('pay_status',2)->get();

        return view('customer.uncomplete',compact('uncompletes'));
    }

}
