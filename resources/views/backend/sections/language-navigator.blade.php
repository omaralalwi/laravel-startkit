{{-- for multilingual implementation, this is for navigator in view files , it is dynamically according to config(app.locals) --}}    
			
{{-- best way to make this job dynamically according to config(app.locals)
* this is work with: js\blue-oocean.js 'languages navigator' function 
--}}

<ul class="nav nav-tabs mb-3 local-navigator pt-0 text-center"  id="local-navigator" role="tablist">
    @foreach (config('app.locales') as $localeKey => $locale)
			<li class="nav-item">
			{{-- my custom Data Attribute is data-localpref I will us it in another script --}}
				<a class="nav-link local-navigator-item text-center {{ $localeKey == app()->getLocale() ? 'active' : '' }}" 
				id="{{$localeKey}}-tab" data-toggle="tab" data-localpref="{{$localeKey}}" href="#{{$localeKey}}-form" role="tab"
				aria-controls="{$localeKey}}-form" aria-selected="true">
					{{ $locale }}
				</a>
		    </li>			
    @endforeach
</ul>