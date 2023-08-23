<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommunityPostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->name,
            'title' => $this->title,
            'description' => $this->description,
            'username' => $this->user->username,
            'slug' => $this->slug,
            'votes' => $this->votes,
            'comments_count' => $this->comments_count
        ];
    }
}
