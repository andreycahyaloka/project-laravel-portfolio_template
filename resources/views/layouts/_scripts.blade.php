<!-- Scripts -->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->

<!-- jquery -->
<script src="{{ asset('storage/jquery/jquery-3.2.1.min.js') }}" crossorigin="anonymous"></script>

<script>
	// 

	window.onscroll = function() {
		// When the user scrolls the page, execute myScroll_indicatorFunction
		myScroll_indicator();

		// When the user scrolls down 100px from the top of the document, show the go_to_top button
		myGoToTopShowButton();
	};

// progress bar
	function myScroll_indicator() {
		var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
		var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		var scrolled = (winScroll / height) * 100;
		document.getElementById("myScroll_indicatorBar").style.width = scrolled + "%";
	}

// button go to top
	function myGoToTopShowButton() {
		if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
			document.getElementById("buttonGoToTop").style.display = "block";
		} else {
			document.getElementById("buttonGoToTop").style.display = "none";
		}
	}
	// When the user clicks on the button, scroll to the top of the document
	function myGoToTop() {
		document.body.scrollTop = 0; // For Safari
		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
	}
</script>