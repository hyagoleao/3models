<x-app-layout>
    @if (session('status'))
                    <h6 class="alert alert-success">{{ session('status') }}</h6>
                @endif
    
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Editar Cadastros') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card-header">
                        <a href="{{ url('/singinAdmin') }}">Voltar</a>
                    </div>
                    <div class="card-body">
                            
                        <form  method="post" action="{{ url('singinAdmin/update') }}/ {{ $singin->id }}">
                            @csrf
                            <div class="row align-items-stretch mb-5">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <!-- Name input-->
                                        <input class="form-control" name="name" type="text" placeholder="Nome" data-sb-validations="required" value="{{ $singin->name }}" />
                                        <div class="invalid-feedback" data-sb-feedback="name:required" >A name is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Email address input-->
                                        <input class="form-control" name="email"  type="email" placeholder="Email" data-sb-validations="required,email" value="{{ $singin->email }}" />
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <!-- Phone number input-->
                                        <input class="form-control" name="phone"  type="tel" placeholder="Celular" data-sb-validations="required" value="{{ $singin->phone }}" />
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <!-- Gender input-->
                                        <input class="form-control" name="genre"  type="text" placeholder="Genero" data-sb-validations="required" value="{{ $singin->genre }}" />
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A Gender is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- instagram input-->
                                        <input class="form-control" name="instagram"  type="text" placeholder="Instagram" data-sb-validations="required,email" value="{{ $singin->instagram }}" />
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <!-- Phone number input-->
                                        <input class="form-control" name="tiktok"  type="text" placeholder="Tiktok" data-sb-validations="required" value="{{ $singin->tiktok }}" />
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-stretch mb-5">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <!-- Age input-->
                                        <input class="form-control" name="age"  type="text" placeholder="Idade" data-sb-validations="required" value="{{ $singin->age }}"/>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Stature input-->
                                        <input class="form-control" name="stature"  type="text" placeholder="Altura" data-sb-validations="required,email" value="{{ $singin->stature }}" />
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <!-- Weight input-->
                                        <input class="form-control" name="weight"  type="text" placeholder="Peso" data-sb-validations="required" value="{{ $singin->weight}}"/>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="form-group">
                                        <!-- bust input-->
                                        <input class="form-control" name="bust"  type="text" placeholder="Busto/Torax" data-sb-validations="required" value="{{ $singin->bust }}" />
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <div class="form-group">
                                        <!-- Waist input-->
                                        <input class="form-control" name="waist"  type="text" placeholder="Cintura" data-sb-validations="required,email" value="{{ $singin->waist }}" />
                                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                    </div>
                                    <div class="form-group mb-md-0">
                                        <!-- Hip input-->
                                        <input class="form-control"  name="hip"  type="text" placeholder="Quadril" data-sb-validations="required" value="{{ $singin->hip }}" />
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                </div>
                                <div class="row">
                                    @foreach ($singin->image as $images )
                                        <div class="col-md-4 col-xs-12">
                                            <div class="form-group">
                                                <img  src="../../storage/{{ $images->path }}" alt="..." />
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center text-white mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">Enviar</button></div>
                        </form>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
    </x-app-layout>
    