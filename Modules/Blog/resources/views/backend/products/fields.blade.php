<!-- title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', __('models/products.fields.title').':') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/products.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Id Field 
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'category Id:') !!}
    {!! Form::select('category_id', $categoryItems,old('category_id'), ['class' => 'form-control']) !!}
</div>
-->

<!-- Slug Field -->
{{--
<div class="form-group col-sm-6">
    {!! Form::label('slug', __('models/products.fields.slug').':') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>
--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('oa_forms.buttons.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.products.index') }}" class="btn btn-default"> @lang('oa_forms.buttons.ؤشىؤثم') </a>
</div>
