<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BulletResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'content' => $this->content,
            'type_id' => $this->type_id,
            'signifier' => $this->signifier,
            'date' => $this->date,
        ];
    }
}
