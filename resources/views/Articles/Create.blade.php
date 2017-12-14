@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Articles</div>

                    <div class="panel-body">
                        <form action="/articles" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control"></textarea>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="live">
                                    Live
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="post_on">Post On</label>
                                <input type="datetime-local" name="post_on" class="form-control">
                            </div>
                            <input type="submit" class="btn btn-success pull-right">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection