@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Boxs/Depots</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ URL('/home') }}">CRM</a></div>
                <div class="breadcrumb-item"><a href="{{ URL('/Project/box') }}">Gestion des Boxs/Dépôts</a></div>
              <div class="breadcrumb-item">Modifier box/dépôt</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Modifier un  Box/Dépôt</h2>
                  <div class="card">
                  <form  action="{{ route('Project.box.update', $box->id) }}" method="post" class="needs-validation" novalidate="">
                    @csrf
                    {{method_field('PUT')}}     {{method_field('PUT')}}
                    <div class="card-body">
                     <div class="form-row">
                      <div class="form-group col-md-6">
                        <label>Description<span class="ob">*</span></label>
                        <input type="text" name="description" class="form-control" value="{{$box->description}}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                     <div class="form-group col-md-6">
                        <label>Prix m²<span class="ob">*</span></label>
                        <input type="number" name="price_m2" value="{{$box->price_m2}}" class="form-control" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                    </div>
                    <div class="form-row">

                       <div class="form-group col-md-6">
                        <label>Superficie<span class="ob">*</span></label>
                        <input type="number" name="area" class="form-control" value="{{$box->area}}" required="">
                        <div class="invalid-feedback">
                          ce champ est obligatoire!
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Montant<span class="ob">*</span></label>
                        <input type="number" name="amount" value="{{$box->amount}}" class="form-control" required="">
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
