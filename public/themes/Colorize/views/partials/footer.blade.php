<footer id="fh5co-footer" role="contentinfo">
  <div class="container">
    <div class="row row-pb-md">
      <div class="col-md-4 fh5co-widget">
        @foreach($footer_1 as $footer_1)
          <h4>{{ $footer_1->title}}</h4>
          {!! $footer_1->body !!}
          @endforeach
        </div>
      <div class="col-md-2 col-md-push-1 fh5co-widget">
        @foreach($footer_2 as $footer_2)
          <h4>{{ $footer_2->title}}</h4>
          {!! $footer_2->body !!}
          @endforeach
      </div>

      <div class="col-md-2 col-md-push-1 fh5co-widget">
        @foreach($footer_3 as $footer_3)
          <h4>{{ $footer_3->title}}</h4>
          {!! $footer_3->body !!}
          @endforeach
      </div>

      <div class="col-md-4 col-md-push-1 fh5co-widget">
        @foreach($footer_4 as $footer_4)
          <h4>{{ $footer_4->title}}</h4>
          {!! $footer_4->body !!}
          @endforeach
      </div>

    </div>

    <div class="row copyright">
      <div class="col-md-12 text-center">
        <p>
          <small class="block">&copy; Todos los derechos reservados</small>
          <small class="block">Diseñado por <a href="http://vgtechnology.com.ve" target="_blank">VG TECHNOLOGY</a> Para: <a href="http://asivijao.com" target="_blank">asiviajo.com</a></small>
        </p>
        <p>
          <ul class="fh5co-social-icons">
            @foreach($face as $face)
            <li><a href="https://facebook.com/{{$face->value}}"><i class="icon-facebook"></i></a></li>
            @endforeach
            @foreach($twit as $twit)
            <li><a href="https://twitter.com/{{$twit->value}}"><i class="icon-twitter"></i></a></li>
            @endforeach
            @foreach($link as $link)
            <li><a href="https://linkedin.com/{{$link->value}}"><i class="icon-linkedin"></i></a></li>
            @endforeach
            @foreach($inst as $inst)
            <li><a href="https://instagram.com/{{$inst->value}}"><i class="icon-instagram"></i></a></li>
            @endforeach
          </ul>
        </p>
      </div>
    </div>

  </div>
</footer>
