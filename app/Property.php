<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //Explicitly define both the table and primary key field
    protected $primaryKey = 'id';
    protected $table = 'properties';
    protected $fillable = array('address','owner','price','agentid','postcode','description', 'contact');
}
