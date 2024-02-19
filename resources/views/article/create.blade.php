<x-layout>
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <h1 class="mt-5 mb-5 text-center">article</h1>
                
            </div>
        </div>
    </div>
    
    <div class="container mt.5">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('article_store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label text-white">Nome Articolo</label>
                        <input name="name" type="text" class="form-control  @error('name') is-invalid @enderror"
                        aria-describedby="emailHelp">
                        @error('name')
                        <div class="alert alert-danger mt-1">{{$message}}</div>
                        @enderror  
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Prezzo</label>
                        <input name="price" type="text" class="form-control  @error('price') is-invalid @enderror"
                        aria-describedby="emailHelp">
                        @error('price')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-white">Brand</label>
                        <input name="brand" type="text" class="form-control  @error('brand') is-invalid @enderror"
                        aria-describedby="emailHelp">
                        @error('brand')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label text-white">img</label>
                        <input name="img" type="file" class="form-control @error('img') is-invalid @enderror"
                        id="img">
                        @error('img')
                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary text-white mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
