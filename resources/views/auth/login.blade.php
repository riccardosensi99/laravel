<x-layout>
    
    <div class="container">
        <div class="row ">
            <div class="col-12 ">
                <h1 class="mt-5 mb-5 text-center">Accedi</h1>
                
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
                
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label text-white">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label text-white">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
</x-layout>