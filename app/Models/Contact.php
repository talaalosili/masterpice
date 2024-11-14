<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\scout\Searchable;

class contact extends Model
{
    use HasFactory, SoftDeletes , Searchable;

    protected $guarded = [];

    public function toSearchableArray()
    {
        return [
            'Email' =>$this->Email,
            'Name' =>$this->Name, 
               'Message' =>$this->Message, 
                'Description' =>$this->Role,
        ];
}

}