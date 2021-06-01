@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="container menu">
        <div class="head-container">
            <h4 class="menu-head_text"><i class="fas fa-user-cog"></i> Основной функционал</h4>
            <span class="menu-head_line"></span>
        </div>
        <div class="row">
        
            <div class="col-md-3">
                <div class="menu-button ">
                    <a data-bs-toggle="collapse" href="#Users" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Пользователи
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-button">
                <a data-bs-toggle="collapse" href="#Branches" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Отделения
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="menu-button">
                <a data-bs-toggle="collapse" href="#Doctors" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Доктора
                    </a>
                </div>
            </div>
            </div>
            <div class="collapse" id="Branches">    
        <div class="row mb-5">
            <h2>Отделения</h2>
            <div class="col-md-3 ">
            <button type="button" id="AddBranch" class="btn btn-primary ">Добавить отделение</button>
            </div>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Наименование</th>
                    <th scope="col">Статус услуг</th>
                    <th scope="col">Короткое наименование</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($branches as $branch)
                    <tr>
                        <th>{{ $branch['id'] }}</th>
                        <td>{{ $branch['Name'] }}</td>
                        <td>{{ $branch['Service_status'] }}</td>
                        <td>{{ $branch['Short_name'] }}</td>
                        <td class="font-link">
                            <a  href="#"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form'+{{ $branch['id'] }}).submit();">
                                <i class="fas fa-times"></i>
                            </a>
                            <a href="#"onclick="event.preventDefault();
                                                     document.getElementById('logout-form'+{{ $branch['id'] }}).submit();">
                            <i class="far fa-edit"></i>
                            </a>

                            <form id="logout-form{{ $branch['id'] }}" action="/branches/delete/{{ $branch['id'] }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>


    <div class="collapse" id="Doctors">
    <div class="container">
        <div class="row mb-5">
            <h2>Доктора</h2>
            <div class="col-md-3 ">
            <button type="button" id="AddDoctor" class="btn btn-primary ">Добавить доктора</button>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ФИО</th>
                    <th scope="col">Дата рождения</th>
                    <th scope="col">Профессия</th>
                    <th scope="col">ID Профессии</th>
                    <th scope="col">ID Отделения</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Кабинет</th>
                    <th scope="col">ID Пользователя</th>
                    <th scope="col">Рабочие дни</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <th>{{ $doctor['id'] }}</th>
                        <td>{{ $doctor['name'] }}</td>
                        <td>{{ $doctor['dob'] }}</td>
                        <td>{{ $doctor['prof_name'] }}</td>
                        <td>{{ $doctor['id_profession'] }}</td>
                        <td>{{ $doctor['id_branch'] }}</td>
                        <td>{{ $doctor['status'] }}</td>
                        <td>{{ $doctor['cabinet'] }}</td>
                        <td>{{ $doctor['id_user'] }}</td>
                        <td>{{ $doctor['work_day'] }}</td>
                        <td class="font-link">
                            <a  href="#"
                                onclick="event.preventDefault();
                                    document.getElementById('doc-form'+{{ $doctor['id'] }}).submit();">
                                <i class="fas fa-times"></i>
                            </a>
                            <a href="#">
                            <i class="far fa-edit"></i>
                            </a>

                            <form id="doc-form{{ $doctor['id'] }}" action="/doctors/delete/{{ $doctor['id'] }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>

    <div class="collapse" id="Users">
    <div class="container">
        <div class="row">
            <h2>Пользователи</h2>
            <div class="col-md-3 ">
            <button type="button" id="AddUser" class="btn btn-primary ">Добавить пользователя</button>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">login</th>
                    <th scope="col">Роль</th>
                    <th scope="col">ID Отделения</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{ $user['id'] }}</th>
                        <td>{{ $user['login'] }}</td>
                        <td>{{ $user['type'] }}</td>
                        <td>{{ $user['id_branch'] }}</td>
                        <td class="font-link">
                            <a  href="#"
                                onclick="event.preventDefault();
                                    document.getElementById('user-form'+{{ $user['id'] }}).submit();">
                                <i class="fas fa-times"></i>
                            </a>
                            <a href="#">
                            <i class="far fa-edit"></i>
                            </a>

                            <form id="user-form{{ $user['id'] }}" action="/users/delete/{{ $user['id'] }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
