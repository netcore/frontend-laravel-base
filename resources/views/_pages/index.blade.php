@extends('_layouts.demo')
@section('title', config('app.name'))

@section('content')
    <div class="band"></div>

    <div class="container my-4">
        <div class="row">
            <div class="col col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
                <div class="list-group">
                    <div class="list-group-item index-logo text-center">
                         @svg('assets/svg/logo.svg')
                    </div>
                    <div class="list-group-item p-1">
                        <span class="last-update">
                            Updated:
                            <?php 
                                date_default_timezone_set('Europe/Riga');
                                echo date('j M, Y \a\t H:i');
                            ?>
                        </span>
                    </div>
                    <div class="list-group-item list-group-item-action disabled bg-light py-1">Pages</div>
                    <a href="{{ url('/homepage') }}" class="list-group-item list-group-item-action">Homepage</a>
                </div>
            </div>
        </div>
    </div>
@stop