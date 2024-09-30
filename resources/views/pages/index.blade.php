@extends('layouts.app')
<?php
use App\LawyerProfile;
if (!isset($profiles)) {
    $profiles = LawyerProfile::all();
}

?>
@section('content')


<main class="page landing-page" >
        <section class="clean-block clean-hero" style="background-image: url({{ asset('images/background.jpg') }});color: rgba(9, 162, 255, 0.85);">
                <div class="text">
                        <h2 style="color:#fff">Web Portal for Lawyers and Clients</h2>
                        <p>Get started now.</p>
                        <button class="btn btn-outline-light btn-lg" type="button"><a href="/register" style="text-decoration: none; color:white;">Register</a></button>
                </div>
        </section>
        <section class="home-page">
        	<div class="setion2 container-fluid">
                <div class="user_benefits_heading">
                    <h2 class="heading_text text-center">Clients Benefits</h2>
                </div>
                <div class="row user_benefits_wrapper text-center " >
                        <div class="col-6 image-column">
                        	<img src="{{ asset('images/background.jpg') }}" alt="Lawyers">
                        </div>
						@if(isset($data->user_benefits))
                        <div class="col-6 steps-list">
                            {!! $data->user_benefits !!}
                        </div>
						@endif
                </div>

                <div class="user_benefits_heading">
                    <h2 class="heading_text text-center">Lawyers Benefits</h2>
                </div>

                <div class="row user_benefits_wrapper text-center">
                <div class="col-6 image-column">
                        <img src="{{ asset('assets/images/legal_pic.jpg') }}" alt="Lawyers">
                </div>
				@if(isset($data->lawyer_benefits))
                <div class="col-6 steps-list">
					{!! $data->lawyer_benefits !!}
                </div>
				@endif
        	</div>
        </div>
        <div class="section4 container-fluid">
                <h2 class="text-center heading_4">How Our AI Case Assessment Works</h2>
                <div class="row ai-case align-items-center">
                <div class="col-6 image-column">
                        <img src="{{ asset('assets/images/gen-ai.jpg') }}" alt="Lawyers">
                </div>
                <div class="col-6 ">
                    <ul class="steps-list ">
                        <li><strong>Submit Your Information:</strong> Fill out a quick questionnaire about your legal case.</li>
                        <li><strong>AI Analysis:</strong> Our AI analyzes your input to determine the nature of your case.</li>
                        <li><strong>Matching Process:</strong> The AI finds qualified lawyers specializing in your case type.</li>
                        <li><strong>Review Lawyer Profiles:</strong> Receive a list of recommended lawyers with profiles and ratings.</li>
                        <li><strong>Schedule a Consultation:</strong> Choose a lawyer and schedule a consultation to discuss your case.</li>
                        <li><strong>Receive Personalized Guidance:</strong> Your lawyer provides tailored advice based on your situation.</li>
                        <li><strong>Track Your Case Progress:</strong> Use our platform to track your case and communicate easily.</li>
                        <li><strong>Feedback and Follow-up:</strong> Provide feedback and stay connected with your lawyer.</li>
					</ul>
                </div>
                </div>
        </div>
        <div class="section5 container-fluid" style="position:relative;">
        <div class="container testiimonal-section">
		<h1 class="testimonials">Testimonials</h1>
		<div class="your-class single-item-rtl">
			<div class="image-width-text">
				<div class="img">
					<img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="Image description">
				</div>
				<div class="content-test">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</span>
					<h2>Johnson</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dolorum ipsa, suscipit
						necessitatibus officia maxime vero aperiam nobis, cumque in minima quod doloribus? Perferendis
						totam unde laborum blanditiis quibusdam!</p>
				</div>
			</div>

			<div class="image-width-text">
				<div class="img">
					<img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="Image description">
				</div>
				<div class="content-test">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</span>
					<h2>Johnson</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dolorum ipsa, suscipit
						necessitatibus officia maxime vero aperiam nobis, cumque in minima quod doloribus? Perferendis
						totam unde laborum blanditiis quibusdam!</p>
				</div>
			</div>

			<div class="image-width-text">
				<div class="img">
					<img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="Image description">
				</div>
				<div class="content-test">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</span>
					<h2>Johnson</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dolorum ipsa, suscipit
						necessitatibus officia maxime vero aperiam nobis, cumque in minima quod doloribus? Perferendis
						totam unde laborum blanditiis quibusdam!</p>
				</div>
			</div>

			<div class="image-width-text">
				<div class="img">
					<img src="https://i.ibb.co/hKgs8gm/profile.jpg" alt="Image description">
				</div>
				<div class="content-test">
					<span>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
					</span>
					<h2>Johnson</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et atque dolorum ipsa, suscipit
						necessitatibus officia maxime vero aperiam nobis, cumque in minima quod doloribus? Perferendis
						totam unde laborum blanditiis quibusdam!</p>
				</div>
			</div>

		</div>
	</div>

	<div class="custom-prev">
		<svg width="40px" height="40px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#000000" /></svg>
	</div>
	<div class="custom-next">
		<svg width="40px" height="40px" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#000000" /></svg>
	</div>
  
        </section>
        <!-- <div class="chat_box_button">
            <button class="chat_ioen">
				<svg width="60px" height="60px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M8 10H16M8 14H16M21.0039 12C21.0039 16.9706 16.9745 21 12.0039 21C9.9675 21 3.00463 21 3.00463 21C3.00463 21 4.56382 17.2561 3.93982 16.0008C3.34076 14.7956 3.00391 13.4372 3.00391 12C3.00391 7.02944 7.03334 3 12.0039 3C16.9745 3 21.0039 7.02944 21.0039 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>  
        </div> -->
</main>
<script>
        $(document).ready(function() {
                $('.your-class').slick({
			speed: 400,
			slidesToShow: 3,
			slidesToScroll: 1,
			prevArrow: $('.custom-prev'),
			nextArrow: $('.custom-next'),
			autoplay: false,
			autoplaySpeed: 1000,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 680,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
        });
  
       
</script>

<script>
        var botmanWidget = {
            introMessage: "Hello ✋ , I am a Scarlet! I am here to assist you",
            title: "Welcome to our Law Firm Chatbot",
            aboutText: "⚡ Powered by Law Firm",
            aboutLink: "#",
			headerTextColor: '#fff'
        };
    </script>
  
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>

@endsection