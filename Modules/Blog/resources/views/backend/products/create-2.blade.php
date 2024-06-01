@extends('backend.layouts.app')

@section('content')

<div id="multilanguage-form-panel" > <!-- start main div -->

	<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class=""></i> {{ __('labels.backend.roles.index.title') }}
                    <small class="text-muted">{{ __('labels.backend.roles.show.action') }} </small>
                </h4>
                <div class="small text-muted">
                    {{ __('labels.backend.roles.index.sub-title') }}
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <x-buttons.return-back />
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">

			@include('backend.sections.language-navigator') 

                {{ html()->form('POST', route('products.store'))->class('form-horizontal')->id('multilanguage-form')->open() }}
                    {{ csrf_field() }}

					{{-- show form fields dynamically according to selected local in the tabs on top --}}

						@include('backend.sections.multilanguage-form')

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <x-buttons.create title="{{__('Create')}} {{ ucwords(Str::singular('Product')) }}">
                                    {{__('Create')}}
                                </x-buttons.create>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="float-right">
                                <div class="form-group">
                                    <x-buttons.cancel />
                                </div>
                            </div>
                        </div>
                    </div>
                {{ html()->form()->close() }}
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">

                </small>
            </div>
        </div>
    </div>
</div>

</div> <!-- close main div -->

@endsection
