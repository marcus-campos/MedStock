<?php 

	class Usuario extends Eloquent{

		protected $table = 'usuario';
		protected $guarded = array();
		public $timestamps = false;
	}