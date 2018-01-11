<!-- jquery -->
<script src="{{ asset('storage/jquery/jquery-3.2.1.min.js') }}" crossorigin="anonymous"></script>



<script>
// javascript
	// document.getElementById('x').height;
	// this.height;
	// var scrollPercentage = 100 * window.scrollTop / (document.scrollHeight-window.clientHeight);

// jquery
	// $('x').height();
	// $(this).height();
	// var scrollPercent = 100 * $(window).scrollTop() / ($(document).height() - $(window).height());



// sidenav
	/* Set the width of the side navigation to 250px */
	function openAside() {
		document.getElementById("myAside").style.width = "250px";
		document.getElementById("myAside").style.opacity = "1";
	}
	// side navbar background
	function openAsideBG() {
		document.getElementById("myAsideBG").style.width = "100%";
		document.getElementById("myAsideBG").style.opacity = "0.75";
	}
	/* Set the width of the side navigation to 0 */
	function closeAside() {
		document.getElementById("myAside").style.width = "0%";
		document.getElementById("myAside").style.opacity = "0";
		document.getElementById("myAsideBG").style.width = "0%";
		document.getElementById("myAsideBG").style.opacity = "0";
	}

	$(document).ready(function($) {
		$('#content-id').scroll(function($) {
// scroll indicator
			myScroll_indicator();

// gototop show button
			myGoToTop_button();
		});
	});

// scroll indicator
	function myScroll_indicator() {
		var divParentScroll = $('#content-id').scrollTop();
		var divChildHeight = $('#content_scroll-id').height();
		var divParentHeight = $('#content-id').height();
		var height = divChildHeight - divParentHeight;
		var scrollValue = divParentScroll / height;
		var scrollPercent = scrollValue * 100;
		// javascript
		// document.getElementById('myScroll_indicatorBar').style.width = scrolled + "%";
		// jquery
		$('#myScroll_indicatorBar').css('width', scrollPercent + '%');
	};

// gototop show button
	function myGoToTop_button() {
		if ($('#content-id').scrollTop() >= 500) {
			document.getElementById('buttonGoToTop').style.display = 'block';
		} else {
			document.getElementById('buttonGoToTop').style.display = 'none';
		}
	}
// gototop
	function myGoToTop() {
		// document.getElementById('content-id').scrollTop = 0;
		// $('#content-id').scrollTop(0);
		$('#content-id').animate({scrollTop:0}, 500);
	}

</script>