{{-- for multilingual implementation, this is for navigator in view files , it is dynamically according to config(app.locals) --}}    
{{-- best way to make this job dynamically according to config(app.locals)
* this is work with: js\blue-oocean.js 'languages navigator' function 
--}}

@php
$current_local = app()->getLocale();
@endphp

<div class="tab-content" id="myTabContent">

@foreach (config('app.locales') as $localeKey => $locale)
        
			{{-- my custom Data Attribute is data-localpref I will us it in another script --}}
		<div  id="{{$localeKey}}-form" data-localpref="{{$localeKey}}" role="tabpanel" aria-labelledby="{{$localeKey}}-tab"
		class="tab-pane fade card-body multilanguage-form-item {{ $localeKey == app()->getLocale() ? 'show active' : '' }}">
			
			<div class="form-group row">
                {{ html()->label(__('models/products.fields.title').' - '.$localeKey)->class('col-md-2 form-control-label')->for($localeKey.'_title') }}

                <div class="col-md-10">
                    {{ html()->text($localeKey.'_title')
                        ->class('form-control')
                        ->placeholder(__('labels.backend.roles.fields.name'))
                        ->attribute('maxlength', 191)
                        ->required() }}
                </div>
            </div><!--form-group-->
			
			<div class="form-group row">
                {{ html()->label(__('models/products.fields.description').' - '.($localeKey))->class('col-md-2 form-control-label')->for($localeKey.'_description') }}

                <div class="col-md-10">
                    {{ html()->textArea($localeKey.'_description')
                        ->class('form-control')
                        ->placeholder(__('labels.backend.roles.fields.description'))
                        ->attribute('maxlength', 191)
                        }}
                </div>
            </div><!--form-group-->
			
		</div>

@endforeach

</div>	