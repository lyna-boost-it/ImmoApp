@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Blocs</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">CRM</a></div>
              <div class="breadcrumb-item"><a href="#">Gestion des blocs</a></div>
              <div class="breadcrumb-item">Afficher un bloc</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Afficher les informations du Bloc</h2>
                <div class="card card-primary">
                  <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Projet :</h5></label>
                        <div class="col-sm-2">
                          @foreach ( $projects as $project)
                                 @if ($project->id  == $bloc->project_id)
                                   {{ $project->name }} - {{ $project->code }}
                                 @endif
                          @endforeach
                        </div>
                        <label class="col-sm-4"><h5>Bloc :</h5></label>
                        <div class="col-sm-2">{{$bloc->bloc}}</div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Nombre des Etages :</h5></label>
                        <div class="col-sm-2">{{$bloc->floor_number}}</div>
                        <label class="col-sm-4"><h5>Nombre des Lots :</h5></label>
                        <div class="col-sm-2">{{$bloc->lot_number}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Taux d'avancement des travaux :</h5></label>
                        <div class="col-sm-2">{{$bloc->progress_rate}} %</div>
                        <label class="col-sm-4"><h5>Date d'avancement des travaux :</h5></label>
                        <div class="col-sm-2">{{Carbon\Carbon::parse($bloc->progress_date)->format('d/m/Y')}}</div>
                      </div>
                    
                  </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
@include('layouts.footer')