@extends('vendor.hello.layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, Planet!</h1>
            <p>Open source PHP web application framework</p>
            <p><a class="btn btn-primary btn-lg" href="http://planet.iftekhersunny.com" role="button">Learn more »</a></p>
        </div>
    </div> <!-- /.jumbotron -->

    <div class="container">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Messages</b></div>
                <div class="panel-body">
                    @foreach($messages as $message)
                        <div>
                            <b>{{ $message->title }}</b> - {{ $message->body }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div><!-- /.container -->

@endsection
