<x-app-layout>
    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
    
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Cadastrar Modelos') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card-header">
                        <a href="{{ url('/newModel') }}">Voltar</a>
                    </div>
                    <div class="card-body">
                    @if (Request::is('*/edit'))
                            <form action="{{ url('newModel/update') }}/ {{ $models->id }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Editar Texto:</label>
                                    <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ $models->name }}">
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Sobrenome</label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Sobrenome" value="{{ $models->lastName }}">
                                </div>
    
                                <div class="form-group">
                                    <label for="textos">Editar Texto:</label>
                                    <input type="text" class="form-control" name="textos" placeholder="Texto" value="{{ $models->name }}">
                                </div>
    
                                <div class="form-group">
                                    <label for="textos">Editar Texto:</label>
                                    <input type="text" class="form-control" name="textos" placeholder="Texto" value="{{ $models->name }}">
                                </div>
    
    
                        <br>
    
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                         @else
    
                            <form action="{{ url('textos/add') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="textos">Adicionar Texto:</label>
                                    <input type="text" class="form-control" name="textos"  placeholder="Texto" >
                                </div>
                                
                             <br>
    
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </form>
                        @endif
                    </div>
                    </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
    