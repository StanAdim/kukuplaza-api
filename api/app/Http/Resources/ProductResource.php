<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this-> id,
            'name' => $this-> name,
            'price' => $this-> price,
            'noOfstars' => $this-> noOfstars,
            'productImg1' => $this-> productImg1,
            'productImg2' => $this-> productImg2,
            'productImg3' => $this-> productImg3,
            'description' => $this-> description,
            'category_id' => $this-> category_id,
            "dateCreated"=> $this->created_at-> format('H:i d-m-Y'),
        ];
    }
}
