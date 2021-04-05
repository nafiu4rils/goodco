<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $fillable = [
     'customerid','firstname','middlename','lastname','email','phoneno','address','purpose','date','timein','timeout','staffusername','staffid'
    ];
}
