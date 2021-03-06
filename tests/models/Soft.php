<?php

use Jenssegers\Mongodb\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\SoftDeletingTrait;

class Soft extends Eloquent {

    use SoftDeletingTrait;

    protected $collection = 'soft';
    protected static $unguarded = true;
    protected $dates = array('deleted_at');

}
