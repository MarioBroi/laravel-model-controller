@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row row-cols-3 row-cols-lg-5 py-3 g-4">

            @forelse ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                Titolo: {{ $movie->title }}
                            </h4>
                            <div class="card-text">
                                Titolo originale: {{ $movie->original_title }}
                            </div>
                            <div class="card-text">
                                Nazionalitá: {{ $movie->nationality }}
                            </div>
                            <div class="card-text">
                                Data di uscita: {{ $movie->date }}
                            </div>
                            <div class="card-text">
                                Voto: {{ $movie->vote }}
                            </div>
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
