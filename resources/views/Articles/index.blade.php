@extends('layouts.app')

@section('content')
        <div class="row">
            @forelse($article as $articles)
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <span>
                           Md. Rukunujjaman Miaji
                        </span>
                        <span class="pull-right">
                            {{$articles->created_at->diffForHumans()}}
                        </span>
                        <div class="panel-body">
                            {{ $articles->shortContent }}
                            <a href="/articles/{{$articles->id }}">Read more</a>
                        </div>
                        <div class="panel footer clearfix" style="background-color: white">
                        <i class="fa fa-heart pull-right"></i>

                        </div>
                    </div>
                </div>
            @empty
                No Articles
            @endforelse

        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-4">
            {{ $article->links() }}
            </div>
        </div>
@endsection