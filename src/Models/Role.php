<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Role extends Model
{
    protected $table = 'role';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","name","dashboard","description"
    ];
	
      public static $modelData=[
        
         "id"=>"","name"=>"","dashboard"=>"","description"=>""
        ];
		public static $tabHeadsG=["id","name","dashboard","description"];
		public static $formDataG=["id","name","dashboard","description"];
		public static $validator= 
               array (
  'id' => 'max:979876',
  'name' => 'required||max:979876',
  'dashboard' => 'required||max:979876',
  'description' => 'max:979876',
)
            ;
		public static $subModules=array (
  'users' => 'role_name',
  'rolemodel' => 'role_name',
);
			public static $actions=array (
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'','showCrud'=>''];
		
		public static $formType=array (
  'id' => 
  array (
    'id' => 1013,
    'created_at' => '2022-05-14T22:31:23.000000Z',
    'updated_at' => '2022-05-14T22:31:23.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'id',
    'createvalidator' => 'max:979876',
    'updatevalidator' => 'max:979876',
    'type' => 'hidden',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 0,
    'formclass' => 'hide',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'name' => 
  array (
    'id' => 1014,
    'created_at' => '2022-05-14T22:32:28.000000Z',
    'updated_at' => '2022-05-14T22:32:28.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'name',
    'createvalidator' => 'required||max:979876',
    'updatevalidator' => 'required||max:979876',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 1,
    'searchableforms' => 0,
  ),
  'dashboard' => 
  array (
    'id' => 1015,
    'created_at' => '2022-05-14T22:33:51.000000Z',
    'updated_at' => '2022-05-14T22:33:51.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'dashboard',
    'createvalidator' => 'required||max:979876',
    'updatevalidator' => 'required||max:979876',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => 1,
    'searchableforms' => NULL,
  ),
  'description' => 
  array (
    'id' => 1016,
    'created_at' => '2022-05-14T22:34:54.000000Z',
    'updated_at' => '2022-05-14T22:34:54.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'description',
    'createvalidator' => 'max:979876',
    'updatevalidator' => 'max:979876',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg6',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
);
		public static function getSelectData(){
			$options=[];
		 
	

		return $options;
		}
		//
    
}