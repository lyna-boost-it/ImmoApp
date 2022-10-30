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
              <div class="breadcrumb-item">liste des edd</div>
            </div>
          </div>

          <div class="section-body">
			 <h2 class="section-title">EDD</h2>
			 <a href="{{ URL('/Project/edd/create') }}" class="btn btn-primary section-lead">Ajouter</a>
                        <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
              <th>ID</th> <th>PROJET</th>
              <th>TYPE DE LOT</th>
                <th>ÉTAGE</th>
                <th>BLOC</th>

				        <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                             @foreach ($edds as $edd)
                            <tr>
                                <td>{{$edd->id}}</td>   <td>{{$edd->project_id}}</td>
                                <td>{{$edd->type_id }}</td>
                                <td>{{$edd->floor}}</td>
                                <td>{{$edd->bloc_id }}</td>
                                <td>
                      <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        option
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{ URL('edd/show/'.$edd->id)  }}"><i class="far fa-eye"></i> Consulter</a>
                        <a class="dropdown-item has-icon text-warning" href="{{route('Project.edd.edit',$edd->id)}}"><i class="far fa-edit"></i> Modifier</a>
                        <form  action="{{ route('Project.edd.destroy', $edd->id) }}"  method="post" >  {{csrf_field()}} {{method_field('DELETE')}}
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
