<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
         'discrption'=>$this->detail,
         'href'=>
         [
          // 'reviews'=>route('reviews.index',$this->id)
        'reviews'=>asset('api/products/'.$this->id.'/reviews')

         ],
       ];
    }
}
