<?php

namespace WebEstoque\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public $fillable =[
        'nome'
    ];

    public $rules =[
        'nome' => 'required,min:10,max:70'
    ]
}
