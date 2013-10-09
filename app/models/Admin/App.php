<?php

namespace Admin;

use Eloquent;

class App extends Eloquent
{

    protected $table = 'admin_app';

    public $timestamps = true;

    public $rules = array();

    protected $guarded = array('id');

    protected $fillable = array(
        'title',
        'route'
        );


}

