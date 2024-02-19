<x-layout>
    
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <h1 class="mt-5 mb-5 text-center">dettaglio categoria{{$category->name}}</h1>
                
            </div>
        </div>
    </div>
    
    <div class="container mt.5">
        <div class="row justify-content-center">
            <div class="col-6">
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
                    <div class="row">
                          <div class="col-3">
                                <div class="card" style="width: 18rem;">
                                 <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$category->name}}</h5>
                                    <a href="{{route('category_index')}}" class="btn btn-primary">torna indietro</a>
                                </div>
                                </div>
                          </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>