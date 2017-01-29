<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    //Explicitly define both the table and primary key field
    protected $primaryKey = 'id';
    protected $table = 'agents';
    protected $fillable = array('AgencyName','contact');
}
