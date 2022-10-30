@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Projets</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Components</a></div>
              <div class="breadcrumb-item">Table</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Ajouter un Projet</h2>
                  <div class="card">
                  <form  action="{{ url('newproject') }}" method="post" class="needs-validation" novalidate="">
                    @csrf

                    <div class="card-body">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Code de Projet <span class="ob">*</span></label>
                        <input type="text" name="code" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Nom de Projet <span class="ob">*</span></label>
                        <input type="text" name="name" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Type de Projet <span class="ob">*</span></label>
                        <select name="type" class="form-control" required="">
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
                        <input type="text" name="address" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                                         <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Nombre des Blocs<span class="ob">*</span></label>
                        <input type="number" name="bloc_number" class="form-control" required="">
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

                      <div class="form-group mb-0">
                        <label>Description</label>
                        <textarea name="description" class="form-control" required=""></textarea>
                      </div>
                  <div class="card-header">
                    <h4>Realisation du projet</h4>
                  </div>
                   <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Date de Debut<span class="ob">*</span></label>
                        <input type="date" name="start_date" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Achèvement Le<span class="ob">*</span></label>
                        <input type="date" name="end_date" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                        <label>Les Charges<span class="ob">*</span></label>
                        <input type="number" name="charges" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-4">
                        <label>Date mise des charges<span class="ob">*</span></label>
                        <input type="date" name="delivery_date" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Charge supplementaire<span class="ob">*</span></label>
                        <input type="number" name="additional_charges" class="form-control" required="">
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
                        <input type="number" name="vice_preparations" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Garantie de bonne execution est valable pendant<span class="ob">*</span></label>
                        <input type="number" name="guaranty" class="form-control" required="">
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