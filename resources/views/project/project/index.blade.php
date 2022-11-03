@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Projets</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="{{ URL('/home') }}">CRM</a></div>
              <div class="breadcrumb-item"><a href="{{ URL('/Project/project') }}">Gestion des Projets</a></div>
              <div class="breadcrumb-item">Liste des projets</div>
            </div>
          </div>

          <div class="section-body">
			 <h2 class="section-title">PROJETS</h2>
			 <a href="{{ URL('/Project/project/create') }}" class="btn btn-primary section-lead">Ajouter</a>
                        <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                <th>NOM</th>
                <th>CODE</th>
                <th>TYPE</th>
                <th>ADRESSE</th>
				        <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                             @foreach ($projects as $project)
                            <tr>
                                <td>{{$project->name}}</td>
                                <td>{{$project->code}}</td>
                                <td> @if ($project->type == 1) LPA @endif
                                    @if ($project->type == 2) LPP @endif
                                    @if ($project->type == 3) PROMOTIONNEL LIBRE @endif
                                </td>
                                <td>{{$project->address}}</td>
                                <td>
                      <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        option
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{ route('bloc', $project->id) }}"><i class="far fa-list-alt"></i> Blocs</a>
                        <a class="dropdown-item has-icon text-primary" href="{{ route('Project.project.show', $project->id) }}"><i class="far fa-eye"></i> Consulter</a>
                        <a class="dropdown-item has-icon text-warning" href="{{route('Project.project.edit',$project->id)}}"><i class="far fa-edit"></i> Modifier</a>
                        <form  action="{{ route('Project.project.destroy', $project->id) }}"  method="post" >  {{csrf_field()}} {{method_field('DELETE')}}
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
