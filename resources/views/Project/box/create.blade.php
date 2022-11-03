@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Boxs/Dépôts</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ URL('/home') }}">CRM</a></div>
                <div class="breadcrumb-item"><a href="{{ URL('/Project/box') }}">Gestion des Boxs/Dépôts</a></div>
              <div class="breadcrumb-item">Ajouter un Box/Dépôt</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Ajouter un Box/Dépôt</h2>
                  <div class="card">
                  <form  action="{{ route('Project.box.store') }}" method="post" class="needs-validation" novalidate="">
                    @csrf

                    <div class="card-body">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>N° EDD<span class="ob">*</span></label>
                         <select name="edd_id" class="form-control" required="">
                          @foreach ( $edds as $edd)
                            <option value="{{ $edd->id }}"> {{ $edd->id}}</option>
                          @endforeach
                        </select>
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Type <span class="ob">*</span></label>
                        <select name="type" class="form-control" required="">
                            <option value="1">Box</option>
                            <option value="2">Depot</option>
                        </select>
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Description<span class="ob">*</span></label>
                        <input type="text" name="description" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Prix M²<span class="ob">*</span></label>
                        <input type="number" name="price_m2" class="form-control" placeholder="DA" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>

                   <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Superficie<span class="ob">*</span></label>
                        <input type="number" name="area" class="form-control"  placeholder="M²" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                       <div class="form-group col-md-6">
                        <label>Montant<span class="ob">*</span></label>
                        <input type="number" name="amount" class="form-control" placeholder="DA" required="">
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
