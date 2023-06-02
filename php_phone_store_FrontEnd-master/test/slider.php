<div class="slider">
	<div class="slide-Show-Container">
		<div class="slide-Show">
			<div class="slide-image">
				<img src="../pic/iphoneslide.webp" alt="iphone 14 pro">
			</div>
			<div class="slide-detail">
				<h2>Iphone 14 promax</h2>
				<div class="slide-info">Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13</div>
				<div class="slide-price"><small>666.00$</small>99.00$</div>
				<div class="btn-shopping"><button>Add to cart</button></div>
			</div>
		</div>
		<div class="slide-Show">
			<div class="slide-image">
				<img src="../pic/vivoslider4.jpg" alt="iphone 14 pro">
			</div>
			<div class="slide-detail">
				<h2>Iphone 14 promax</h2>
				<div class="slide-info">Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13</div>
				<div class="slide-price"><small>666.00$</small>99.00$</div>
				<div class="btn-shopping"><button>Add to cart</button></div>
			</div>
		</div>
		<div class="slide-Show">
			<div class="slide-image">
				<img src="../pic/banner.jpg" alt="iphone 14 pro">
			</div>
			<div class="slide-detail">
				<h2>Iphone 14 promax</h2>
				<div class="slide-info">Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13</div>
				<div class="slide-price"><small>666.00$</small>99.00$</div>
				<div class="btn-shopping"><button>Add to cart</button></div>
			</div>
		</div>
		<div class="slide-Show">
			<div class="slide-image">
				<img src="../pic/samsungslider3.jpg" alt="iphone 14 pro">
			</div>
			<div class="slide-detail">
				<h2>Iphone 14 promax</h2>
				<div class="slide-info">Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13</div>
				<div class="slide-price"><small>666.00$</small>99.00$</div>
				<div class="btn-shopping"><button>Add to cart</button></div>
			</div>
		</div>
		<div class="slide-Show">
			<div class="slide-image">
				<img src="../pic/samsungbanner3.jpeg" alt="iphone 14 pro">
			</div>
			<div class="slide-detail">
				<h2>Iphone 14 promax</h2>
				<div class="slide-info">Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13</div>
				<div class="slide-price"><small>666.00$</small>99.00$</div>
				<div class="btn-shopping"><button>Add to cart</button></div>
			</div>
		</div>
		<div class="slide-Show">
			<div class="slide-image">
				<img src="../pic/samsungbanner3.jpeg" alt="iphone 14 pro">
			</div>
			<div class="slide-detail">
				<h2>Iphone 14 promax</h2>
				<div class="slide-info">Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13</div>
				<div class="slide-price"><small>666.00$</small>99.00$</div>
				<div class="btn-shopping"><button>Add to cart</button></div>
			</div>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		<div class="row">
			<div class="column">
			  <img class="demo cursor" src="../pic/iphoneslide.webp" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
			</div>
			<div class="column">
			  <img class="demo cursor" src="../pic/vivoslider4.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
			</div>
			<div class="column">
			  <img class="demo cursor" src="../pic/banner.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
			</div>
			<div class="column">
			  <img class="demo cursor" src="../pic/samsungslider3.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
			</div>
			<div class="column">
			  <img class="demo cursor" src="../pic/samsungbanner3.jpeg" style="width:100%" onclick="currentSlide(5)" alt="Northern Lights">
			</div>
			<div class="column">
			  <img class="demo cursor" src="../pic/samsungbanner3.jpeg" style="width:100%" onclick="currentSlide(6)" alt="Northern Lights">
			</div>
		</div>
	</div>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide-Show");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
	slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
	dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>