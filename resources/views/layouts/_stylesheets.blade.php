<style>



	* {
	font-family: 'Roboto';
	font-style: normal;
	font-weight: normal;
	font-size: 100%;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	}

	a {
		text-decoration: none;
	}

	:root {
		/* color */
		--color-light: #fafafa; /* 50 */
		--color-dark: #212121; /* 900 */
		--color-grey-100: #f5f5f5;
		--color-grey-200: #eeeeee;
		--color-grey-300: #e0e0e0;
		--color-grey-400: #bdbdbd;
		--color-grey-500: #9e9e9e;
		--color-grey-600: #757575;
		--color-grey-700: #616161;
		--color-grey-800: #424242;
		--color-primary-light: #64b5f6; /* 300 */
		--color-primary-normal: #2196f3; /* 500 */
		--color-primary-dark: #1976d2; /* 700 */
		--color-accent-light: #ff80ab; /* A100 */
		--color-accent-normal: #ff4081; /* A200 */
		--color-accent-dark: #f50057; /* A400 */
		/* elevation & shadow */
		--elevation_shadow-1 : 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-2 : 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-3 : 0px 3px 3px -2px rgba(0, 0, 0, 0.2), 0px 3px 4px 0px rgba(0, 0, 0, 0.14), 0px 1px 8px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-4 : 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-6 : 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-8 : 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
		--elevation_shadow-9 : 0px 5px 6px -3px rgba(0, 0, 0, 0.2), 0px 9px 12px 1px rgba(0, 0, 0, 0.14), 0px 3px 16px 2px rgba(0, 0, 0, 0.12);
		--elevation_shadow-12 : 0px 7px 8px -4px rgba(0, 0, 0, 0.2), 0px 12px 17px 2px rgba(0, 0, 0, 0.14), 0px 5px 22px 4px rgba(0, 0, 0, 0.12);
		--elevation_shadow-16 : 0px 8px 10px -5px rgba(0, 0, 0, 0.2), 0px 16px 24px 2px rgba(0, 0, 0, 0.14), 0px 6px 30px 5px rgba(0, 0, 0, 0.12);
		--elevation_shadow-24 : 0px 11px 15px -7px rgba(0, 0, 0, 0.2), 0px 24px 38px 3px rgba(0, 0, 0, 0.14), 0px 9px 46px 8px rgba(0, 0, 0, 0.12);
	}

/* item align (left / center / right) */

/* button */
	.x3-btn {
		font-weight: bold;
		letter-spacing: 1px;
	}





/* 
1
2
3
4
5
 */





/* 
	z- index
		button_go_to_top		= 101
		scroll_indicator		= 102
		nav						= 103
		aside					= 104

		menu_dropdown-content	= 99

 */
 
	

/* elevation & shadow */
	.mdc-elevation--z0 {
	-webkit-box-shadow:
		0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
	box-shadow:
		0px 0px 0px 0px rgba(0, 0, 0, 0.2), 0px 0px 0px 0px rgba(0, 0, 0, 0.14), 0px 0px 0px 0px rgba(0, 0, 0, 0.12);
	}





/* button */
	.x3-button {
		height: 36px;
		min-height: 36px;
		border-radius: 2px;
		padding: 0 16px;
		font-size: 14px;
		font-weight: bold;
		letter-spacing: 1px;
		line-height: 15px;
		min-width: 88px;
		border: none;
		vertical-align: middle;
		text-align: center;
		text-decoration: none;
		-webkit-transition-duration: 0.1s; /* Safari */
		transition-duration: 0.1s;
		/* overflow: auto; */
	}
	.x3-button:focus {
		outline: 0px;
	}

	/* floating action primary */
		.button-floating_action-primary {
			height: 48px;
			line-height: 48px;
			width: 48px;
			min-width: 48px;
			padding: 2px 16px;
			border-radius: 50%;
			-webkit-box-shadow: var(--elevation_shadow-6);
			box-shadow: var(--elevation_shadow-6);
			color: var(--color-light);
			background-color: var(--color-primary-normal);
			/* position: fixed;
			right: 50px;
			bottom: 50px; */
		}
		.button-floating_action-primary:hover {
			-webkit-box-shadow: var(--elevation_shadow-12);
			box-shadow: var(--elevation_shadow-12);
			background-color: var(--color-primary-light);
		}
		.button-floating_action-primary:active {
			background-color: var(--color-primary-dark);
		}

	/* floating action accent */
		.button-floating_action-accent {
			height: 48px;
			line-height: 48px;
			width: 48px;
			min-width: 48px;
			padding: 2px 16px;
			border-radius: 50%;
			-webkit-box-shadow: var(--elevation_shadow-6);
			box-shadow: var(--elevation_shadow-6);
			color: var(--color-light);
			background-color: var(--color-accent-normal);
		}
		.button-floating_action-accent:hover {
			-webkit-box-shadow: var(--elevation_shadow-12);
			box-shadow: var(--elevation_shadow-12);
			background-color: var(--color-accent-light);
		}
		.button-floating_action-accent:active {
			background-color: var(--color-accent-dark);
		}

	/* floating action disabled */
		.button-floating_action:disabled {
			height: 48px;
			line-height: 48px;
			width: 48px;
			min-width: 48px;
			padding: 2px 16px;
			border-radius: 50%;
			-webkit-box-shadow: var(--elevation_shadow-6);
			box-shadow: var(--elevation_shadow-6);
			color: var(--color-grey-500);
			background-color: var(--color-grey-700);
		}

	/* raised primary normal */
		.button-raised-primary-normal {
			-webkit-box-shadow: var(--elevation_shadow-2);
			box-shadow: var(--elevation_shadow-2);
			color: var(--color-light);
			background-color: var(--color-primary-normal);
		}
		.button-raised-primary-normal:hover {
			-webkit-box-shadow: var(--elevation_shadow-8);
			box-shadow: var(--elevation_shadow-8);
			background-color: var(--color-primary-light);
		}
		.button-raised-primary-normal:active {
			background-color: var(--color-primary-dark);
		}

	/* raised accent normal */
		.button-raised-accent-normal {
			-webkit-box-shadow: var(--elevation_shadow-2);
			box-shadow: var(--elevation_shadow-2);
			color: var(--color-light);
			background-color: var(--color-accent-normal);
		}
		.button-raised-accent-normal:hover {
			-webkit-box-shadow: var(--elevation_shadow-8);
			box-shadow: var(--elevation_shadow-8);
			background-color: var(--color-accent-light);
		}
		.button-raised-accent-normal:active {
			background-color: var(--color-accent-dark);
		}

	/* raised primary outline */
		.button-raised-primary-outline {
			-webkit-box-shadow: var(--elevation_shadow-2);
			box-shadow: var(--elevation_shadow-2);
			color: var(--color-primary-normal);
			background-color: var(--color-light);
			border: 1px solid var(--color-primary-normal);
		}
		.button-raised-primary-outline:hover {
			-webkit-box-shadow: var(--elevation_shadow-8);
			box-shadow: var(--elevation_shadow-8);
			color: var(--color-primary-light);
			border: 1px solid var(--color-primary-light);
		}
		.button-raised-primary-outline:active {
			color: var(--color-primary-dark);
			background-color: var(--color-grey-300);
			border: 1px solid var(--color-primary-dark);
		}

	/* raised accent outline */
		.button-raised-accent-outline {
			-webkit-box-shadow: var(--elevation_shadow-2);
			box-shadow: var(--elevation_shadow-2);
			color: var(--color-accent-normal);
			background-color: var(--color-light);
			border: 1px solid var(--color-accent-normal);
		}
		.button-raised-accent-outline:hover {
			-webkit-box-shadow: var(--elevation_shadow-8);
			box-shadow: var(--elevation_shadow-8);
			color: var(--color-accent-light);
			border: 1px solid var(--color-accent-light);
		}
		.button-raised-accent-outline:active {
			color: var(--color-accent-dark);
			background-color: var(--color-grey-300);
			border: 1px solid var(--color-accent-dark);
		}

	/* raised disable */
		.button-raised:disabled {
			-webkit-box-shadow: var(--elevation_shadow-2);
			box-shadow: var(--elevation_shadow-2);
			color: var(--color-grey-500);
			background-color: var(--color-grey-700);
		}

	/* flat primary */
		.button-flat-primary {
			color: var(--color-primary-normal);
			background-color: rgba(0, 0, 0, 0);
		}
		.button-flat-primary:hover {
			color: var(--color-primary-light);
			background-color: var(--color-grey-300);
		}
		.button-flat-primary:active {
			color: var(--color-primary-dark);
			background-color: var(--color-grey-400);
		}

	/* flat accent */
		.button-flat-accent {
			color: var(--color-accent-normal);
			background-color: rgba(0, 0, 0, 0);
		}
		.button-flat-accent:hover {
			color: var(--color-accent-light);
			background-color: var(--color-grey-300);
		}
		.button-flat-accent:active {
			color: var(--color-accent-dark);
			background-color: var(--color-grey-400);
		}

	/* flat disabled */
		.button-flat:disabled {
			color: var(--color-grey-500);
			background-color: rgba(0, 0, 0, 0);
		}

	/* nav primary */
		.button-nav-primary {
			height: 48px;
			line-height: 48px;
			width: 48px;
			min-width: 48px;
			padding: 1px 16px;
			color: var(--color-primary-normal);
			background-color: var(--color-light);
			border: 1px solid var(--color-primary-normal);
		}
		.button-nav-primary:hover {
			color: var(--color-light);
			background-color: var(--color-primary-light);
			border: 1px solid var(--color-light);
		}
		.button-nav-primary:active {
			color: var(--color-light);
			background-color: var(--color-primary-dark);
			border: 1px solid var(--color-light);
		}

	/* nav accent */
		.button-nav-accent {
			height: 48px;
			line-height: 48px;
			width: 48px;
			min-width: 48px;
			padding: 1px 16px;
			color: var(--color-accent-normal);
			background-color: var(--color-light);
			border: 1px solid var(--color-accent-normal);
		}
		.button-nav-accent:hover {
			color: var(--color-light);
			background-color: var(--color-accent-light);
			border: 1px solid var(--color-light);
		}
		.button-nav-accent:active {
			color: var(--color-light);
			background-color: var(--color-accent-dark);
			border: 1px solid var(--color-light);
		}

	/* nav disabled */
		.button-nav:disabled {
			height: 48px;
			line-height: 48px;
			width: 48px;
			min-width: 48px;
			padding: 1px 16px;
			color: var(--color-grey-300);
			background-color: var(--color-grey-500);
		}

	/* menu normal primary */
		.button-menu_normal-primary {
			color: var(--color-primary-normal);
			background-color: var(--color-light);
			border: 1px solid var(--color-primary-normal);
		}
		.button-menu_normal-primary:hover {
			color: var(--color-light);
			background-color: var(--color-primary-light);
			border: 1px solid var(--color-light);
		}
		.button-menu_normal-primary:active {
			color: var(--color-light);
			background-color: var(--color-primary-dark);
			border: 1px solid var(--color-light);
		}

	/* menu normal accent */
		.button-menu_normal-accent {
			color: var(--color-accent-normal);
			background-color: var(--color-light);
			border: 1px solid var(--color-accent-normal);
		}
		.button-menu_normal-accent:hover {
			color: var(--color-light);
			background-color: var(--color-accent-light);
			border: 1px solid var(--color-light);
		}
		.button-menu_normal-accent:active {
			color: var(--color-light);
			background-color: var(--color-accent-dark);
			border: 1px solid var(--color-light);
		}

	/* menu normal disabled */
		.button-menu_normal:disabled {
			color: var(--color-grey-300);
			background-color: var(--color-grey-500);
		}

	/* menu icon primary */
		.button-menu_icon-primary {
			width: 36px;
			min-width: 36px;
			border-radius: 50%;
			color: var(--color-primary-normal);
			background-color: rgba(0, 0, 0, 0);
		}
		.button-menu_icon-primary:hover {
			color: var(--color-primary-light);
			background-color: var(--color-grey-300);
		}
		.button-menu_icon-primary:active {
			color: var(--color-primary-dark);
			background-color: var(--color-grey-400);
		}

	/* menu icon accent */
		.button-menu_icon-accent {
			width: 36px;
			min-width: 36px;
			border-radius: 50%;
			color: var(--color-accent-normal);
			background-color: rgba(0, 0, 0, 0);
		}
		.button-menu_icon-accent:hover {
			color: var(--color-accent-light);
			background-color: var(--color-grey-300);
		}
		.button-menu_icon-accent:active {
			color: var(--color-accent-dark);
			background-color: var(--color-grey-400);
		}

	/* menu icon disabled */
		.button-menu_icon:disabled {
			width: 36px;
			min-width: 36px;
			border-radius: 50%;
			color: var(--color-grey-500);
			background-color: rgba(0, 0, 0, 0);
		}

	/* gradient primary (gradient (left-bottom => right-top)) */
		.button-gradient-primary {
			/*  */
		}
		.button-gradient-primary:hover {
			/*  */
		}
		.button-gradient-primary:active {
			/*  */
		}

	/* gradient accent */
		.button-gradient-accent {
			/*  */
		}
		.button-gradient-accent:hover {
			/*  */
		}
		.button-gradient-accent:active {
			/*  */
		}

	/* gradient disabled */
		.button-gradient:disabled {
			/*  */
		}

/* menu_dropdown */
	.x3-menu_dropdown {
		position: relative;
		display: inline-block;
	}
	.x3-menu_dropdown:hover .menu_dropdown-content {
		display: block;
	}

	/* menu_dropdown content */
		.menu_dropdown-content {
			display: none;
			position: absolute;
			/* margin-top: -36px; */
			min-width: 160px;
			border-radius: 2px;
			overflow: auto;
			background-color: var(--color-light);
			-webkit-box-shadow: var(--elevation_shadow-8);
			box-shadow: var(--elevation_shadow-8);
			z-index: 99;
		}
		.menu_dropdown-content-right {
			right: 0px;
		}
		.menu_dropdown-content a {
			display: block;
			height: 36px;
			min-height: 36px;
			padding: 10px 16px;
			line-height: 15px;
			text-align: left;
			color: var(--color-dark);
		}
		.menu_dropdown-content a:hover {
			background-color: var(--color-grey-200);
		}
		.menu_dropdown-content a:active {
			background-color: var(--color-grey-300);
		}
		.menu_dropdown-content a:disabled {
			color: var(--color-grey-300);
			background-color: var(--color-grey-500);
		}
		.menu_dropdown-content i {
			margin-right: 8px;
		}

	/* menu divider */
		.menu_dropdown-content hr {
			height: 1px;
			border-width: 0px;
			margin: 6px 12px;
			background-color: var(--color-grey-300);
		}

/* table */
	.x3-table {
		margin: 0px 12px;
	}
	.x3-table table {
		width: 100%;
		min-width: 100%;
		max-width: 100%;
		border-collapse: collapse;
		background-color: var(--color-light);
	}
	.x3-table th, .x3-table td {
		padding: 6px 12px;
		text-align: left;
		vertical-align: middle;
		border-bottom: 1px solid var(--color-grey-300);
	}
	.x3-table th {
		height: 48px;
		min-height: 48px;
		font-weight: bold;
		background-color: var(--color-grey-200);
	}
	.x3-table td {
		height: 36px;
		min-height: 36px;
	}

	/* table responsive */
		.table-responsive {
			overflow-x: auto;
		}

	/* table strip */
		.table-strip tr:nth-child(even) {
			background-color: var(--color-grey-100);
		}

	/* table hover */
		.table-hover tbody tr:hover {
			background-color: var(--color-grey-200);
		}
		.table-hover tbody tr:active {
			background-color: var(--color-grey-300);
		}

	/* table border */
		.table-border th, .table-border td {
			border: 1px solid var(--color-dark);
		}

/* image */

/* card */
	.x3-card {
		/*  */
	}

/* form */

/* use javascript */

/* aside */
	.x3-aside {
		position: fixed;
		top: 0px;
		left: 0px;
		height: 100%;
		width: 120px;
		background-color: var(--color-grey-800);
		overflow-x: hidden;
		box-shadow: var(--elevation_shadow-8);
		-webkit-box-shadow: var(--elevation_shadow-8);
		z-index: 104;
	}
	.x3-aside a {
		display: block;
		line-height: 100px;
		text-align: center;
		padding-bottom: 24px;
		color: var(--color-light);
		transition: all 0.25s ease;
	}
	.x3-aside a:hover {
		color: var(--color-grey-300);
		background-color: var(--color-dark);
	}
	.x3-aside i {
		font-size: 36px;
		line-height: 36px;
	}
	.x3-aside p {
		font-size: 14px;
		line-height: 14px;
		font-weight: bold;
		letter-spacing: 1px;
		margin-top: -24px;
	}
	.x3-aside hr {
		height: 1px;
		border-width: 0px;
		background-color: var(--color-grey-300);
	}

	/* aside image */
		.x3-aside-image {
			background: linear-gradient(rgba(33,33,33, 0.5), rgba(33,33,33, 0.5)), url(/storage/images/image_bg.jpg);
			background-position: top center;
			background-size: cover;
			height: 250px;
		}

/* scroll indicator */
	.x3-scroll_indicator {
		position: fixed;
		top: 0px;
		left: 120px;
		width: 100%;
		width: calc(100% - 120px);
		width: -moz-calc(100% - 120px);
		width: -webkit-calc(100% - 120px);
		height: 5px;
		background-color: var(--color-dark);
		z-index: 102;
	}

	/* scroll indicator bar */
		.x3-scroll_indocator-bar {
			margin-top: 1px;
			width: 0%;
			height: 3px;
			border-radius: 5px;
			/* background: linear-gradient(to top right, var(--color-primary-normal), var(--color-light), var(--color-accent-normal)); */
			background-color: var(--color-light);
		}

/* go to top */
	.x3-go_to_top {
		position: fixed;
		display: none;
		right: 5px;
		bottom: 25px;
		height: 48px;
		width: 48px;
		padding: 0px 0px 0px 12px;
		border: none;
		outline: none;
		border-radius: 5px;
		color: var(--color-light);
		background-color: var(--color-grey-800);
		box-shadow: var(--elevation_shadow-2);
		-webkit-box-shadow: var(--elevation_shadow-2);
		z-index: 101;
	}
	.x3-go_to_top:hover {
		color: var(--color-grey-300);
		background-color: var(--color-grey-700);
		box-shadow: var(--elevation_shadow-8);
		-webkit-box-shadow: var(--elevation_shadow-8);
	}

/* main */
	.x3-main {
		margin-top: 5px;
		margin-left: 120px;
		color: var(--color-light);
		background-color: var(--color-dark);
	}

/* modal */

/* tab */

/* navbar */
	/* navbar brand */
	/* navbar active link */
	/* fixed top */
	/* fixed bottom */
	/* sticky top */

/* x3 name */
	.x3-main-name {
		font-size: 72px;
		text-align: center;
		padding-top: 50px;
		padding-bottom: 25px;
	}
	.x3-main-job {
		font-size: 18px;
		text-align: center;
		padding-bottom: 25px;
	}
	.x3-main-image1 {
		background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url(/storage/images/image_bg.jpg);
		background-position: top center;
		background-size: cover;
		height: 500px;
	}
	.x3-main-title {
		font-size: 24px;
		padding: 48px 24px 0px 24px;
	}
	.x3-main hr {
		height: 2px;
		border-width: 0px;
		margin: 24px 50% 0px 24px;
		background-color: var(--color-grey-500);
	}
	.x3-main h5 {
		padding: 24px 24px 0px 24px;
		letter-spacing: 5px;
		color: var(--color-grey-500);
	}
	.x3-main p {
		padding: 24px 24px 0px 24px;
		color: var(--color-grey-500);
	}
	.x3-main .contact {
		font-size: 18px;
		letter-spacing: 2px;
	}
	.x3-main i {
		font-size: 24px;
		line-height: 24px;
		padding-right: 24px;
	}
	.x3-main-skill_bar {
		position: relative;
		height: 24px;
		margin: 12px 24px 0px 24px;
		padding: 0px;
		border-top-left-radius: 3px;
		border-bottom-left-radius: 3px;
		border-top-right-radius: 3px;
		border-bottom-right-radius: 3px;
			-moz-border-top-left-radius: 3px;
			-moz-border-bottom-left-radius: 3px;
			-moz-border-top-right-radius: 3px;
			-moz-border-bottom-right-radius: 3px;
			-webkit-border-top-left-radius: 3px;
			-webkit-border-bottom-left-radius: 3px;
			-webkit-border-top-right-radius: 3px;
			-webkit-border-bottom-right-radius: 3px;
		background: var(--color-grey-300);
	}
	.x3-main-skill_bar span {
		position: relative;
		display: block;
		height: 100%;
		border-top-right-radius: 3px;
		border-bottom-right-radius: 3px;
		border-top-left-radius: 3px;
		border-bottom-left-radius: 3px;
			-moz-border-top-left-radius: 3px;
			-moz-border-bottom-left-radius: 3px;
			-moz-border-top-right-radius: 3px;
			-moz-border-bottom-right-radius: 3px;
			-webkit-border-top-left-radius: 3px;
			-webkit-border-bottom-left-radius: 3px;
			-webkit-border-top-right-radius: 3px;
			-webkit-border-bottom-right-radius: 3px;
		background-color: var(--color-grey-700);
		overflow: hidden;
	}
	.x3-main-footer p {
		text-align: center;
		padding: 72px 0px;
	}

/* background animated */
	.x3-background_animated1
	{
		width: 100%;
		height: 50px;
		animation-name: background_animated1;
		animation-duration: 2s;
		animation-iteration-count: infinite;
		animation-timing-function: linear;
			-webkit-animation-name: background_animated1;
			-webkit-animation-duration: 2s;
			-webkit-animation-iteration-count: infinite;
			-webkit-animation-timing-function: linear;
	}
		@keyframes background_animated1
		{
			0%
			{
				background-color: red;
			}
			50%
			{
				background-color: yellow;
			}
			100%
			{
				background-color: red;
			}
		}
		@-webkit-keyframes background_animated1
		{
			0%
			{
				background-color: red;
			}
			50%
			{
				background-color: yellow;
			}
			100%
			{
				background-color: red;
			}
		}



/*  */

/*  */

/*  */

/* mobile styles */
	@media only screen and (max-width: 768px) {
		body {
			background: linear-gradient(rgba(250,250,250, 0.95), rgba(250,250,250, 0.95)), url(/storage/images/image_bg.jpg);
			background-attachment: fixed;
			background-position: top center;
			background-size: cover;
		}

		/* .x3-aside {
			width: 75px;
		}
		.x3-aside p {
			font-size: 12px;
		}
		.x3-scroll_indicator {
			left: 75px;
		}
		.x3-main {
			margin-left: 75px;
		}
		.x3-main .contact {
		font-size: 12px;
		letter-spacing: 1px;
		} */
	}

/* tablet styles */
	@media only screen and (min-width: 769px) and (max-width: 1440px) {
		body {
			background: #d7ccc8;
		}
	}

/* desktop styles */
	@media only screen and (min-width: 1441px) {
		body {
			/* background: #fafafa; */
		}
	}
</style>