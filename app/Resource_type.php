<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Resource_type.
 *
 * @author  The scaffold-interface created at 2017-01-24 12:34:59am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Resource_type extends Model
{
	
	
    public $timestamps = false;
    
    protected $table = 'resource_types';

	
}
