<x-layout>

  <div class="container">
    <div class="row">
      <div class="col-12  justify-content-center d-flex text-align-center">
        <h1 class="mt-5 mb-5">Chi Siamo</h1>

      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
        @foreach ($users as $item)
        <div class="col-12 col-md-3 mt-3 mb-4">
            <div class="card" >
                <div class="card-body">
                  <h5 class="card-title">{{$item['name']}}</h5>
                  <p class="card-text">{{$item['age']}}</p>
                  <a href="{{route('userDetail',['id'=>$item['id']])}}" class="btn btn-primary">dettaglio</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
  </div>

</x-layout>



