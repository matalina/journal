<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
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
            'type' => $this->type,
            'icon' => $this->icon,
            'is_signifier' => $this->is_signifier,
            'is_edit_only' => $this->is_edit_only,
            'prefix' => $this->prefix,
            'suffix' => $this->suffix,
        ];
    }
}
