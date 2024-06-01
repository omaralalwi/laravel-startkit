@extends('frontend.layouts.app')


@section('content')

<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
			
				<div class="row justify-content-center">
					<div class="col-md-8">
						@foreach ($products as $product)
							<div class="card">
								<div class="card-header">
									<a href="{{ route('product.show', $product) }}">{{ $product->title }}</a>
								</div>
								<div class="card-body">
									{{ $product->content }}
								</div>
							</div>
						@endforeach
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

