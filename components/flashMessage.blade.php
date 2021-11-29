@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger text-center">
    {{ $error }}<i class="fas fa-exclamation-triangle"></i>
</div>
@endforeach
@endif

@if (Session::has('success'))
<div class="alert alert-success text-center">
    <i class="fa fa-check"></i> {{ Session::get('success') }}
</div>
@endif

@if (Session::has('info'))
<div class="alert alert-info text-center">
    <i class="fas fa-info-circle"></i> {{ Session::get('info') }}
</div>
@endif

@if (Session::has('warning'))
<div class="alert alert-warning text-center">
    <i class="fas fa-exclamation-circle"></i> {{ Session::get('warning') }}
</div>
@endif

@if (Session::has('error'))
<div class="alert alert-danger text-center">
    <i class="fas fa-exclamation-triangle"></i> {{ Session::get('error') }}
</div>
@endif
