<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FoodCart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/displaymenu.css')}}">
    <script src="{{ asset('js/btns.js') }}" defer></script>
</head>
<body>
<div class="container " style="text-transform: capitalize">
    @foreach($menus as $key=> $item)
    <div class="row shadow p-3 mb-5 bg-white rounded">

        <div class="thumbnail col-md-4 col-sm-12">
            <img src="{{asset('img/54f9448b363bb_-_everyday_value_menu.jpg')}}" alt="" class="img-fluid" width="100%">
        </div>
        <div class="caption col-md-8 col-sm-12">
            <div>
                <h4 style="float: right">{{ $item['price']}}Rs</h4>
            </div>
            <h4>{{ $item['item_name']}}</h4>
            <p>{{ $item['description']}}</p>


            <div class="input-group input-number-group" style="width: 100%">
                <h4 style="padding-right: 50px;">{{ $item['price']}}Rs</h4>
                <div class="input-group-button">
                    <span class="input-number-decrement">-</span>
                </div>
                <input class="input-number" type="number" value="1" min="0" max="1000">
                <div class="input-group-button">
                    <span class="input-number-increment">+</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>