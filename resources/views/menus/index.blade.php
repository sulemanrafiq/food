@extends('admin')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">MENU CARD</div>
                <div class="card-body">
                    @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>{{session('message')}}</strong>
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
                    {!! Form::open(['route'=> 'menus.store', 'method'=> 'POST'  ]) !!}

                    <div class="form-row">
                        <div class="col-lg-3">
                        <div class="form-group">

                            {!! Form::text('item_name', old('item_name'),['class'=>'form-control', 'id'=>'item_name' , 'placeholder' => 'item name']) !!}
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">
                            {!! Form::select('type', array('burger' => 'burger', 'Drinks' => 'Drinks','Fries' => 'Fries', 'sweets' => 'sweets'), 'burger' ,['class'=>'form-control', 'id'=>'type' ]) !!}

                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-group">

                            {!! Form::text('price', old('price'),['class'=>'form-control', 'id'=>'price' , 'placeholder' => 'Price']) !!}
                        </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">

                            {!! Form::text('description', old('description'),['class'=>'form-control', 'id'=>'description' , 'placeholder' => 'description']) !!}
                        </div>
                        </div>

                        <div class="form-group">
                            {!! Form::button(isset($model)? 'update':'save', ['class'=>'btn btn-success float-right', 'type'=>'submit']) !!}

                        </div>

                    </div>
                    {!! Form::close() !!}
                    {{--<a class="btn btn-small btn-info" href="{{route('menus.create')}}">ADD</a>--}}
                    <div class="container">
                        <div class="row">
                            <div class="table-responsive col-lg-12">
                        <table class="table">
                            <thead>

                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Item name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th  colspan="2" style="text-align: center">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($menus as $key=> $item)
                                <tr>
                            
                                    <td>{{ $item['id']}}</td>
                                    <td>{{ $item['item_name']}}</td>
                                    <td>{{ $item['type']}}</td>
                                    <td>{{ $item['price']}}</td>
                                    <td>{{ $item['description']}}</td>
                                  <td  >
                                    <a href="../menus/{{$item['id']}}/edit" class="float-right btn btn-primary">Edit</a>

                                  </td>
                                    <td >
                                        {!! Form::open(['method' => 'POST',   'route' => ['menus.destroy' , $item ['id'] ] ]) !!}
                                        {!! Form::hidden('_method','DELETE') !!}
                                        {!! Form::submit(('DEL'), ['class' => ' btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection