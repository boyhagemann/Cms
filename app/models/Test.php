<?php

class Test extends Eloquent
{

    protected $table = 'test';

    public $timestamps = true;

    public $rules = array();

    protected $guarded = array('id');

    protected $fillable = array();


}

