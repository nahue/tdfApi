<?php

class Categoria extends Eloquent {

    protected $table = 'categoria';

	protected $guarded = array();

	public static $rules = array();

    public function fotos()
    {
        return $this->hasMany('Foto');
    }
}
