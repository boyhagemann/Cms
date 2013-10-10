<?php

namespace Admin;

use Eloquent;

class App extends Eloquent
{

    protected $table = 'admin_apps';

    public $timestamps = true;

    public $rules = array();

    protected $guarded = array('id');

    protected $fillable = array(
        'title',
        'route'
        );


}

