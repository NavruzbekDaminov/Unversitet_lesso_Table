@extends('layauts.app')
@section('content')
    <h1 class="text-center p-3" >Bu Student create sahifasi </h1>
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
            <form method="post" action="{{ route('students.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="S_Lastname" class="form-label">Talaba Familiyasi</label>
                    <input type="text" class="form-control" id="S_Lastname" name="S_Lastname" value="{{ old('S_Lastname') }}">
                </div>
                <div class="mb-3">
                    <label for="S_Firstname" class="form-label">Talaba Ismi</label>
                    <input type="text" class="form-control" id="S_Firstname" name="S_Firstname" value="{{ old('S_Lastname') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
