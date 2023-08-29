<!DOCTYPE html>
<html lang="en">

@include("dcrud::website.T892343505.head")


<div class="container-xxl bg-white p-0">
@include('dcrud::website.T892343505.spinner')
<style> .owl-item p{height:200px;overflow:hidden}</style>
        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        
@include('dcrud::website.T892343505.partials.navbar')

           
@include('dcrud::website.T892343505.partials.minihero')
        </div>
        <!-- Navbar & Hero End -->


       
@include('dcrud::website.T892343505.partials.fsSearch')
@yield('content')

@include('dcrud::website.T892343505.partials.footer')

    </div>

@include('dcrud::website.T892343505.js')
</html>
           
        </div>
        <!-- Navbar & Hero End -->


</html>