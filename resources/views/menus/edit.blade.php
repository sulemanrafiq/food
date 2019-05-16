@extends('admin')

@section('content')

    <div class="container">
        <button style="margin-bottom: 10px;" type="button" class="btn btn-primary" ><a style="color: white;text-decoration: none" href="{{ URL::previous() }}">Back</a></button>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">MENU CARD</div>
                    <div class="card-body">
                        @if(session('message'))
                            <p class="alert alert-success">{{session('message')}}</p>
                        @endif
                        @if(session('msg'))
                            <p class="alert alert-danger">{{session('msg')}}</p>
                        @endif

                            {!! Form::open(['method' => 'POST', 'route' => ['menus.update', $menus ['id'] ] ]) !!}


                        <div class="form-row">
                            <div class="col-lg-3">
                            <div class=" form-group">

                                {!! Form::text('item_name',  old('item_name', $menus->item_name),['class'=>'form-control', 'id'=>'item_name'  ]) !!}
                            </div>
                            </div>
                            <div class="col-lg-2">
                            <div class="form-group">
                                {!! Form::select('type',  array('burger' => 'burger', 'Drinks' => 'Drinks','Fries' => 'Fries', 'sweets' => 'sweets'), 'burger' , ['class'=>'form-control', 'id'=>'type' ]) !!}

                            </div></div>
                            <div class="col-lg-2">
                            <div class="form-group">

                                {!! Form::text('price', old('price', $menus->price),['class'=>'form-control', 'id'=>'price' , 'placeholder' => 'Price']) !!}
                            </div></div>
                            <div class="col-lg-4">
                            <div class="form-group">

                                {!! Form::text('description', old('description', $menus->description),['class'=>'form-control', 'id'=>'description' , 'placeholder' => 'description']) !!}
                            </div>
                            </div>
                            {!! Form::hidden('_method','PUT') !!}
                            <div class="form-group">
                                {!! Form::button(isset($model)? 'update':'update', ['class'=>'btn btn-info', 'type'=>'submit']) !!}

                            </div>

                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
