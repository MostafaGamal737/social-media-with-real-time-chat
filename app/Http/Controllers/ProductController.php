<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\productRequest;
use App\Http\Resources\productResource;
use App\Http\Resources\productCollection;
use App\product;
use Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:api')->except('show','index');
  }


    public function index()
    {
        return productCollection::collection ( product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(productRequest $request)
    {

      $product=new product();
      $product->name=$request->name;
      $product->price=$request->price;
      $product->discount=$request->discount;
      $product->detail=$request->detail;
      $product->save();
       return Response(new productResource($product),Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return new productResource($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
      if (Auth::id()==$product->user_id) {
        $product->update($request->all());
        return Response(new productResource($product),Response::HTTP_CREATED);
      }
        return response()->json('u can only ubdate your products ',404);
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        if (Auth::id()==$product->user_id)
        {
          $product->delete();
          foreach ($product->reviews as $review)
          {
            $review->delete();
          }
          return Response('null',Response::HTTP_NO_CONTENT);
        }
        return response()->json('u can only delete your products ',404);
  }
}
