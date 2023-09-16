@extends('layouts.app')

@section('title', 'Home Product')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
  <h1 class="mb-0">List Questionnaire</h1>
  <a href="{{ route('kuesioner.create') }}" class="btn btn-primary">Add Product</a>
</div>
<hr />
@if(Session::has('success'))
<div class="alert alert-success" role="alert">
  {{ Session::get('success') }}
</div>
@endif
<table class="table table-hover">
  <thead class="table-primary">
    <tr>
      <th>#</th>
      <th>Question</th>
      <th>Opsi 1</th>
      <th>Opsi 2</th>
      <th>Opsi 3</th>
      <th>Opsi 4</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>+
    @if($kuesioner->count() > 0)
    @foreach($kuesioner as $rs)
    <tr>
      <td class="align-middle">{{ $loop->iteration }}</td>
      <td class="align-middle">{{ $rs->question }}</td>
      <td class="align-middle">{{ $rs->opsi1 }}</td>
      <td class="align-middle">{{ $rs->opsi2 }}</td>
      <td class="align-middle">{{ $rs->opsi3 }}</td>
      <td class="align-middle">{{ $rs->opsi4 }}</td>

      <td class="align-middle">
        <div class="btn-group" role="group" aria-label="Basic example">
          <a href="" type="button" class="btn btn-secondary">Detail</a>
          <a href="" type="button" class="btn btn-warning">Edit</a>
          <form action="" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger m-0">Delete</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
    @else
    <tr>
      <td class="text-center" colspan="5">Product not found</td>
    </tr>
    @endif
  </tbody>
</table>
@endsection
