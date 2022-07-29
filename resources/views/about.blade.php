@include("head")
@include("menu")
<section class="page-section bg-dark" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase text-white">Quem Somos</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
           <p class="text-white">
              @foreach ($about as $repeat)
              
                {{
                  $repeat
                }}
                
              @endforeach
           </p>
        </div>

</section>
