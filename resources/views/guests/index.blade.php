@extends('layouts.master')

@section('title', '| Guest Index')

@section('content')

<aside class="x3-aside">
	<div class="x3-aside-image"></div>
	<hr />
	<a href="#"><i class="fa fa-home"></i><p>HOME</p></a>
	<a href="#"><i class="fa fa-user"></i><p>ABOUT</p></a>
	<a href="#"><i class="fa fa-envelope"></i><p>CONTACT</p></a>
</aside>

<main class="x3-main">
	<div class="x3-scroll_indicator">
		<div class="x3-scroll_indocator-bar" id="myScroll_indicatorBar"></div>
	</div>

	<button onclick="myGoToTop();" class="x3-go_to_top" id="buttonGoToTop"><i class="fa fa-chevron-up"></i></button>

	<div class="x3-main-name">I'm Lorem Ipsum.</div>

	<div class="x3-main-job">Web Programmer.</div>

	<div class="x3-main-image1"></div>

	<div class="x3-main-title">About Me</div>
	<hr />
	<p>paragraph</p>

	<div class="x3-main-title">My Skill</div>
	<hr />
	<h5>Web Programming</h5>
	<div class="x3-main-skill_bar"><span style="width: 98%;"></span></div>
	<h5>Web Design</h5>
	<div class="x3-main-skill_bar"><span style="width: 85%;"></span></div>
	<h5>Adobe Illustrator</h5>
	<div class="x3-main-skill_bar"><span style="width: 80%;"></span></div>
	<h5>Adobe Photoshop</h5>
	<div class="x3-main-skill_bar"><span style="width: 75%;"></span></div>
	<h5>Portait Photography</h5>
	<div class="x3-main-skill_bar"><span style="width: 98%;"></span></div>
	<h5>Adobe Photoshop Lightroom</h5>
	<div class="x3-main-skill_bar"><span style="width: 95%;"></span></div>

	<div class="x3-main-title">Contact Me</div>
	<hr />
	<p class="contact"><i class="fa fa-map-marker"></i>Blitar, Jawa Timur</p>
	<p class="contact"><i class="fa fa-phone"></i>0857 0755 1085</p>
	<p class="contact"><i class="fa fa-envelope"></i>andri.cahyaloka@gmail.com</p>
	<div class="x3-main-footer">
		<p>
			Copyright <sup>&copy;</sup> Andri Cahyaloka<br />
			2017-{{ date("Y") }}<br />
			<i class="fa fa-code fa-fw"></i> with <i class="fa fa-heart fa-fw"></i> in Indonesia.
		</p>
	</div>
</main>

@endsection