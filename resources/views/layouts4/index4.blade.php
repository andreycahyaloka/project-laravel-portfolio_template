@extends('layouts4.master4')

@section('title', '| Guest Index4')

@section('content')

<div class="x3-main_container">
	<div style="
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0px;
			left: 0px;
			background: linear-gradient(to right, rgba(103, 58, 183, 0.5), rgba(33, 150, 243, 0.5)),
				url(/storage/images/image_bg4.jpg);
			background-attachment: fixed;
			background-position: top center;
			background-size: cover;
		">
		<div style="
				width: 300px;
				height: auto;
				position: fixed;
				top: 25%;
				left: 5%;
				border-radius: 3px;
				border: 1px solid #fafafa;
				color: #212121;
				background: rgba(250, 250, 250, 0.25);
			">
			<p style="
					font-size: 48px;
					padding: 24px 36px;
				">Welcome!</p>
			<p style="
					font-size: 18px;
					padding: 0px 36px 24px 36px;
					color: #424242;
				">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div style="
					padding-bottom: 24px;
					text-align: center;
				">
				<a href="/4a" style="
						padding: 12px 24px;
						border: 1px solid #fafafa;
						border-radius: 3px;
						text-decoration: none;
						font-weight: bold;
						letter-spacing: 1px;
						color: #212121;
						background: rgba(250, 250, 250, 0.25);
					">Ups!</a>
			</div>
		</div>
	</div>
	<div class="x3-screen_message">
		<p>Your screen is too wide.</p>
		<p>Try to resize your browser window.</p>
	</div>

</div>

@endsection