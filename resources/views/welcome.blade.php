<x-layout>
    @if (session('message'))
        {{-- indica il parametro del messaggio --}}
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-6 alert alert-success mt-5 ">
                    {{-- indica il contenuto del messaggio --}}
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <h1 class="mt-5 mb-5 text-center">homepage</h1>

            </div>
        </div>
    </div>
    {{-- card --}}
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-10 col-md-3">
                    <div class="card my-3 mx-auto">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->name }}</h5>
                            <p class="card-text">{{ $article->brand }}</p>
                            <p class="card-text fw-bold">{{ $article->price }}€</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- card --}}

</x-layout>
