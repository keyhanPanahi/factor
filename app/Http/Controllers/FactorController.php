<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactorRequest;
use App\Models\Customer;
use App\Models\Factor;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factors = Factor::orderBy('created_at', 'desc')->get();
        return view('factor.index',compact('factors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        return view('factor.create',compact('customers'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FactorRequest $request)
    {
        $inputs = $request->all();
        $realTimestampStart = substr($request->date, 0, 10);
        $inputs['date'] = date("Y-m-d H:i:s", $realTimestampStart);
        $factor = Factor::create($inputs);
        return to_route('item.index',$factor->id)->with('swal-success', 'اکنون آیتم های فاکتور خود را انتخاب کنید');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Factor $factor)
    {
        $customers = Customer::all();
        return view('factor.edit',compact('factor','customers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factor $factor)
    {
        $inputs = $request->all();
        $realTimestampStart = substr($request->date, 0, 10);
        $inputs['date'] = date("Y-m-d H:i:s", $realTimestampStart);

        $factor->update($inputs);
        return to_route('factor.index')->with('swal-success', 'فاکتور شما با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factor $factor)
    {
        $result = $factor->delete();
        return to_route('factor.index')->with('swal-success', 'فاکتور شما با موفقیت حذف شد');
    }
}
