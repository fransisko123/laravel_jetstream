<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Resources\BukuResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BukuCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($buku) {
                return new BukuResource($buku);
            }),
            'meta' => [
                'total_buku' => $this->collection->count(),
            ],
        ];
    }
}
