<?php
$page = null;
if (is_array($params) and ! empty($params)) {
	$page = basename($params[0], '.php');
	$default = [
		'index' => '/',
		'consultanta' => '/consultanta',
		'formare-profesionala' => '/formare-profesionala',
		'comunicare-institutionala' => '/comunicare-institutionala',
	];
	if (isset($default[$page])) {
		$default[$page] = '';
	}
	$out = [];
	foreach($default as $k => $v) {
		$newk = str_replace('-', '_', $k);
		$out[$newk] = $v;
	}
	extract($out, EXTR_PREFIX_ALL, 'to');
	unset($default, $v, $k, $newk, $out);
};
?>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid"> 
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="/"><img src="images/logo.png" alt="logo"></a> </div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="nav-right">
						<div class="clearfix">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#" class="look-disabled">EN</a></li>
							</ul>
						</div>
						<div class="clearfix add-separator"></div>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">RO</a></li>
						</ul>
					</div>
					<div class="nav-left">
						<div class="clearfix">
							<ul class="nav navbar-nav navbar-right">
							<li><a class="nav-link js-scroll-trigger" href="<?=$to_index?>#despre-noi">Despre noi</a></li>
								<li><a class="nav-link js-scroll-trigger" href="<?=$to_index?>#portofoliu">Portofoliu</a></li>
								<li><a class="nav-link js-scroll-trigger" href="<?=$to_index?>#echipa">Echipa / cariera</a></li>
								<li><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
							</ul>
						</div>
						<div class="clearfix add-separator"></div>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultanta <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?=$to_consultanta?>#cercetare-si-analiza" class="js-scroll-trigger">Cercetare si analiza</a></li>
									<li><a href="<?=$to_consultanta?>#expertiza-si-asistenta-tehnica" class="js-scroll-trigger">Expertiza si asistenta tehnica</a></li>
									<li><a href="<?=$to_consultanta?>#parteneriate-internationale" class="js-scroll-trigger">Parteneriate internationale</a></li>
									<li><a href="<?=$to_consultanta?>#accesare-fonduri-nerambursabile" class="js-scroll-trigger">Accesare fonduri nerambursabile</a></li>
								</ul>
							</li>
							<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comunicare institutionala <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown-menu">
								<li><a href="<?=$to_comunicare_institutionala?>#publicitate">Publicitate</a></li>
									<li><a href="<?=$to_comunicare_institutionala?>#relatii-publice">Relatii publice</a></li>
									<li><a href="<?=$to_comunicare_institutionala?>#organizarea-de-evenimente">Organizarea de evenimente</a></li>
								</ul>
							</li>
							<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Formare profesionala <i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="dropdown-menu">
									<li><a href="<?=$to_formare_profesionala?>#cursuri-autorizate-cu-certificare-anc">Cursuri autorizate cu certificare ANC</a></li>
									<li><a href="<?=$to_formare_profesionala?>#cursuri-de-formare-profesionala-a-adultilor">Cursuri de formare profesionala a adultilor</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /.navbar-collapse --> 
			</div>
			<!-- /.container-fluid --> 
		</nav>
</div>
