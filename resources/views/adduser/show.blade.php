@extends('admin')

@section('content')
    @if(session('massage'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session('massage')}}</strong>
        </div>
    @endif
    @if(session('msg'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session('msg')}}</strong>
        </div>
    @endif
    @if(session('msg2'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>{{session('msg2')}}</strong>
        </div>
    @endif
<div class="row">

    <div class="col-lg-8">
        <h1>User's Detail</h1>
        <h5 align="center">1=Admin , 2=User , 3=Chef</h5>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">name</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th colspan="2" style="text-align: center">Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($user as $key=> $users)
                <tr>
                    <th scope="row">{{$users ['name']}}</th>
                    <th scope="row">{{$users ['email']}}</th>
                    <th scope="row">{{$users ['role_id']}}</th>
                    <th  scope="row"> <a href="../adduser/{{$users['id']}}/edit" class="float-right btn btn-primary">Edit</a></th>
                  <th>
                      {{--<form method="POST" action="{{ route('adduser.destroy' , $users['id']) }}">--}}
                          {{--<input name="_method" type="hidden" value="DELETE">--}}
                          {{--<button type="submit" class="btn btn-danger">--}}
                              {{--DEL--}}
                          {{--</button>--}}
                      {{--</form>--}}
                      {!! Form::open(['method' => 'POST',   'route' => ['adduser.destroy' , $users ['id'] ] ]) !!}
                      {!! Form::hidden('_method','DELETE') !!}
                      {!! Form::submit(('DEL'), ['class' => ' btn btn-danger']) !!}
                      {!! Form::close() !!}

                  </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection