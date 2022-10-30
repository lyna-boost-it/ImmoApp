@include('layouts.header')
@include('layouts.navbar')

<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Gestion des Projets</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">CRM</a></div>
                <div class="breadcrumb-item"><a href="#">Gestion des Typologies</a></div>
                <div class="breadcrumb-item">Ajouter une typology</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Ajouter une Typology</h2>
            <div class="card">
                <form action="{{ route('Project.typology.store', $type->id) }}" method="post" class="needs-validation"
                    novalidate="">
                    @csrf

                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Type de lot<span class="ob">*</span></label>
                                <input type="text" name="type" value="{{ $type->type }}" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Nature de lot <span class="ob">*</span></label>
                                <input type="text" name="nature" value="{{ $type->nature }}" class="form-control"
                                    required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Consistance <span class="ob">*</span></label>
                                <input type="text" name="consistance" value="{{ $type->consistance }}"
                                    class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description <span class="ob">*</span></label>
                                <input type="text" name="description" value="{{ $type->description }}"
                                    class="form-control" required="">
                                <div class="invalid-feedback">
                                    ce champ est obligatoire!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Taux TVA<span class="ob">*</span></label>
                                <input type="number" name="tva" value="{{ $type->tva }}" class="form-control"
                                    required="">
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
