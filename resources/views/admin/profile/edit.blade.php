 @extends('layouts.admin')
        
        @section('title','プロフィール編集画面')
        
        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>プロフィール編集画面</h2>
                    <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                         @endif
                         <div class="form-group row">
                        <label class="col-md-2" for="name">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                            <input type ="radio" name ="gender" value="男性" @if(old('gender',"$profile_form->gender")!='女性')checked="checked"@endif>男性
                            <input type ="radio" name ="gender" value="女性" @if(old('gender',"$profile_form->gender")!='男性')checked="checked"@endif>女性
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="introduction" value="{{ $profile_form->introduction }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $profile_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                            <div class="form-group row">
                        <div class="col-md-10">
                      <a type="submit" href="{{ action('Admin\ProfileController@delete', ['id'=>$profile_form->id]) }}">削除</a>
                    </div>
                    </form>
                    <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($profile_form->mines != NULL)
                                @foreach ($profile_form->mines as $mine)
                                    <li class="list-group-item">{{ $mine->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        
 @endsection
