<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Systemmenu extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_systemmenu';
        
        public function subsystemmenu()
        {
            return $this->hasMany('App\Models\Admin\Subsystemmenu');
        }
}
