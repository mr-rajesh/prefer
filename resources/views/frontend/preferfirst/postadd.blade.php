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

 @include('includes.partials.messages')
{{ Form::open(['route' => 'frontend.preferfirst.postadd', 'method' => 'post', 'class' => 'form-horizontal','enctype'=>'multipart/form-data']) }}
<ul class="form-style-1">
    <li><label>Add Title <span class="required">*</span></label>
    {{ Form::text('title', '',['class' => 'field-divided', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('prefer.postaddform.title')]) }}
    </li>

   <li>
        <label>Category <span class="required">*</span></label>
        {{ Form::select('category', $category_detail, null, ['placeholder' => trans('prefer.postaddform.category'),'class' => 'field-select'])}}
   </li>

    <li><label>Unquie Identity <span class="required">*</span></label>
    {{ Form::textarea('identity', '', ['class' => 'field-long', 'maxlength' => '500', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('prefer.postaddform.identity')]) }}

    </li>

    <li><label>Add Photo <span class="required">*</span></label>
    {{ Form::file('img1', '',['class' => 'field-divided', 'required' => 'required', 'autofocus' => 'autofocus']) }}
    {{ Form::file('img2', '',['class' => 'field-divided', 'required' => 'required', 'autofocus' => 'autofocus']) }}
    {{ Form::file('img3', '',['class' => 'field-divided', 'required' => 'required', 'autofocus' => 'autofocus']) }}
    {{ Form::file('img4', '',['class' => 'field-divided', 'required' => 'required', 'autofocus' => 'autofocus']) }}
    </li>
    
    <li><label>Name <span class="required">*</span></label>
    {{ Form::text('name', '',['class' => 'field-divided', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('prefer.postaddform.name')]) }}
    </li>

    <li><label>Phone <span class="required">*</span></label>
    {{ Form::text('phone', '',['class' => 'field-divided', 'maxlength' => '10', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('prefer.postaddform.phone')]) }}
    </li>

    <li><label>Enter a city <span class="required">*</span></label>
    {{ Form::text('city', '',['class' => 'field-divided', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('prefer.postaddform.city')]) }}
    </li>
    <li>
    {{ Form::submit('Submit', ['class' => '','id'=>'btnValidate'])}}
    </li>
    <!-- <li>
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
    </li> -->
    
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