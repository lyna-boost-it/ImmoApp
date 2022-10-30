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
                  <form  action="{{ route('Project.project.update', $project->id) }}" method="post" class="needs-validation" novalidate="">
                    @csrf
                    {{method_field('PUT')}}
                    <div class="card-body">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Code de Projet <span class="ob">*</span></label>
                        <input type="text" name="code" class="form-control" value="{{$project->code  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Nom de Projet <span class="ob">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{$project->name  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Type de Projet <span class="ob">*</span></label>
                        <select name="type" class="form-control" value="{{$project->type  }}" required="">
                                        <option value="1">LPA</option>
                                        <option value="2">LPP</option>
                                        <option value="3">PROMOTIONNEL LIBRE</option>
                        </select>
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Adresse de Projet <span class="ob">*</span></label>
                        <input type="text" name="address" class="form-control" value="{{$project->address  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                                         <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre des Blocs<span class="ob">*</span></label>
                        <input type="number" name="bloc_number" value="{{$project->bloc_number  }}" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Nombre des Lots<span class="ob">*</span></label>
                        <input type="number" name="lot_number" class="form-control" value="{{$project->lot_number  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>

                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea name="description" class="form-control"     required="">{{ $project->description }} </textarea>
                      </div>
                  <div class="card-header">
                    <h4>Realisation du projet</h4>
                  </div>
                   <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Date de Debut<span class="ob">*</span></label>
                        <input type="date" name="start_date" class="form-control"  value="<?php echo e(old('start_date', $project->end_date->format('Y-m-d'))); ?>"    required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Achèvement Le<span class="ob">*</span></label>
                        <input type="date" name="end_date" class="form-control"
                        value="<?php echo e(old('end_date', $project->end_date->format('Y-m-d'))); ?>"   required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label>Les Charges<span class="ob">*</span></label>
                        <input type="number" name="charges" class="form-control"  value="{{$project->charges  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-4">
                        <label>Date mise des charges<span class="ob">*</span></label>
                        <input type="date" name="delivery_date" class="form-control"  value="<?php echo e(old('delivery_date', $project->delivery_date->format('Y-m-d'))); ?>" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Charge supplementaire<span class="ob">*</span></label>
                        <input type="number" name="additional_charges" class="form-control" value="{{$project->additional_charges  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                  <div class="card-header">
                    <h4>Parametres de service Apres Vente</h4>
                  </div>
                                      <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Delai de la reparation des vices construction<span class="ob">*</span></label>
                        <input type="number" name="vice_preparations" class="form-control" value="{{$project->vice_preparations  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Garantie de bonne execution est valable pendant<span class="ob">*</span></label>
                        <input type="number" name="guaranty" class="form-control" value="{{$project->guaranty  }}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
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
