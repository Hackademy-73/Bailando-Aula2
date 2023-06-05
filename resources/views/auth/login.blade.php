<x-layout>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <h1>LOG-IN</h1>
            </div>
        </div>
    </div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form method="POST" action="{{route('login')}}">

                @csrf
                

                <div class="mb-3">
                  <label for="emailAddress" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="emailAddress" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="password">
                </div>

                
                <button type="submit" class="btn btn-primary">Accedi</button>
              </form>
        </div>
    </div>
</div>

</x-layout>