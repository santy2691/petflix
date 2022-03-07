@extends('layouts.main')
@section('content')
    <!-- body -->
    <section class="videos container-fluid">
        <!-- articles -->
        
            @forelse ($movieCollection as $key => $movies)
                <article class="drama-main mt-5">
                    <div class="row mb-2">
                        <div class="col-1"></div>
                        <div class="col ms-3">
                            <!-- this prints the name of the genere -->
                            <h2>{{ $key }}</h2>
                        </div>
                    </div>
                    <!-- drama carousel-->
                    <div class="drama row {{ $key }}">
                        @forelse ($movies as $movie)
                            <a href="/watch/{{urlencode($movie->id)}}"> 
                                <div class="col d-flex justify-content-center pic-container shadow">
                                    <img src="{{ asset($movie->urlFile) }}" alt="{{ $movie->title }}">
                                    <div class="caption d-flex flex-column overflow-hidden w-100 h-100">
                                        <form action="/home/{{$movie->id}}" method="GET" class="ms-auto me-2">
                                            <button type="submit" class="btn">
                                                <i class="bi bi-heart ms-auto me-2"></i>
                                            </button>
                                        </form>
                                            
                                        <p class="title mx-auto mt-auto mb-0">{{ $movie->title }}
                                            @if (Request::is('search/*'))   
                                            {{ $movie->season .' ' . $movie->chapter}} 
                                            @endif

                                            @if (Request::is('watchlists') && $movie->season != 0)   
                                            {{ $movie->season .' ' . $movie->chapter}} 
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p>No movies</p>
                        @endforelse
                    </div>
                </article>
            @empty
                <p>Collection empty</p>
            @endforelse

        <!-- series -->
            @forelse ($serieCollection as $key => $series)
                <article class="drama-main mt-5">
                    <div class="row mb-2">
                        <div class="col-1"></div>
                        <div class="col ms-3">
                            <h2>series</h2>
                        </div>
                    </div>
                    <!-- drama carousel-->
                    <div class="drama row {{ $key }}">
                        @forelse ($series as $serie)
                            <a href="/search/{{urlencode($serie->title)}}"> 
                                <div class="col d-flex justify-content-center pic-container shadow">
                                    <img src="{{ asset($serie->urlFile) }}" alt="{{ $serie->title }}">
                                    <div class="caption d-flex flex-column overflow-hidden w-100 h-100">
                                        <form action="/home/{{$serie->id}}" method="GET" class="ms-auto me-2">
                                            <button type="submit" class="btn">
                                                <i class="bi bi-heart ms-auto me-2"></i>
                                            </button>
                                        </form>
                                            
                                        <p class="title mx-auto mt-auto mb-0">{{ $serie->title }} 
                                        </p>
                                    </div>
                                </div>
                            </a>
                        @empty
                        @endforelse
                    </div>
                </article>
            @empty
            @endforelse
    </section>
@endsection
