<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;  

class Employee extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'employees';

    protected $fillable = [
        'name', 'email', 'password',
    ];
}
