<x-app-layout>
    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
    
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cadastros') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="card-body">
                    <h1>Cadastrados</h1>
                    <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nomes Cadastrados</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($singin as $sing )
                                        <tr>
                                            <th scope="row"> {{ $sing->id }} </th>
                                            <td>{{ $sing->name }}</td>
                                            <td>
                                                <a href="singinAdmin/{{ $sing->id }}/edit" class="btn btn-info">Editar</button>
                                            </td>
                                            <td>
                                                <form action="singinAdmin/delete/{{ $sing->id }}" method="post">
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