<?php

namespace Prebaby\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class User extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        
        /*return[
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password,
            'age'=>$this->age,
            'country'=>$this->country,
            'phone'=>$this->phone,
            'api_token'=>$this->api_token,
            'created_at'=>$this->created_at,
        ];*/
    }
}
