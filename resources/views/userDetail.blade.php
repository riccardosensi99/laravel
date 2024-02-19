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
        
        <div class="col-12 col-md-3">
            <div class="card" >
                <img src="{{$user['img']}}" class="card-img-top" alt="{{$user['name']}}">
                <div class="card-body">
                  <h5 class="card-title">{{$user['name']}}</h5>
                  <p class="card-text">{{$user['age']}}</p>
                  <a href="{{route('userName')}}" class="btn btn-primary">torna agli users</a>
                </div>
            </div>
        </div>
        

    </div>
  </div>

</x-layout>

