<x-app-layout>
@if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Textos') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <div class="card-header"><a href="{{ url('textos/create')}}">Novo</a></div>
                <div class="card-body">
                <h1>Lista de Textos</h1>
                <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Textos</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($text as $t)
                                    
                                    <tr>
                                        <th scope="row">{{ $t->id }}</th>
                                        <td>{{ $t->textos }}</td>
                                        <td>
                                            <a href="textos/{{ $t->id }}/edit" class="btn btn-info">Editar</button>
                                        </td>
                                        <td>
                                            <form action="textos/delete/{{ $t->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Deletar</button>
                                            </form>
                                        </td>
                                    </tr>
            
                                @endforeach
                            </tbody>
                        </table>   
                </div>
                </div>
                </div>
            </div>
        </div>
      


    
</x-app-layout>
