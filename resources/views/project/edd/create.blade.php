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
                <div class="breadcrumb-item">Ajouter une edd</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Ajouter une edd</h2>
            <div class="card">
                <form action="{{ route('Project.edd.store', $edd->id) }}" method="post" class="needs-validation"
                    novalidate="">
                    @csrf

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Projet<span class="ob">*</span></label>
                                <select name="project_id" class="form-control" required="">
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach


                                </select>
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Type de lot<span class="ob">*</span></label>
                                <select name="type_id" class="form-control" required="">
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->nature }}, {{ $type->type }}
                                        </option>
                                    @endforeach


                                </select>
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <label>Consistance <span class="ob">*</span></label>
                                <input type="number" name="consistance" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Bloc <span class="ob">*</span></label>
                                <select name="bloc_id" class="form-control" required="">
                                    @foreach ($blocs as $bloc)
                                        <option value="{{ $bloc->id }}">{{ $bloc->bloc }}
                                        </option>
                                    @endforeach


                                </select>
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Étage <span class="ob">*</span></label>
                                <input type="text"   name="floor" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Superficie Habitable<span class="ob">*</span></label>
                                <input type="number" step="0.01" name="living_area" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Superficie jardin/loggia <span class="ob">*</span></label>
                                <input  type="number" step="0.01" name="garden_area" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Superficie terrasset<span class="ob">*</span></label>
                                <input  type="number" step="0.01" name="terrace_area" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Superficie globale<span class="ob">*</span></label>
                                <input  type="number" step="0.01" name="global_area" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Taux avc <span class="ob">*</span></label>
                                <input type="number" step="0.01" name="avc" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Plan<span class="ob">*</span></label>
                                <input type="file" name="path" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>N lot syst<span class="ob">*</span></label>
                                <input type="number" step="0.01" name="n_lot_syst" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>




                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>N lot edd <span class="ob">*</span></label>
                                <input type="number" step="0.01" name="n_lot_edd" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Orientation<span class="ob">*</span></label>
                                <input type="date" name="orientation" class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Lots sans plans<span class="ob"> </span></label>
                                <input type="checkbox" name="plan_existence" class="form-control"  >
                                <div class="invalid-feedback">

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
