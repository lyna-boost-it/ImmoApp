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
              <div class="breadcrumb-item">Afficher un box/dépôt</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Afficher les informations du Box/Dépôt</h2>
                <div class="card card-primary">
                  <div class="card-body">
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>N° Edd :</h5></label>
                        <div class="col-sm-2">{{$box->edd_id}}</div>
                        <label class="col-sm-4"><h5>Type :</h5></label>
                        <div class="col-sm-2">@if ($box->type == 1) Box
                                     @else Depot @endif</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Description :</h5></label>
                        <div class="col-sm-2">{{$box->description}}</div>
                        <label class="col-sm-4"><h5>Prix m² :</h5></label>
                        <div class="col-sm-2">{{$box->price_m2}} DA</div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Superficie :</h5></label>
                        <div class="col-sm-2">{{$box->area}} m²</div>
                        <label class="col-sm-4"><h5>Montant :</h5></label>
                        <div class="col-sm-2">{{$box->amount}} DA</div>
                      </div>

                  </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
@include('layouts.footer')
