@extends('layouts.login')

@section('content')
{!! Form::open() !!}
{{ Form::input('text', 'username', null, ['placeholder' => 'ユーザー名']) }}
{{ Form::submit('検索', ['type'=>'submit', 'value' => '検索'])}}
{!! Form::close() !!}


検索ワード：{{ $username }}
<br>

@foreach ($search_users as $search_user)
<tr>
  <td>{{ $search_user->id }}</td>
  <td>{{ $search_user->username }}</td>
  </td>
  {{Form::close()}}
</tr>
<br>

{{Form::open(['files' => true])}}
{{Form::hidden('id',$search_user->id)}}
{{Form::submit('フォローする', ['class'=>'btn btn-primary btn-block'])}}
{{Form::close()}}

{{Form::open(['files' => true])}}
{{Form::submit('フォローをはずす', ['class'=>'btn btn-primary btn-block'])}}
{{Form::close()}}

@endforeach


@endsection
