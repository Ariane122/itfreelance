@extends('back-end.layouts.app')
@section('backContent')

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
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item active">Prestataires</li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des prestataires</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#custom-modal">
                                <i class="mdi mdi-plus-circle me-1"></i> Ajouter Prestataire
                            </button>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end mt-2 mt-sm-0">
                                <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap table-striped" id="products-datatable">
                            <thead>
                                <tr>
                                    <th style="width: 20px;">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                            <label class="form-check-label" for="customCheck1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Prestataire</th>
                                    <th>Télephone</th>
                                    <th>Email</th>
                                    <th>Domaine</th>
                                    <th>Competence</th>
                                    <th>Status</th>
                                    <th style="width: 85px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                            <label class="form-check-label" for="customCheck2">&nbsp;</label>
                                        </div>
                                    </td> --}}
                                    @foreach ($prestataires as $prestataire)
                                    <td class="table-user">
                                        <img src="{{ asset('back/assets/images/users/user-4.jpg') }}" alt="table-user" class="me-2 rounded-circle">
                                        <a href="javascript:void(0);" class="text-body fw-semibold">Paul J. Friend</a>
                                    </td>
                                    <td>
                                       {{ $prestataire->user->name }} {{ $prestataire->user->prenom }}
                                    </td>
                                    <td>
                                        {{ $prestataire->user->telephone }}
                                    </td>
                                    <td>
                                        {{ $prestataire->user->email }}
                                    </td>
                                    <td>
                                        <STRONG style="color: #1e8449">{{ $prestataire->categorie->libelle }}</STRONG>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach ($prestataire->sousCategories as $compet)
                                                <li style="color: #ec7063"> <STRONG>{{ $compet->libelle }}</STRONG></li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <span class="badge bg-soft-success text-success">Active</span>
                                    </td>

                                    <td>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                    <ul class="pagination pagination-rounded justify-content-end mb-0">
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </li>
                    </ul>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div>


{{-- Ajout Modal --}}

<div id="custom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <div class="auth-logo">
                        <p>Ajouter un prestataire</p>
                    </div>
                </div>

                <form class="px-3" method="POST" action="{{ route('admin.prestataire.addPrestataire') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Nom</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="nom" placeholder="Nom">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1">Prenom</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="prenom" placeholder="Prenom ">
                    </div>

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email</label>
                        <input class="form-control" type="email" id="emailaddress" required="" name="email" placeholder="john@deo.com">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Domaine</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="categorie" required>
                            <option>choisir</option>
                            @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sousCategorie" class="form-label">Compétences</label>
                        <select class="form-control" id="sousCategorie" name="sousCategorie[]" multiple  required>
                            <option value="">choisir</option>
                        </select>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#exampleFormControlSelect1').on('change', function() { // Mettre à jour l'ID ici
                                var categorieId = $(this).val();
                                console.log("ID ::::::::::", categorieId);

                                if (categorieId) {
                                    $.ajax({
                                        url: '{{ route("admin.sous-categories", ":id") }}'.replace(':id', categorieId)
                                        , type: 'GET'
                                        , dataType: 'json'
                                        , success: function(data) {
                                            $('#sousCategorie').empty();
                                            $('#sousCategorie').append('<option value="">choisir</option>');
                                            $.each(data, function(key, value) {
                                                $('#sousCategorie').append('<option value="' + value.id + '">' + value.libelle + '</option>');
                                            });
                                        }
                                        , error: function(xhr, status, error) {
                                            console.error("Erreur AJAX:", status, error);
                                            console.error("Détails:", xhr.responseText);
                                        }
                                    });

                                } else {
                                    $('#sousCategorie').empty();
                                    $('#sousCategorie').append('<option value="">choisir</option>');
                                }
                            });
                        });

                    </script>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Niveau</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="niveau" placeholder="Civilite">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="telephone" placeholder="Telephone">
                    </div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">CV</h5>
                                <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews">
                                    <div class="fallback">
                                        <input name="files[]" type="file" multiple />
                                    </div>
                                    <div class="dz-message needsclick">
                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                        <h3>Déposez le CV ici ou cliquez pour télécharger.</h3>
                                    </div>
                                </div>
                                <div class="dropzone-previews mt-3" id="file-previews"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div>

{{-- End Modal --}}
<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDeletes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Vous êtes sûr de bloquer cet prestataire ?</p>
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
<!-- <script>
        function deleteData(id) {
            var id = id;
            var url = '{{ route('admin.prestataire.delete', ':id') }}';
            url = url.replace(':id', id);
            $("#deleteForm").attr('action', url);
        }

        function formSubmit() {
            $("#deleteForm").submit();
        }
    </script> -->


@endsection
