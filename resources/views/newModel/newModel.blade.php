<x-app-layout>
    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
    
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Modelos') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card-header"><a href="{{ url('newModel/create')}}">Novo</a></div>
                    <div class="card-body">
                    <h1>Modelos</h1>
                    <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Sobrenome</th>
                                        <th scope="col">Idade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <tr>
                                       <th>
                                         1
                                       </th>
                                   </tr>
                                </tbody>
                            </table>   
                    </div>
                    </div>
                    </div>
                </div>
            </div>
          
    
    
        
    </x-app-layout>