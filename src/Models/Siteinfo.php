<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Siteinfo extends Model
{
    protected $table = 'siteinfo';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","title","description","keywords","favicon","iconfile","headerimg","body","isactive","openinghours","email","phone"
    ];
	
      public static $modelData=[
        
         "id"=>"","title"=>"","description"=>"","keywords"=>"","favicon"=>"","iconfile"=>"","headerimg"=>"","body"=>"","isactive"=>"","openinghours"=>"","email"=>"","phone"=>""
        ];
		public static $tabHeadsG=["id","title","description","keywords","favicon","iconfile","headerimg","body","isactive","openinghours","email","phone"];
		public static $formDataG=["id","title","description","keywords","favicon","iconfile","headerimg","body","isactive","openinghours","email","phone"];
		public static $validator= 
               array (
  'id' => 'required|max:191',
  'title' => 'required|max:191',
  'description' => 'required|max:191',
  'keywords' => 'required|max:191',
  'favicon' => 'required|max:19199999999',
  'iconfile' => 'required|max:191899999',
  'headerimg' => 'required|max:19166666666666666666',
  'body' => 'required|max:191',
  'isactive' => 'required|max:191',
  'openinghours' => 'max:222',
  'email' => 'max:334',
  'phone' => 'max:12',
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
    'id' => 971,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-04-06T02:25:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'id',
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
  'title' => 
  array (
    'id' => 972,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-04-06T02:25:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
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
    'id' => 973,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-04-06T02:25:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
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
  'keywords' => 
  array (
    'id' => 974,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-04-06T02:25:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'keywords',
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
  'favicon' => 
  array (
    'id' => 975,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-04-06T02:26:25.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'favicon',
    'createvalidator' => 'required|max:19199999999',
    'updatevalidator' => 'required|max:19199999999',
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
  'iconfile' => 
  array (
    'id' => 976,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-05-03T08:10:01.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'iconfile',
    'createvalidator' => 'required|max:191899999',
    'updatevalidator' => 'required|max:191999999999999999999',
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
  'headerimg' => 
  array (
    'id' => 977,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-05-03T08:21:24.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'headerimg',
    'createvalidator' => 'required|max:19166666666666666666',
    'updatevalidator' => 'required|max:19177777777777',
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
  'body' => 
  array (
    'id' => 978,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-04-06T02:25:06.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'body',
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
  'isactive' => 
  array (
    'id' => 979,
    'created_at' => '2022-04-06T02:25:06.000000Z',
    'updated_at' => '2022-05-03T08:28:53.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'isactive',
    'createvalidator' => 'required|max:191',
    'updatevalidator' => 'required|max:191',
    'type' => 'radio',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '[\'yes\',\'no\']',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'openinghours' => 
  array (
    'id' => 1049,
    'created_at' => '2023-01-23T22:26:19.000000Z',
    'updated_at' => '2023-01-23T22:26:19.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'openinghours',
    'createvalidator' => 'max:222',
    'updatevalidator' => 'max:222',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'email' => 
  array (
    'id' => 1050,
    'created_at' => '2023-01-23T22:27:23.000000Z',
    'updated_at' => '2023-01-23T22:27:23.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'email',
    'createvalidator' => 'max:334',
    'updatevalidator' => 'max:334',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'phone' => 
  array (
    'id' => 1051,
    'created_at' => '2023-01-23T22:28:00.000000Z',
    'updated_at' => '2023-01-23T22:28:00.000000Z',
    'deleted_at' => NULL,
    'models_name' => '70',
    'name' => 'phone',
    'createvalidator' => 'max:12',
    'updatevalidator' => 'max:33',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 0,
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
		 $options["isactive"]=['yes','no'];
	

		return $options;
		}
		
    
}