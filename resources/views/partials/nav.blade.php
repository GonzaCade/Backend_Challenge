<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top">
  	<div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>
			</ul>
		</div>
	</div>
</nav>