@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Prospect</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">CRM</a></div>
              <div class="breadcrumb-item"><a href="#">Gestion des prospects</a></div>
              <div class="breadcrumb-item">Afficher un Prospect</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Afficher les informations du Prospect</h2>
                <div class="card card-primary">
                  <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Civilité: </h5></label>
                        <div class="col-sm-2">{{$contact->civility}}</div>
                        <label class="col-sm-4"><h5>Provenance DG: </h5></label>
                        <div class="col-sm-2">{{$contact->provenance_dg}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>M: </h5></label>
                        <div class="col-sm-2">{{$contact->m}}</div>

                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Nom: </h5></label>
                        <div class="col-sm-2">{{$contact->name}}</div>
                        <label class="col-sm-4"><h5>Prénom: </h5></label>
                        <div class="col-sm-2">{{$contact->first_name}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Nom Jeune Fille: </h5></label>
                        <div class="col-sm-6">{{$contact->miss_name}}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Date De Naissance: </h5></label>
                        <div class="col-sm-2">{{Carbon\Carbon::parse($contact->date_of_birth)->format('d/m/Y')}}</div>
                        <label class="col-sm-4"><h5>Lieu De Naissance: </h5></label>
                        <div class="col-sm-2">{{ $contact->place_of_birth }}</div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Employeur: </h5></label>
                        <div class="col-sm-2">{{$contact->employer}}</div>
                        <label class="col-sm-4"><h5>Prénom De Pére: </h5></label>
                        <div class="col-sm-2">{{ $contact->father_name }}</div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-4"><h5>Nom De La Mére: </h5></label>
                        <div class="col-sm-2">{{$contact->mother_name}}</div>
                        <label class="col-sm-4"><h5>Salaire Net: </h5></label>
                        <div class="col-sm-2">{{$contact->salary_net}} DA</div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-4"><h5>Num Secu Sociale: </h5></label>
                        <div class="col-sm-2">{{$contact->social_security_number}} </div>
                        <label class="col-sm-4"><h5>Fonction: </h5></label>
                        <div class="col-sm-2">{{$contact->function}}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> Adresse: </h5></label>
                        <div class="col-sm-2">{{$contact->address }} </div>
                        <label class="col-sm-4"><h5> Adresse Email: </h5></label>
                        <div class="col-sm-2">{{$contact->email }}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> Commune: </h5></label>
                        <div class="col-sm-2">{{$contact->commune }} Jours</div>
                        <label class="col-sm-4"><h5> Site WEB: </h5></label>
                        <div class="col-sm-2">{{$contact->web_site }}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> Tel/Fax: </h5></label>
                        <div class="col-sm-2">{{$contact->phone_fax }} Jours</div>
                        <label class="col-sm-4"><h5> RIB /N CB: </h5></label>
                        <div class="col-sm-2">{{$contact->ribcb }}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> RIB2: </h5></label>
                        <div class="col-sm-2">{{$contact->rib2 }} Jours</div>
                        <label class="col-sm-4"><h5> Commercial Initial: </h5></label>
                        <div class="col-sm-2">{{$contact->commercial_initial }}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> Commercial: </h5></label>
                        <div class="col-sm-2">{{$contact->commercial }} Jours</div>
                        <label class="col-sm-4"><h5> Date Affectation: </h5></label>
                        <div class="col-sm-2">{{$contact->affectation_date }}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> Type PI: </h5></label>
                        <div class="col-sm-2">{{$contact->pi_type }} Jours</div>
                        <label class="col-sm-4"><h5> N De Piece: </h5></label>
                        <div class="col-sm-2">{{$contact->piece_number }}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> Délivré Le: </h5></label>
                        <div class="col-sm-2">{{$contact->delivery }} Jours</div>
                        <label class="col-sm-4"><h5> Par(Daira): </h5></label>
                        <div class="col-sm-2">{{$contact->from }}</div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-4"><h5> N Acte DSe Naissance: </h5></label>
                        <div class="col-sm-2">{{$contact->birth_certificat_number }} Jours</div>

                      </div>


                  </div>
                  </div>
                </div>
          </div>
        </section>
      </div>
@include('layouts.footer')
