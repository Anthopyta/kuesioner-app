@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<h1 class="mb-0">Add Kuesioner</h1>
<hr />
<form action="{{ route('kuesioner.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row mb-3">
    <div class="col-8">
      <input type="text" name="question" class="form-control" placeholder="Question">
    </div>
  </div>
  <div class="row mb-3">

    <div class="col-sm-2">
      <input type="text" name="opsi1" value="{{ old('opsi1', 'Sangat Baik') }}" class="form-control"><br>

      <input type="text" name="opsi2" value="{{ old('opsi2', 'Baik') }}" class="form-control"><br>

      <input type="text" name="opsi3" value="{{ old('opsi3', 'Kurang Baik') }}" class="form-control"><br>

      <input type="text" name="opsi4" value="{{ old('opsi4', 'Buruk') }}" class="form-control"><br>


    </div>

  </div>

  <div class="row">
    <div class="d-grid">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection
