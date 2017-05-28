<footer id="footer">

  <!-- .footer start -->
  <!-- ================ -->
  <div class="footer section">
    <div class="container">
      <div class="space"></div>
      <div class="row">
        <div class="col-sm-6">
          <div class="footer-content">
            @foreach($footer_1 as $footer_1)
              <h4>{{ $footer_1->title}}</h4>
              {!! $footer_1->body !!}
              @endforeach
          </div>
        </div>
        <div class="col-sm-6">
          <div class="footer-content">
            @foreach($footer_2 as $footer_2)
              <h4>{{ $footer_2->title}}</h4>
              {!! $footer_2->body !!}
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- .footer end -->

  <!-- .subfooter start -->
  <!-- ================ -->
  <div class="subfooter">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="social-links">
            @foreach($face as $face)
            <li class="facebook"><a target="_blank" href="https://www.facebook.com//{{$face->value}}"><i class="fa fa-facebook"></i></a></li>
            @endforeach
            @foreach($twit as $twit)
            <li class="twitter"><a target="_blank" href="https://twitter.com//{{$twit->value}}"><i class="fa fa-twitter"></i></a></li>
            @endforeach
            @foreach($link as $link)
            <li class="linkedin"><a target="_blank" href="http://www.linkedin.com/{{$link->value}}"><i class="fa fa-linkedin"></i></a></li>
            @endforeach
            @foreach($inst as $inst)
            <li class="youtube"><a target="_blank" href="http://www.instagram.com/{{$inst->value}}"><i class="fa fa-instagram"></i></a></li>
            @endforeach

          </ul>

          <p class="text-center">&copy <?php echo date('Y') ?> Desarrollado por <a target="_blank" href="http://vgtechnology.com.ve">VG TECHNOLOGY C.A.</a> Para: <a href="http://asiviajo.com">Asiviajo.com</a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- .subfooter end -->

</footer>
