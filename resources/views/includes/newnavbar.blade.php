<?php
if(Auth::check()){
    $user = auth()->user();
    $userType = "client";
    // if(Auth::guest())
    //     return redirect('/');

    if (strcmp($user->type,"lawyer")==0)
        $userType = "lawyer";
}

?>
<script>
    var pathname = window.location.pathname;
    document.cookie = "myJavascriptVar = " + pathname;
</script>
<section class="header">
	<div class="logo"><img src="{{ asset('assets/images/logo (1).png') }}" alt="logo"></div>
	<div class="item">
		<ul>
			<li><a class="font" href="#">Aanpak </a></li>
			<li><a class="font" href="#">Voordelen</a></li>
			<li><a class="font" href="#">Voorbeelden</a></li>
			<li><a class="font" href="#">Ervaringen</a></li>
			<li><a class="font" href="#">Contact</a></li>
			<li><a class="font" href="#">FAQ</a></li>

		</ul>
	</div>
</section>
<header class="header1">
	<div class="container1">
		<div class="hameburger">
			<div class="logo">
				<div class="logo"><img src="{{ asset('assets/images/logo (1).png') }}" alt="logo"></div>
			</div>
			<div class="menu-toggle">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</div>
		</div>
		<nav class="item nav-menu">

			<ul>
				<li><a class="font" href="#">Aanpak </a></li>
				<li><a class="font" href="#">Voordelen</a></li>
				<li><a class="font" href="#">Voorbeelden</a></li>
				<li><a class="font" href="#">Ervaringen</a></li>
				<li><a class="font" href="#">Contact</a></li>
				<li><a class="font" href="#">FAQ</a></li>

			</ul>

		</nav>
	</div>

</header>
