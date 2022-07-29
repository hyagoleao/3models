@include("head")    
@include("menu")
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Cadastre-se</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->

            
        <form  method="post" action="{{ url('singin/add') }}" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" name="name" type="text" placeholder="Nome" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" name="email"  type="email" placeholder="Email" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" name="phone"  type="tel" placeholder="Celular" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <select class="form-select" name="genre" aria-label="Default select example">
                            <option selected>Genero</option>
                            <option name="genre" value="M">Masculino</option>
                            <option name="genre" value="F">Feminino</option>
                            <option name="genre" value="Outro">Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!-- instagram input-->
                        <input class="form-control" name="instagram"  type="text" placeholder="Instagram" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" name="tiktok"  type="text" placeholder="Tiktok" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
            </div>
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <!-- Age input-->
                        <input class="form-control" name="age"  type="text" placeholder="Idade" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Stature input-->
                        <input class="form-control" name="stature"  type="text" placeholder="Altura" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Weight input-->
                        <input class="form-control" name="weight"  type="text" placeholder="Peso" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <!-- bust input-->
                        <input class="form-control" name="bust"  type="text" placeholder="Busto/Torax" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Waist input-->
                        <input class="form-control" name="waist"  type="text" placeholder="Cintura" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group">
                        <!-- Hip input-->
                        <input class="form-control" name="hip"  type="text" placeholder="Quadril" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    
                </div>          
            </div>
            <div class="row align-items-stretch mb-5">

                <div class="col-md-6 col-xs-12">

                    <div class="form-group">
                        <!-- Image input-->
                        <input class="form-control" name="image[]" multiple  type="file" placeholder="Foto"/>   
                    </div>
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
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</section>

@include('portfolioModal')
@include('script')
