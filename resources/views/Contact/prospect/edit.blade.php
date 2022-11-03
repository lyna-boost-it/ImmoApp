@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Prospect</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">CRM</a></div>
              <div class="breadcrumb-item"><a href="#">Gestion des Prospect</a></div>
              <div class="breadcrumb-item">liste des prospect</div>
            </div>
          </div>

          <div class="section-body">
             <h2 class="section-title">Modifier un Prospect</h2>
                  <div class="card">
                  <form  action="{{ route('Contact.prospect.update', $contact->id) }}" method="post" class="needs-validation" novalidate="">
                    @csrf
                    {{method_field('PUT')}}

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Civilité <span class="ob">*</span></label>
                                <input value="{{ $contact->civility }}"  type="text" name="civility"class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Provenance DG <span class="ob">*</span></label>
                                <input value="{{ $contact->provenance_dg }}"  type="text" name="provenance_dg" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>M <span class="ob">*</span></label>
                                <input value="{{ $contact->m }}"  type="text" name="m" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nom <span class="ob">*</span></label>
                                <input value="{{ $contact->name }}"  type="text" name="name" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Prénom <span class="ob">*</span></label>
                                <input value="{{ $contact->first_name }}"  type="text" name="first_name" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nom Jeune Fille <span class="ob">*</span></label>
                                <input value="{{ $contact->miss_name }}"  type="text" name="miss_name" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Date De Naissance<span class="ob">*</span></label>
                                <input value="{{ $contact->date_of_birth }}"  type="date" name="date_of_birth" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Lieu De Naissance<span class="ob">*</span></label>
                                <input value="{{ $contact->place_of_birth }}"  type="text"   name="place_of_birth" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Employeur<span class="ob">*</span></label>
                                <input value="{{ $contact->employer }}"  type="text"   name="employer" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Prénom De Pére<span class="ob">*</span></label>
                                <input value="{{ $contact->father_name }}"  type="text"   name="father_name" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Nom De La Mére<span class="ob">*</span></label>
                                <input value="{{ $contact->mother_name }}"   type="text" name="mother_name" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Salaire Net<span class="ob">*</span></label>
                                <input value="{{ $contact->salary_net }}"  type="number" step="0.01" name="salary_net" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Num Secu Sociale<span class="ob">*</span></label>
                                <input value="{{ $contact->social_security_number }}"  type="number" name="social_security_number" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Fonction<span class="ob">*</span></label>
                                <input value="{{ $contact->function }}"  type="text" name="function" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Adresse <span class="ob">*</span></label>
                                <input value="{{ $contact->address }}"  type="text" name="address" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Adresse Email<span class="ob">*</span></label>
                                <input value="{{ $contact->email }}"  type="text" name="email" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label>Commune<span class="ob">*</span></label>
                                <input value="{{ $contact->commune }}"  type="text" name="commune" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Site WEB <span class="ob">*</span></label>
                                <input value="{{ $contact->web_site }}"  type="text" name="web_site" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Tel/Fax<span class="ob">*</span></label>
                                <input value="{{ $contact->phone_fax }}"  type="number" minlength="10" maxlength="10" name="phone_fax" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>RIB /N CB<span class="ob">*</span></label>
                                <input value="{{ $contact->rib2 }}"  type="text"  name="rib2" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>RIB2<span class="ob">*</span></label>
                                <input value="{{ $contact->rib2 }}"  type="text"  name="rib2" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Commercial Initial<span class="ob">*</span></label>
                                <input value="{{ $contact->commercial_initial }}"  type="text" name="commercial_initial" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Commercial<span class="ob">*</span></label>
                                <input value="{{ $contact->commercial }}"  type="text"  name="commercial" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Date Affectation<span class="ob">*</span></label>
                                <input value="{{ $contact->affectation_date }}"  type="date"  name="affectation_date" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Type PI<span class="ob">*</span></label>
                                <input value="{{ $contact->pi_type }}"  type="text"  name="pi_type" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>N De Piece<span class="ob">*</span></label>
                                <input value="{{ $contact->piece_number }}"  type="text"  name="piece_number" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                            <div class="form-group col-md-4">
                                <label>Délivré Le<span class="ob">*</span></label>
                                <input value="{{ $contact->delivery }}"  type="text"  name="delivery" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Par(Daira)<span class="ob">*</span></label>
                                <input value="{{ $contact->from }}"  type="text" name="from" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>N Acte DSe Naissance<span class="ob">*</span></label>
                                <input value="{{ $contact->birth_certificat_number }}"  type="number"  name="birth_certificat_number" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
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
