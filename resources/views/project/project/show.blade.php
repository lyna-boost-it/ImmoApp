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
                        <label class="col-sm-1"><h4>Nom:</h4></label>
                        <div class="col-sm-5">{{$project->name}}</div>
                        <label class="col-sm-1"><h4>Code:</h4></label>
                        <div class="col-sm-5">{{$project->code}}</div>
                      </div>
                  </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
@include('layouts.footer')