@extends('layouts.admin')

@section('content')
  <body>
  

    <div class="container text-center">
  <div class="row">
    <div class="col s12 ">
    <h1>FAIRE UN DON</h1>
    <hr>
        <a href="{{Route('don.ajout')}}" class="btn btn-primary">Ajouter un don</a>
        <hr>
        @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
        @endif
        <table class="table">
           <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Nature</th>
                <th>Espèce</th>
                <th>Actions</th>
            </tr>
           </thead> 
           <tbody>
            @php
            $ide = 1;
            @endphp
           @foreach($dons as $don) 
            <tr>
                <td>{{$ide}}</td>
                <td>{{$don->nom}}</td>
                <td>{{$don->prenom}}</td>
                <td>{{$don->nature}}</td>
                <td>{{$don->espece}}</td>
                <td>
                    <a href="/update-don/{{$don->id}}" class="btn btn-info">Modifier</a>
                    <a class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            @php
            $ide += 1;
            @endphp
             
             @endforeach
           </tbody>  
        </table>

        {{$dons->links()}}
   
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
@endsection