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
              <div class="breadcrumb-item">liste des prospects</div>
            </div>
          </div>

          <div class="section-body">
			 <h2 class="section-title">Prospects</h2>
			 <a href="{{ URL('/Contact/prospect/create') }}" type="button" class="btn btn-primary section-lead">Ajouter</a>
                        <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>

                <th>NOM</th>
                <th>PRÉNOM</th>
                <th>NUMÉRO DE TÉLÉPHONE</th>

				        <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                             @foreach ($contacts as $client)
                            <tr>
                                <td>{{$client->name}}</td>
                                <td>{{$client->first_name}}</td>
                                <td>{{$client->phone_fax}} </td>
                                <td>
                      <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        option
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{ route('Contact.prospect.show', $client->id) }}"><i class="far fa-eye"></i> Consulter</a>
                        <a class="dropdown-item has-icon text-warning" href="{{route('Contact.prospect.edit',$client->id)}}"><i class="far fa-edit"></i> Modifier</a>
                        <form  action="{{ route('Contact.prospect.destroy', $client->id) }}"  method="post" >  {{csrf_field()}} {{method_field('DELETE')}}
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
