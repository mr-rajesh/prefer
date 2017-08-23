<!DOCTYPE html>
<html>
<head>

<!-- your webpage info goes here -->

    <title>My First Website</title>
    
    <meta name="author" content="your name" />
    <meta name="description" content="" />

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->  
    
    {!! Html::style(elixir('css/style.css')) !!}

    
</head>
<body>

<!-- webpage content goes here in the body -->

    <div id="page">
        <div id="logo">
            <h1><a href="/" id="logoLink">My First Website</a></h1>
        </div>
        <div id="nav">
            <ul>
                <li><a href="{{route('preferfirst.home')}}">Home</a></li>
                <li><a href="{{route('frontend.preferfirst.postadd')}}">Post Add</a></li>
                <li><a href="{{route('frontend.auth.login')}}">Login</a></li>
                <li><a href="{{route('frontend.auth.register')}}">Register</a></li>
            </ul>   
        </div>
        <div id="content">
        @include('includes.partials.messages')
            <h2>Home</h2>
        @foreach($category_detail as $category) 
         <p>title : {{$category['title']}}
         identity : {{$category['identity']}}
         name : {{$category['name']}}
         phone : {{$category['phone']}}
         city : {{$category['city']}}
         image: <img src="{{asset('prefer/'.$category['category'].'/'.$category['img1'])}}"></p>
         

        @endforeach

            
        </div>
        <div id="footer">
            <p>
                Webpage made by <a href="/" target="_blank">[your name]</a>
            </p>
        </div>
    </div>
</body>
</html>