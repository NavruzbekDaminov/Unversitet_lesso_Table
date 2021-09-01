@extends('layauts.app')
@section('content')
    <h2 class="text-center p-3">Bu o'qituvchilar ro'yxati</h2>
    <br>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('teachers.create') }}"><button class="btn btn-success" type="button">O'qituvchi qo'shish</button></a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>№</th>
                <th>T_Lastname</th>
                <th>T_Firstame</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ ( ($teachers -> currentpage()-1) * $teachers -> perpage() + ($loop -> index+1)) }}</td>
                        <td>
                            <a href="{{ route('teachers.show', ['teacher' => $teacher -> id]) }}">{{ $teacher -> T_Lastname }} </a>
                        </td>
                        <td>{{ $teacher -> T_Firstname}}</td>
                        <td>
                            <a href="{{ route('teachers.edit', ['teacher' => $teacher -> id]) }}" class="btn btn-info"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
            @endforeach
        </tbody>
    </table>
    {{ $teachers -> links() }}
@endsection
