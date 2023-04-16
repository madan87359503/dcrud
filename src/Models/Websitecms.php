<?php

namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Websitecms extends Model
{
    protected $table = 'websitecms';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","name","type","source","width","onclick"
    ];
	
      public static $modelData=[
        
         "id"=>"","name"=>"","type"=>"","source"=>"","width"=>"","onclick"=>""
        ];
		public static $tabHeadsG=["id","name","type","source","width","onclick"];
		public static $formDataG=["id","name","type","source","width","onclick"];
		public static $validator= 
               array (
  'id' => 'required|max:191',
  'name' => 'required|max:191',
  'type' => 'required|max:191',
  'source' => 'required|max:191',
  'width' => 'required|max:191',
  'onclick' => 'required|max:191',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'yes','showCrud'=>''];
		
		public static $formType=array (
  'id' => 
  array (
    'id' => 1013,
    'created_at' => '2023-03-15T10:58:34.000000Z',
    'updated_at' => '2023-03-15T10:58:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
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
  'name' => 
  array (
    'id' => 1014,
    'created_at' => '2023-03-15T10:58:34.000000Z',
    'updated_at' => '2023-03-15T10:58:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'name',
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
  'type' => 
  array (
    'id' => 1015,
    'created_at' => '2023-03-15T10:58:34.000000Z',
    'updated_at' => '2023-03-15T10:58:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'type',
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
  'source' => 
  array (
    'id' => 1016,
    'created_at' => '2023-03-15T10:58:34.000000Z',
    'updated_at' => '2023-03-15T10:58:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'source',
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
  'width' => 
  array (
    'id' => 1017,
    'created_at' => '2023-03-15T10:58:34.000000Z',
    'updated_at' => '2023-03-15T10:58:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'width',
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
  'onclick' => 
  array (
    'id' => 1018,
    'created_at' => '2023-03-15T10:58:34.000000Z',
    'updated_at' => '2023-03-15T10:58:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '76',
    'name' => 'onclick',
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
);
		public static function getSelectData(){
			$options=[];
		 
	

		return $options;
		}
		
    
}