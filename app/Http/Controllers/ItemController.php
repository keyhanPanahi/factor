<?php

namespace App\Http\Controllers;

use App\Models\Factor;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Factor $factor)
    {
        return view('item.index',compact('factor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Factor $factor)
    {
        $products = Product::all();
        return view('item.create',compact('products','factor'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Factor $factor)
    {
        $inputs = $request->all();
        $inputs['factor_id'] = $factor->id;
        $inputs['total_prices'] = $request->amount * $request->unit_price;
        Item::create($inputs);
        return to_route('item.index',$factor->id)->with('swal-success', 'آیتم جدید اضافه شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Factor $factor,Item $item)
    {
        $products = Product::all();
        return view('item.edit',compact('products','item','factor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factor $factor,Item $item)
    {
        $inputs = $request->all();
        $inputs['total_prices'] = $request->amount * $request->unit_price;
        $item->update($inputs);
        return to_route('item.index',$factor->id)->with('swal-success', 'آیتم فاکتور شما با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $result = $item->delete();
        return redirect()->back()->with('swal-success', 'آیتم فاکتور شما با موفقیت حذف شد');
    }
}
