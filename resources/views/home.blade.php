@extends('layouts.main')

@section('content')
<div class="container-bg">
    <div class="container input-group">
        <input type="text" class="form-control" placeholder="Search this blog">
        <div class="input-group-append">
          <button class="btn btn-secondary" type="button">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
</div>
@endsection