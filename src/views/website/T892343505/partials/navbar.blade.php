    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" >
                <a href="" class="navbar-brand p-0">
           <img src="{{url("/")}}/vendors/892343505/img/1679248589_640x280.png" style="object-fit:contain;height:53px" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
@foreach($navpanel as $n)                        
<a href="{{$n->webpath}}" class="nav-item nav-link @if(basename(url()->current())==$n->webpath) active @endif ">{{$n->name}}</a>
@endforeach
                      
                       
                    </div>
                    <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                    <a href="{{url('/')}}/signup" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3">Get Started</a>
                </div>
            </nav>