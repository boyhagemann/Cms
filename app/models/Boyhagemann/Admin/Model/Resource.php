<?php

namespace Boyhagemann\Admin\Model;

use Eloquent;

class Resource extends Eloquent
{

    protected $table = 'resources';

    public $timestamps = true;

    public $rules = array();

    protected $guarded = array('id');

    protected $fillable = array(
        'title',
        'controller',
        'url',
        'path'
        );


}

