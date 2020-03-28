<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.menu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$duplicata = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->product_id;
        });

        if ($duplicata->isNotEmpty()) {
            return redirect()->route('products.index')->with('success', 'Produit à déjà été ajouté au panier');
        }*/

        $product = Product::find($request->product_id);
        $size = $request->size;

        Cart::add($product->id, $product->name, 1, $product->price, ['size' => $size])
        ->associate('App\Product');

        return redirect()->route('products.index')->with('success', $product->name.'ajouté au panier');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        $validator = Validator::make($request->all(), [
        'quantity' => 'required|numeric|between:0,5'
        ]);

        Log::info($data);
        if($validator->fails()) {
            Session::flash('error', 'La quantité du produit ne doit pas dépasser 5.');
            return response()->json(['error' => 'Cart Quantity Has Not Been Updated']);
        }

        if( $data['quantity'] == 0){
            Cart::remove($rowId);
        }
        else {
            Cart::update($rowId, $data['quantity']);
        }

        Session::flash('danger', 'La quantité du produit est passée à ' . $data['quantity'] . '.');
        return response()->json(['success' => 'Cart Quantity Has Been Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rowId)
    {
       /* Cart::remove($rowId);

        return back()->with('success', 'Le produit a été supprimé');*/

    }
}
