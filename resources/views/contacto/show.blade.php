@extends('layouts.app')

@section('template_title')
    {{ $contacto->name ?? 'Show Contacto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contacto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $contacto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contacto->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $contacto->phone }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa Id:</strong>
                            {{ $contacto->empresa_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
