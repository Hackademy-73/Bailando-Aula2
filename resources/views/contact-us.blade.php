<x-layout>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>Contattaci</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('send')}}">

                    @csrf

                    <div class="mb-3">
                        <label for="nomeUtente" class="form-label">Nome Utente</label>
                        <input name="name" type="text" class="form-control" id="nomeUtente">
                    </div>

                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">Email address</label>
                        <input name="email" type="email" class="form-control" id="emailAddress"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="letter" class="form-label">Lettera di presentazione</label>
                        <textarea name="letter" id="letter" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
