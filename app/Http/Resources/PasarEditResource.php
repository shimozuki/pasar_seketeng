<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PasarEditResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'nama_pedagang' => $this->nama_pedagang,
            'jenis_dagangan' => $this->jenis_dagangan
        ];
    }
}
