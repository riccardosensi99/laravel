<x-layout>

    <div class="container">
        <div class="row ">
          <div class="col-12 ">
            <h1 class="mt-5 mb-5 text-center">registrati</h1>
    
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

                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label text-white">Nome</label>
                        <input name="name" type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                      <label for="inputEmail" class="form-label text-white">Email</label>
                      <input name="email"type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="inputPassword" class="form-label text-white">Password</label>
                      <input name="password"type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label text-white">Conferma Password</label>
                        <input name="password_confirmation"type="password" class="form-control" id="inputPasswordConfirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>