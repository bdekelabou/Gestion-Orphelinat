@extends('layouts.admin')

@section('content')

<body>


    <div class="container">
        <div class="row">
            <div class="col s12 ">
                <h1>MODIFIER UN DON</h1>
                <hr>

                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif

                <ul>
                    @foreach ($errors->all() as $error)
                    <li class="alert alert-danger"> {($error)}</li>
                    @endforeach
                </ul>

                <form action="/update/traitement" method="POST" class="form-group">
                    @csrf

                    <input type="text" name="id" style="display: none;" value="{{ $dons->id }}">
                    <div class="form-group">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom" value="{{ $dons->nom }}">
                    </div>

                    <div class="form-group">
                        <label for="Prenom">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $dons->prenom }}">
                    </div>

                    <div class="form-group">
                        <label for="Nature">Nature</label>
                        <input type="text" class="form-control" id="Nature" name="nature" value="{{ $dons->nature }}">
                    </div>

                    <div class="form-group">
                        <label for="Espece">Espece</label>
                        <input type="text" class="form-control" id="Espece" name="espece" value="{{ $dons->espece }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">MODIFIER UN DON</button>

                    <br> <br />

                    <a href="/don/projet" class="btn btn-danger"> Revenir à la liste des dons</a>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>
@endsection