@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Projets</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">CRM</a></div>
              <div class="breadcrumb-item"><a href="#">Gestion des projets</a></div>
              <div class="breadcrumb-item">Afficher un projet</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Afficher les informations du Projet</h2>
                <div class="card card-primary">
                  <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Nom :</h5></label>
                        <div class="col-sm-2">{{$project->name}}</div>
                        <label class="col-sm-4"><h5>Code :</h5></label>
                        <div class="col-sm-2">{{$project->code}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Type :</h5></label>
                        <div class="col-sm-2">
                          @if($project->type==1)LPA @endif
                          @if($project->type==2)LPP @endif
                          @if($project->type==3)PROMOTIONNEL LIBRE @endif
                        </div>
                        <label class="col-sm-4"><h5>Adresse :</h5></label>
                        <div class="col-sm-2">{{$project->address}}</div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Nombre des Blocs :</h5></label>
                        <div class="col-sm-2">{{$project->bloc_number}}</div>
                        <label class="col-sm-4"><h5>Nombre des Lots :</h5></label>
                        <div class="col-sm-2">{{$project->lot_number}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Description :</h5></label>
                        <div class="col-sm-6">{{$project->description}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Date de Debut :</h5></label>
                        <div class="col-sm-2">{{Carbon\Carbon::parse($project->start_date)->format('d/m/Y')}}</div>
                        <label class="col-sm-4"><h5>Achèvement Le :</h5></label>
                        <div class="col-sm-2">{{Carbon\Carbon::parse($project->end_date)->format('d/m/Y')}}</div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Délai :</h5></label>
                        <div class="col-sm-2">{{$project->duration}} Mois</div>
                        <label class="col-sm-4"><h5>Date mise des charges :</h5></label>
                        <div class="col-sm-2">{{Carbon\Carbon::parse($project->delivery_date)->format('d/m/Y')}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Les Charges :</h5></label>
                        <div class="col-sm-2">{{$project->charges}} DA</div>
                        <label class="col-sm-4"><h5>Charge supplementaire :</h5></label>
                        <div class="col-sm-2">{{$project->additional_charges}} DA</div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Delai de la reparation des vices construction :</h5></label>
                        <div class="col-sm-2">{{$project->vice_preparations}} Jours</div>
                        <label class="col-sm-4"><h5>Garantie de bonne execution est valable pendant :</h5></label>
                        <div class="col-sm-2">{{$project->guaranty}} AN(s)</div>
                      </div>
                  </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
@include('layouts.footer')