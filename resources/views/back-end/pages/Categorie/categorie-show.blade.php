@extends('back-end.layouts.app')
@section('backContent')
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
                        <h4 class="header-title" style="text-align: center">Catégorie <Strong>{{ $categorie->libelle }}</Strong> </h4>


                        <form role="form" class="parsley-examples" action="{{ route('admin.categorie.update', $id = $categorie->id) }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="libelle" class="col-4 col-form-label">Libelle<span class="text-danger">*</span></label>
                                <div class="col-7">
                                    <input type="text" name="libelle" required class="form-control" id="inputEmail3" value="{{ $categorie->libelle }}" />
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="hori-pass2" class="col-4 col-form-label">Description <span class="text-danger">*</span></label>
                                <div class="col-7">
                                    <textarea class="form-control" id="exampleTextarea" rows="5" name="description">{{ $categorie->description }}</textarea>
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





@endsection
