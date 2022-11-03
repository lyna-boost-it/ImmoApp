@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Utilisateurs</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">CRM</a></div>
              <div class="breadcrumb-item"><a href="#">Gestion des Utilisateurs</a></div>
              <div class="breadcrumb-item">liste des utilisateurs</div>
            </div>
          </div>

          <div class="section-body">
			 <h2 class="section-title">Utilisateurs</h2>
			 <a href="{{ URL('/user/create') }}" type="button" class="btn btn-primary section-lead">Ajouter</a>
                        <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                <th>NOM UTULISATEUR</th>
                <th>EMAIL</th>
                <th>ROLE</th>
                <th>DATE DE CREATION</th>
				        <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                             @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}} </td>
                                <td>{{Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}} </td>
                                <td>
                      <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        option
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{ route('user.show', $user->id) }}"><i class="far fa-eye"></i> Consulter</a>
                        <a class="dropdown-item has-icon text-warning" href="{{route('user.edit',$user->id)}}"><i class="far fa-edit"></i> Modifier</a>
                        <form  action="{{ route('user.destroy', $user->id) }}"  method="post" >  {{csrf_field()}} {{method_field('DELETE')}}
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
