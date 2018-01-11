@extends('layouts2.master2')

@section('title', '| Guest Index2')

@section('content')

<div class="x3-main_container">
	<nav class="x3-navbar">
		<div class="nav-container">
			<div class="nav-image">
				<div></div>
			</div>
			<div class="nav-hr">
				<hr />
			</div>
			<div class="nav-link">
				<a href="#home">
					<i class="fa fa-home"></i>
					<p>HOME</p>
				</a>
				<a href="#about">
					<i class="fa fa-user"></i>
					<p>USER</p>
				</a>
				<a href="#portfolio">
					<i class="fa fa-briefcase"></i>
					<p>PORTFOLIO</p>
				</a>
				<a href="#contact">
					<i class="fa fa-envelope"></i>
					<p>CONTACT</p>
				</a>
			</div>
		</div>
	</nav>

	<div class="x3-scroll_indicator">
		<div class="scroll_indicator-bar" id="myScroll_indicatorBar"></div>
	</div>

	<button class="x3-button btn-GoToTop" id="buttonGoToTop" onclick="myGoToTop();" ><i class="fa fa-chevron-up"></i></button>

	<div class="x3-content" id="content-id">
		<div id="content_scroll-id">
			<div class="content-main" id="home">
				<div class="main-name">
					<p>I'm Andri Cahyaloka.</p>
				</div>
				<div class="main-subname">
					<p>Web Programmer</p>
				</div>
				<div class="main-photo">
					<img src="/storage/images/image_bg2.jpg" alt="" />
				</div>
				<div class="main-box">
					<div class="box-title" id="about">
						<p>About Me</p>
					</div>
					<div class="box-paragraph">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<div class="main-box">
					<div class="box-title">
						<p>My Skill</p>
					</div>
					<div class="box-paragraph">
						<h1>Web Programming</h1>
						<div class="skill-bar"><span style="width: 90%;"></span></div>
						<h1>Web Design</h1>
						<div class="skill-bar"><span style="width: 75%;"></span></div>
						<h1>Adobe Illustrator</h1>
						<div class="skill-bar"><span style="width: 60%;"></span></div>
						<h1>Adobe Photoshop</h1>
						<div class="skill-bar"><span style="width: 50%;"></span></div>
						<h1>Adobe Photoshop Lightroom</h1>
						<div class="skill-bar"><span style="width: 75%;"></span></div>
					</div>
				</div>
				<div class="main-box">
					<div class="box-title" id="portfolio">
						<p>My Other Pages</p>
					</div>
					<div class="box-paragraph">
						<div class="paragraph-portfolio">
							<a href="/1">
								<img src="/storage/images/image_bg1.jpg" alt="" />
							</a>
							<a href="/2">
								<img src="/storage/images/image_bg2.jpg" alt="" />
							</a>
							<a href="/3">
								<img src="/storage/images/image_bg3.jpg" alt="" />
							</a>
							<a href="/4">
								<img src="/storage/images/image_bg4.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
				<div class="main-box">
					<div class="box-title" id="contact">
						<p>Contact Me</p>
					</div>
					<div class="box-paragraph">
						<div>
							<p><i class="fa fa-map-marker"></i>
							Blitar - Jawa Timur, Indonesia</p>
						</div>
						<div>
							<p><i class="fa fa-phone"></i>
							0857 0755 1085</p>
						</div>
						<div>
							<p><i class="fa fa-envelope"></i>
							andri.cahyaloka@gmail.com</p>
						</div>
						<div>
							<p><i class="fa fa-github"></i>
							github.com/andreycahyaloka</p>
						</div>
					</div>
				</div>
			</div>
			<div class="content-footer">
				<p>Copyright <sup>&copy;</sup> Andrey Cahyaloka</p>
				<p>2017-{{ date("Y") }}</p>
				<p><i class="fa fa-code fa-fw"></i> with <i class="fa fa-heartbeat fa-fw"></i> in Indonesia.</p>
			</div>
		</div>
	</div>
	<div class="x3-screen_message">
		<p>Your screen is too wide.</p>
		<p>Try to resize your browser window.</p>
	</div>

</div>

@endsection