@extends('layouts.front')

@section('file')
<div class="container">
    <hr color="#c0c0c0">
    @if (!is_null($headline))
    <div class="row">
        <div class="headline col-md-10 mx-auto">
            @endif
            @foreach($posts as $post)
            <div class="post">
                <div class ="row">
                    <div class="text col-md-6">
                        
                    </div>
                </div> 
            </div>
            
            <div class="name">
                <div class="gender">
                    <div class="hobby">
                        <div class="introduction">
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection