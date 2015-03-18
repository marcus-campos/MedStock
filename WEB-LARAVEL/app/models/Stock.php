<?php

class Stock extends Eloquent {

  protected $primaryKey = 'person_id';
	protected $table = 'persons';

  public $timestamps = false;

  protected $fillable = array('name', 'cpf', 'address', 'stnumber', 'district', 'compliment', 'uf', 'city', 'cep', 'email01', 'phone01', 'birthdate', 'num_bank', 'num_ag', 'num_acc');

  public function user()
  {
    return $this->belongsTo('User', 'user_id');
  }

  static $rules = array(
    'name' => 'required'
  );
}
