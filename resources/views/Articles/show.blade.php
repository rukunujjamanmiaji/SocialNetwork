@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <span>
                            Articles by Rukunujjaman Miaji
                        </span>

                    <span class="pull-right">
                            {{$article->created_at->diffForHumans()}}

                        </span>
                    <div class="panel-body">
                        {{ $article->content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection