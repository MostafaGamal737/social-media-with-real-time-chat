<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class productCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return
      [
       'name'=>$this->resource->name,
       'price'=>$this->price,
       'href'=>
       [

      'reviews'=>asset('api/products/'.$this->id)

       ],
     ];
    }
}
