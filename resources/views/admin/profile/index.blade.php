@extends('layouts.profile')
@section('profile','プロフィール画面')

@section('introduction')
<div class="file">
    <div class="row">
        <h2>プロフィール</h2>
        <div class="col-md-8">
            <form action="{{ action('Admin\ProfileController@index') }}" method="get">
                
            </form>
        </div>
  <div class="row">
      <div class="list-profile col-md-12 mx-auto">
          <div class ="row">
              <table class="table table-dark">
                  <thead>
                  
                  <tr>
                      <th width="20%">名前</th>
                      <th width="20%">性別</th>
                      <th width="20%">趣味</th>
                      <th widdh="20%">自己紹介</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($posts as $profile)
                      <tr>
                          <th>{{ $profile->id }}</th>
                          <td>{{ $profile->name }}</td>
                          <td>{{ $profile->gender }}</td>
                          <td>{{ $profile->hobby }}</td>
                          <td>{{ $profile->introduction }}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
            </div>
        </div>
@endsection