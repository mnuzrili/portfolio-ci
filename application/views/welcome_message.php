<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?= base_url('vendor/portfolio/') ?>dist/output.css" rel="stylesheet">
	<title>Portfolio | Muhammad Nuzril Isro</title>
</head>

<body class="bg-dark">

	<!-- Header Start -->
	<header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
		<div class="container">
			<div class="flex items-center justify-between relative">
				<div class="px-4">
					<a href="#home" class="text-primary block py-6 w-2/3 lg:text-2xl sm:w-full">
						<img src="<?= base_url('vendor/portfolio/') ?>dist/img/icon3.png" alt="icon" class="fill-primary">
					</a>
				</div>
				<div class="flex items-center px-4">
					<button id="hamburger" name="humburger" class="block absolute right-4 lg:hidden">
						<span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
						<span class="hamburger-line transition duration-300 ease-in-out"></span>
						<span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
					</button>

					<nav id="nav-menu" class="hidden absolute py-5 bg-slate-800 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
						<ul class="block lg:flex">
							<li class="group">
								<a href="#home" class="text-base text-slate-200 py-2 mx-8 flex group-hover:text-primary lg:text-xl tautan-button">Beranda</a>
							</li>
							<li class="group">
								<a href="#about" class="text-base text-slate-200 py-2 mx-8 flex group-hover:text-primary lg:text-xl tautan-button">Tentang Saya</a>
							</li>
							<li class="group">
								<a href="#portfolio" class="text-base text-slate-200 py-2 mx-8 flex group-hover:text-primary lg:text-xl tautan-button">Portfolio</a>
							</li>
							<li class="group">
								<a href="#contact" class="text-base text-slate-200 py-2 mx-8 flex group-hover:text-primary lg:text-xl tautan-button">Contact</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->

	<!-- Hero Section Start -->
	<section id="home" class="pt-36">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="w-full self-center px-4 lg:w-1/2">
					<h1 class="text-base font-semibold text-primary md:text-xl lg:text-2xl">Hallo Semua 👋, saya <span class="block font-bold text-slate-200 text-3xl mt-1 lg:text-5xl">Muhammad Nuzril Isro</span> </h1>
					<h2 class="font-medium text-slate-500 text-lg mb-5 lg:text-2xl">Coding & <span class="text-white">Debugging</span></h2>
					<p class="font-medium text-secondary leading-relaxed">Belajar mencintai <span class="text-slate-200 font-bold">programming.</span></p>
					<p class="font-semibold text-slate-500 mb-10 leading-relaxed">"Practice make improvement"</p>

					<a href="#contact" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out tautan-button">Hubungi Saya</a>
				</div>
				<div class="w-full self-end px-4 lg:w-1/2">
					<div class="mt-10 relative lg:mt-9 lg:right-0">
						<img src="<?= base_url('vendor/portfolio/') ?>dist/img/pp2.png" alt="Profile Picture" class="max-w-full mx-auto" id="profile-picture" />
						<span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125 lg:scale-150">
							<svg width="500" height="500" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
								<path fill="#ec4899" d="M39.2,-65.2C48.4,-55.1,51.8,-40.2,57.8,-26.6C63.7,-12.9,72.3,-0.7,68.1,7.9C63.9,16.4,46.9,21.2,36.2,28.7C25.5,36.1,21,46.3,12.9,52.5C4.8,58.8,-6.9,61.2,-20.8,61.4C-34.7,61.7,-50.6,59.7,-59.4,50.8C-68.2,41.9,-69.9,26.1,-70.3,11.2C-70.7,-3.7,-70,-17.7,-60.4,-22.9C-50.7,-28.2,-32.2,-24.7,-20.7,-33.7C-9.1,-42.7,-4.6,-64.2,5.2,-72.3C15,-80.4,30,-75.3,39.2,-65.2Z" transform="translate(100 100) scale(1.1)" />
							</svg>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section End -->

	<!-- About Section Start -->
	<section id="about" class="pt-36 pb-32">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="w-full px-4 mb-10 lg:w-1/2">
					<h4 class="font-bold uppercase text-primary text-lg">Tentang Saya</h4>
					<h2 class="font-bold text-slate-200 text-3xl mb-5 max-w-md">Halo orang kepo, <span class="block">Selamat datang !</span></h2>
					<p class="font-medium text-base text-secondary max-w-xl text-justify">Perkenalkan, saya Nuzril. Saat ini saya bekerja sebagai IT di sebuah perusahaan di bidang perbankan, PT BPR Madani Sejahtera Abadi. Beberapa projek yang saya kerjakan akan saya lampirkan pada website ini. Jika ada pertanyaan atau saran untuk website atau projek yang saya kerjakan, alangkah baiknya dapat langsung menghubungi saya. Terima kasih !</p>
				</div>
				<div class="w-full px-4 lg:w-1/2">
					<h3 class="font-semibold text-slate-200 text-2xl mb-4 lg:text-3xl lg:pt-6">Let's be a friend !</h3>
					<p class="font-medium text-base text-secondary mb-6 lg:text-lg lg:pt-10 text-justify">Karena semuanya berawal dari pertemanan. Siapa tau kita...
					<p>
					<div class="flex items-center">
						<!-- Instagram -->
						<a href="https://www.instagram.com/mnuzrili" target="_blank" class="w-9 h-9 mr-3 icon icon-1 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" width="20" class="fill-current " viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<title>Instagram</title>
								<path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
							</svg>
						</a>
						<!-- Twitter -->
						<a href="https://twitter.com/mnuzrili" target="_blank" class="w-9 h-9 mr-3 icon icon-2 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<title>Twitter</title>
								<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
							</svg>
						</a>
						<!-- GitHub -->
						<a href="https://github.com/mnuzrili" target="_blank" class="w-9 h-9 mr-3 icon icon-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<title>GitHub</title>
								<path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
							</svg>
						</a>
						<!-- Youtube -->
						<a href="https://www.youtube.com/channel/UCJPe778VziucG7Fvry3M8jQ/" target="_blank" class="w-9 h-9 mr-3 icon icon-4 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
							<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<title>YouTube</title>
								<path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
							</svg>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->

	<!-- Portfolio Start -->
	<section id="portfolio" class="pt-36 pb-16 bg-slate-700">
		<div class="container">
			<div class="w-full px-4">
				<div class="max-w-xl mx-auto text-center mb-16">
					<h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
					<h2 class="font-bold text-slate-200 text-3xl mb-4">Project Terbaru</h2>
					<p class="font-medium text-md text-secondary">Berikut adalah beberapa project terbaru yang saya buat.</p>
				</div>
			</div>

			<div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
				<div class="mb-12 p-4 md:w-1/2">
					<div class="rounded-md shadow-md overflow-hidden">
						<img src="<?= base_url('vendor/portfolio/') ?>dist/img/portfolio/e_sdm.png" alt="E-SDM" width="w-full" />
					</div>
					<h3 class="font-semibold text-xl text-slate-200 mt-5"> E-SDM BPR MSA</h3>
					<p class="font-medium text-base text-secondary text-justify">E-SDM adalah sebuah aplikasi berbasis web yang dibuat untuk mengelola karyawan di PT BPR Madani Sejahtera Abadi. Mulai dari input karyawan baru, karyawan resign, slip gaji, permohonan serta approval cuti, perjalanan dinas dan pelatihan yang pernah diikuti karyawan. Aplikasi ini memiliki fitur untuk melihat user yang sedang online, fitur chating (dalam pengembangan), dan juga notifikasi via telegram (untuk fitur ini user harus menghubungkan akunnya dengan telegram via telegram bot).</p>
				</div>
				<div class="mb-12 p-4 md:w-1/2">
					<div class="rounded-md shadow-md overflow-hidden">
						<img src="<?= base_url('vendor/portfolio/') ?>dist/img/portfolio/kiosaku.png" alt="Marketplace Kios Aku" width="w-full" />
					</div>
					<h3 class="font-semibold text-xl text-slate-200 mt-5"> Market Place UMKM Kios Aku</h3>
					<p class="font-medium text-base text-secondary text-justify">Ini adalah sebuah closed market place yang dibuat untuk menunjang program Kios Aku Digital yang dilakukan oleh BPR MSA bekerja sama dengan Aku Mandiri Yogyakarta, dimana UMKM yang bekerjasama dengan BPR MSA dapat menjual produknya secara online kepada pemilik Kios Aku.</p>
				</div>
				<div class="mb-12 p-4 md:w-1/2">
					<div class="rounded-md shadow-md overflow-hidden">
						<img src="<?= base_url('vendor/portfolio/') ?>dist/img/portfolio/pengajuan.png" alt="Marketplace Kios Aku" width="w-full" />
					</div>
					<h3 class="font-semibold text-xl text-slate-200 mt-5"> Pengajuan Kios Aku</h3>
					<p class="font-medium text-base text-secondary text-justify">Pengajuan Kios Aku adalah sebuah aplikasi untuk mengajukan permohonan pembuatan Kios Aku. Dimana pada aplikasi ini dapat memonitor proses pengajuan sudah sampai ditahap mana serta dokumentasi pengalokasian dana yang digunakan</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Portfolio End -->

	<!-- Contact Start -->
	<section id="contact" class="pt-36 pb-32">
		<div class="container">
			<div class="w-full px-4">
				<div class="max-w-xl mx-auto text-center mb-16">
					<h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
					<h2 class="font-bold text-slate-200 text-3xl mb-4">Hubungi Saya</h2>
					<p class="font-medium text-md text-secondary">Jika ada pertanyaan, tanggapan, kritik, maupun, saran, bisa langsung mengirimkan pesan.</p>
				</div>
			</div>
			<div class="flex flex-wrap">
				<div class="w-full px-4 lg:w-1/2">
					<img src="<?= base_url('vendor/portfolio/') ?>dist/img/emailme.png" alt="Email Me" width="w-full" id="email-me" />
				</div>

				<div class="w-full lg:w-1/2 lg:mx-auto">
					<form id="kirim-pesan">
						<div class="w-full px-4 mb-8">
							<label for="name" class="text-base font-bold text-primary">Nama</label>
							<input type="text" id="name" name="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
						</div>
						<div class="w-full px-4 mb-8">
							<label for="email" class="text-base font-bold text-primary">Email</label>
							<input type="email" id="email" name="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary" required />
						</div>
						<div class="w-full px-4 mb-8">
							<label for="message" class="text-base font-bold text-primary">Pesan</label>
							<textarea id="message" name="message" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary h-32" required></textarea>
						</div>
						<div class="w-full px-4">
							<button type="submit" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Contact End -->

	<!-- Footer Start -->
	<footer class="bg-slate-700 pt-24 pb-12">
		<div class="container">
			<div class="flex flex-wrap">
				<div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
					<h2 class="font-bold text-4xl text-white mb-5">nuz's</h2>
					<h3 class="font-bold text-2xl mb-2">Hubungi Saya</h3>
					<p>muhammadnuzril2325@gmail.com</p>
					<p>Magelang Tengah, Kota Magelang</p>
					<p>Jawa Tengah, Indonesia</p>
				</div>
				<div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
					<h3 class="font-semibold text-xl mb-5">Project Terbaru</h3>
					<ul class="text-slate-300">
						<li>
							<a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">E-SDM BPR MSA</a>
						</li>
						<li>
							<a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Market Place UMKM Kios Aku</a>
						</li>
						<li>
							<a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Pengajuan Kios Aku</a>
						</li>
					</ul>
				</div>
				<div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
					<h3 class="font-semibold text-xl mb-5">Tautan</h3>
					<ul class="text-slate-300">
						<li>
							<a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
						</li>
						<li>
							<a href="#about" class="inline-block text-base hover:text-primary mb-3">Tentang Saya</a>
						</li>
						<li>
							<a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a>
						</li>
						<li>
							<a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="w-full pt-10 border-t border-slate-400">
				<div class="flex items-center justify-center mb-5">
					<!-- Instagram -->
					<a href="https://www.instagram.com/mnuzrili" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>Instagram</title>
							<path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
						</svg>
					</a>
					<!-- Twitter -->
					<a href="https://twitter.com/mnuzrili" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>Twitter</title>
							<path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
						</svg>
					</a>
					<!-- GitHub -->
					<a href="https://github.com/mnuzrili" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>GitHub</title>
							<path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
						</svg>
					</a>
					<!-- Youtube -->
					<a href="https://www.youtube.com/channel/UCJPe778VziucG7Fvry3M8jQ/" target="_blank" class="w-9 h-9 mr-3 rounded-full flex justify-center items-center text-slate-300 border border-slate-300 hover:border-primary hover:bg-primary hover:text-white">
						<svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
							<title>YouTube</title>
							<path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
						</svg>
					</a>
				</div>
				<p class="font-medium text-sm text-npx tailwindcss -i ./src/input.css -o ./<?= base_url('vendor/portfolio/') ?>dist/output.css --watchslate-400 text-center">Crafted by <span class="text-primary font-semibold">nuz's</span> with <span class="text-red-700">❤</span></p>

			</div>
		</div>
	</footer>
	<!-- Footer End -->

	<script src="<?= base_url('vendor/portfolio/') ?>dist/js/script.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
	<script>
		$(document).on("click", ".tautan-button", function(e) {
			e.preventDefault();
			var id = $(this).attr("href"),
				topSpace = 30;
			$('html, body').animate({
				scrollTop: $(id).offset().top - topSpace
			}, 800);
		});

		$(document).on("submit", "#kirim-pesan", function(e) {
			e.preventDefault();
			let file = $('form').serialize();

			$.ajax({
				url: '<?= base_url('welcome/kirim_pesan?') ?>' + file,
				method: 'GET',
			}).done(function(res) {
				console.log(res);
				Swal.fire({
					icon: 'success',
					title: 'Berhasil mengirim pesan cinta, terima kasih 🥰',
					showConfirmButton: false,
					timerProgressBar: true,
					timer: 3500
				}).then((result) => {
					/* Read more about handling dismissals below */
					if (result.dismiss === Swal.DismissReason.timer || result.dismiss === Swal.DismissReason.backdrop) {
						window.location.reload();
					}
				})
			}).fail(function(res) {
				Swal.fire({
					icon: 'error',
					title: 'Maaf ada kesalahan, aku yang salah 😥',
					showConfirmButton: false,
					timerProgressBar: true,
					timer: 3500
				});
			});
		})
	</script>

</body>

</html>