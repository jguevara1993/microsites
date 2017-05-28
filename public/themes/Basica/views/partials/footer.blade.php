<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-footer col-md-4 col-xs-6">
          @foreach($footer_1 as $footer_1)
            <h3>{{ $footer_1->title}}</h3>
            {!! $footer_1->body !!}
            @endforeach
        </div>
        <div class="col-footer col-md-4 col-xs-6">
          @foreach($footer_2 as $footer_2)
            <h3>{{ $footer_2->title}}</h3>
            {!! $footer_2->body !!}
            @endforeach

        </div>
        <div class="col-footer col-md-4 col-xs-6">
          @foreach($footer_3 as $footer_3)
            <h3>{{ $footer_3->title}}</h3>
            {!! $footer_3->body !!}
            @endforeach
        </div>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="footer-copyright">&copy; <?php echo date('Y') ?> Basica Bootstrap HTML Template. Desarrollado por <a href="http://www.vgtechnology.com.ve">VG TECHNOLOGY C.A.</a> Para: <a href="http://asiviajo.com">Asiviajo.com</a></div>
        </div>
      </div>
    </div>
  </div>

</footer>
