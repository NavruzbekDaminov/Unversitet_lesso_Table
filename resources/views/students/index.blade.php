@extends('layauts.app')
@section('content')
    <h2 class="text-center p-3">Bu talabalar ro'yxati</h2>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('students.create') }}"><button class="btn btn-primary" type="button">Talaba qo'shish</button></a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>№</th>
                <th>S_Lastname</th>
                <th>S_Firstname</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ ( ($students -> currentpage()-1) * $students -> perpage() + ($loop -> index+1)) }}</td>
                    <td>{{ $student -> S_Lastname }}</td>
                    <td>{{ $student -> S_Firstname}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students -> links() }}
@endsection
