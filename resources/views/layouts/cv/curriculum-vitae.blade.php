<x-guest-layout>
	<!-- Curriculum starts -->
	<div class="container" id="curriculum-vitae">
		<div class="carousel">
			<div class="carousel__wrapper">
				<div class="carousel__header">
					<h2 class="carousel__headline">{{__('Experiencia')}}</h2>
					<div class="carousel__controls"><button class="carousel__arrow disabled arrow-prev"></button><button class="carousel__arrow arrow-next"></button></div>
				</div>
				<ul class="carousel__content">
					@foreach($experiences as $experience)
						<li class="carousel__item">
							<div class="carousel-image">
								<img class="carousel__item__image" src="{{ $experience -> image}}" alt=""/>
							</div>
							<div class="carousel__description">
								<p class="small-text subtitle">{{ $experience -> timelapse}}</p>
								<h3 class="tracking-wide">{{ $experience -> title}}</h3>
								<div class="flex justify-between items-center">
									<p class="small-text opacity-50">{{ $experience -> company}}</p>
									@if ( $experience -> site )
										<a href="{{ $experience -> site}}" target="blank">
										<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 opacity-50">
											<path d="m23.109,15.134l-8.812-3.999c-.91-.308-1.898-.079-2.575.598-.693.692-.903,1.69-.544,2.712l3.944,8.675c.238.523.763.868,1.347.879h.019c.571,0,1.085-.317,1.342-.829l1.776-3.553,3.554-1.776c.514-.258.839-.795.829-1.369-.01-.575-.355-1.101-.879-1.338Zm-.397,1.812l-3.851,1.925-1.925,3.851c-.086.171-.245.278-.436.278-.191-.003-.388-.119-.467-.294l-3.927-8.633c-.215-.617-.098-1.212.324-1.633.28-.281.65-.433,1.048-.433.177,0,.36.03.542.093l8.675,3.944c.174.079.289.254.292.445s-.105.371-.276.457ZM12,0c-.005,0-.01,0-.016,0,0,0,0,0-.001,0C5.374.009,0,5.389,0,12s5.383,12,12,12c.174,0,.348-.004.521-.011.276-.012.49-.245.479-.521-.012-.275-.25-.496-.52-.479-.092.004-.185.007-.277.008-.568-.57-2.737-2.87-4.089-5.998h1.387c.276,0,.5-.224.5-.5s-.224-.5-.5-.5h-1.778c-.437-1.245-.722-2.594-.722-4s.285-2.755.723-4h8.557c.182.518.338,1.055.457,1.605.051.234.258.395.488.395.035,0,.07-.003.106-.011.27-.058.441-.324.383-.594-.103-.477-.231-.942-.377-1.395h4.91c.486,1.24.753,2.59.753,4,0,.16-.003.319-.01.478-.012.276.202.509.478.521.282.026.51-.201.521-.478.008-.173.011-.347.011-.522C24,5.383,18.617,0,12,0ZM1,12c0-1.41.267-2.76.753-4h4.905c-.402,1.246-.658,2.591-.658,4s.256,2.754.658,4H1.753c-.486-1.24-.753-2.59-.753-4Zm6.019,5c1.066,2.669,2.723,4.785,3.743,5.93-3.737-.42-6.914-2.72-8.559-5.93h4.816Zm0-10H2.203C3.848,3.79,7.025,1.49,10.763,1.07c-1.02,1.145-2.677,3.261-3.743,5.93Zm1.096,0c1.224-2.829,3.117-4.984,3.885-5.79.77.807,2.665,2.963,3.888,5.79h-7.773Zm8.86,0c-1.068-2.672-2.722-4.786-3.74-5.93,3.738.42,6.915,2.72,8.561,5.93h-4.821Z"/>
										</svg>
										</a>
									@endif
								</div>
								<div class="mb-6" x-data="{ expanded: false }">
									<div
										x-show="expanded"
										x-collapse.min.110px
										class="text-gray-500 wysiwyg-content"
									>
										<p class="small-text font-light">{{ $experience->description }}</p>
									</div>

									<p class="text-right" x-show="{{ strlen($experience->description) }} > 235">
										<a
											@click="expanded = !expanded"
											href="javascript:void(0)"
											class="small-text"
											x-text="expanded ? 'Leer menos' : 'Leer más'"
										></a>
									</p>
								</div>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
			<div class="subtitle flex justify-end sticky bottom-8 right-0 -z-[3]">
				<h3 class="relative origin-center text-3xl sm:text-6xl md:text-7xl font-semibold opacity-10 uppercase">{{__('Curriculum')}}</h3>
			</div>
			<div class="carousel__wrapper">
				<div class="carousel__header">
					<h2 class="carousel__headline">{{__('Educación')}}</h2>
					<div class="carousel__controls"><button class="carousel__arrow disabled arrow-prev"></button><button class="carousel__arrow arrow-next"></button></div>
				</div>
				<ul class="carousel__content">
					@foreach($educations as $education)
						<li class="carousel__item">
							<div class="carousel-image">
								<img class="carousel__item__image" src="{{ $education -> image}}" alt=""/>
							</div>
							<div class="carousel__description">
								<p class="small-text subtitle">{{ $education -> timelapse}}</p>
								<h3 class="tracking-wide">{{ $education -> title}}</h3>
								<div class="flex justify-between items-center">
									<p class="small-text opacity-50">{{ $education -> school}}</p>
									@if ( $education -> site )
										<a href="{{ $education -> site}}" target="blank">
										<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 opacity-50">
											<path d="m23.109,15.134l-8.812-3.999c-.91-.308-1.898-.079-2.575.598-.693.692-.903,1.69-.544,2.712l3.944,8.675c.238.523.763.868,1.347.879h.019c.571,0,1.085-.317,1.342-.829l1.776-3.553,3.554-1.776c.514-.258.839-.795.829-1.369-.01-.575-.355-1.101-.879-1.338Zm-.397,1.812l-3.851,1.925-1.925,3.851c-.086.171-.245.278-.436.278-.191-.003-.388-.119-.467-.294l-3.927-8.633c-.215-.617-.098-1.212.324-1.633.28-.281.65-.433,1.048-.433.177,0,.36.03.542.093l8.675,3.944c.174.079.289.254.292.445s-.105.371-.276.457ZM12,0c-.005,0-.01,0-.016,0,0,0,0,0-.001,0C5.374.009,0,5.389,0,12s5.383,12,12,12c.174,0,.348-.004.521-.011.276-.012.49-.245.479-.521-.012-.275-.25-.496-.52-.479-.092.004-.185.007-.277.008-.568-.57-2.737-2.87-4.089-5.998h1.387c.276,0,.5-.224.5-.5s-.224-.5-.5-.5h-1.778c-.437-1.245-.722-2.594-.722-4s.285-2.755.723-4h8.557c.182.518.338,1.055.457,1.605.051.234.258.395.488.395.035,0,.07-.003.106-.011.27-.058.441-.324.383-.594-.103-.477-.231-.942-.377-1.395h4.91c.486,1.24.753,2.59.753,4,0,.16-.003.319-.01.478-.012.276.202.509.478.521.282.026.51-.201.521-.478.008-.173.011-.347.011-.522C24,5.383,18.617,0,12,0ZM1,12c0-1.41.267-2.76.753-4h4.905c-.402,1.246-.658,2.591-.658,4s.256,2.754.658,4H1.753c-.486-1.24-.753-2.59-.753-4Zm6.019,5c1.066,2.669,2.723,4.785,3.743,5.93-3.737-.42-6.914-2.72-8.559-5.93h4.816Zm0-10H2.203C3.848,3.79,7.025,1.49,10.763,1.07c-1.02,1.145-2.677,3.261-3.743,5.93Zm1.096,0c1.224-2.829,3.117-4.984,3.885-5.79.77.807,2.665,2.963,3.888,5.79h-7.773Zm8.86,0c-1.068-2.672-2.722-4.786-3.74-5.93,3.738.42,6.915,2.72,8.561,5.93h-4.821Z"/>
										</svg>
										</a>
									@endif
								</div>
								<div class="mb-6" x-data="{expanded: false}">
									<div
										x-show="expanded"
										x-collapse.min.110px
										class="text-gray-500 wysiwyg-content"
									>
									<p class="small-text font-light">{{ $education -> description }}<br>
									@if ($education->certificate)
										<a href="{{ $education -> certificate }}" target="blank">Certificado</a>
									@endif
									</p>
									</div>
									<p class="text-right" x-show="{{ strlen($education -> description) }} > 235">
										<a
											@click="expanded = !expanded"
											href="javascript:void(0)"
											class="small-text"
											x-text="expanded ? 'Leer menos' : 'Leer más'"
										></a>
									</p>
								</div>
							</div>
						</li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
	<!-- Curriculum ends -->
	<!-- Portfolio starts -->
	<section id="portfolio" class="border flex flex-col gap-16 mb-12">
		<div class="subtitle flex justify-end sticky top-8 right-0 -z-[3]">
			<h3 class="relative origin-center text-3xl sm:text-6xl md:text-7xl font-semibold opacity-10 uppercase">{{__('Portfolio')}}</h3>
		</div>
		<div x-data="galleryItems()"
			@image-gallery-next.window="imageGalleryNext()"
			@image-gallery-prev.window="imageGalleryPrev()"
			@keyup.right.window="imageGalleryNext();"
			@keyup.left.window="imageGalleryPrev();"
			class="w-full h-full select-none">
			<div class="max-w-6xl mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
				<ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 mx-6 xl:mx-auto lg:grid-cols-5">
					<template x-for="(image, index) in imageGallery">
						<li>
							<div class="portfolio-card">
								<img x-on:click="imageGalleryOpen" :src="image.photo" :alt="image.alt" :data-index="index+1" 
								:data-caption="image.caption"
								:data-client="image.client"
								class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] ">
								<div class="portfolio-overlay">
									<p x-text="image.client" class="client font-semibold leading-tight pt-1 text-xs text-white uppercase relative z-[3]"></p>
									<p x-text="image.caption" class="caption leading-tight pt-1 text-white relative z-[3]"></p>
								</div>
							</div>
						</li>
					</template>
				</ul>
			</div>
			<template x-teleport="body">
				<div
					x-show="imageGalleryOpened"
					x-transition:enter="transition ease-in-out duration-300"
					x-transition:enter-start="opacity-0"
					x-transition:leave="transition ease-in-in duration-300"
					x-transition:leave-end="opacity-0"
					@click="imageGalleryClose"
					@keydown.window.escape="imageGalleryClose"
					x-trap.inert.noscroll="imageGalleryOpened"
					class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out" x-cloak>
					<div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
						<div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
							<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
						</div>
						<div class="flex flex-col justify-center items-center  py-16">
							<img
								x-show="imageGalleryOpened"
								x-transition:enter="transition ease-in-out duration-300"
								x-transition:enter-start="opacity-0 transform scale-50"
								x-transition:leave="transition ease-in-in duration-300"
								x-transition:leave-end="opacity-0 transform scale-50"
								class="object-contain object-center w-10/12 max-h-screen select-none cursor-zoom-out" :src="imageGalleryActiveUrl" :alt="imageGalleryActiveAlt"
								:data-caption="imageGalleryActiveCaption"
								style="display: none;">
								<p x-text="imageGalleryActiveCaption" class="text-white font-bold mt-2"></p>
								<p x-text="imageGalleryActiveClient" class="text-white font-bold mt-2 text-xs"></p>
						</div>
						<div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
							<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
						</div>
					</div>
				</div>
			</template>
		</div>
	</section>
	<!-- Portfolio ends -->
</x-guest-layout>

<style>
	.subtitle h3{
		font-family: "Lexend Zetta", sans-serif;
	}
	#gallery li .portfolio-card{
		position:relative;
		transition: 0.5s ease-in-out;
		display: flex;
		align-items: flex-end;
		background-color: #fff;
		box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
		transition: 0.5s ease-in-out;
	}
	#gallery li .portfolio-card:hover{
		transform: translateY(10px);
	}
	/* #gallery li .portfolio-card::after {
		content: '';
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(to bottom, rgba(0, 176, 155, 0.5), rgba(150, 201, 61, 1));
		z-index: 2;
		transition: 0.5s all;
		opacity: 0;
		mix-blend-mode: multiply;
	} */
	/* #gallery li .portfolio-card:hover::after {
		opacity: 1;
	} */
	#gallery li .portfolio-card .portfolio-overlay{
		position: absolute;
		padding: 3rem 1rem 1rem;
		z-index: 3;
		color: #000;
		opacity: 0;
		transform: translateY(20px);
		transition: 0.5s all;
		width:100%;
	}
	#gallery li .portfolio-card .portfolio-overlay::before {
		content: '';
		display: block;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
		z-index: 2;
		transition: 1s all;
		opacity: 0;
	}
	#gallery li .portfolio-card:hover .portfolio-overlay::before {
		opacity: 1;
	}
	#gallery li .portfolio-card:hover .portfolio-overlay{
		opacity: 1;
		transform: translateY(0px);
	}
</style>

<script>
	window.addEventListener('load', () => {
  const COMPONENT_SELECTOR = '.carousel__wrapper';

  const components = document.querySelectorAll(COMPONENT_SELECTOR);

  components.forEach((component) => {
    const CONTENT_SELECTOR = '.carousel__content';
    const CONTROLS_SELECTOR = '.carousel__controls';

    const content = component.querySelector(CONTENT_SELECTOR);
    let x = 0;
    let mx = 0;
    const maxScrollWidth = content.scrollWidth - content.clientWidth / 2 - content.clientWidth / 2;
    const nextButton = component.querySelector('.arrow-next');
    const prevButton = component.querySelector('.arrow-prev');

    if (maxScrollWidth !== 0) {
      component.classList.add('has-arrows');
    }

    if (nextButton) {
      nextButton.addEventListener('click', function (event) {
        event.preventDefault();
        x = content.clientWidth / 2 + content.scrollLeft + 0;
        content.scroll({
          left: x,
          behavior: 'smooth',
        });
      });
    }

    if (prevButton) {
      prevButton.addEventListener('click', function (event) {
        event.preventDefault();
        x = content.clientWidth / 2 - content.scrollLeft + 0;
        content.scroll({
          left: -x,
          behavior: 'smooth',
        });
      });
    }

    const mousemoveHandler = (e) => {
      if (!content.classList.contains('dragging')) {
        return;
      }

      const mx2 = e.pageX - content.offsetLeft;
      content.scrollLeft = content.sx + mx - mx2;
    };

    const mousedownHandler = (e) => {
      mx = e.pageX - content.offsetLeft;
      content.sx = content.scrollLeft;
      content.classList.add('dragging');
    };

    const scrollHandler = () => {
      toggleArrows();
    };

    const toggleArrows = () => {
      if (content.scrollLeft > maxScrollWidth - 10) {
        nextButton.classList.add('disabled');
      } else if (content.scrollLeft < 10) {
        prevButton.classList.add('disabled');
      } else {
        nextButton.classList.remove('disabled');
        prevButton.classList.remove('disabled');
      }
    };

    const mouseupHandler = () => {
      mx = 0;
      content.classList.remove('dragging');
    };

    content.addEventListener('mousemove', mousemoveHandler);
    content.addEventListener('mousedown', mousedownHandler);
    if (component.querySelector(CONTROLS_SELECTOR) !== undefined) {
      content.addEventListener('scroll', scrollHandler);
    }
    content.addEventListener('mouseup', mouseupHandler);
    content.addEventListener('mouseleave', mouseupHandler);
  });
});

</script>