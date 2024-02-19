<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center display-3">contattaci</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 ">
                <form method="POST" action="{{route('contactSubmit')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text text-white">inserisci la tua email.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-white">nome</label>
                      <input name="name" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea name="text" class="form-control" placeholder="scrivi qui" id="floatingTextarea2" style="height: 200px"></textarea>
                        <label for="floatingTextarea2">messaggio</label>
                    </div>
                    <button type="submit" class="btn btn-primary">invia</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>