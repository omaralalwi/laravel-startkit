@extends('frontend.layouts.app')

@section('content')

<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
			
				<div class="row justify-content-center">
					<div class="col-md-8">
					
				
						@foreach ($products as $product)
							<div class="card text-dark">
								<div class="card-header">
									<h4 class=" text-dark"> {{ $product->title }} </h4>
								</div>
								<div class="card-body">
									<p> {{ $product->slug }} </p> <br>
									<p> {{ $product->description }} </p> <br> <br>
									
									Translations  الترجمات <br>
									
									<p> {{ $product->getAttrTrans('title','ar') }} </p>
									<p> {{ $product->getAttrTrans('description','ar') }} </p>
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

