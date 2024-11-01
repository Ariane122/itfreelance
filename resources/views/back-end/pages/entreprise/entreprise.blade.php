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

                <h4 class="page-title">Entreprise</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between">

                        <div class="col-md-4">
                            <div class="text-md-end mt-3 mt-md-0">
                                {{-- <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button> --}}
                                {{-- <button type="button" class="btn btn-danger waves-effect waves-light me-1"> Ajouter une entreprice</button> --}}
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">
                                    <i class="mdi mdi-plus-circle me-1"></i> Ajouter une entreprice
                                </button>
                            </div>
                        </div><!-- end col-->
                    </div> <!-- end row -->
                </div>
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row -->

    <div class="row">
        @foreach ($entreprises as $entreprise)
        <div class="col-lg-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('back/assets/images/companies/amazon.png') }}" alt="logo" class="avatar-xl rounded-circle mb-3">
                        <h4 class="mb-1 font-20">{{ $entreprise->nom_entreprise }}</h4>
                        <p class="text-muted  font-14">{{ $entreprise->user->nom }}</p>
                    </div>

                    <p class="font-14 text-center text-muted">
                        {{-- Amazon.com, Inc., doing business as Amazon, is an American electronic commerce and cloud computing company based in Seattle.. --}}
                    </p>

                    <div class="text-center">
                        {{-- <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a> --}}
                    </div>

                    <div class="row mt-4 text-center">
                        <div class="col-6">
                            <h5 class="fw-normal text-muted">Revenue (USD)</h5>
                            <h4>17,786 cr</h4>
                        </div>
                        <div class="col-6">
                            <h5 class="fw-normal text-muted">Number of employees</h5>
                            <h4>566k</h4>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div>
        @endforeach

        <!-- end col -->
    </div>
    <!-- end row -->
</div>



<!-- Modal d'ajout -->

<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body">
                <div class="text-center mt-2 mb-4">
                    <div class="auth-logo">
                        <p>Ajouter une entreprise</p>
                    </div>
                </div>

                <form class="px-3" method="POST" action="{{ route('admin.entreprise.addEntreprise') }}">

                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Nom entreprise</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="nom_entreprise" placeholder="Nom entreprise">
                    </div>

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="emailaddress" required="" name="email" placeholder="john@deo.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Secteur</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="fonction" placeholder="Fonction">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Lieu</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="lieu" placeholder="Lieu">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="civilite" placeholder="Civilite">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="telephone" placeholder="Telephone">
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>

<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmDeletes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Vous êtes sûr de supprimer cet entreprise ?</p>
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
        admin.entreprise.delete ', ': id ') }}';
url = url.replace(':id', id);
$("#deleteForm").attr('action', url);
}

function formSubmit() {
$("#deleteForm").submit();
}

</script> --}}
@endsection
