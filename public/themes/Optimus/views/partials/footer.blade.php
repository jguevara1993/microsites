<footer>
<div class="container">
  <div class="row">
    <div class="col-md-3 col-sm-3">
      <div class="widget">
        @foreach($footer_1 as $footer_1)
          <h5 class="widgetheading">{{ $footer_1->title}}</h5>
          {!! $footer_1->body !!}
          @endforeach
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="widget">
        @foreach($footer_2 as $footer_2)
          <h5 class="widgetheading">{{ $footer_2->title}}</h5>
          {!! $footer_2->body !!}
          @endforeach
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="widget">
        @foreach($footer_3 as $footer_3)
          <h5 class="widgetheading">{{ $footer_3->title}}</h5>
          {!! $footer_3->body !!}
          @endforeach
      </div>
    </div>
    <div class="col-md-3 col-sm-3">
      <div class="widget">
        @foreach($footer_4 as $footer_4)
          <h5 class="widgetheading">{{ $footer_4->title}}</h5>
          {!! $footer_4->body !!}
          @endforeach
      </div>
    </div>
  </div>
</div>
<div id="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="copyright">
          <p>
            <span>&copy; <?php echo date('Y') ?> Optimus Bootstrap Template. Desarrollado por: </span><a href="http://vgtechnology.com.ve" target="_blank">VG TECHNOLOGY C.A.</a><span> Para:</span> <a href="http://asiviajo.com">Asiviajo.com</a>
          </p>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="social-network">
          @foreach($face as $face)
          <li><a href="http://facebook.com/{{$face->value}}" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
          @endforeach
          @foreach($twit as $twit)
          <li><a href="https://twitter.com/{{$twit->value}}" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
          @endforeach
          @foreach($link as $link)
          <li><a href="https://linkedin.com/{{$link->value}}" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          @endforeach
          @foreach($inst as $inst)
          <li><a href="https://instagram.com/{{$inst->value}}" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>
