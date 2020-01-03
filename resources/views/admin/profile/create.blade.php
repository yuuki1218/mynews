<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyProfile</title>
    </head>
    <body>
        
        
        @extends('layouts.profile')
        
        @section('title','プロフィール作成画面')
        
        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md8 mx-auto">
                    <h2>プロフィール作成画面</h2>
                
                <form action="{{ action('Admin\ProfileController@create')}}" method="post" enctype="multipart/form-data">
                
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="body">氏名</label>
                    <div class ="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2" for="body">性別</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2" for="body">趣味</label>
                    <div class ="col-md-10">
                        <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-md-2" for="title">自己紹介</label>
                    <div class ="col-md-10">
                        <input type="text" class="form-control" name="introduction" value="{{ old('introduction') }}">
                        
                    </div>
                </div>
                {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="update">
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>