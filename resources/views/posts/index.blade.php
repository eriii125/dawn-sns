@extends('layouts.login')

@section('content')

{!! Form::open(['url' => 'post/create']) !!}
    <div class="form-group">
      {!! Form::textarea( 'newPost', null, ['required', 'class' => 'form-control', 'placeholder' => '何をつぶやこうか...?']) !!}
      <!-- {!! Form::hidden('userId','{{Auth::id()}}')!!} -->
      <input type="hidden" name="userId" value="{{Auth::id()}}"/>
      <button type="submit" class="btn btn-success pull-right">
        送信</button>
  </div>
{!! Form::close() !!}

<table>
@foreach($messages as $message)
  <tr>
    <td>{{$message->username}}</td>
    <td>{{ $message->posts }}</td>
    <td>{{ $message->created_at }}</td>
  </tr>
@endforeach
</table>

@endsection
