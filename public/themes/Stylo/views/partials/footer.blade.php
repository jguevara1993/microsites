<footer>
  <div id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 animate-box">
          @foreach($footer_1 as $footer_1)
            <h3 class="section-title">{{ $footer_1->title}}</h3>
            {!! $footer_1->body !!}
            @endforeach
				</div>

				<div class="col-md-4 animate-box">
          @foreach($footer_2 as $footer_2)
            <h3 class="section-title">{{ $footer_2->title}}</h3>
            {!! $footer_2->body !!}
            @endforeach

				</div>
				<div class="col-md-4 animate-box">
          @foreach($footer_3 as $footer_3)
            <h3 class="section-title">{{ $footer_3->title}}</h3>
            {!! $footer_3->body !!}
            @endforeach
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="copy-right">&copy; <?php echo date('Y') ?>	Desarrollado por: <a href="http://vgtechnology.com.ve" target="_blank">VG TECHONOLOGY</a>
						Para: <a href="http://asiviajo.com/" target="_blank">Asiviajo</a>
					</p>
				</div>
			</div>
		</div>
	</div>

</footer>
