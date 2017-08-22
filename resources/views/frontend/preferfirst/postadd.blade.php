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

<form>
{{ Form::open(['route' => 'frontend.preferfirst.postadd', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) }}
<ul class="form-style-1">
    <li><label>Full Name <span class="required">*</span></label><input type="text" name="field1" class="field-divided" placeholder="First" />&nbsp;<input type="text" name="field2" class="field-divided" placeholder="Last" />
    {{ Form::text('title', '',
                            ['class' => 'field-divided', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('prefer.postaddform.title')]) }}

    </li>
   <li>
        <label>Category <span class="required">*</span></label>
        {{ Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...','class' => 'field-long'])}}

        
    </li>


    <li>
        <label>Email <span class="required">*</span></label>
        <input type="email" name="field3" class="field-long" />
    </li>
    <li>
        <label>Subject</label>
        <select name="field4" class="field-select">
        <option value="Advertise">Advertise</option>
        <option value="Partnership">Partnership</option>
        <option value="General Question">General</option>
        </select>
    </li>
    <li>
        <label>Your Message <span class="required">*</span></label>
        <textarea name="field5" id="field5" class="field-long field-textarea"></textarea>
    </li>
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
{{ Form::close() }}

</div>
        <div id="footer">
            <p>
                Webpage made by <a href="/" target="_blank">[your name]</a>
            </p>
        </div>
    </div>
</body>
</html>