@extends('layouts.admin')
@section('content')
    <div class="container-fluid">

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Список категорий</h1> &nbsp; <strong>
                <a href="{{ route('admin.categories.create') }}">Добавить категорию</a>
            </strong>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success') }}</div>
        @endif
        <!-- Content Row -->
        <div class="row">
             <table class="table table-bordered">
                 <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Заголовок</th>
                        <th>Слаг</th>
                        <th>Дата добавления</th>
                        <th>Управление</th>
                    </tr>
                 </thead>
                 <tbody>
                   @forelse($categories as $category)
                       <tr>
                           <td>{{ $category->id }}</td>
                           <td>{{ $category->title }} (Колл-во новостей: {{ $category->news->count() }})</td>
                           <td>{{ $category->slug }}</td>
                           <td>{{ $category->created_at }}</td>
                           <td><a href="{{ route('admin.categories.show', ['category' => $category]) }}">Пр.</a> &nbsp;
                               <a href="{{ route('admin.categories.edit', ['category' => $category]) }}">Ред.</a> &nbsp;
                               <a href="">Уд.</a></td>
                       </tr>
                   @empty
                       <tr>
                           <td colspan="4">
                               <h2>Записей нет</h2>
                           </td>
                       </tr>
                   @endforelse
                 </tbody>
             </table>

            {{ $categories->links() }}
        </div>


    </div>
@endsection