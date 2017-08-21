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
            <h2>Home</h2>
            <p>
                This is my first webpage! I was able to code all the HTML and CSS in order to make it. Watch out world of web design here I come!
            </p>
            <p> 
                I can use my skills here to create websites for my business, my friends and family, my C.V, blog or articles. As well as any games or more experiment stuff (which is what the web is really all about). 
            </p>
        </div>
        <div id="footer">
            <p>
                Webpage made by <a href="/" target="_blank">[your name]</a>
            </p>
        </div>
    </div>
</body>
</html>