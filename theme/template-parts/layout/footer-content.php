<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package buildplate_tw
 */

?>

<footer id="colophon" class="bg-gray-100 pt-16 pb-8">
	<div class="max-w-[1400px] mx-auto px-4">
		<!-- Main Footer Content -->
		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
			<!-- Shop -->
			<div>
				<h3 class="font-bold text-lg mb-4">Shop</h3>
				<ul class="space-y-3">
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Gift cards</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Custom Builds</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Categories</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Sellers</a></li>
				</ul>
			</div>

			<!-- Sell -->
			<div>
				<h3 class="font-bold text-lg mb-4">Sell</h3>
				<ul class="space-y-3">
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Sell on Buildplate</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Teams</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Forums</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Affiliates</a></li>
				</ul>
			</div>

			<!-- About -->
			<div>
				<h3 class="font-bold text-lg mb-4">About</h3>
				<ul class="space-y-3">
					<li><a href="#" class="text-gray-600 hover:text-gray-900">About Buildplate</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Policies</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Investors</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Careers</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Press</a></li>
				</ul>
			</div>

			<!-- Help -->
			<div>
				<h3 class="font-bold text-lg mb-4">Help</h3>
				<ul class="space-y-3">
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Help Center</a></li>
					<li><a href="#" class="text-gray-600 hover:text-gray-900">Privacy settings</a></li>
					<li>
						<a href="#" class="inline-flex items-center text-gray-600 hover:text-gray-900">
							Download the App
							<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- Bottom Footer -->
		<div class="border-t border-gray-200 pt-8">
			<div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
				<!-- Left Side -->
				<div class="flex items-center space-x-4">
					<span class="text-gray-600">© <?php echo date('Y'); ?> Buildplate, Inc.</span>
					<a href="#" class="text-gray-600 hover:text-gray-900">Terms of use</a>
					<a href="#" class="text-gray-600 hover:text-gray-900">Privacy</a>
				</div>

				<!-- Right Side - Social Links -->
				<div class="flex items-center space-x-6">
					<a href="https://www.instagram.com/buildplate.ae/" class="text-gray-600 hover:text-gray-900" target="_blank" rel="noopener noreferrer">
						<span class="sr-only">Instagram</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
							<path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
						</svg>
					</a>
					<!-- TikTok with correct link -->
					<a href="https://www.tiktok.com/@buildplate.ae" class="text-gray-600 hover:text-gray-900" target="_blank" rel="noopener noreferrer">
						<span class="sr-only">TikTok</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
							<path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-5.2 1.74 2.89 2.89 0 012.31-4.64 2.93 2.93 0 01.88.13V9.4a6.84 6.84 0 00-1-.05A6.33 6.33 0 005 20.1a6.34 6.34 0 0010.86-4.43v-7a8.16 8.16 0 004.77 1.52v-3.4a4.85 4.85 0 01-1-.1z"></path>
						</svg>
					</a>
					<!-- Pinterest with correct link -->
					<a href="https://www.pinterest.com/Buildplate/" class="text-gray-600 hover:text-gray-900" target="_blank" rel="noopener noreferrer">
						<span class="sr-only">Pinterest</span>
						<svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
							<path d="M12 0C5.373 0 0 5.372 0 12c0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24 12 24c6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"/>
						</svg>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
