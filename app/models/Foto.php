<?php

class Foto extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

    public function categoria()
    {
        return $this->belongsTo('Categoria');
    }
}
