@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">Tableau de bord</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-primary bubble-shadow-small"
                >
                  <i class="fas fa-users"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Visiteurs</p>
                  <h4 class="card-title">150</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-info bubble-shadow-small"
                >
                  <i class="fas fa-user-check"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Donateurs</p>
                  <h4 class="card-title">50</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-success bubble-shadow-small"
                >
                  <i class="fas fa-luggage-cart"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Total des dons</p>
                  <h4 class="card-title">{{$totalDons}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-icon">
                <div
                  class="icon-big text-center icon-secondary bubble-shadow-small"
                >
                  <i class="far fa-check-circle"></i>
                </div>
              </div>
              <div class="col col-stats ms-3 ms-sm-0">
                <div class="numbers">
                  <p class="card-category">Membres</p>
                  <h4 class="card-title">30</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-14">
    <div class="col-md-14">
    <div class="card card-round">
        <div class="card-header">
            <div class="card-head-row card-tools-still-right">
                <div class="card-title">Historique des dons sur les projets</div>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center mb-0">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Les différents projets</th>
                            <th scope="col" class="text-end">Date & Heure</th>
                            <th scope="col" class="text-end">Budget</th>
                            <th scope="col" class="text-end">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projets as $projet)
                        <tr>
                            <th scope="row">
                                <!-- Modification de l'icône en fonction du statut -->
                                @if($projet->publier)
                                    <!-- Icône croix rouge si le projet est EN COURS -->
                                    <button class="btn btn-icon btn-round btn-danger btn-sm me-2">
                                        <i class="fa fa-times"></i>
                                    </button>
                                @else
                                    <!-- Icône crochet vert si le projet est TERMINE -->
                                    <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                                        <i class="fa fa-check"></i>
                                    </button>
                                @endif
                                {{ $projet->nom }}
                            </th>
                            <td class="text-end">{{ \Carbon\Carbon::parse($projet->date_debut)->locale('fr')->isoFormat('dddd D MMMM YYYY, HH:mm') }}</td>
                            <td class="text-end">{{ number_format($projet->budget, 0, ',', ' ') }} FCFA</td>
                            <td class="text-end">
                                @if($projet->publier)
                                    <span class="badge badge-success">EN COURS</span>
                                @else
                                    <span class="badge badge-danger">TERMINE</span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Projects table end -->
            </div>
        </div>
    </div>
</div>
</div>
    </div>
  </div>
</div>
</div>


@endsection
