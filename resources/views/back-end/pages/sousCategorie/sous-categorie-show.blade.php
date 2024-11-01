@extends('back-end.layouts.app')
@section('backContent')
<div class="container-fluid  dashboard-content">

    <div class="content-page">
        <div class="content">

            <div class="container-fluid">
                <div class="col-lg-6">
                    <div class="card">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <div class="card-body">
                            <h4 class="header-title" style="text-align: center">Modifié Sous categorie <Strong>{{ $sousCategorie->libelle }}</Strong> </h4>


                            <form action="{{ route('admin.sousCategorie.update', $id = $sousCategorie->id) }}" method="POST" style="margin-top: 5%">
                                @csrf

                                <div class="row mb-3">
                                    <label for="libelle" class="col-4 col-form-label">Catégorie<span class="text-danger">*</span></label>
                                    <div class="col-7">
                                        <select class="form-control" id="exampleFormControlSelect1" name="categorie" required>
                                            <option value="{{ $sousCategorie->categorie->id }}">{{ $sousCategorie->categorie->libelle }}
                                            </option>
                                            @foreach ($Categories as $Categorie)
                                            @if ($sousCategorie->categorie->id == $Categorie->id)
                                            <option value="{{ $Categorie->id }}" selected>{{ $Categorie->libelle }}</option>
                                            @else
                                            <option value="{{ $Categorie->id }}">{{ $Categorie->libelle }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>

                                </div>


                                <div class="row mb-3">
                                    <label for="libelle" class="col-4 col-form-label">Libelle<span class="text-danger">*</span></label>
                                    <div class="col-7">
                                        <input type="text" name="libelle" required class="form-control" id="inputEmail3" value="{{ $sousCategorie->libelle }}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-8 offset-4">
                                        <button type="submit" class="btn btn-success waves-effect waves-light">Editer</button>
                                        <button type="reset" class="btn btn-secondary waves-effect">Annuler</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end card -->

                </div>
            </div>


        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end basic form -->
<!-- ============================================================== -->
@endsection
