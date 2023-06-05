<form wire:submit.prevent="">

    @if (session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Inserisci il nome</label>
        <input type="text" wire:model.debounce.1200ms="name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp">
        @error('name')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="mark" class="form-label">Inserisci la marca</label>
        <input type="text" wire:model.debounce.1200ms="mark" class="form-control @error('mark') is-invalid @enderror" id="mark" aria-describedby="markHelp">
        @error('mark')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="color" class="form-label">Inserisci il colore</label>
        <input type="text" wire:model.debounce.1200ms="color" class="form-control @error('color') is-invalid @enderror" id="color" aria-describedby="colorHelp">
        @error('color')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Inserisci prezzo</label>
        <input type="text" wire:model.debounce.1200ms="price" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="priceHelp">
        @error('price')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Inserisci una descrizione</label>
        <input type="text" wire:model.debounce.1200ms="description" class="form-control @error('description') is-invalid @enderror" id="description" aria-describedby="descriptionHelp">
        @error('description')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-3">
        <label for="img" class="form-label">Inserisci immagine</label>
        <input type="file" wire:model.debounce.1200ms="img" class="form-control @error('img') is-invalid @enderror" id="img" aria-describedby="imgHelp">
        @error('img')
            <p class="text-danger">{{$message}}</p>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Crea articolo</button>

</form>