<?php

class Category extends Eloquent
{

    protected $table = 'category';

    public $timestamps = true;

    public $rules = array();

    protected $guarded = array('id');

    protected $fillable = array();


}

