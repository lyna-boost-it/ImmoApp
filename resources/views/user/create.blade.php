@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Boxs/Depots</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">CRM</a></div>
              <div class="breadcrumb-item"><a href="#">Gestion des Utilisateurs</a></div>
              <div class="breadcrumb-item">Ajouter un Utilisateur</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Ajouter un Utilisateur</h2>
                  <div class="card">
                  <form  action="{{ route('user.store') }}" method="post" class="needs-validation" novalidate="">
                    @csrf

                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nom Utilisateur<span class="ob">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="name" required="">
                          <div class="invalid-feedback">
                            ce champ est obligatoire!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Email<span class="ob">*</span></label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" required="">
                          <div class="invalid-feedback">
                            ce champ est obligatoire!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Role<span class="ob">*</span></label>
                        <div class="col-sm-9">
                          <select name="role" class="form-control" required="">
                            <option value="1">Administrateur</option>
                            <option value="2">Commercial</option>
                          </select>
                          <div class="invalid-feedback">
                            ce champ est obligatoire!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Mot de passe<span class="ob">*</span></label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password" required="">
                          <div class="invalid-feedback">
                            ce champ est obligatoire!
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Confirmation<span class="ob">*</span></label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="cpassword" required="">
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
