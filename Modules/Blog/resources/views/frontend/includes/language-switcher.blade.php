{{-- for multilingual implementation, it is best paractice for SEO --}}
{{-- also it is best paractice for dynamic adding for locals  without needing to add them manually  --}}

<li class="nav-item dropdown">

	<a href="#" class="nav-link dropdown-toggle" id="languagesDropdown" aria-expanded="false" data-toggle="dropdown">
            <span class="nav-link-inner-text mr-1">
            <span class="caret mr-1"></span>
          {{ LaravelLocalization::getCurrentLocale() }}			
            </span>
    <i class="fas fa-angle-down nav-link-arrow"></i>
    </a>

    <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="languagesDropdown">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
		  		@if ($localeCode != LaravelLocalization::getCurrentLocale())
					 <a  class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
						{{ $properties['native'] }}
					</a>
				@endif
        @endforeach
    </div>
</li>