@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
<h1 class="mb-0">Edit Questionnaire</h1>

<hr />
<form action="{{ route('kuesioner.update', $kuesioner->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-sm-6 mb-3">
      <label class="form-label">Question</label>
      <input type="text" name="question" class="form-control" placeholder="Question" value="{{ $kuesioner->question }}">
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6 mb-3">
      <label class="form-label">Answer</label>
      <input type="text" name="opsi1" class="form-control mb-2" placeholder="Opsi 1" value="{{ $kuesioner->opsi1 }}">
      <input type="text" name="opsi2" class="form-control mb-2" placeholder="Opsi 2" value="{{ $kuesioner->opsi2 }}">
      <input type="text" name="opsi3" class="form-control mb-2" placeholder="Opsi 3" value="{{ $kuesioner->opsi3 }}">
      <input type="text" name="opsi4" class="form-control mb-2" placeholder="Opsi 4" value="{{ $kuesioner->opsi4 }}">
    </div>
  </div>
  <div class="row">
    <div class="d-grid">
      <button class="btn btn-warning">Update</button>
    </div>
  </div>
</form>
@endsection
