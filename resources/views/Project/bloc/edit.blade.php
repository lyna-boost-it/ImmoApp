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
              <div class="breadcrumb-item">Mjouter un projet</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Modifier un Projet</h2>
                  <div class="card">
                  <form  action="{{ route('Project.bloc.update', $bloc->id) }}" method="post" class="needs-validation" novalidate="">
                    @csrf
                    {{method_field('PUT')}}     {{method_field('PUT')}}
                    <div class="card-body">
                     <div class="form-row">
                      <div class="form-group col-6 offset-3">
                        <label>Bloc <span class="ob">*</span></label>
                        <input type="text" name="bloc" class="form-control" value="{{$bloc->bloc}}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre des Etages<span class="ob">*</span></label>
                        <input type="number" name="floor_number" value="{{$bloc->floor_number}}" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Nombre des Lots<span class="ob">*</span></label>
                        <input type="number" name="lot_number" class="form-control" value="{{$bloc->lot_number}}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Taux d'avancement des travaux<span class="ob">*</span></label>
                        <input type="number" name="progress_rate" value="{{$bloc->progress_rate}}" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Date d'avancement des travaux<span class="ob">*</span></label>
                        <input type="date" name="progress_date" class="form-control" value="<?php echo e(old('delivery_date', $bloc->progress_date->format('Y-m-d'))); ?>" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>


                    </div>
                    <div class="card-footer">
                      <small>Les champs suivis d'un (<span class="ob">*</span>) sont obligatoires.</small>
                      <div class="text-right">
                      <button class="btn btn-primary">Modifier</button>
                      </div>
                    </div>
                  </form>
                </div>
          </div>
        </section>
      </div>
@include('layouts.footer')
