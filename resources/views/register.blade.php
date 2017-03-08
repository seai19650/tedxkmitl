<head>
    <!-- <base href="http://tedxkmitl.com/"> -->
    <!--[if lte IE 9]>
    <link href='css/animations-ie-fix.css' rel='stylesheet'>
    <![endif]-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxKMITL</title>
    <meta name="theme-color" content="#e62b1a">
    <meta property="og:image" content="{{asset('img/ogimage.png')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TEDxKMITL">
    <meta name="twitter:description" content="TEDxKMITL is an independently organized TEDx event by KMITL students and personal. Our
                main concept and theme of our event is “Living Out Loud” or LOL which is to bring out the speakers and
                audiences full potential to show their inner self, what they truly have in them but doesn’t come out
                very often.">
    <meta name="twitter:image" content="http://tedxkmitl.com/img/ogimage.png">
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/foundation.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/production.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animations.min.css')}}">
    <script>
        document.createElement("picture");
    </script>
    <script src="js/picturefill.min.js" async></script>
</head>
<h1>Create a Category</h1>

{!! Form::open(
  array(
    'route' => 'register.store',
    'class' => 'form')
  ) !!}

@if (count($errors) > 0)
<div class="alert alert-danger">
    There were some problems adding the category.<br />
</div>
@endif

<div class="form-group">
    {!! Form::label('First Name') !!}
    {!! Form::text('first_name', null,
      array(
        'class'=>'form-control',
        'placeholder'=>'First Name'
      )) !!}
</div>
<div class="form-group">
    {!! Form::label('Last Name') !!}
    {!! Form::text('last_name', null,
      array(
        'class'=>'form-control',
        'placeholder'=>'Last Name'
      )) !!}
</div>

<div class="form-group">
    {!! Form::submit('Register Now!',
      array('class'=>'btn btn-primary'
    )) !!}
</div>
{!! Form::close() !!}
</div>
