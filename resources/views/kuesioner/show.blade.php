@extends('layouts.app')

@section('title', 'Show Product')

@section('contents')
<h1 class="mb-0">Detail Product</h1>
<hr />
<div class="row">
  <div class="col-6 mb-3">
    <label class="form-label">Question</label>
    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $kuesioner->question }}" readonly>
  </div>
</div>
<div class="row mb-3">
  <div class="col-sm-2 ">
    <label class="form-label">Answer</label>
    <input type="text" name="price" class="form-control mb-2" placeholder="Price" value="{{ $kuesioner->opsi1 }}" readonly>
    <input type="text" name="price" class="form-control mb-2" placeholder="Price" value="{{ $kuesioner->opsi2 }}" readonly>
    <input type="text" name="price" class="form-control mb-2" placeholder="Price" value="{{ $kuesioner->opsi3 }}" readonly>
    <input type="text" name="price" class="form-control mb-2" placeholder="Price" value="{{ $kuesioner->opsi4 }}" readonly>
  </div>
</div>
<div class="row">
  <div class="col mb-3">
    <label class="form-label">Created At</label>
    <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kuesioner->created_at }}" readonly>
  </div>
  <div class="col mb-3">
    <label class="form-label">Updated At</label>
    <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kuesioner->updated_at }}" readonly>
  </div>
</div>
@endsection
