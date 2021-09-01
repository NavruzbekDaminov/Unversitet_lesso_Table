@extends('layauts.app')
@section('content')
    <h1 class="text-center p-3">Bu o'qituvchi haqida ma'lumot</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <a href="{{ route('teachers.index') }}">Ortga</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td>O'qituvchi Familyasi</td>
                    <td>{{ $teacher -> T_Lastname }}</td>
                </tr>
                <tr>
                    <td>O'qituvchi Ismi</td>
                    <td>{{ $teacher -> T_Firstname }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
