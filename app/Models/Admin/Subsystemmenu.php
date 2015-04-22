<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Subsystemmenu extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_subsystemmenu';
        
        public function systemmenu()
        {
            return $this->belongsTo('App\Models\Admin\Systemmenu');
        }
        
        public function pagemanagement()
        {
            return $this->hasMany('App\Models\Admin\Pagemanagement');
        }

}
