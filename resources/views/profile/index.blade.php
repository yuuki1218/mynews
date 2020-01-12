  
@extends('layouts.profile_front') 

@section('profile','プロフィール表示ページ')


@section('content')
<div class="container">
    <div class="row">
        <h2>マイプロフィール</h2>
    </div>
                        
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">氏名</th>
                                <th width="10%">性別</th>
                                <th width="20%">趣味</th>
                                <th width="30%">自己紹介</th>
                            </tr>
                        </thead>
                                    
                        <tbody>
                                <tr>
                                    <td>{{ $profiles->id }}</td>
                                    <td>{{ $profiles->name }}</td>
                                    <td>{{ $profiles->gender }}</td>
                                    <td>{{ \Str::limit($profiles->hobby,150) }}</td>
                                    <td>{{ \Str::limit($profiles->introduction,250) }}</td>
                                </tr>
                        </tbody>
                   </table>
                </div>
            </div>
        
        </div>
</div>
@endsection