<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-up -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="../../demo3/dist/authentication/layouts/corporate/sign-in.html" action="#">
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								<div class="row g-3 mb-9">
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Google link=-->
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-md-6">
										<!--begin::Google link=-->
										<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="assets/media/svg/brand-logos/apple-black.svg" class="theme-light-show h-15px me-3" />
										<img alt="Logo" src="assets/media/svg/brand-logos/apple-black-dark.svg" class="theme-dark-show h-15px me-3" />Sign in with Apple</a>
										<!--end::Google link=-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Login options-->
								<!--begin::Separator-->
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
								</div>
								<!--end::Separator-->
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Email-->
								</div>
								<!--begin::Input group-->
								<div class="fv-row mb-8" data-kt-password-meter="true">
									<!--begin::Wrapper-->
									<div class="mb-1">
										<!--begin::Input wrapper-->
										<div class="position-relative mb-3">
											<input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off" />
											<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
												<i class="bi bi-eye-slash fs-2"></i>
												<i class="bi bi-eye fs-2 d-none"></i>
											</span>
										</div>
										<!--end::Input wrapper-->
										<!--begin::Meter-->
										<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
											<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
										</div>
										<!--end::Meter-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Hint-->
									<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
									<!--end::Hint-->
								</div>
								<!--end::Input group=-->
								<!--end::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Repeat Password-->
									<input placeholder="Repeat Password" name="confirm-password" type="password" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Repeat Password-->
								</div>
								<!--end::Input group=-->
								<!--begin::Accept-->
								<div class="fv-row mb-8">
									<label class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" name="toc" value="1" />
										<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the
										<a href="#" class="ms-1 link-primary">Terms</a></span>
									</label>
								</div>
								<!--end::Accept-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign up</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
								<a href="../../demo3/dist/authentication/layouts/corporate/sign-in.html" class="link-primary fw-semibold">Sign in</a></div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap px-5">
						<!--begin::Links-->
						<div class="d-flex fw-semibold text-primary fs-base">
							<a href="../../demo3/dist/pages/team.html" class="px-5" target="_blank">Terms</a>
							<a href="../../demo3/dist/pages/pricing/column.html" class="px-5" target="_blank">Plans</a>
							<a href="../../demo3/dist/pages/contact.html" class="px-5" target="_blank">Contact Us</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/media/misc/auth-bg.png)">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
						<a href="../../demo3/dist/index.html" class="mb-12">
							<img alt="Logo" src="assets/media/logos/custom-1.png" class="h-75px" />
						</a>
						<!--end::Logo-->
						<!--begin::Image-->
						<img class="mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="assets/media/misc/auth-screens.png" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="text-white fs-base text-center">In this kind of post,
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed
						<br />and provides some background information about
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
						<br />work following this is a transcript of the interview.</div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-up-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="assets/js/custom/authentication/sign-up/general.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>