@extends('back-end.layouts.app')
@section('backContent')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="page-title-box">
                <h4 class="page-title"> List des Projects</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row mb-2">
        <div class="col-sm-4">
            <a href="{{ route('admin.projet.create') }}" class="btn btn-danger rounded-pill waves-effect waves-light mb-3"><i class="mdi mdi-plus"></i> Ajouter Project</a>
        </div>
        <!-- end col-->
    </div>
    <!-- end row-->


    <div class="row">
        @foreach ($projets as $projet)
        <div class="col-lg-4">
            <div class="card project-box">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle card-drop arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-horizontal m-0 text-muted h3"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="{{ route('admin.projet.show', [($id = $projet->id)]) }}">
                                <button type="button" class="btn btn-info rounded-pill waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-eye-circle-outline"></i></span>Voir
                                </button>

                            </a>
                            <!-- <a href="{{ route('admin.projet.show', [($id = $projet->id)]) }}">
                                <button type="button" class="btn btn-info rounded-pill waves-effect waves-light">
                                    <span class="btn-label"><i class="mdi mdi-eye-circle-outline"></i></span>Modifier
                                </button>

                            </a> -->
                            <button type="button" class="btn btn-danger rounded-pill waves-effect waves-light" data-toggle="modal" data-target="#modalConfirmDeletes">
                                <span class="btn-label"><i class="mdi mdi-close-circle-outline"></i></span>Supprimer
                            </button>

                            <a class="dropdown-item" href="#">Add Members</a>
                            {{-- <a class="dropdown-item" href="#">Add Due Date</a> --}}
                        </div>
                    </div> <!-- end dropdown -->
                    <!-- Title-->
                    <h4 class="mt-0"><a href="project-detail.html" class="text-dark">{{ $projet->titre }}</a></h4>
                    <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>{{ $projet->entreprise->nom_entreprise}}</small></p>
                    <div class="badge bg-soft-success text-success mb-3">{{ $projet->status }}</div>
                    <!-- Desc-->
                    <p class="text-muted font-13 mb-3 sp-line-2">
                        {{ $projet->description }}
                        <a href="javascript:void(0);" class="fw-bold text-muted">view more</a>
                    </p>
                    <!-- Task info-->
                    <p class="mb-1">
                        <span class="pe-2 text-nowrap mb-2 d-inline-block">
                            {{-- <i class="mdi mdi-format-calender-bulleted-type text-muted"></i> --}}
                            <b>{{ $projet->debut }}</b> Début
                        </span>
                        <span class="text-nowrap mb-2 d-inline-block">
                            {{-- <i class="mdi mdi-comment-multiple-outline text-muted"></i> --}}
                            <b>{{ $projet->fin }}</b> Fin
                        </span>
                    </p>
                    <!-- Team-->
                    <div class="avatar-group mb-3" id="tooltips-container">
                        <a href="javascript: void(0);" class="avatar-group-item">
                            <img src="{{ asset('back-end/assets/images/users/user-1.jpg') }}" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mat Helme" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item">
                            <img src="{{ asset('back-end/assets/images/users/user-2.jpg') }}" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Michael Zenaty" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item">
                            <img src="{{ asset('back-end/assets/images/users/user-3.jpg') }}" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="James Anderson" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item">
                            <img src="{{ asset('back-end/assets/images/users/user-4.jpg') }}" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mat Helme" />
                        </a>

                        <a href="javascript: void(0);" class="avatar-group-item">
                            <img src="{{ asset('back-end/assets/images/users/user-5.jpg') }}" class="rounded-circle avatar-sm" alt="friend" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Username" />
                        </a>
                    </div>
                    <!-- Progress-->
                    <p class="mb-2 fw-semibold">Task completed: <span class="float-end">28/78</span></p>
                    <div class="progress mb-1" style="height: 7px;">
                        <div class="progress-bar"
                             role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"
                             style="width: 34%;">
                        </div><!-- /.progress-bar .progress-bar-danger -->
                    </div><!-- /.progress .no-rounded -->
                </div>
            </div> <!-- end card box-->
        </div>
        @endforeach


    </div>
    <!-- end row -->


    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="text-center mb-3">
                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading me-1"></i> Load more </a>
            </div>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

</div> <!-- container -->

</div>
<!-- content -->
<!-- Modal d'ajout -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajout Projet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.projet.addProjet') }}">

                    @csrf

                    <label for="exampleFormControlSelect1">Entreprise</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="entreprise_id" required>
                        <option>choisir</option>
                        @foreach ($entreprises as $entreprise)
                        <option value="{{ $entreprise->id }}">{{ $entreprise->nom_entreprise }}</option>
                        @endforeach

                    </select>
                    <div class="form-group  ">

                        <label for="debut">Type prestation </label>
                        <input type="text" class="form-control" id="debut" placeholder="Type prestation" name="type_prestation">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputPassword1">Titre</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="titre" placeholder="titre">
                    </div>



                    <div class="form-group">
                        <label for="exampleInputPassword1">Debut</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" required name="debut" placeholder="Debut">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Lieu</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="lieu" placeholder="Lieu">
                    </div>


                    <label for="exampleFormControlSelect1">Categorie</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="categorie_id" required>
                        <option>choisir</option>
                        @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                        @endforeach

                    </select>

                    <label for="exampleInputPassword1">Description</label>
                    <div class="form-group">
                        <input type="text" id="" name="id" value="0" hidden>
                        <textarea name="description" id="" cols="50" rows="10"></textarea>
                    </div>




                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>

</div>


<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDeletes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Vous êtes sûr de supprimer cet projet ?</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fas fa-times fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <form method="GET" id="deleteForm" action="">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-outline-danger">Oui</button>
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Non</button>
                </form>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalConfirmDelete-->
{{-- <script>
    function deleteData(id) {
        var id = id;
        var url = '{{ route('
        admin.projet.delete ', ': id ') }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }

</script> --}}
@endsection
