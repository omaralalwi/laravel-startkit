{{-- for multilingual implementation, it is best paractice for SEO --}}
{{-- also it is best paractice for dynamic adding for locals  without needing to add them manually  --}}

    <li class="c-header-nav-item dropdown d-md-down-none mx-2">
            <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="c-icon cil-language"></i>&nbsp;
                @lang('oa_locales.names.'.app()->getLocale())
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0 text-center">
                <div class="dropdown-header bg-light text-center">
                    <strong > @lang('oa_locales.titles.chang_lang') </strong>
                </div>
		@foreach (config('app.locales') as $localeKey => $locale)
		    @if ($localeKey != app()->getLocale())
                <a class="dropdown-item text-center" href="{{ route('backend.language.switch', $localeKey) }}">
                    {{ $locale }}
                </a>
			@endif
        @endforeach

            </div>
    </li>