<x-layout>
    
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <h1 class="mt-5 mb-5 text-center">Crea categoria</h1>
                
            </div>
        </div>
    </div>
    
    <div class="container mt.5">
        <div class="row justify-content-center">
            <div class="col-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <form action="{{route('category_store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label text-white">Aggiungi categoria</label>
                        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">crea categoria</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>