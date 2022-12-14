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
              <div class="breadcrumb-item">liste des typologies</div>
            </div>
          </div>

          <div class="section-body">
			 <h2 class="section-title">Typologies</h2>
			 <a href="{{ URL('/Project/typology/create') }}" class="btn btn-primary section-lead">Ajouter</a>
                        <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
              <th>TYPE DE LOT</th>
                <th>NATURE DE LOT</th>
                <th>CONSISTANCE</th>
                <th>DESCRIPTION</th><th>TAUX TVA</th>
				        <th>TVA</th>
                           <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                             @foreach ($types as $type)
                            <tr>
                                <td>{{$type->id }}</td>
                                <td>{{$type->type}}</td>
                                <td>{{$type->nature}}</td>
                                <td>{{$type->consistance}}</td>
                                <td>{{$type->description}}</td>
                                <td>{{$type->tva}}</td>
                                <td>
                      <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        option
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon text-warning" href="{{route('Project.typology.edit',$type->id)}}"><i class="far fa-edit"></i> Modifier</a>
                        <form  action="{{ route('Project.typology.destroy', $type->id) }}"  method="post" >  {{csrf_field()}} {{method_field('DELETE')}}
                          <button class="dropdown-item has-icon text-danger" type="submit"  onclick="return confirm('??tes-vous s??r?')" style="cursor: pointer"><i class="far fa-trash-alt"></i> <small>Supprimer</small></button>
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
