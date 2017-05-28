
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-3">
							@foreach($footer_1 as $footer_1)
		            <h3>{{ $footer_1->title}}</h3>
		            {!! $footer_1->body !!}
		            @endforeach
						</div>

						<div class="col-md-3 col-md-push-1">
							@foreach($footer_2 as $footer_2)
		            <h3>{{ $footer_2->title}}</h3>
		            {!! $footer_2->body !!}
		            @endforeach
						</div>

						<div class="col-md-3 col-md-push-1">
							@foreach($footer_3 as $footer_3)
		            <h3>{{ $footer_3->title}}</h3>
		            {!! $footer_3->body !!}
		            @endforeach
						</div>
						<div class="col-md-3">
							@foreach($footer_4 as $footer_4)
		            <h3>{{ $footer_4->title}}</h3>
		            {!! $footer_4->body !!}
		            @endforeach
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-social-icons">
								@foreach($face as $face)
								<a href="https://facebook.com/{{$face->value}}"><i class="icon-facebook"></i></a>
	              @endforeach
	              @foreach($twit as $twit)
	              <a href="https://twitter.com/{{$twit->value}}"><i class="icon-twitter"></i></a>
	              @endforeach
	              @foreach($link as $link)
								<a href="https://linkedin.com/{{$link->value}}"><i class="icon-linkedin"></i></a>
	              @endforeach
	              @foreach($inst as $inst)
								<a href="https://instagram.com/{{$inst->value}}"><i class="icon-instagram"></i></a>
	              @endforeach

							</p>
							<p>&copy <?php echo date('Y') ?> Desarrollado por: <a href="http://vgtechnology.com.ve/" target="_blank">VG TECHNOLOGY</a> Para: <a href="http://asiviajo.com/" target="_blank">Asiviajo.com</a> </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
