@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Hello!',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>WILDAN GANTENG BANGET</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
        	'title' => 'Click me',
        	'link' => 'http://google.com'
    ])

@stop
