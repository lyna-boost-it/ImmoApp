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
                <div class="breadcrumb-item">Modifier une edd</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Modifier une edd </h2>
            <div class="card">
                <form action="{{ route('Project.edd.update', $edd->id) }}" method="post" class="needs-validation"
                    novalidate="">
                    @csrf {{ method_field('PUT') }}

                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Type de Projet <span class="ob">*</span></label>
                                <select name="type" class="form-control" required="">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Consistance <span class="ob">*</span></label>
                                <input value="{{ $edd->consistance}}" type="number" name="consistance"class="form-control"
                                     required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Étage <span class="ob">*</span></label>
                                <input value="{{ $edd->floor }}" type="text" name="floor"  class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Superficie Habitable<span class="ob">*</span></label>
                                <input value="{{ $edd->living_area }}" type="number" step="0.01" name="living_area"
                                    class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Superficie jardin/loggia <span class="ob">*</span></label>
                                <input value="{{ $edd->garden_area }}" type="number" step="0.01"name="garden_area"
                                    class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Superficie terrasset<span class="ob">*</span></label>
                                <input  value="{{ $edd->terrace_area }}" type="number" step="0.01"name="terrace_area"
                                   class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Superficie globale<span class="ob">*</span></label>
                                <input value="{{ $edd->global_area }}" type="number" step="0.01"name="global_area"
                                    class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Taux avc <span class="ob">*</span></label>
                                <input value="{{ $edd->avc }}" type="number" step="0.01"name="avc"
                                    class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Plan<span class="ob">*</span></label>
                                <input value="{{ $edd->path }}" type="file" name="path" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>N lot syst<span class="ob">*</span></label>
                                <input  value="{{ $edd->n_lot_syst }}" type="number" step="0.01" name="n_lot_syst"
                                   class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>N lot edd <span class="ob">*</span></label>
                                <input value="{{ $edd->n_lot_edd }}" type="number" step="0.01"
                                    name="n_lot_edd" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Orientation<span class="ob">*</span></label>
                                <input value="{{ $edd->orientation }}" type="date" name="orientation" class="form-control"
                                    required="">

                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Lots sans plans x{{ $edd->plan_existence }}x<span class="ob"> </span></label>
                                <input type="checkbox" name="plan_existence" class="form-control"
                                @if($edd->plan_existence=='on')
                                checked
                                @endif >
                                <div class="invalid-feedback">
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
