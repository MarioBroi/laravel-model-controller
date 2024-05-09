@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">

            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            {{ $movie->title }}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            @empty
                <div class="col">
                    <h3>Sorry, no movies for you! 😥</h3>
                </div>
            @endforelse

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
