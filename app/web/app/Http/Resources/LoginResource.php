<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'user' => [
                'id' => $this->id,
                'username' => $this->username,
                'role' => $this->role,
            ],
            'token' => $this->createToken('API')->plainTextToken,
        ];
    }
}
