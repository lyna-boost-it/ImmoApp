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
              <div class="breadcrumb-item">Ajouter un bloc</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Ajouter un Bloc</h2>
                  <div class="card">
                  <form  action="{{ route('Project.bloc.store') }}" method="post" class="needs-validation" novalidate="">
                    @csrf

                    <div class="card-body">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Projet <span class="ob">*</span></label>
                         <select name="project_id" class="form-control" required="">
                          @foreach ( $projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }} - {{ $project->code }}</option>
                          @endforeach
                        </select>
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Bloc <span class="ob">*</span></label>
                        <input type="text" name="bloc" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre des Etages<span class="ob">*</span></label>
                        <input type="number" name="floor_number" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Nombre des Lots<span class="ob">*</span></label>
                        <input type="number" name="lot_number" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>

                   <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Taux d'avancement des travaux<span class="ob">*</span></label>
                        <input type="number" name="progress_rate" class="form-control"  placeholder="%" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Date d'avancement des travaux<span class="ob">*</span></label>
                        <input type="date" name="progress_date" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                   
                    <div class="card-footer">
                      <small>Les champs suivis d'un (<span class="ob">*</span>) sont obligatoires.</small>
                      <div class="text-right">
                      <button class="btn btn-primary">Ajouter</button>
                      </div>
                    </div>
                  </form>
                </div>
          </div>
        </section>
      </div>
@include('layouts.footer')
