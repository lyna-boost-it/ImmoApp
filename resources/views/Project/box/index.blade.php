@include('layouts.header')
@include('layouts.navbar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Gestion des Boxs/Dépôts</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ URL('/home') }}">CRM</a></div>
                <div class="breadcrumb-item"><a href="{{ URL('/Project/box') }}">Gestion des Boxs/Dépôts</a></div>
                <div class="breadcrumb-item">liste des boxs/dépôts</div>
            </div>
          </div>

          <div class="section-body">
			 <h2 class="section-title">BOXS/DEPOTS</h2>
			 <a href="{{ URL('/Project/box/create') }}" type="button" class="btn btn-primary section-lead">Ajouter</a>
                        <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                <th>N° EDD</th>
                <th>TYPE</th>
                <th>DESCRIPTION</th>
                <th>PRIX M²</th>
                <th>SUPERFICIE</th>
                <th>MONTANT</th>
				        <th>ACTION</th>
                          </tr>
                        </thead>
                        <tbody>

                             @foreach ($boxs as $box)
                            <tr>
                                <td>{{$box->edd_id}}</td>
                                <td> @if ($box->type == 1) Box
                                     @else Depot @endif
                                </td>
                                <td>{{$box->description}}</td>
                                <td>{{$box->price_m2}} DA</td>
                                <td>{{$box->area}} m²</td>
                                <td>{{$box->amount}} DA</td>
                                <td>
                      <div class="dropdown d-inline">
                      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        option
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item has-icon" href="{{ route('Project.box.show', $box->id) }}"><i class="far fa-eye"></i> Consulter</a>
                        <a class="dropdown-item has-icon text-warning" href="{{route('Project.box.edit',$box->id)}}"><i class="far fa-edit"></i> Modifier</a>
                        <form  action="{{ route('Project.box.destroy', $box->id) }}"  method="post" >  {{csrf_field()}} {{method_field('DELETE')}}
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
