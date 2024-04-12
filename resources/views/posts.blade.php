@extends('layouts.main')
@section('content')
    <h1>{{ $h1 }}</h1>
    @foreach($posts as $item)
        <div>
            <ul>
                <li>{{ $item->title }}</li>
                <li>{{ $item->likes }}</li>
            </ul>
        </div>
    @endforeach
@endsection
