<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php
		while (have_posts()) :
			the_post();

			do_action('storefront_page_before');

			get_template_part('content', 'page');

			/**
			 * Functions hooked in to storefront_page_after action
			 *
			 * @hooked storefront_display_comments - 10
			 */
			do_action('storefront_page_after');

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<div class="container mx-auto px-4 py-8 space-y-8">
		<div class="flex flex-col overflow-scroll h-screen">
			<div class="flex">
				<div class="w-40 h-40 bg-slate-50"></div>
				<div class="w-40 h-40 bg-slate-100"></div>
				<div class="w-40 h-40 bg-slate-200"></div>
				<div class="w-40 h-40 bg-slate-300"></div>
				<div class="w-40 h-40 bg-slate-400"></div>
				<div class="w-40 h-40 bg-slate-500"></div>
				<div class="w-40 h-40 bg-slate-600"></div>
				<div class="w-40 h-40 bg-slate-700"></div>
				<div class="w-40 h-40 bg-slate-800"></div>
				<div class="w-40 h-40 bg-slate-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-stone-50"></div>
				<div class="w-40 h-40 bg-stone-100"></div>
				<div class="w-40 h-40 bg-stone-200"></div>
				<div class="w-40 h-40 bg-stone-300"></div>
				<div class="w-40 h-40 bg-stone-400"></div>
				<div class="w-40 h-40 bg-stone-500"></div>
				<div class="w-40 h-40 bg-stone-600"></div>
				<div class="w-40 h-40 bg-stone-700"></div>
				<div class="w-40 h-40 bg-stone-800"></div>
				<div class="w-40 h-40 bg-stone-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-red-50"></div>
				<div class="w-40 h-40 bg-red-100"></div>
				<div class="w-40 h-40 bg-red-200"></div>
				<div class="w-40 h-40 bg-red-300"></div>
				<div class="w-40 h-40 bg-red-400"></div>
				<div class="w-40 h-40 bg-red-500"></div>
				<div class="w-40 h-40 bg-red-600"></div>
				<div class="w-40 h-40 bg-red-700"></div>
				<div class="w-40 h-40 bg-red-800"></div>
				<div class="w-40 h-40 bg-red-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-orange-50"></div>
				<div class="w-40 h-40 bg-orange-100"></div>
				<div class="w-40 h-40 bg-orange-200"></div>
				<div class="w-40 h-40 bg-orange-300"></div>
				<div class="w-40 h-40 bg-orange-400"></div>
				<div class="w-40 h-40 bg-orange-500"></div>
				<div class="w-40 h-40 bg-orange-600"></div>
				<div class="w-40 h-40 bg-orange-700"></div>
				<div class="w-40 h-40 bg-orange-800"></div>
				<div class="w-40 h-40 bg-orange-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-amber-50"></div>
				<div class="w-40 h-40 bg-amber-100"></div>
				<div class="w-40 h-40 bg-amber-200"></div>
				<div class="w-40 h-40 bg-amber-300"></div>
				<div class="w-40 h-40 bg-amber-400"></div>
				<div class="w-40 h-40 bg-amber-500"></div>
				<div class="w-40 h-40 bg-amber-600"></div>
				<div class="w-40 h-40 bg-amber-700"></div>
				<div class="w-40 h-40 bg-amber-800"></div>
				<div class="w-40 h-40 bg-amber-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-yellow-50"></div>
				<div class="w-40 h-40 bg-yellow-100"></div>
				<div class="w-40 h-40 bg-yellow-200"></div>
				<div class="w-40 h-40 bg-yellow-300"></div>
				<div class="w-40 h-40 bg-yellow-400"></div>
				<div class="w-40 h-40 bg-yellow-500"></div>
				<div class="w-40 h-40 bg-yellow-600"></div>
				<div class="w-40 h-40 bg-yellow-700"></div>
				<div class="w-40 h-40 bg-yellow-800"></div>
				<div class="w-40 h-40 bg-yellow-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-lime-50"></div>
				<div class="w-40 h-40 bg-lime-100"></div>
				<div class="w-40 h-40 bg-lime-200"></div>
				<div class="w-40 h-40 bg-lime-300"></div>
				<div class="w-40 h-40 bg-lime-400"></div>
				<div class="w-40 h-40 bg-lime-500"></div>
				<div class="w-40 h-40 bg-lime-600"></div>
				<div class="w-40 h-40 bg-lime-700"></div>
				<div class="w-40 h-40 bg-lime-800"></div>
				<div class="w-40 h-40 bg-lime-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-green-50"></div>
				<div class="w-40 h-40 bg-green-100"></div>
				<div class="w-40 h-40 bg-green-200"></div>
				<div class="w-40 h-40 bg-green-300"></div>
				<div class="w-40 h-40 bg-green-400"></div>
				<div class="w-40 h-40 bg-green-500"></div>
				<div class="w-40 h-40 bg-green-600"></div>
				<div class="w-40 h-40 bg-green-700"></div>
				<div class="w-40 h-40 bg-green-800"></div>
				<div class="w-40 h-40 bg-green-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-teal-50"></div>
				<div class="w-40 h-40 bg-teal-100"></div>
				<div class="w-40 h-40 bg-teal-200"></div>
				<div class="w-40 h-40 bg-teal-300"></div>
				<div class="w-40 h-40 bg-teal-400"></div>
				<div class="w-40 h-40 bg-teal-500"></div>
				<div class="w-40 h-40 bg-teal-600"></div>
				<div class="w-40 h-40 bg-teal-700"></div>
				<div class="w-40 h-40 bg-teal-800"></div>
				<div class="w-40 h-40 bg-teal-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-sky-50"></div>
				<div class="w-40 h-40 bg-sky-100"></div>
				<div class="w-40 h-40 bg-sky-200"></div>
				<div class="w-40 h-40 bg-sky-300"></div>
				<div class="w-40 h-40 bg-sky-400"></div>
				<div class="w-40 h-40 bg-sky-500"></div>
				<div class="w-40 h-40 bg-sky-600"></div>
				<div class="w-40 h-40 bg-sky-700"></div>
				<div class="w-40 h-40 bg-sky-800"></div>
				<div class="w-40 h-40 bg-sky-900"></div>
			</div>
			<hr class="my-4">
			<div class="flex">
				<div class="w-40 h-40 bg-blue-50"></div>
				<div class="w-40 h-40 bg-blue-100"></div>
				<div class="w-40 h-40 bg-blue-200"></div>
				<div class="w-40 h-40 bg-blue-300"></div>
				<div class="w-40 h-40 bg-blue-400"></div>
				<div class="w-40 h-40 bg-blue-500"></div>
				<div class="w-40 h-40 bg-blue-600"></div>
				<div class="w-40 h-40 bg-blue-700"></div>
				<div class="w-40 h-40 bg-blue-800"></div>
				<div class="w-40 h-40 bg-blue-900"></div>
			</div>
		</div>
		<div class="flex flex-col overflow-scroll h-screen">
			<div class="font-druk-wide font-medium text-xs text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-xs text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-xs text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-sm text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-sm text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-ms text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-base text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-base text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-base text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-lg text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-lg text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-lg text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-2xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-2xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-2xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-3xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-3xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-3xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-4xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-4xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-4xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-5xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-5xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-5xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-6xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-6xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-6xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-7xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-7xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-7xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-8xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-8xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-8xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-9xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-9xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-9xl text-nowrap text-black">BECOME UNSTOPPABLE</div>
		</div>
		<div class="flex flex-col overflow-scroll h-screen">
			<div class="font-druk-wide font-medium text-xs italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-xs italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-xs italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-sm italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-sm italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-ms italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-base italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-base italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-base italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-lg italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-lg italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-lg italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-2xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-2xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-2xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-3xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-3xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-3xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-4xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-4xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-4xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-5xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-5xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-5xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-6xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-6xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-6xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-7xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-7xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-7xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-8xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-8xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-8xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<hr class="my-4">
			<div class="font-druk-wide font-medium text-9xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-bold text-9xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
			<div class="font-druk-wide font-black text-9xl italic text-nowrap text-black">BECOME UNSTOPPABLE</div>
		</div>
		<div class="flex flex-col overflow-scroll h-screen">
			<div class="font-sans font-thin text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-xs text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-sm text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-base text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-lg text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-2xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-3xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-4xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-5xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-6xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-7xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-8xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-9xl text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
		</div>
		<div class="flex flex-col overflow-scroll h-screen">
			<div class="font-sans font-thin text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-xs italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-sm italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-base italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-lg italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-2xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-3xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-4xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-5xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-6xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-7xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-8xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<hr class="my-4">
			<div class="font-sans font-thin text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extralight text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-light text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-normal text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-medium text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-semibold text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-bold text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-extrabold text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
			<div class="font-sans font-black text-9xl italic text-nowrap text-black">The Career Academy is an internationally recognised online education provider.</div>
		</div>
	</div>

</div><!-- #primary -->

<?php
do_action('storefront_sidebar');
get_footer();