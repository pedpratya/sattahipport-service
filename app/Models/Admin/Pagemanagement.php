<?php namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Pagemanagement extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'admin_pagemanagement';
               
        public function subsystemmenu()
        {
            return $this->belongsTo('App\Models\Admin\Subsystemmenu');
        }
                
        public function workflow()
        {
            return $this->belongsTo('App\Models\Admin\Workflow');
        }
}
