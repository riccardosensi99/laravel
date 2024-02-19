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
                <h1 class="mt-5 mb-5 text-center">tutte le categorie</h1>
                
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
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">name</th>
                                        <th scope="col">azione</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <th scope="row">{{$category->id}}</th>
                                        <td>{{$category->name}}</td>
                                        <td>
                                            <a href="{{route('category_show',$category)}}" class="btn btn-primary mx-auto my-2">dettaglio</a>
                                            <a href="{{route('category_edit',$category)}}" class="btn btn-primary mx-auto my-2">modifica</a>
                                            <a class=" btn btn-danger" href="#" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$category->id}}').submit()" class="btn btn-primary mx-auto my-2">elimina</a>
                                            <form id="form-delete-{{$category->id}}" action="{{route('category_delete', $category)}}" method="POST" class="d-none">
                                                @method('delete')
                                                @csrf
                                            </form>
                                           
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </x-layout>
    
    {{-- <div class="col-3 my-3">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
                <a href="{{route('category_show',$category)}}" class="btn btn-primary">dettaglio</a>
                <a href="{{route('category_edit',$category)}}" class="btn btn-primary">modifica</a>
            </div>
        </div>
    </div> --}}