@extends('lyaouts/default')
@section('content')
<div class="container">
    <h2>What is Laracarte?</h2>  
    <p>Laracarte is a clone app of Laramap.com.</p>
    <div class="alert alert-warning w-50" role="alert">
    
            <i class="fas fa-exclamation-triangle"></i> This app has been built by <a href="#" class="alert-link">@etsmo</a> for learning purposes.
    </div>
    <p>Feel free to help to improve the source code.</p>
    <hr>
    <h2>What is Laramap?</h2>
    <p>Laramap is the website by which Laracarte was inspired :).</p>

    <p>More info here.</p>
<hr>
    <h2>Which tools and services are used in Laracarte?</h2>
    Basically it's built on Laravel & Bootstrap. But there's a bunch of services used for email and other sections.
    <ul>
    <li>Laravel</li>
    <li>Bootstrap</li>
    <li>Amazon S3</li>
    <li>Mandrill</li>
    <li>Google Maps</li>
    <li>Gravatar</li>
    <li>Antony Martin's Geolocation Package</li>
    <li>Michel Fortin's Markdown Parser Package</li>
    <li>Heroku</li>
    </ul>
</div>
@stop