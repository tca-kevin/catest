<?php

function menu_build_array($menu_items)
{
	$menu_array = [];

	foreach ($menu_items as $menu_item) {
		if ($menu_item->menu_item_parent) {
			$menu_depth = 1;
			$menu_array = menu_find_parent(
				$menu_array,
				$menu_item->menu_item_parent,
				$menu_item,
				$menu_depth
			);
		} else {
			$menu_array[$menu_item->ID]['title'] = $menu_item->title;
			$menu_array[$menu_item->ID]['url'] = $menu_item->url;
			$menu_array[$menu_item->ID]['depth'] = 1;
		}
	}

	return $menu_array;
}

function menu_find_parent($menu_array, $menu_parent_id, $menu_current_item, $menu_depth)
{
	foreach ($menu_array as $menu_index => $menu_item) {
		if (isset($menu_item['children'])) {
			$menu_array[$menu_index]['children'] = menu_find_parent(
				$menu_item['children'],
				$menu_parent_id,
				$menu_current_item,
				$menu_depth + 1
			);
		}

		if ($menu_index == $menu_parent_id) {
			$menu_array[$menu_index]['children'][$menu_current_item->ID]['title'] = $menu_current_item->title;
			$menu_array[$menu_index]['children'][$menu_current_item->ID]['url'] = $menu_current_item->url;
			$menu_array[$menu_index]['children'][$menu_current_item->ID]['depth'] = $menu_depth + 1;

			return $menu_array;
		}
	}

	return $menu_array;
}

$menu_items = wp_get_nav_menu_items(get_nav_menu_locations()['header-menu']);

$menu_array = menu_build_array($menu_items);
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="container mx-auto px-4">
		<a href="<?php echo home_url(); ?>">
			<svg class="w-52" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1190.55 554.68">
				<g>
					<polygon points="512.01 203.1 534.03 203.1 534.03 133.19 564.31 133.19 564.31 115.72 481.73 115.72 481.73 133.19 512.01 133.19 512.01 203.1"></polygon>
					<path d="M596.04,172.82c0-11.2,5.9-17.6,15.87-17.6s14.4,5.54,14.4,16.37v31.51h21.05v-33.72c0-19.44-9.23-29.78-26.46-29.78-11.44,0-20.18,4.8-24.86,13.91v-37.78h-21.05v87.38h21.05v-30.27Z"></path>
					<path d="M524.46,321.36c26.73,0,42.18-13.41,46.15-33.23h-22.89c-2.56,9.47-10.34,15.75-22.77,15.75-16.49,0-26.58-11.32-26.58-28.67s9.84-28.8,26.09-28.8c12.92,0,21.04,6.34,23.26,18.28h22.64c-2.34-20.66-18.89-35.63-45.41-35.63-29.91,0-49.48,18.58-49.48,46.4s18.22,45.9,48.99,45.9Z"></path>
					<path d="M650.13,281.86c0-17.85-10.71-26.34-34.09-26.34-20.8,0-34.46,8.49-36.06,22.52h21.54c.86-6.15,5.9-9.48,14.4-9.48s13.04,3.32,13.04,10.21v1.85l-22.89,2.09c-10.96,1.11-17.11,2.95-21.42,5.91-4.31,3.07-6.64,7.75-6.64,13.41,0,11.57,9.72,18.71,25.23,18.71,13.04,0,22.64-4.55,26.7-12.31,0,3.69,.37,7.51,.86,10.46h20.8c-.99-4.31-1.48-10.09-1.48-17.97v-19.08Zm-20.68,12.68c0,8.12-7.39,13.41-18.22,13.41-7.26,0-11.69-2.71-11.69-7.26,0-4.8,3.57-7.26,12.92-8.37l16.98-1.72v3.94Z"></path>
					<path d="M667.09,257.36v61.53h21.05v-23.14c0-6.77,1.48-12.43,5.54-16.25,3.07-2.95,7.63-4.68,14.15-4.68,2.34,0,4.19,.12,6.28,.49v-19.2c-1.23-.25-2.22-.37-4.06-.37-12.06,0-20.31,6.89-23.75,18.58v-16.98h-19.2Z"></path>
					<path d="M719.51,288.62c0,20.18,14.52,32.12,38.52,32.12,20.96,0,32-8.64,34.96-19.73h-19.87c-1.66,2.64-6.6,5.33-14.6,5.33-11.2,0-18.22-5.05-18.83-13.54h53.91v-4.92c0-20.31-13.41-32.37-36.8-32.37s-37.29,12.43-37.29,33.11Zm37.04-21.05c9.84,0,16.37,5.05,16.37,13.54v.25h-33.35c.62-8.62,6.89-13.78,16.98-13.78Z"></path>
					<path d="M934.96,275.33v-19.2c-1.23-.25-2.22-.37-4.06-.37-12.06,0-20.31,6.89-23.75,18.58v-16.98h-19.2v61.53h21.05v-23.14c0-6.77,1.48-12.43,5.54-16.25,3.07-2.95,7.63-4.68,14.15-4.68,2.34,0,4.19,.12,6.28,.49Z"></path>
					<path d="M612.72,386.21c8.49,0,14.03,3.94,15.75,11.32l20.8,.02c-2.41-14.74-14.58-26.23-35.94-26.23-24,0-38.89,12.31-38.89,32.49s15.14,32.74,38.52,32.74c22.03,0,33.58-10.21,36.3-25.03h-20.8c-1.86,6.18-7.14,9.89-15.63,9.89-10.46,0-16.86-6.64-16.86-17.97s6.27-17.23,16.73-17.23Z"></path>
					<path d="M729.2,397.66c0-17.85-10.71-26.34-34.09-26.34-20.8,0-34.46,8.49-36.06,22.52h21.54c.87-6.15,5.91-9.48,14.4-9.48s13.04,3.32,13.04,10.21v1.85l-22.89,2.09c-10.96,1.11-17.11,2.95-21.42,5.91-4.31,3.07-6.64,7.75-6.64,13.41,0,11.57,9.72,18.71,25.23,18.71,13.04,0,22.64-4.55,26.7-12.31,0,3.69,.37,7.51,.86,10.46h20.8c-.99-4.31-1.48-10.09-1.48-17.97v-19.08Zm-20.68,12.68c0,8.12-7.39,13.41-18.22,13.41-7.26,0-11.69-2.71-11.69-7.26,0-4.8,3.57-7.26,12.92-8.37l16.98-1.72v3.94Z"></path>
					<path d="M795.76,381.9c-4.8-7.02-12.8-10.58-23.51-10.58-18.83,0-31.63,13.04-31.63,32.61s12.55,32.61,30.64,32.61c11.57,0,20.8-4.92,25.35-13.04v11.2h20.18v-87.38h-21.05v34.58Zm.37,24.25c0,9.72-6.77,16.24-16.74,16.24-10.46,0-16.98-7.26-16.98-18.71s6.15-18.22,16.61-18.22,17.11,6.28,17.11,16.62v4.06Z"></path>
					<path d="M1006.04,371.32c-10.83,0-19.07,4.8-24.12,14.28-3.69-9.6-10.95-14.28-21.78-14.28s-18.59,4.67-22.77,14.15v-12.31h-20.43v61.53h21.05v-31.87c0-9.97,4.92-15.75,13.17-15.75s11.81,4.92,11.81,15.01v32.61h21.05v-32.24c0-9.72,4.92-15.38,13.17-15.38s11.81,4.92,11.81,15.01v32.61h21.05v-36.43c0-17.35-8.61-26.95-24-26.95Z"></path>
					<path d="M1090.72,373.16l-14.97,37.78c-.98,2.95-1.48,4.55-1.84,6.77h-.37c-.49-2.58-.86-4.18-1.97-6.89l-13.95-37.66h-23.26l28.1,60.6-16.16,30.75h23.62l42.59-91.35h-21.78Z"></path>
					<path d="M511.72,347.32l-42.03,87.38h26.77l6.9-17.29h38.34l6.82,17.29h26.99l-42.05-87.38h-21.76Zm-1.98,54.12l6.7-16.8c2.85-6.76,4.67-12.18,5.97-18.54h.39c1.3,6.36,3.12,11.78,5.97,18.54l6.63,16.8h-25.67Z"></path>
					<path d="M839.36,320.74c20.96,0,32-8.64,34.96-19.73h-19.87c-1.66,2.64-6.6,5.33-14.6,5.33-11.2,0-18.22-5.05-18.83-13.54h53.91v-4.92c0-20.31-13.41-32.37-36.8-32.37s-37.29,12.43-37.29,33.11,14.52,32.12,38.52,32.12Zm-1.48-53.17c9.84,0,16.37,5.05,16.37,13.54v.25h-33.35c.62-8.62,6.89-13.78,16.98-13.78Z"></path>
					<path d="M867.12,371.32c-22.65,0-37.29,12.43-37.29,33.11s14.52,32.12,38.52,32.12c20.96,0,32-8.64,34.96-19.73h-19.87c-1.66,2.64-6.6,5.33-14.6,5.33-11.2,0-18.22-5.05-18.83-13.54h53.91v-4.92c0-20.31-13.41-32.37-36.8-32.37Zm16.12,25.84h-33.35c.62-8.62,6.89-13.78,16.98-13.78s16.37,5.05,16.37,13.54v.25Z"></path>
					<path d="M696.81,204.94c20.96,0,32-8.64,34.96-19.73h-19.87c-1.66,2.64-6.6,5.33-14.6,5.33-11.2,0-18.22-5.05-18.83-13.54h53.91v-4.92c0-20.31-13.41-32.37-36.8-32.37s-37.29,12.43-37.29,33.11,14.52,32.12,38.52,32.12Zm-1.48-53.17c9.84,0,16.37,5.05,16.37,13.54v.25h-33.35c.62-8.62,6.89-13.78,16.98-13.78Z"></path>
				</g>
				<path d="M392.52,114.79h-25.11v-19.05c0-3.66-2.97-6.63-6.63-6.63-35.49,0-79.65,15.34-106.58,42.02-4.13,4.09-7.74,8.55-11.08,14.43-3.21-5.77-6.88-10.25-10.96-14.31-26.91-26.76-71.16-42.14-106.7-42.14-3.66,0-6.63,2.97-6.63,6.63v19.05h-25.11c-3.66,0-6.63,2.97-6.63,6.63v189.09c0,86.03,69.99,156.02,156.01,156.02s156.01-69.99,156.01-156.02V121.41c0-3.66-2.97-6.63-6.63-6.63Zm-142.76,43.84c8.26-15.41,24.3-29.6,45.36-40.1,18.48-9.21,39.64-14.9,59.05-15.98v168.82c-23.25,.95-45.3,6.89-65.63,17.7-14.4,7.65-27.56,17.65-38.77,29.37V158.62Zm-6.63,184.67c2.58,0,4.91-1.14,6.19-2.37,10.53-10.1,22.88-16.28,39.17-19.99-4.75,20.94-23.34,36.12-45.37,36.12s-40.62-15.18-45.37-36.12c16.29,3.71,28.64,9.9,39.17,19.99,1.28,1.23,3.4,2.37,6.19,2.37Zm0,45.83c-41.15,0-74.88-31.31-78.22-71.88,6.82,.19,13.12,.62,18.98,1.33,3.98,29.62,29.11,51.73,59.24,51.73s55.26-22.11,59.24-51.73c5.85-.7,12.16-1.14,18.98-1.33-3.34,40.57-37.06,71.88-78.22,71.88Zm91.5-71.99h18.91c-1.58,27.35-13.09,52.83-32.74,72.2-20.83,20.54-48.42,31.86-77.68,31.86s-56.85-11.31-77.68-31.86c-19.64-19.37-31.16-44.86-32.74-72.21h18.91c1.58,22.67,11.4,43.76,27.88,59.61,17.18,16.53,39.77,25.63,63.62,25.63s46.44-9.1,63.62-25.63c16.48-15.86,26.3-36.94,27.88-59.61ZM132.1,102.55c19.41,1.08,40.57,6.77,59.05,15.98,21.05,10.49,37.09,24.69,45.36,40.1v159.81c-11.21-11.72-24.38-21.72-38.77-29.37-20.34-10.81-42.39-16.75-65.63-17.7V102.55Zm-31.73,25.49h18.48s0,149.82,0,149.82c0,3.66,2.97,6.63,6.63,6.63,23.5,0,45.31,5.78,66.04,15.79,9.65,4.66,17.94,9.92,24.47,14.95-11.04-4.83-20.66-7.79-30.31-9.38-9.77-1.61-16.43-1.96-28.75-1.96h-56.55V128.04ZM243.13,453.26c-76.5,0-139.13-60.48-142.6-136.14h18.92c1.6,30.92,14.52,59.76,36.7,81.64,23.33,23.01,54.22,35.68,86.98,35.68s63.66-12.67,86.98-35.68c22.18-21.88,35.1-50.72,36.7-81.64h18.92c-3.47,75.66-66.11,136.14-142.6,136.14Zm142.76-149.39h-56.55c-12.33,0-18.98,.36-28.75,1.96-9.66,1.59-19.27,4.55-30.31,9.38,6.53-5.02,14.82-10.28,24.47-14.95,20.73-10.01,42.54-15.79,66.04-15.79,3.66,0,6.63-2.97,6.63-6.63V128.03h18.48v175.84Z"></path>
				<g>
					<polygon points="177.2 178.32 191.36 178.32 191.36 156.91 204.81 156.91 204.81 147.15 163.75 147.15 163.75 156.91 177.2 156.91 177.2 178.32"></polygon>
					<path d="M185.56,221.04h1.55c6.89,0,13.85-2.05,16.14-3.26v-11.05c-1.63,1.13-8.43,4.09-16.6,4.09-8.74,0-11.08-3.41-11.08-6.88v-.51c0-3.38,3.08-6.64,11.31-6.64s14.3,2.82,16.37,4.03v-11.06c-3.03-1.38-9.19-2.93-15.81-2.93h-.58c-20.57,0-25.44,9.95-25.44,16.19v1.26c0,6.2,3.78,16.74,24.14,16.74Z"></path>
					<path d="M193.58,229.45h-19.53l-15,31.17h14.6l1.93-4.32h16.63l1.97,4.32h15.36l-15.96-31.17Zm-14.63,19.12l4.83-11.16,4.93,11.16h-9.76Z"></path>
				</g>
				<g>
					<path d="M280.7,176.82c1.46,0,2.92-.48,4.15-1.46,11.54-9.27,23.26-14.6,39.75-18.12,3.58-.76,5.86-4.29,5.1-7.86-.76-3.58-4.28-5.86-7.86-5.1-18.53,3.96-32.12,10.17-45.28,20.75-2.85,2.29-3.31,6.46-1.01,9.32,1.31,1.63,3.23,2.48,5.17,2.48Z"></path>
					<path d="M280.7,218.02c1.46,0,2.92-.48,4.15-1.46,11.54-9.27,23.26-14.6,39.75-18.12,3.58-.76,5.86-4.29,5.1-7.86-.76-3.58-4.28-5.86-7.86-5.1-18.53,3.96-32.12,10.17-45.28,20.75-2.85,2.29-3.31,6.46-1.01,9.32,1.31,1.63,3.23,2.48,5.17,2.48Z"></path>
					<path d="M280.7,259.23c1.46,0,2.92-.48,4.15-1.46,11.54-9.27,23.26-14.6,39.75-18.12,3.58-.76,5.86-4.29,5.1-7.86-.76-3.58-4.28-5.86-7.86-5.1-18.53,3.96-32.12,10.17-45.28,20.75-2.85,2.29-3.31,6.46-1.01,9.32,1.31,1.63,3.23,2.48,5.17,2.48Z"></path>
				</g>
			</svg>
		</a>
		<nav>
			<?php wp_nav_menu(array('theme_location' => 'header-menu',)); ?>
		</nav>
	</header>



	<div class="container mx-auto px-4">

		<div x-data="{
        menuBarOpen: false,
        menuBarMenu: ''
    }"
			@click.away="menuBarOpen=false"
			class="relative top-0 left-0 z-50 w-auto transition-all duration-150 ease-out">
			<div class="relative top-0 left-0 z-40 w-auto h-10 transition duration-200 ease-out">
				<div class="w-full h-full p-1 bg-white border rounded-md border-neutral-200/80">
					<div class="flex justify-between w-full h-full select-none text-neutral-900">


						<!-- Edit Button -->
						<div class="relative h-full cursor-default">
							<button @click="menuBarOpen=true; menuBarMenu='edit'" @mouseover="menuBarMenu='edit'" :class="{ 'bg-neutral-100' : menuBarOpen && menuBarMenu == 'edit'}" class="rounded text-sm cursor-default flex items-center leading-tight justify-center px-3 py-1.5 h-full hover:bg-neutral-100">
								Edit
							</button>
							<div
								x-show="menuBarOpen && menuBarMenu=='edit'"
								x-transition:enter="transition ease-linear duration-100"
								x-transition:enter-start="-translate-y-1 opacity-90"
								x-transition:enter-end="translate-y-0 opacity-100"
								class="absolute top-0 z-50 min-w-[8rem] text-neutral-800 rounded-md border border-neutral-200/70 bg-white mt-10 text-sm p-1 shadow-md w-48 -translate-x-0.5"
								x-cloak>

								<button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
									<span>Undo</span>
									<span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⌘Z</span>
								</button>
								<button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
									<span>Redo</span>
									<span class="ml-auto text-xs tracking-widest text-neutral-400 group-hover:text-neutral-600">⇧⌘Z</span>
								</button>
								<div class="h-px my-1 -mx-1 bg-neutral-200"></div>
								<button class="relative w-full group">
									<div class="flex cursor-default select-none items-center rounded px-2 hover:bg-neutral-100 py-1.5 outline-none">
										<span>Find</span>
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-4 h-4 ml-auto">
											<polyline points="9 18 15 12 9 6"></polyline>
										</svg>
									</div>
									<div data-submenu="" class="absolute top-0 right-0 invisible mr-1 duration-200 ease-out translate-x-full opacity-0 group-hover:mr-0 group-hover:visible group-hover:opacity-100">
										<div class="z-50 min-w-[8rem] overflow-hidden rounded-md border bg-white p-1 shadow-md animate-in slide-in-from-left-1 w-32">
											<div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Search the web</div>
											<div class="h-px my-1 -mx-1 bg-neutral-200"></div>
											<div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Find...</div>
											<div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Find Next</div>
											<div @click="menuBarOpen=false" class="relative flex cursor-default select-none items-center rounded px-2 py-1.5 hover:bg-neutral-100 text-sm outline-none data-[disabled]:pointer-events-none data-[disabled]:opacity-50">Find Previous</div>
										</div>
									</div>
								</button>
								<div class="h-px my-1 -mx-1 bg-neutral-200"></div>
								<button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
									<span>Cut</span>
								</button>
								<button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
									<span>Copy</span>
								</button>
								<button @click="menuBarOpen=false" class="relative flex justify-between w-full cursor-default select-none group items-center rounded px-2 py-1.5 hover:bg-neutral-100 hover:text-neutral-900 outline-none data-[disabled]:opacity-50 data-[disabled]:pointer-events-none">
									<span>Paste</span>
								</button>
							</div>
						</div>
						<!-- End Edit Button -->

					</div>
				</div>
			</div>
		</div>
	</div>