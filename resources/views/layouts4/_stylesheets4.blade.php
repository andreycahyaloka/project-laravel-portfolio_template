<style>
/*
	z- index
		navbar					= 101
		btn_GoToTop				= 102
		scroll_indicator		= 103
		aside bg				= 104
		aside					= 105
		menu_dropdown-content	= 99

	@font-face => Formats:
		WOFF - Recommended, works in all modern browsers
		TTF - Not recommended, replaced by WOFF
		EOT - Not recommended, only necessary for IE older than IE9
		SVG - No longer supported or required for any browser
*/

	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: normal;
		src: local('Roboto'), local('Roboto-Regular'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_regular_macroman/Roboto-Regular-webfont.woff) format('woff');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: normal;
		font-weight: bold;
		src: local('Roboto'), local('Roboto-Bold'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_bold_macroman/Roboto-Bold-webfont.woff) format('woff');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: italic;
		font-weight: normal;
		src: local('Roboto'), local('Roboto-Italic'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_italic_macroman/Roboto-Italic-webfont.woff) format('woff');
	}
	@font-face {
		font-family: 'Roboto';
		font-style: italic;
		font-weight: bold;
		src: local('Roboto'), local('Roboto-Bolditalic'), url(/storage/material_design_fonts/roboto-fontfacekit/web_fonts/roboto_bolditalic_macroman/Roboto-BoldItalic-webfont.woff) format('woff');
	}

/* default variables */
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
		--elevation_shadow-1:
			0px 2px 1px -1px rgba(0, 0, 0, 0.2),
			0px 1px 1px 0px rgba(0, 0, 0, 0.14),
			0px 1px 3px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-2:
			0px 3px 1px -2px rgba(0, 0, 0, 0.2),
			0px 2px 2px 0px rgba(0, 0, 0, 0.14),
			0px 1px 5px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-3:
			0px 3px 3px -2px rgba(0, 0, 0, 0.2),
			0px 3px 4px 0px rgba(0, 0, 0, 0.14),
			0px 1px 8px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-4:
			0px 2px 4px -1px rgba(0, 0, 0, 0.2),
			0px 4px 5px 0px rgba(0, 0, 0, 0.14),
			0px 1px 10px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-6:
			0px 3px 5px -1px rgba(0, 0, 0, 0.2),
			0px 6px 10px 0px rgba(0, 0, 0, 0.14),
			0px 1px 18px 0px rgba(0, 0, 0, 0.12);
		--elevation_shadow-8:
			0px 5px 5px -3px rgba(0, 0, 0, 0.2),
			0px 8px 10px 1px rgba(0, 0, 0, 0.14),
			0px 3px 14px 2px rgba(0, 0, 0, 0.12);
		--elevation_shadow-9:
			0px 5px 6px -3px rgba(0, 0, 0, 0.2),
			0px 9px 12px 1px rgba(0, 0, 0, 0.14),
			0px 3px 16px 2px rgba(0, 0, 0, 0.12);
		--elevation_shadow-12:
			0px 7px 8px -4px rgba(0, 0, 0, 0.2),
			0px 12px 17px 2px rgba(0, 0, 0, 0.14),
			0px 5px 22px 4px rgba(0, 0, 0, 0.12);
		--elevation_shadow-16:
			0px 8px 10px -5px rgba(0, 0, 0, 0.2),
			0px 16px 24px 2px rgba(0, 0, 0, 0.14),
			0px 6px 30px 5px rgba(0, 0, 0, 0.12);
		--elevation_shadow-24:
			0px 11px 15px -7px rgba(0, 0, 0, 0.2),
			0px 24px 38px 3px rgba(0, 0, 0, 0.14),
			0px 9px 46px 8px rgba(0, 0, 0, 0.12);
	}

/* default all components */
	* {
		font-family: 'Roboto', sans-serif;
		font-size: 100%;
		margin: 0px;
		padding: 0px;
		box-sizing: border-box;
	}
	a {
		text-decoration: none;
	}
	hr {
		height: 1px;
		border: none;
		background-color: var(--color-grey-300);
	}
	/* custom scrollbar */
		/* width & height */
			::-webkit-scrollbar {
				width: 5px;
				height: 5px;
			}
		/* Track */
			::-webkit-scrollbar-track {
				background: rgba(158, 158, 158, 0.75);
			}
		/* Handle */
			::-webkit-scrollbar-thumb {
				background: rgba(97, 97, 97, 0.5);
				border-radius: 3px;
			}

/* flexbox */
	.x3-flex_container {
		display: flex;
		/* flex-wrap: wrap; */
	}
				/* flex direction */
					.flex-row {
						flex-direction: row;
					}
					.flex-column {
						flex-direction: column;
					}
				/* flex justify content */
					.flex-left {
						justify-content: flex-start;
					}
					.flex-center {
						justify-content: center;
					}
					.flex-right {
						justify-content: flex-end;
					}
					.flex-around {
						justify-content: space-around;
					}
					.flex-between {
						justify-content: space-between;
					}
				/* flex align items */
					.flex-top {
						align-items: flex-start;
					}
					.flex-middle {
						align-items: center;
					}
					.flex-bottom {
						align-items: flex-end;
					}
					.flex-stretch {
						align-items: stretch;
					}
				/* flex width */
					.flex-1 {flex: 1;} .flex-2 {flex: 2;} .flex-3 {flex: 3;} .flex-4 {flex: 4;} .flex-5 {flex: 5;} .flex-6 {flex: 6;}
					.flex-7 {flex: 7;} .flex-8 {flex: 8;} .flex-9 {flex: 9;} .flex-10 {flex: 10;} .flex-11 {flex: 11;} .flex-12 {flex: 12;}

/* text align (left / center / right) */

	.x3-main_container {
		/*  */
	}

	.x3-button {
		/*  */
	}
	.x3-button:focus {
		outline: 0px;
	}

/* main */
	/* . */

/* mobile styles */
	@media only screen and (max-width: 768px) {
		body {
			background: var(--color-grey-300);
		}

		.x3-navbar {
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
			align-items: stretch;
			flex: initial;
			width: 100%;
			height: 50px;
			position: fixed;
			top: 0px;
			right: 0px;
			color: var(--color-dark);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			z-index: 101;
		}
			.nav-container {
				display: flex;
				flex-direction: row;
				justify-content: flex-start;
				align-items: center;
				flex: initial;
				width: 100%;
				height: 100%;
				background: linear-gradient(to right, rgba(103, 58, 183, 0.5), rgba(33, 150, 243, 0.5));
				overflow-x: hidden;
				overflow-y: auto;
			}
				.nav-link {
					display: flex;
					flex-direction: row;
					justify-content: flex-start;
					align-items: center;
					flex: initial;
					width: 100%;
					height: 100%;
				}
					.nav-link button {
						display: flex;
						flex-direction: row;
						justify-content: flex-start;
						align-items: center;
						flex: initial;
						width: 36px;
						height: 36px;
						margin-left: 10px;
						border-radius: 3px;
						border: 1px solid var(--color-dark);
						color: var(--color-dark);
						background: var(--color-light);
					}
					.nav-link button:hover {
						border: 1px solid var(--color-light);
						color: var(--color-light);
						background: var(--color-dark);
					}
					.nav-link button:active {
						border: 1px solid var(--color-grey-300);
						color: var(--color-grey-300);
						background: var(--color-grey-700);
					}
						.nav-link i {
							width: 100%;
							text-align: center;
							font-size: 18px;
						}
					.nav-link p {
						font-size: 18px;
						color: var(--color-light);
						margin-left: 18px;
					}
		.x3-aside {
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			align-items: stretch;
			flex: initial;
			width: 0px;
			height: 100%;
			position: fixed;
			top: 0px;
			left: 0px;
			color: var(--color-dark);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			transition: 0.5s;
			z-index: 105;
		}
			.aside-container {
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
				align-items: center;
				flex: initial;
				width: 100%;
				height: 100%;
				background: linear-gradient(to right, rgba(103, 58, 183, 1), rgba(33, 150, 243, 1));
				overflow-x: hidden;
				overflow-y: auto;
			}
				.aside-image {
					flex: initial;
					width: 100%;
					height: 250px;
				}
					.aside-image div {
						width: 100%;
						height: 100%;
						background: linear-gradient(rgba(250, 250, 250, 0.5), rgba(250, 250, 250, 0.5)),
						url(/storage/images/image_bg4.jpg);
						background-position: top center;
						background-size: cover;
					}
				.aside-hr {
					width: 100%;
					height: 1px;
				}
					.aside-hr hr {
						width: 100%;
						height: 100%;
						border: none;
						background-color: var(--color-light);
					}
				.aside-link {
					flex: initial;
					width: 100%;
					height: calc(100% - 250px);
				}
					.aside-link a {
						display: flex;
						flex-direction: row;
						justify-content: flex-start;
						align-items: center;
						flex: initial;
						width: 100%;
						height: 50px;
						color: var(--color-light);
					}
					.aside-link a:hover {
						color: var(--color-grey-300);
						background: rgba(250, 250, 250, 0.1);
					}
					.aside-link a:active {
						color: var(--color-grey-500);
						background: rgba(33, 33, 33, 0.1);
					}
						.aside-link i {
							width: 18px;
							margin: 0px 18px;
							text-align: center;
							font-size: 14px;
						}
						.aside-link p {
							font-size: 12px;
							letter-spacing: 1px;
						}
			.aside-bg {
				width: 0px;
				height: 100%;
				position: fixed;
				top: 0px;
				left: 0px;
				opacity:0;
				background: rgba(33, 33, 33, 1);
				z-index: 104;
				opacity: 0;
				transition: opacity 1s;
			}
		.x3-scroll_indicator {
			width: 100%;
			height: 5px;
			position: fixed;
			top: 50px;
			left: 0px;
			background-color: var(--color-grey-700);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			z-index: 103;
		}
			.scroll_indicator-bar {
				width: 0%;
				height: 3px;
				margin-top: 1px;
				border-radius: 3px;
				background-color: var(--color-grey-100);
			}
		.btn-GoToTop {
			width: 36px;
			height: 36px;
			position: fixed;
			display: none;
			right: 25px;
			bottom: 25px;
			border: none;
			border-radius: 3px;
			border: 1px solid var(--color-grey-700);
			color: var(--color-grey-700);
			background-color: var(--color-light);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			z-index: 102;
		}
		.btn-GoToTop:hover {
			border: 1px solid var(--color-light);
			color: var(--color-light);
			background-color: var(--color-grey-700);
			-webkit-box-shadow: var(--elevation_shadow-8);
					box-shadow: var(--elevation_shadow-8);
		}
		.x3-content {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			color: var(--color-dark);
			overflow-x: hidden;
			overflow-y: auto;
		}
			.content-main {
				width: 100%;
				padding: 0px 24px 36px 24px;
				background-color: var(--color-light);
			}
				.main-name {
					padding-top: 100px;
					font-size: 36px;
					text-align: center;
					vertical-align: middle;
				}
				.main-subname {
					padding-top: 12px;
					font-size: 18px;
					text-align: center;
					vertical-align: middle;
					color: var(--color-grey-700);
				}
				.main-photo {
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					padding-top: 24px;
				}
					.main-photo img {
						width: auto;
						height: 250px;
						border-radius: 3px;
						-webkit-box-shadow: var(--elevation_shadow-2);
								box-shadow: var(--elevation_shadow-2);
					}
					.main-photo img:hover {
						-webkit-box-shadow: var(--elevation_shadow-8);
								box-shadow: var(--elevation_shadow-8);
					}
				.main-box {
					padding-top: 36px;
				}
					.box-title {
						font-size: 24px;
						line-height: 36px;
						text-align: left;
						border-bottom: 3px solid;
					}
					.box-paragraph {
						padding-top: 18px;
						color: var(--color-grey-500);
					}
						.box-paragraph h1 {
							font-size: 16px;
							font-weight: normal;
							letter-spacing: 1px;
							color: var(--color-grey-700);
						}
						.box-paragraph i {
							width: 36px;
							height: 24px;
							font-size: 18px;
							text-align: center;
						}
							.skill-bar {
								width: 100%;
								height: 24px;
								margin: 6px 0px 18px 0px;
								-webkit-border-radius: 3px;
									-moz-border-radius: 3px;
										border-radius: 3px;
								background: var(--color-grey-300);
							}
							.skill-bar span {
								display: block;
								height: 100%;
								-webkit-border-radius: 3px;
									-moz-border-radius: 3px;
										border-radius: 3px;
								background: var(--color-grey-500);
								overflow: hidden;
							}
						.paragraph-portfolio {
							display: flex;
							flex-wrap: wrap;
							flex-direction: row;
							justify-content: center;
							align-items: center;
							padding-top: 24px;
						}
							.paragraph-portfolio img {
								width: auto;
								height: 90px;
								border-radius: 3px;
								margin: 6px;
								-webkit-box-shadow: var(--elevation_shadow-2);
										box-shadow: var(--elevation_shadow-2);
							}
							.paragraph-portfolio img:hover {
								-webkit-box-shadow: var(--elevation_shadow-8);
										box-shadow: var(--elevation_shadow-8);
							}
			.content-footer {
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				flex: initial;
				width: 100%;
				height: 100px;
				letter-spacing: 1px;
			}
		.x3-screen_message {
			display: none;
		}
	}

/* tablet styles */
	@media only screen and (min-width: 769px) and (max-width: 1440px) {
		body {
			background: var(--color-grey-300);
		}

		.x3-navbar {
			display: flex;
			flex-direction: row;
			justify-content: flex-start;
			align-items: stretch;
			flex: initial;
			width: 100%;
			height: 60px;
			position: fixed;
			top: 0px;
			right: 0px;
			color: var(--color-dark);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			z-index: 101;
		}
			.nav-container {
				display: flex;
				flex-direction: row;
				justify-content: flex-start;
				align-items: center;
				flex: initial;
				width: 100%;
				height: 100%;
				/* background: rgba(33, 33, 33, 0.5); */
				background: linear-gradient(to right, rgba(103, 58, 183, 0.5), rgba(33, 150, 243, 0.5));
				overflow-x: hidden;
				overflow-y: auto;
			}
				.nav-link {
					display: flex;
					flex-direction: row;
					justify-content: flex-start;
					align-items: center;
					flex: initial;
					width: 100%;
					height: 100%;
				}
					.nav-link button {
						display: flex;
						flex-direction: row;
						justify-content: flex-start;
						align-items: center;
						flex: initial;
						width: 48px;
						height: 48px;
						margin-left: 5px;
						border-radius: 3px;
						border: 1px solid var(--color-dark);
						color: var(--color-dark);
						background: var(--color-light);
					}
					.nav-link button:hover {
						border: 1px solid var(--color-light);
						color: var(--color-light);
						background: var(--color-dark);
					}
					.nav-link button:active {
						border: 1px solid var(--color-grey-300);
						color: var(--color-grey-300);
						background: var(--color-grey-700);
					}
						.nav-link i {
							width: 100%;
							text-align: center;
							font-size: 24px;
						}
					.nav-link p {
						font-size: 24px;
						color: var(--color-light);
						margin-left: 24px;
					}
		.x3-aside {
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			align-items: stretch;
			flex: initial;
			width: 0px;
			height: 100%;
			position: fixed;
			top: 0px;
			left: 0px;
			color: var(--color-dark);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			transition: 0.5s;
			z-index: 105;
		}
			.aside-container {
				display: flex;
				flex-direction: column;
				justify-content: flex-start;
				align-items: center;
				flex: initial;
				width: 100%;
				height: 100%;
				background: linear-gradient(to right, rgba(103, 58, 183, 1), rgba(33, 150, 243, 1));
				overflow-x: hidden;
				overflow-y: auto;
			}
				.aside-image {
					flex: initial;
					width: 100%;
					height: 250px;
				}
					.aside-image div {
						width: 100%;
						height: 100%;
						background: linear-gradient(rgba(250, 250, 250, 0.5), rgba(250, 250, 250, 0.5)),
						url(/storage/images/image_bg4.jpg);
						background-position: top center;
						background-size: cover;
					}
				.aside-hr {
					width: 100%;
					height: 1px;
				}
					.aside-hr hr {
						width: 100%;
						height: 100%;
						border: none;
						background-color: var(--color-light);
					}
				.aside-link {
					flex: initial;
					width: 100%;
					height: calc(100% - 250px);
				}
					.aside-link a {
						display: flex;
						flex-direction: row;
						justify-content: flex-start;
						align-items: center;
						flex: initial;
						width: 100%;
						height: 50px;
						color: var(--color-light);
					}
					.aside-link a:hover {
						color: var(--color-grey-300);
						background: rgba(250, 250, 250, 0.1);
					}
					.aside-link a:active {
						color: var(--color-grey-500);
						background: rgba(33, 33, 33, 0.1);
					}
						.aside-link i {
							width: 24px;
							margin: 0px 24px;
							text-align: center;
							font-size: 24px;
						}
						.aside-link p {
							font-size: 14px;
							letter-spacing: 1px;
						}
			.aside-bg {
				width: 0px;
				height: 100%;
				position: fixed;
				top: 0px;
				left: 0px;
				opacity:0;
				background: rgba(33, 33, 33, 1);
				z-index: 104;
				opacity: 0;
				transition: opacity 1s;
			}
		.x3-scroll_indicator {
			width: 100%;
			height: 5px;
			position: fixed;
			top: 60px;
			left: 0px;
			background-color: var(--color-grey-700);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			z-index: 103;
		}
			.scroll_indicator-bar {
				width: 0%;
				height: 3px;
				margin-top: 1px;
				border-radius: 3px;
				background-color: var(--color-grey-100);
			}
		.btn-GoToTop {
			width: 48px;
			height: 48px;
			position: fixed;
			display: none;
			right: 25px;
			bottom: 25px;
			border: none;
			border-radius: 3px;
			border: 1px solid var(--color-grey-700);
			color: var(--color-grey-700);
			background-color: var(--color-light);
			-webkit-box-shadow: var(--elevation_shadow-2);
					box-shadow: var(--elevation_shadow-2);
			z-index: 102;
		}
		.btn-GoToTop:hover {
			border: 1px solid var(--color-light);
			color: var(--color-light);
			background-color: var(--color-grey-700);
			-webkit-box-shadow: var(--elevation_shadow-8);
					box-shadow: var(--elevation_shadow-8);
		}
		.x3-content {
			width: 100%;
			height: 100%;
			position: absolute;
			top: 0px;
			left: 0px;
			color: var(--color-dark);
			overflow-x: hidden;
			overflow-y: auto;
		}
			.content-main {
				width: 100%;
				padding: 0px 48px 48px 48px;
				background-color: var(--color-light);
			}
				.main-name {
					padding-top: 150px;
					font-size: 48px;
					text-align: center;
					vertical-align: middle;
				}
				.main-subname {
					padding-top: 12px;
					font-size: 18px;
					text-align: center;
					vertical-align: middle;
					color: var(--color-grey-700);
				}
				.main-photo {
					display: flex;
					flex-direction: column;
					justify-content: center;
					align-items: center;
					padding-top: 24px;
				}
					.main-photo img {
						width: auto;
						height: 500px;
						border-radius: 3px;
						-webkit-box-shadow: var(--elevation_shadow-2);
								box-shadow: var(--elevation_shadow-2);
					}
					.main-photo img:hover {
						-webkit-box-shadow: var(--elevation_shadow-8);
								box-shadow: var(--elevation_shadow-8);
					}
				.main-box {
					padding-top: 48px;
				}
					.box-title {
						font-size: 24px;
						line-height: 48px;
						text-align: left;
						border-bottom: 3px solid;
					}
					.box-paragraph {
						padding-top: 24px;
						color: var(--color-grey-500);
					}
						.box-paragraph h1 {
							font-size: 18px;
							font-weight: normal;
							letter-spacing: 3px;
							color: var(--color-grey-700);
						}
						.box-paragraph i {
							width: 48px;
							height: 36px;
							font-size: 24px;
							text-align: center;
						}
							.skill-bar {
								width: 100%;
								height: 24px;
								margin: 12px 0px 24px 0px;
								-webkit-border-radius: 3px;
									-moz-border-radius: 3px;
										border-radius: 3px;
								background: var(--color-grey-300);
							}
							.skill-bar span {
								display: block;
								height: 100%;
								-webkit-border-radius: 3px;
									-moz-border-radius: 3px;
										border-radius: 3px;
								background: var(--color-grey-500);
								overflow: hidden;
							}
						.paragraph-portfolio {
							display: flex;
							flex-wrap: wrap;
							flex-direction: row;
							justify-content: center;
							align-items: center;
							padding-top: 24px;
						}
							.paragraph-portfolio img {
								width: auto;
								height: 150px;
								border-radius: 3px;
								margin: 24px;
								-webkit-box-shadow: var(--elevation_shadow-2);
										box-shadow: var(--elevation_shadow-2);
							}
							.paragraph-portfolio img:hover {
								-webkit-box-shadow: var(--elevation_shadow-8);
										box-shadow: var(--elevation_shadow-8);
							}
			.content-footer {
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				flex: initial;
				width: 100%;
				height: 250px;
				letter-spacing: 1px;
			}
		.x3-screen_message {
			display: none;
		}
	}

/* desktop styles */
	@media only screen and (min-width: 1441px) {
		.x3-navbar, .x3-scroll_indicator, .btn-GoToTop, .x3-content {
			display: none;
		}
		.x3-screen_message {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			flex: initial;
			width: 100%;
			height: 100%;
			position: fixed;
			top: 0px;
			left: 0px;
			font-size: 125%;
			font-weight: lighter;
			letter-spacing: 5px;
			color: var(--color-grey-300);
			background: var(--color-grey-700);
		}
	}

</style>