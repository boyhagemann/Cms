<?php

namespace Boyhagemann\Pages\Model;

use Eloquent;

class Page extends Eloquent
{

    protected $table = 'pages';

    public $timestamps = true;

    public $rules = array();

    protected $guarded = array('id');

    protected $fillable = array();


}

