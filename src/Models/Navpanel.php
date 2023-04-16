<?php
namespace Madan\Dcrud\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Navpanel extends Model
{
    protected $table = 'navpanel';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "id","name","navpanel_name","topnav","mainnav","footer","webpath","type","icon","position"
    ];
	
      public static $modelData=[
        
         "id"=>"","name"=>"","navpanel_name"=>"","topnav"=>"","mainnav"=>"","footer"=>"","webpath"=>"","type"=>"","icon"=>"","position"=>""
        ];
		public static $tabHeadsG=["id","name","navpanel_name","topnav","mainnav","footer","webpath","type","icon","position"];
		public static $formDataG=["id","name","navpanel_name","topnav","mainnav","footer","webpath","type","icon","position"];
		public static $validator= 
               array (
  'id' => 'max:191999',
  'name' => 'required|max:191',
  'navpanel_name' => 'max:191',
  'topnav' => 'max:191',
  'mainnav' => 'max:191',
  'footer' => 'max:191',
  'webpath' => 'required|max:191',
  'type' => 'max:33',
  'icon' => 'max:100',
  'order' => 'max:88',
  'position' => 'max:999',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
  'topnav' => 
  array (
    'name' => 'Mark Active',
    'bclass' => 'btn-success',
    'update' => 'topnav=active',
    'state' => 'inactive',
    'reverse' => 'true',
    'namerev' => 'Mark Inactive',
    'bclassrev' => 'btn-warning',
    'updaterev' => 'topnav=inactive',
    'forms_name' => '983',
  ),
  'mainnav' => 
  array (
    'name' => 'Mark Active',
    'bclass' => 'btn-success',
    'update' => 'mainnav=active',
    'state' => 'inactive',
    'reverse' => 'true',
    'namerev' => 'Mark Inactive',
    'bclassrev' => 'btn-warning',
    'updaterev' => 'mainnav=inactive',
    'forms_name' => '984',
  ),
  'footer' => 
  array (
    'name' => 'Mark Active',
    'bclass' => 'btn-success',
    'update' => 'footer=active',
    'state' => 'inactive',
    'reverse' => 'true',
    'namerev' => 'Mark Inactive',
    'bclassrev' => 'btn-warning',
    'updaterev' => 'footer=inactive',
    'forms_name' => '985',
  ),
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'no','showCrud'=>''];
		
		public static $formType=array (
  'id' => 
  array (
    'id' => 980,
    'created_at' => '2022-04-08T18:37:43.000000Z',
    'updated_at' => '2022-05-03T09:05:45.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'id',
    'createvalidator' => 'max:191999',
    'updatevalidator' => 'max:191999',
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
  'name' => 
  array (
    'id' => 981,
    'created_at' => '2022-04-08T18:37:43.000000Z',
    'updated_at' => '2022-04-08T18:37:43.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
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
  'navpanel_name' => 
  array (
    'id' => 982,
    'created_at' => '2022-04-08T18:37:43.000000Z',
    'updated_at' => '2022-05-03T09:00:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'navpanel_name',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'select',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '\\Madan\Dcrud\\Models\\Navpanel::pluck("name","id")->prepend("Select One...","")',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'topnav' => 
  array (
    'id' => 983,
    'created_at' => '2022-04-08T18:37:43.000000Z',
    'updated_at' => '2022-05-03T09:01:27.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'topnav',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'radio',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '[\'Yes\',\'No\']',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'mainnav' => 
  array (
    'id' => 984,
    'created_at' => '2022-04-08T18:37:43.000000Z',
    'updated_at' => '2022-05-03T09:02:03.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'mainnav',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'radio',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '[\'Yes\',\'No\']',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'footer' => 
  array (
    'id' => 985,
    'created_at' => '2022-04-08T18:37:43.000000Z',
    'updated_at' => '2022-05-03T09:02:42.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'footer',
    'createvalidator' => 'max:191',
    'updatevalidator' => 'max:191',
    'type' => 'radio',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-2',
    'defaultvalue' => NULL,
    'options' => '[\'Yes\',\'No\']',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'webpath' => 
  array (
    'id' => 986,
    'created_at' => '2022-04-08T18:37:43.000000Z',
    'updated_at' => '2022-04-08T18:37:43.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'webpath',
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
    'id' => 1056,
    'created_at' => '2023-02-02T16:06:17.000000Z',
    'updated_at' => '2023-02-23T15:38:36.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'type',
    'createvalidator' => 'max:33',
    'updatevalidator' => 'max:33',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-3',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => 1,
  ),
  'icon' => 
  array (
    'id' => 1057,
    'created_at' => '2023-02-02T16:07:56.000000Z',
    'updated_at' => '2023-02-02T16:07:56.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'icon',
    'createvalidator' => 'max:100',
    'updatevalidator' => 'max:100',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-3',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),

  'position' => 
  array (
    'id' => 1089,
    'created_at' => '2023-02-23T16:15:03.000000Z',
    'updated_at' => '2023-02-23T16:15:03.000000Z',
    'deleted_at' => NULL,
    'models_name' => '71',
    'name' => 'position',
    'createvalidator' => 'max:999',
    'updatevalidator' => 'max:999',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-3',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
);
		public static function getSelectData(){
			$options=[];
		 $options["navpanel_name"]=\Madan\Dcrud\Models\Navpanel::pluck("name","id")->prepend("Select One...","");$options["topnav"]=['Yes','No'];$options["mainnav"]=['Yes','No'];$options["footer"]=['Yes','No'];
	

		return $options;
		}
		
    
}