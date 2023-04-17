<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Mycontents extends Model
{
    protected $table = 'mycontents';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","title","description","content","user_name","pictures","type"
    ];
	
      public static $modelData=[
        
         "id"=>"","title"=>"","description"=>"","content"=>"","user_name"=>"","pictures"=>"","type"=>""
        ];
		public static $tabHeadsG=["id","title","description","content","user_name","pictures","type"];
		public static $formDataG=["id","title","description","content","user_name","pictures","type"];
		public static $validator= 
               array (
  'id' => 'max:191',
  'title' => 'required|max:191',
  'description' => 'required|max:191',
  'content' => 'required|max:191',
  'user_name' => 'required|max:191',
  'pictures' => 'required|max:191333',
  'type' => 'max:999',
)
            ;
		public static $subModules=array (
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
    'id' => 1090,
    'created_at' => '2023-02-24T06:11:22.000000Z',
    'updated_at' => '2023-02-24T06:38:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '91',
    'name' => 'id',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'hidden',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'hide',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'title' => 
  array (
    'id' => 1091,
    'created_at' => '2023-02-24T06:11:22.000000Z',
    'updated_at' => '2023-02-24T06:11:22.000000Z',
    'deleted_at' => NULL,
    'models_name' => '91',
    'name' => 'title',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'description' => 
  array (
    'id' => 1092,
    'created_at' => '2023-02-24T06:11:22.000000Z',
    'updated_at' => '2023-02-24T06:11:22.000000Z',
    'deleted_at' => NULL,
    'models_name' => '91',
    'name' => 'description',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'content' => 
  array (
    'id' => 1093,
    'created_at' => '2023-02-24T06:11:22.000000Z',
    'updated_at' => '2023-02-24T06:21:59.000000Z',
    'deleted_at' => NULL,
    'models_name' => '91',
    'name' => 'content',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'textarea',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-12',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'user_name' => 
  array (
    'id' => 1094,
    'created_at' => '2023-02-24T06:11:22.000000Z',
    'updated_at' => '2023-02-24T06:14:42.000000Z',
    'deleted_at' => NULL,
    'models_name' => '91',
    'name' => 'user_name',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\App\\Models\\User::pluck("name","id")->prepend("Select One...","")',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'pictures' => 
  array (
    'id' => 1095,
    'created_at' => '2023-02-24T06:11:22.000000Z',
    'updated_at' => '2023-02-24T06:36:24.000000Z',
    'deleted_at' => NULL,
    'models_name' => '91',
    'name' => 'pictures',
    'createvalidator' => 'required|max:191333',
    'updatevalidator' => 'required|max:19133',
    'type' => 'dropzone',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'type' => 
  array (
    'id' => 1096,
    'created_at' => '2023-02-24T06:16:09.000000Z',
    'updated_at' => '2023-02-24T06:16:09.000000Z',
    'deleted_at' => NULL,
    'models_name' => '91',
    'name' => 'type',
    'createvalidator' => 'max:999',
    'updatevalidator' => 'max:999',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
);
		public static function getSelectData(){
			$options=[];
		 $options["user_name"]=\App\Models\User::pluck("name","id")->prepend("Select One...","");
	

		return $options;
		}
		
    
}