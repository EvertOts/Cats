@extends('layouts.default')

@section('title', 'Home')

@section('content')
    {{--    @todo implement logic--}}
    <div id="app">
        <button class="btn btn-primary" @click="showModal=true">Toggle modal</button>
        <modal :active="showModal" @close="showModal=false"></modal>
    </div>
    @include('partials.hero')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($cats as $cat)
                    <div class="col">
                        @include('partials.album-card', $cat)
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
