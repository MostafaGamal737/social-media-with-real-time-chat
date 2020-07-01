<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class reviewsResource extends JsonResource
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
          'review_id'=>$this->id,
          'name'=>$this->customer_name,
          'body'=>$this->review,
          'product_id'=>$this->product_id,
          'href'=>
          [
         'review'=>asset('api/products/'.$this->product_id.'/reviews/'.$this->id)
          ],
        ];
    }
}
