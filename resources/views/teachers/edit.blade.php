@extends('layauts.app')
@section('content')
<h1 class="text-center p-3">Bu o'qituvchilar ma'lumotlarini o'zgartirish</h1>
<div class="row">
    <div class="col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="post" action="{{ route('teachers.update',['teacher' => $teacher -> id]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="T_Lastname" class="form-label">O'qituvchi Familiyasi</label>
                <input type="text" class="form-control" id="T_Lastname" name="T_Lastname"
                    value="{{ $teacher -> T_Lastname }}">
            </div>
            <div class="mb-3">
                <label for="T_Firstname" class="form-label">O'qituvchi Ismi</label>
                <input type="text" class="form-control" id="T_Firstname" name="T_Firstname"
                    value="{{ $teacher -> T_Firstname }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection