
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name='csrf-token' content='{{csrf_token()}}'>
    <title>DCRUD - Customizable dashboard with crud operation. </title>
<style>
.left_col{background:#e885e8 !important;}
li>a ,.profile_info span{
    color: #ffffff !important;
	padding: 5px 5px 5px !important;
	font-weight:600 !important;
}


.navbar-nav{
	    margin-top: 18px !important;
}
#sidebar-menu.menu_section.side_menu li a:hover,a.user-profile:hover {
	color:#3457a4 !important;
	
}
a.user-profile, a.info-number{
    padding:10px !important;
	color:#3457a4 !important;
	border-radius:5px;
}
.msg_list a span, .page-link{
	color:#3457a4 !important;
}
.toggle a {
    padding: 15px 15px 15px !important;
}
.top_nav li a i {
    font-size: 20px !important;
}
.sidebar-footer{
	background:#3457a4 !important;
	    color: #3457a4 !important;
}
.sidebar-footer a{
	background:#e885e8 !important;
}
li.current-page a, a:hover{
	background: #e885e8 !important;
	color: whitesmoke !important;
}
li.active>a{
	background: #e885e8 !important;
}
ul {
    margin-top: -5px !important;
}
li:before{
	
    background: white !important;

    height: 15px !important;
    left: 20px !important;
    margin-top: 6px !important;
  
    width: 15px !important;
    
}
.current-page:before{
	background:#169f85 !important;
}
li:hover:before{
	background:#169f85 !important;
}

li:hover .fa{
	color:#169f85 !important;
}
.nav_title,.nav_title a.site_title:hover,#menu_toggle:hover{
	background:#3457a4 !important;
	
}
.nav_menu{
	background:#e7eeff !important;
}
.card-header, .card-header h2{
	background-color:rgb(22 159 133) !important;
	color:white;
}
.card-header, .card-title ,h4{
    padding: 5px 5px 0px 5px !important;
	margin:0px !important;
	font-size:1rem;
	font-weight:600;
}
.card-tools .input-group {
    margin-bottom: 4px !important;
}
.card{
	    border: 1px solid rgb(22 159 133) !important;
}
tr td {
    padding: 4px 0px 0px 0px !important;
	font-weight:600;
	
}

.btn-sm {
        padding: 4px 5px 4px 5px !important;
    font-size: 0.8rem !important;
    line-height: 1.1 !important;
}
.btn-group{
	
	display:inline-flex !important;
}
body{
	    background: #e885e8 !important;
		color:#3457a4 !important;
}
.align-middle{
		display:table-cell !important;
		text-align:center;
}

*::-webkit-scrollbar {
    width: 0.7em;
	height:0.5em;
}
 
*::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 3px #169f85;
}
 
*::-webkit-scrollbar-thumb {
  background-color: #169f85;
  outline: 0.5px solid #169f85;
}
.nav-md .container.body .col-md-3.left_col {
	position:fixed !important;
}
footer{
	position:fixed;
	bottom:0px;
    background: #e885e8 !important;
    padding: 3px 20px !important;
	width:100vw !important;
}
tbody{
	max-height:max-content !important;
	height:max-content !important;
	
}
.right_col{
	min-height:97vh !important;
}
</style>	 
	 <link rel="icon" type="image/x-icon" href="{{preg_replace("#^https?\:\/\/([\w*\.]*)#", "", Request::root() )}}/vendors/favicon.ico"/>
  <script src="{{asset("vendors/dropzone/dist/min/dropzone.min.js")}}"></script>
  <script>
var modelData={!!json_encode($modelData)!!};

var	tabHeadsG={!!json_encode($tabHeadsG)!!};

var	 formDataG={!!json_encode($formDataG)!!};
var	allOptions={!!json_encode($options)!!};
var allSubModules={!!json_encode($subModules)!!}
var actions={!!json_encode($actions)!!}
var pType={!!json_encode($pType)!!}
var FormType={!!json_encode($formType)!!}
var apipath='{{url('/api/dcrud')}}/'
var homedir='{{url('/')}}'
@php $a=explode('/',Request::path());@endphp
var dashboardtools='{{end($a)}}'
</script>
    <!-- Bootstrap -->
    <link href="{{asset("vendors/bootstrap/dist/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset("vendors/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset("vendors/nprogress/nprogress.css")}}" rel="stylesheet">
<link href="{{asset("vendors/dropzone/dist/min/dropzone.min.css")}}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{asset("vendors/css/custom.min.css")}}" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body" id='app'>
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title">   <img style='height:25px;object-fit:contain;' src="{{env('APP_LOGO')}}" alt="..." class="img-circle logo-img">&nbsp;{{env('APP_NAME')}}</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{auth()->user()->picture==''?env('app_logo'):auth()->user()->picture}}" alt="{{env('app_logo')}}" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{auth()->user()->name}}</h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                     <navbar :navtype='"side-menu"'></navbar>
            
              </div>
       

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="{{asset("gentelella-master/production/images/img.jpg")}}" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

                     @yield('content')
                 </br>
                 </br>
                 </br>
            </div>
          </div>
        </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
      <footer>
           <strong>Copyright © {{date('Y')}} <a href="https://solutionswithmaster.com">Master Solutions Inc.</a>.</strong> All rights reserved.
<b>Version</b> 2.0.0
</footer>
        <!-- /footer content -->
    
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/image@2.3.0"></script>
    <script src="{{ str_replace('http:','',url(asset('vendors/js').'/app.js')) }}"></script>
    <!-- jQuery -->
    <script src="{{asset("vendors/jquery/dist/jquery.min.js")}}" ></script>
    <!-- Bootstrap -->
   <script src="{{asset("vendors/bootstrap/dist/js/bootstrap.bundle.min.js")}}" ></script>
    <!-- FastClick -->
    <script src="{{asset("vendors/fastclick/lib/fastclick.js")}}" ></script>
    <!-- NProgress -->
    <script src="{{asset("vendors/nprogress/nprogress.js")}}" ></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset("vendors/js/custom.min.js")}}"></script>

  </body>
</html>
