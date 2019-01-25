<nav class="navbar navbar-expand-md navbar-light static-top bg-light ">
   <a class="navbar-brand" href="#">{{config('app.name')}}</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarsExampleDefault">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item  {{set_active_route('route_path')}} ">
         <a class="nav-link" href="{{route('route_path')}}">Home </a>
       </li>
       <li class="nav-item {{set_active_route('about_path')}} ">
         <a class="nav-link" href="{{route('about_path')}}">About</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="#">Artisans</a>
       </li>
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
         <div class="dropdown-menu" aria-labelledby="dropdown01">
                 <a class="dropdown-item" target="_blank" href="http://laravel.com">Laravel.com</a>
           <a class="dropdown-item" target="_blank" href="http://laravel.io">Laravel.io</a>
           <a class="dropdown-item" target="_blank" href="http://laracasts.com">Laracasts</a>
           <a class="dropdown-item" target="_blank" href="http://larajobs.com">Larajobs</a>
           <a class="dropdown-item" target="_blank" href="http://laravel-news.com">Laravel News</a>
           <a class="dropdown-item" target="_blank" href="http://larachat.co">Larachat</a>
         </div>
       </li>
       <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
       </li>
       <ul class="nav navbar-nav  text-right">
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
       </ul>
     </ul>


   </div>
</nav>