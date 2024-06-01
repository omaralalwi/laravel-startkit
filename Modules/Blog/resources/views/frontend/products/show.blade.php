@extends('frontend.layouts.app')


@section('content')

<section class="section-header bg-primary text-dark pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
			
				<div class="row justify-content-center">
					<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<a> {{ $product->title }} </a> <br>
									<a> {{ $product->translate('title','en') }} </a> <br>
									<a> {{ $product->translate('title','fr') }} </a> <br>
								</div>
								<div class="card-body">
									<p> {{ $product->description }} </p> <br>
									<p> {{ $product->translate('description','en') }} </p> <br>
									<p> {{ $product->translate('description','fr') }} </p> <br>
				
								</div>
							</div>
						
					</div>
				</div>
                
            </div>
        </div>
    </div>
</section>

@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush

