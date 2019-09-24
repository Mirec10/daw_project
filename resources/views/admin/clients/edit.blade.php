@extends('layout.admin')

@section('page-title')
    Klienti
@endsection

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Klienti</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-20">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h4 class="mt-0 header-title">Editovať klienta - {{ $client->name_sk }}</h4>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <p class="text-muted m-b-30 text-right">
                                        <a href="{{ route('clients.index') }}" class="btn btn-primary waves-effect waves-light">
                                            <i class="fa fa-list pr-2"></i>
                                            Zoznam klientov
                                        </a>
                                    </p>
                                </div>
                            </div>

                            @include('admin._partials._alert')

                            <form action="{{ route('clients.update', $client->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @include('admin.clients._partials._form')

                                @include('admin._partials._buttons')
                            </form>

                            <div class="dropdown-divider"></div>

                            <div class="row mt-3">
                                <div class="col-sm-12">
                                    <h4 class="mt-0 header-title">Obrázok</h4>

                                    @if($client->profile_image)
                                        <div class="">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <div class="image-wrapper mb-3">
                                                        <img src="{{ asset($client->profile_thumb) }}" class="img-responsive">
                                                        <div class="image-wrapper-back">
                                                            <div class="image-wrapper-back-actions">
                                                                <a href="{{ asset($client->profile_image) }}" class="show-icon image-popup-vertical-fit">
                                                                    <i class="fas fa-eye"></i>
                                                                </a>
                                                                <form action="{{ route('images.delete', $client->images->where('profile', 1)->first()->id) }}" method="post">
                                                                    @csrf
                                                                    <button data-entity="{{ 'Obrázok - ' . $client->images->where('profile', 1)->first()->image }}" class="delete-button delete-icon pointer" type="button">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection