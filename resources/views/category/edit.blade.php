<x-layout>
    
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <h1 class="mt-5 mb-5 text-center">Modifica Categoria</h1>
                
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
                
                <form action="{{route('category_update',$category)}}" method="POST">
                    @method("put")
                    @csrf
                    <div class="mb-3">
                        <label for="inputText" class="form-label text-white">Nome categoria</label>
                        <input name="name" type="text" class="form-control" id="inputText" aria-describedby="emailHelp" value="{{$category->name}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifica</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>