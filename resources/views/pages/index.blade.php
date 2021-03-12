@extends('layouts.app')

@section('title', 'Index')

@section('custom-css')
@endsection

@section('content')
    <div class="card" style="width: 18rem;">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Card image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Card image cap</title><rect width="100%" height="100%" fill="#868e96"></rect></svg>

        <div class="card-body">
            <h5 class="card-title">Карточка с растянутой ссылкой</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary stretched-link">Go somewhere</a>
        </div>
    </div>
@endsection

@section('custom-js')
@endsection
