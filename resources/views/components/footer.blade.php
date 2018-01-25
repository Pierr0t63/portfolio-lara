<footer class="container-fluid">
	<div class="row">
		<div class="col-md-12 text-center">
			<p>
				Site développé avec <a href="https://laravel.com/" title="Laravel, The PHP Framework For Web Artisans">Laravel</a>
			</p>
		</div>
	</div>
	 @guest
	 <div class="row">
		<div class="col-md-12 text-center">
          <a href="{{ route('login') }}" style="font-size: 10px; color: rgba(255,255,255,0.3);">@lang('Connexion')</a>
		</div>
	</div>
	@endguest
</footer>