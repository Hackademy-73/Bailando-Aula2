<x-layout>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>REGISTRATI QUI</h1>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}">

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
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3">
                        <label for="passwordConfirmation" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="passwordConfirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Registrati!</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
