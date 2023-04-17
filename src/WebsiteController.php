<?php

namespace Madan\Dcrud;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
		  $siteinfo=\Madan\Dcrud\Models\Siteinfo::selectRaw('id,created_at,id,favicon,phone,title,description,keywords')->get(); $navpanel=\Madan\Dcrud\Models\Navpanel::selectRaw('id,created_at,id,name,webpath,position,type')->where("type","=","Website")->get(); $mycontents=\Madan\Dcrud\Models\Mycontents::selectRaw('id,created_at,id,title,description,content,user_name,pictures')->get();
    return view('dcrud::website.index', compact('req','siteinfo','navpanel','mycontents'));
	}
}
