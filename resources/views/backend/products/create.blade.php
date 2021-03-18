@extends('backend.layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/products.singular')
        </h1>
    </section>
    <div class="content">
	
	{{-- @include('includes.form-errors') --}}
		
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'admin.products.store']) !!}

                        @include('backend.products.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
