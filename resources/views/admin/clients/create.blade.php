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
                                    <h4 class="mt-0 header-title">Nový klient</h4>
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

                            <form action="{{ route('clients.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @include('admin.clients._partials._form')

                                @include('admin._partials._buttons')
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection