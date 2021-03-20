{{-- also it is best paractice for dynamic adding for locals  without needing to add them manually  --}}

    <li class="c-header-nav-item dropdown d-md-down-none mx-2">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="c-icon cil-language"></i>&nbsp;
                 {{ LaravelLocalization::getCurrentLocale() }}
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0 text-center">
                <div class="dropdown-header bg-light text-center">
                    <strong > @lang('oa_locales.titles.chang_lang') </strong>
                </div>
		
		    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		  		@if ($localeCode != LaravelLocalization::getCurrentLocale())
					 <a  class="dropdown-item text-center" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
						{{ $properties['native'] }}
					</a>
				@endif
            @endforeach

            </div>
    </li>