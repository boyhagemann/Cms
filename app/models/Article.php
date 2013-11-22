<?php

class Article extends Eloquent
{

    protected $table = 'article';

    public $timestamps = true;

    public $rules = array();

    protected $guarded = array('id');

    protected $fillable = array();


}

