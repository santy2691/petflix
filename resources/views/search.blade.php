@extends('layouts.main_search')
<!-- atención: llamada a otro layout del normal, este layout simplemente no tiene searchbar -->
@section('css')
    <!-- searchbar CSS -->
    <link rel="stylesheet" href="css/search.css">
@endsection

@section('content')
    <!-- body -->
    <div class="searchResults container-fluid d-flex p-0 pt-5 vw-100 overflow-hidden">
        <!-- sidebar -->
        <aside class="d-flex vh-100 position-relative sidebar">
            <section class="searchMenu h-100">
            </section>
            <section class="searchMenu fixed blk_bg overflow-hidden">
                <div class="d-flex flex-column">
                    <!-- header of menu-->
                    <div class="mainHeader d-flex border border-white">
                        <i class="bi bi-gear"></i>
                        <h3 class="mx-2 mb-0">Advanced Search</h3>
                    </div>
                    <form method="POST" action={{ route('searchVids') }}>
                        @csrf
                        <!-- detect sidebar post -->
                        <input type="hidden" name="isSidebar" value="1">
                        <!-- menu subsections -->
                        <div class="subsection">
                            <div class="subHeader border border-white d-flex">
                                <h4>Title</h4>
                            </div>
                            <div class="sideForm form-check d-flex flex-column  border border-white">
                                <div class="d-flex">
                                    <input class="form-control form-control-sm" type="text"
                                        placeholder="Enter Director's Name" aria-label=".form-control-sm example"
                                        name="title" value="{{ old('title') ?? $searchTerm }}">
                                </div>
                            </div>
                            <div class="subsection">
                                <div class="subHeader border border-white d-flex">
                                    <h4>Type</h4>
                                </div>
                                <div class="sideForm form-check d-flex flex-column  border border-white">
                                    <div class="d-flex">
                                        <input type="checkbox" name="type[]" id="movies" class="form-check-input me-1"
                                            value="movie"
                                            {{ is_array(old('type')) && in_array('movie', old('type')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="movies">
                                            Movies
                                        </label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" name="type[]" id="series" class="form-check-input me-1"
                                            value="serie"
                                            {{ is_array(old('type')) && in_array('serie', old('type')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="serie">
                                            Series
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="subsection">
                                <div class="subHeader border border-white d-flex">
                                    <h4>Genere</h4>
                                </div>
                                <div class="sideForm form-check d-flex flex-column  border border-white">
                                    <div class="d-flex">
                                        <input type="checkbox" name="genere[]" id="action" class="form-check-input me-1"
                                            value="action"
                                            {{ is_array(old('genere')) && in_array('action', old('genere')) ? 'checked' : '' }}>
                                        <!-- ^ documentación:
                                                            en el caso de los campos de name="array[]"
                                                            solo con marcar el campo con old no vale, hay que usar esta expressión
                                                            que mirara si hay valor (el especifico de ese checkbox) en old(que es un array) y si la hay marara el campo como activo
                                                            con checked
                                                        -->
                                        <label class="form-check-label" for="action">
                                            Action
                                        </label>
                                    </div>
                                    <div class="d-flex">
                                        <input type="checkbox" name="genere[]" id="comedy" class="form-check-input me-1"
                                            value="comedy"
                                            {{ is_array(old('genere')) && in_array('comedy', old('genere')) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="comedy">
                                            Comedy
                                        </label>
                                    </div>
                                    <!-- Edited for lack of seeders
                                                    <div class="d-flex">
                                                        <input type="checkbox" name="genere[]" id="thriller" class="form-check-input me-1" value="thriller">
                                                        <label class="form-check-label" for="thriller">
                                                            Thriller
                                                        </label>
                                                    </div>
                                                    <div class="d-flex">
                                                        <input type="checkbox" name="genere[]" id="" class="form-check-input me-1" value="romance">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Romance
                                                        </label>
                                                    </div>
                                                    <div class="d-flex">
                                                        <input type="checkbox" name="genere[]" id="" class="form-check-input me-1" value="sci-fi">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Sci-fi
                                                        </label>
                                                    </div>
                                                    End of edited for lack of seeders -->
                                </div>
                            </div>
                            <div class="subsection">
                                <div class="subHeader border border-white d-flex">
                                    <h4>Director</h4>
                                </div>
                                <div class="sideForm form-check d-flex flex-column  border border-white">
                                    <input class="form-control form-control-sm" type="text"
                                        placeholder="Enter Director's Name" aria-label=".form-control-sm example"
                                        name="director" value="{{ old('director') }}">
                                </div>
                            </div>
                            <div class="subsection">
                                <div class="subHeader border border-white d-flex">
                                    <h4>Actors</h4>
                                </div>
                                <div class="sideForm form-check d-flex flex-column  border border-white last">
                                    <input class="form-control form-control-sm" type="text" placeholder="Enter Actor's Name"
                                        aria-label=".form-control-sm example" name="actor" value="{{ old('actor') }}">
                                    <button type="submit" class="mt-2 btn px-2 btn-outline-light side-search-button">
                                        Search
                                        <i class="bi-search"></i>
                                    </button>
                    </form>
                </div>
                @error('type')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                @enderror

    </div>
    </div>
    </section>
    <nav class="toggleSearch pe-1 position-fixed border border-white">
        <i class="bi-gear"></i>
    </nav>
    </aside>
    <!-- main content (search results) -->
    <section class="p-2 mainMovies w-100">
        <div>
            <h2 class="fw-bold">
                {{ isset($searchTerm) && $searchTerm != '' ? 'Searching for "' . $searchTerm . '"' : '' }}</h2>
            <span>{{ count($movies) > 0 ? count($movies) . ' results found' : '' }}</span>
        </div>
        <!-- results for search -->
        <div class="m-container d-flex flex-wrap">
            @forelse ($movies as $movie)
                <div class="m-card">

                    <img src="{{ asset($movie->urlFile) }}" alt="{{ $movie->title }}">
                    <a href="/watch/{{urlencode($movie->id)}}">
                        <div class="m-info d-flex flex-column">
                            <form action="/home/{{$movie->title}}" method="GET" class="ms-auto me-2">
                                <button type="submit" class="btn">
                                    <i class="bi bi-heart ms-auto me-2"></i>
                                </button>
                            </form>
                            <p class="title title-title mx-auto mt-auto">{{ $movie->title }}</p>
                            <p class="title genere ms-2 mb-1">Genere: {{ $movie->gname }}</p>
                            <p class="title director ms-2 mb-1">Director: {{ $movie->dname }}</p>
                            <p class="title director ms-2 mb-1">Actors: {{ $movie->actorarr }}</p>
                        </div>
                    </a>
                </div>
            @empty
                <div class="alert alert-warning" role="alert">
                    Oops, no movies found here!
                </div>
            @endforelse
        </div>
    </section>
    </div>
@endsection
@section('js')
    <!-- main js (toggle side menu) -->
    <script src="js/search/main.js"></script>
@endsection
