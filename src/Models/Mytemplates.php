<?php
namespace Madan\Dcrud\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Mytemplates extends Model
{
    protected $table = 'mytemplates';
    use SoftDeletes;
    
    
    
      protected $fillable = [
       "name","description","templatefile","isactive","extract","id","action"
    ];
	
      public static $modelData=[
        
         "name"=>"","description"=>"","templatefile"=>"","isactive"=>"","extract"=>"","id"=>"","action"=>""
        ];
		public static $tabHeadsG=["name","description","templatefile","isactive","extract","id","action"];
		public static $formDataG=["name","description","templatefile","isactive","extract","id","action"];
		public static $validator= 
               array (
  'name' => 'max:999',
  'description' => 'max:999',
  'templatefile' => 'max:99999999',
  'isactive' => 'max:90',
  'extract' => 'max:90',
  'id' => 'max:9098986',
  'action' => 'max:88',
)
            ;
		public static $subModules=array (
);
			public static $actions=array (
  'extract' => 
  array (
    'name' => 'extract',
    'bclass' => 'btn-warning',
    'update' => 'afterupdate=markActive',
    'state' => NULL,
    'reverse' => 'true',
    'namerev' => 'Extract Again',
    'bclassrev' => 'btn-success',
    'updaterev' => 'afterupdate=markActive',
    'forms_name' => '911',
  ),
  'action' => 
  array (
    'name' => 'Publish',
    'bclass' => 'btn-success',
    'update' => 'action=published',
    'state' => NULL,
    'reverse' => 'true',
    'namerev' => 'Publish Again',
    'bclassrev' => 'btn-info',
    'updaterev' => 'action=published',
    'forms_name' => '1086',
  ),
);
		public static $access=array (
  0 => '1',
);
		public static $pType=['dashboard'=>'no','showCrud'=>'yes'];
		
		public static $formType=array (
  'name' => 
  array (
    'id' => 907,
    'created_at' => '2022-03-26T20:34:34.000000Z',
    'updated_at' => '2022-03-26T20:34:34.000000Z',
    'deleted_at' => NULL,
    'models_name' => '58',
    'name' => 'name',
    'createvalidator' => 'max:999',
    'updatevalidator' => 'max:999',
    'type' => 'text',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'form-name',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => 1,
  ),
  'description' => 
  array (
    'id' => 908,
    'created_at' => '2022-03-26T20:35:56.000000Z',
    'updated_at' => '2022-03-26T22:30:37.000000Z',
    'deleted_at' => NULL,
    'models_name' => '58',
    'name' => 'description',
    'createvalidator' => 'max:999',
    'updatevalidator' => 'max:999',
    'type' => 'editorjs',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-12',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'templatefile' => 
  array (
    'id' => 909,
    'created_at' => '2022-03-26T20:37:39.000000Z',
    'updated_at' => '2022-03-27T01:52:00.000000Z',
    'deleted_at' => NULL,
    'models_name' => '58',
    'name' => 'templatefile',
    'createvalidator' => 'max:99999999',
    'updatevalidator' => 'max:99999999',
    'type' => 'dropzone',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'col-lg-6',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'isactive' => 
  array (
    'id' => 910,
    'created_at' => '2022-03-26T20:39:11.000000Z',
    'updated_at' => '2023-02-15T19:43:32.000000Z',
    'deleted_at' => NULL,
    'models_name' => '58',
    'name' => 'isactive',
    'createvalidator' => 'max:90',
    'updatevalidator' => 'max:90',
    'type' => 'radio',
    'modeldata' => 1,
    'tablehead' => 1,
    'formdata' => 0,
    'fillable' => 0,
    'formclass' => 'col-lg-6',
    'defaultvalue' => NULL,
    'options' => '[\'Yes\',\'No\']',
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'extract' => 
  array (
    'id' => 911,
    'created_at' => '2022-03-26T20:40:13.000000Z',
    'updated_at' => '2022-03-27T03:22:02.000000Z',
    'deleted_at' => NULL,
    'models_name' => '58',
    'name' => 'extract',
    'createvalidator' => 'max:90',
    'updatevalidator' => 'max:90',
    'type' => 'text',
    'modeldata' => 0,
    'tablehead' => 1,
    'formdata' => 1,
    'fillable' => 1,
    'formclass' => 'abc',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'id' => 
  array (
    'id' => 912,
    'created_at' => '2022-03-26T22:38:14.000000Z',
    'updated_at' => '2022-03-27T03:24:43.000000Z',
    'deleted_at' => NULL,
    'models_name' => '58',
    'name' => 'id',
    'createvalidator' => 'max:9098986',
    'updatevalidator' => 'max:9098986',
    'type' => 'hidden',
    'modeldata' => 0,
    'tablehead' => 0,
    'formdata' => 1,
    'fillable' => 0,
    'formclass' => 'hide',
    'defaultvalue' => NULL,
    'options' => NULL,
    'sortale' => NULL,
    'searchableforms' => NULL,
  ),
  'action' => 
  array (
    'id' => 1086,
    'created_at' => '2023-02-15T19:32:30.000000Z',
    'updated_at' => '2023-02-15T19:32:30.000000Z',
    'deleted_at' => NULL,
    'models_name' => '58',
    'name' => 'action',
    'createvalidator' => 'max:88',
    'updatevalidator' => 'max:88',
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
);
		public static function getSelectData(){
			$options=[];
		 $options["isactive"]=['Yes','No'];
	

		return $options;
		}
		public static function markActive($id){ 
				$ct=Mytemplates::findOrFail($id);
 				Mytemplates::query()->update(['isactive'=>'no']); 
				$path=str_replace(url('/'),'',public_path().$ct->templatefile); 
				$zip = new \ZipArchive(); if ($zip->open($path) === TRUE) { 
     $rand='/templates/'.rand().'/';
     $zip->extractTo(public_path().$rand); 
    $zip->close(); 
   $ipath= glob(public_path().$rand.'*/index.html');
    $wpath=str_replace(public_path(),'',glob(public_path().$rand.'*/')[0]); 
   $ifile=file_get_contents($ipath[0]);
    $ifileready=str_replace('link href="','link href="{{url("/")}}'.$wpath,$ifile);
    $ifileready=str_replace('src="','src="{{url("/")}}'.$wpath,$ifileready);
    $ifileready=str_replace('link href="{{url("/")}}'.$wpath.'http','href="http',$ifileready); 
   $ifileready=str_replace('src="{{url("/")}}'.$wpath.'http','src="http',$ifileready);  
   $c=new Component(); 
			$c->content=$ifileready;
                         $c->name=str_replace('/templates/','',$rand);
 			$c->name='T'.str_replace('/','',    $c->name);
 			$c->preview='test.jpg'; 
			$c->type='page'; 
			$c->save();
$c->datasource="siteinfo-id,title,description,keywords";
                        $ct->isactive=$c->name;
                        $ct->save();
                        
if(!file_exists(base_path().'/resources/views/'.$c->name)) mkdir(base_path().'/resources/views/'.$c->name);
                       $headT=Mytemplates::breaktemplate('<head>','</head>',$ifileready);
                        $head=new Component();
    $head->name='head';
    $head->content=$headT[0];
    $head->preview='test.jpg';
    $head->type='page';
$head->datasource="siteinfo-id,title,description,keywords";
$head->path=$c->name;
    $head->save();
    \Illuminate\Support\Facades\File::put(base_path().'/resources/views/'.$c->name.'/head.blade.php',$headT[0]);
    $ifileready= str_replace($headT[0], '@include("'.$c->name.'.head              ")', $ifileready);
     $bodyT=Mytemplates::breaktemplate('<body','</body>',$ifileready);
     if($bodyT!=null){
                        $body=new Component();
    $body->name='body';

$body->path=$c->name;
    $body->content=$bodyT[0];
    $body->preview='test.jpg';
    $body->type='page';

$body->datasource="siteinfo-id,title,description,keywords";
    $body->save();                                                                                                                               
    \Illuminate\Support\Facades\File::put(base_path().'/resources/views/'.$c->name.'/body.blade.php',$bodyT[0]);
    $ifileready= str_replace($bodyT[0], '@include("'.$c->name.'.body")', $ifileready);
     }
      \Illuminate\Support\Facades\File::put(base_path().'/resources/views/'.$c->name.'.blade.php',$ifileready);
 $c->content=$ifileready;
 $c->save();
      } else {   
  dd( $path);
 } 		
}
public static function breaktemplate($s,$e,$str){
                        $delimiter = '#';
                        $regex = $delimiter . preg_quote($s, $delimiter) 
                                                        . '(.*?)' 
                                                        . preg_quote($e, $delimiter) 
                                                        . $delimiter 
                                                        . 's';
                                    ;

if (preg_match($regex,$str,$display[1]) === 1) {
   return $display[1];
}
}
    
}