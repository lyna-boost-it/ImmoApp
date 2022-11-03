@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Projets</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">CRM</a></div>
              <div class="breadcrumb-item"><a href="#">Gestion des Blocs</a></div>
              <div class="breadcrumb-item">liste des projets</div>
            </div>
          </div>

          <div class="section-body">
			 <h2 class="section-title">Blocs</h2>
			 <a href="{{ route('newbloc', $project_id) }}" class="btn btn-primary section-lead">Ajouter</a>
                        <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                <th>PROJET</th>
                <th>BLOC</th>
                <th>NBR DES ETAGES</th>
                <th>NBR DES LOTS</th>
                <th>TAUX D'AVANCEMENT DES TRAVAUX</th>
                <th>DATE D'AVANCEMENT DES TRAVAUX</th>
				        <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                             @foreach ($blocs as $bloc)
                            <tr>
                                <td>
                                 @foreach ( $projects as $project)
                                 @if ($project->id  == $bloc->project_id)
                                   {{ $project->name }} - {{ $project->code }}
                                 @endif
                                 @endforeach
                                </td>
                                <td>{{$bloc->bloc}}</td>
                                <td>{{$bloc->floor_number}}</td>
                                <td>{{$bloc->lot_number}}</td>
                                <td>{{$bloc->progress_rate}} %</td>
                                <td>{{Carbon\Carbon::parse($bloc->progress_date)->format('d/m/Y')}}</td>
                                <td>
                      <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        option
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{ route('Project.bloc.show', $bloc->id) }}"><i class="far fa-eye"></i> Consulter</a>
                        <a class="dropdown-item has-icon text-warning" href="{{route('Project.bloc.edit',$bloc->id)}}"><i class="far fa-edit"></i> Modifier</a>
                        <form  action="{{ route('Project.bloc.destroy', $bloc->id) }}"  method="post" >  {{csrf_field()}} {{method_field('DELETE')}}
                          <button class="dropdown-item has-icon text-danger" type="submit"  onclick="return confirm('êtes-vous sûr?')" style="cursor: pointer"><i class="far fa-trash-alt"></i> <small>Supprimer</small></button>
													</form>
                      </div>
                    </div></td>
                            </tr>
            @endforeach
                        </tbody>
                      </table>
                    </div>
          </div>
        </section>
      </div>



      @include('layouts.footer')
