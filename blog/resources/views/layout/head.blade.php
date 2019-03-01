       
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="top_menu">
            	<div class="container">
            		<div class="float-left">
						<a href="#"><?php echo "Today is " . date("d/m/Y") . "<br>"; ?></a>
					</div>
					<div class="float-right">
						<ul class="list header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
            	</div>
            </div>
            <div class="logo_part">
            	<div class="container">
            		<div class="float-left">
						<a class="logo" href="#"><img src="img/logo.png" alt=""></a>
					</div>
					<div class="float-right">
						<div class="header_magazin">
							<img src="img/header-magazin.png" alt="">
						</div>
					</div>
            	</div>
            </div>
			<div class="main_menu">
				<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<div class="container_inner">
							<!-- Brand and toggle get grouped for better mobile display -->
							<a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
								<ul class="nav navbar-nav menu_nav">
									<li class="nav-item active"><a class="nav-link" href="{{ route('index') }}">Home</a></li> 
									<li class="nav-item"><a class="nav-link" href="category.html">Category</a></li>
									<li class="nav-item"><a class="nav-link" href="archive.html">Archive</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('blog.admin') }}">Admin</a></li>
								</ul>
								<ul class="nav navbar-nav navbar-right ml-auto">
									<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
								</ul>
							</div> 
						</div>
					</div>
				</nav>
			</div>
        </header>