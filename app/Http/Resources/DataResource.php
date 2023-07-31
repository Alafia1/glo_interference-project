<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'site_id' => $this->site_id,
            'address' => $this->address,
            'users' => $this->users,
            'cross_feeder' => $this->cross_feeder,
            'tma' => $this->tma,
            'interference' => $this->interfernce
        ];
    }
}
