<footer id="location-sec">
    <div class="container">
        <div class="row text-center min-set">
            <div class="col-md-12">
              @foreach($footer_1 as $footer_1)
                <h2>{{ $footer_1->title}}</h2>

                <hr class="sub-hr" />
                {!! $footer_1->body !!} 
            </div>
        </div>
        <div class="row">

            <div class="col-md-12 text-center">


                @endforeach
                Desarrollado por: <a href="http://www.vgtechnology.com.ve" target="_blank" style="color: #fff; font-size: 12px;">VG TECHNOLOGY C.A</a> Para: <a href="http://asiviajo.com" style="color: #fff; font-size: 12px;">Asiviajo.com</a>
            </div>
        </div>

    </div>
</footer>
