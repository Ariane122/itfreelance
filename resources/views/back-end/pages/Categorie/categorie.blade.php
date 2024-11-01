@extends('back-end.layouts.app')
@section('backContent')

<!-- NEW -->
<div class="row">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title">Liste des Categories</h4>
                <p class="text-muted font-13 mb-4">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Ajouter Catégorie</button>
                </p>

                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th style="text-align: center">id</th>
                            <th style="text-align: center">Libelle</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($categories as $categorie)
                        <tr>
                            <td style="text-align: center">{{ $categorie->id }}</td>
                            <td style="text-align: center">{{ $categorie->libelle }}</td>
                            <td style="text-align: center">

                                <button type="button" onclick="deleteData({{ $categorie->id }})" class="btn btn-danger rounded-pill waves-effect waves-light" data-toggle="modal" data-target="#modalConfirmDeletes">
                                    <span class="btn-label"><i class="mdi mdi-close-circle-outline"></i></span>Supprimer
                                </button>



                                <a href="{{ route('admin.categorie.show', [($id = $categorie->id)]) }}">
                                    <button type="button" class="btn btn-info rounded-pill waves-effect waves-light">
                                        <span class="btn-label"><i class="mdi mdi-eye-circle-outline"></i></span>Modifier
                                    </button>

                                </a>

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>



<!-- Modal d'ajout -->

<div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <div class="auth-logo">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-lg">
                                Ajouter une Catégorie
                            </span>
                        </a>
                    </div>
                </div>

                <form method="POST" action="{{ route('admin.categorie.create') }}" enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="emailaddress1" class="form-label">Libelle</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="libelle" placeholder="Nom ">
                    </div>

                    <div class="mb-3">
                        <label for="exampleTextarea" class="form-label">Description</label>

                        <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
                    </div>

                    <div class="mb-2 text-center">
                        <button class="btn rounded-pill btn-primary" type="submit">Ajouter</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- End  -->


<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDeletes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Vous êtes sûr de supprimer cette categorie ?</p>
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
        admin.categorie.delete ', ': id ') }}';
        url = url.replace(':id', id);
        $("#deleteForm").attr('action', url);
    }

    function formSubmit() {
        $("#deleteForm").submit();
    }

</script> --}}
@endsection
