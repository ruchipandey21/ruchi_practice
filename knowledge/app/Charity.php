<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Charity extends Eloquent
{
    /** 
      * Connection name.
      *
      */
    protected $connection= 'mongodb';

    /** 
      * Collection name.
      *
      */
     protected $collection = 'charities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $fillable = [
                            
                            'name',
     						'email',
     						'mobile',
                            'cname',
     						'relative',
                            'occasion',
                            'date',
                            'notification',
     						'notificatio',
                            'sms',
                            'notificationemail',
                            'post',
                            'newslatter',
                            'days',
                            'months',
                            
     						
     					   ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];
}
