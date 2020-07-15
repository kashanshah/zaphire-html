<!doctype html>
<html lang="en">
<head>
    <?php include("includes/meta.php"); ?>
    <title>Welcome to Zaphire</title>
</head>
<body>
<?php include("includes/loading.php"); ?>
<a class="sr-only sr-only-focusable skip-link" href="#container">Skip to main content</a>
<?php include("includes/header.php"); ?>
<main id="container" class="scroll-wrapper">
    <section class="main-banner d-flex">
        <div class="container align-self-center">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1>Making it easy for your value to be seen.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    <a href="#" class="btn btn-primary"><span>Pilot Sign Up</span></a>
                </div>
                <div class="col-md-5">
                    <video class="banner-video" autoplay loop muted playsinline>
                        <source src="assets/video/banner-<?php echo isset($_GET["video"]) ? $_GET["video"] : 'medium'; ?>.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>
    </section>

    <section class="icons-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info-box info-box-v1">
                        <div class="info-icon info-icon-1">
                            <img src="assets/svgs/connections.svg" alt="connections" class="ing-fluid">
                        </div>
                        <div class="info-text">
                            <h4>Live Connection</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box info-box-v2">
                        <div class="info-icon info-icon-2">
                            <img src="assets/svgs/engagements.svg" alt="connections" class="ing-fluid">
                        </div>
                        <div class="info-text">
                            <h4>Live Engagement</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-box info-box-v3">
                        <div class="info-icon info-icon-3">
                            <img src="assets/svgs/community.svg" alt="connections" class="ing-fluid">
                        </div>
                        <div class="info-text">
                            <h4>Live Community</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-sec dotted-bg">
        <div class="container position-relative">
        	<img src="assets/svgs/bg-dots.svg" alt="" class="dotted-bg-img">
            <div class="row align-items-center">
                <div class="col-md-6 md-order-2"><img src="assets/images/img-1.png" alt="" class="img-fluid"></div>
                <div class="col-md-5 offset-md-1">
                    <h2>Make Real Connections</h2>
                    <p>Lorem ipsum dolor sit amet,<br class="d-none d-md-block"/> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="content-sec dotted-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                	<img src="assets/images/img-2.png" alt="" class="img-fluid">
                	<ul class="circle-ul">
                		<li></li>
                		<li></li>
                	</ul>
                </div>
                <div class="col-md-5">
                    <h2>Immersive experience of hiring real people</h2>
                    <p>Lorem ipsum dolor sit amet,<br class="d-none d-md-block"/> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="content-sec dotted-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-0"><img src="assets/images/img-1.png" alt="" class="img-fluid"></div>
                <div class="col-md-6">
                    <h2>Believe the new Change</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

	<section class="tab-sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="mb-5 text-center">Simplifying human <br class="d-none d-lg-block">expression in real-time</h1>
					<div class="tab-mn">
						<div class="tab-head">
							<ul>
								<li><a data-tag="jobseeker" class="active" href="javascript:;">Jobseeker</a></li>
								<li><a data-tag="employers" href="javascript:;">Employers</a></li>
								<li><a data-tag="recruiters" href="javascript:;">Recruiters</a></li>
								<li><a data-tag="coach" href="javascript:;">Coach</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="row">
								<div class="col-md-12 text-center">
                                    <div id="jobseeker" class="tab-innr active">
    									<img class="mb-4 img-fluid" src="assets/images/tab-01.jpg" alt="">
                                        <h2>Lorem ipsum dolor sit</h2>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                    <div id="employers" class="tab-innr">
                                        <img class="mb-4 img-fluid" src="assets/images/tab-01.jpg" alt="">
                                        <h2>Lorem ipsum dolor sit</h2>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                    <div id="recruiters" class="tab-innr">
                                        <img class="mb-4 img-fluid" src="assets/images/tab-01.jpg" alt="">
                                        <h2>Lorem ipsum dolor sit</h2>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
                                    <div id="coach" class="tab-innr">
                                        <img class="mb-4 img-fluid" src="assets/images/tab-01.jpg" alt="">
                                        <h2>Lorem ipsum dolor sit</h2>
                                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="box-sec text-center mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <img class="img-fluid" src="assets/images/box-01.png" alt="">
                        <h6>Virtual Career</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <img class="img-fluid" src="assets/images/box-02.png" alt="">
                        <h6>Virtual Career</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <img class="img-fluid" src="assets/images/box-03.png" alt="">
                        <h6>Virtual Career</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="content-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="assets/images/img-4.png" alt="" class="img-fluid">
                    <ul class="circle-ul circle-v2">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Reach</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-0">
                    <img src="assets/images/img-5.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2>Co-host</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1">
                    <img src="assets/images/img-6.png" alt="" class="img-fluid">
                    <ul class="circle-ul circle-v2 v3">
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2>Stream</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-0"><img src="assets/images/img-5.png" alt="" class="img-fluid"></div>
                <div class="col-md-6">
                    <h2>Translate</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-1"><img src="assets/images/img-7.png" alt="" class="img-fluid"></div>
                <div class="col-md-6">
                    <h2>Ever live</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="cta-mn">
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
                    </div>
                    <a href="#" class="btn btn-primary"><span>Sign Up for Pilot Now</span></a>
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php"); ?>
</main>
<?php include("includes/orientation-lock.php"); ?>
<?php include("includes/scripts.php"); ?>
</body>
</html>