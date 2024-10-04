@extends('layouts.app')

@section('content')


<main class="page landing-page" >
	<section class="banner_section">
		<section class="image-with-text">
			<div class="image_parent">
				<div class="content">
					<h1>Beëindig Handmatig
						<br>
						Gespreksnotulering
					</h1>
					<p>Ervaar ongestoorde, echte gesprekken zonder de last van notuleren. Laat AI<br>uw notities
						verzorgen
						en til zowel klant- als werknemerstevredenheid naar een <br>hoger niveau.</p>

					<div class="banner_buttons">
						<a href="">
							<div class="butn_1">Kom in contact</div>
						</a>
						<a href="">
							<div class="butn_2">Meer informatie</div>
						</a>
					</div>
					<div class="numbers">
						<div class="num">
							<h2>20-50 Min</h2>
							<p>Besparing per intake</p>
						</div>
						<div class="num">
							<h2>GDPR</h2>
							<p>Conform</p>
						</div>
						<div class="num">
							<h2>50k</h2>
							<p>Gesprekken</p>
						</div>
					</div>
				</div>
				<div class="vedio_content">
					<div class="video-section">
						
						<video id="myVideo" width="600" controls>
							<source src="{{ asset('assets/images/sample-5s (1).mp4') }}"
								type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</section>
	</section>
	<section class="Ontmoet">
		<div class="on_content">
			<h1>Ontmoet<br>
				Verdictvision </h1>
			<p>Ons team heeft succes behaald door organisaties te ondersteunen in <br> efficiënter notuleren met op maat
				gemaakte innovatieve AI-oplossingen. </p>
		</div>
		<div class="two_cards">

			<div class="card_first">
				<div class="card">
					<img src="{{ asset('assets/images/f.avif') }}" alt="">
					<h1>HET PROBLEEM</h1>
					<p>
						Het handmatige notuleren tijdens een gesprek leidt professionals af en ondermijnt de
						gesprekskwaliteit, met een toename van administratieve lasten tot gevolg. Verdictvision
						herstelt de focus op het enige wat telt: de gesprekspartner.
					</p>
					<div class="ont_button"><a href="">Lees meer</a></div>
				</div>
			</div>
			<div class="card_first card_second">
				<div class="card">
					<img src="{{ asset('assets/images/s.avif') }}">
					<h1>ONZE MISSIE</h1>
					<p>Onze missie is helder: een einde aan de noodzaak van handmatig notuleren. Door geavanceerde AI in
						te zetten, bevorderen we menselijke interactie en efficiëntie in elk gesprek.</p>
					<div class="ont_button"><a href="">Lees meer</a></div>

				</div>
			</div>
		</div>
	</section>

	<!-- benifits_sec -->
	<section class="slider_section">
		<div class="base_parent">
			<div class="team_mambers">
				<div class="left_sec">
					<img src="{{ asset('assets/images/5rl0GGssIDtnhd8pD5lNtU1tz0.avif') }}">
				</div>
				<div class="right_sec">
					<h1>
						Our ExpErt team members
					</h1>
					<div class="slides_parent">
						<div class="profile-card">
							<div class="image-container">
								<img src="{{ asset('assets/images/Pwu0d2yiRvknqWIeFLVJgglzVA.avif') }}" alt="Profile Image">
								<div class="social-icons">
									<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
								</div>
							</div>
							<h3>Max Beelen</h3>
							<p>Developer</p>
						</div>
						<div class="profile-card">
							<div class="image-container">
								<img src="{{ asset('assets/images/Pwu0d2yiRvknqWIeFLVJgglzVA.avif') }}" alt="Profile Image">
								<div class="social-icons">
									<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
								</div>
							</div>
							<h3>Max Beelen</h3>
							<p>Developer</p>
						</div>
						<div class="profile-card">
							<div class="image-container">
								<img src="{{ asset('assets/images/Pwu0d2yiRvknqWIeFLVJgglzVA.avif') }}" alt="Profile Image">
								<div class="social-icons">
									<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
								</div>
							</div>
							<h3>Max Beelen</h3>
							<p>Developer</p>
						</div>
						<div class="profile-card">
							<div class="image-container">
								<img src="{{ asset('assets/images/Pwu0d2yiRvknqWIeFLVJgglzVA.avif') }}" alt="Profile Image">
								<div class="social-icons">
									<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
								</div>
							</div>
							<h3>Max Beelen</h3>
							<p>Developer</p>
						</div>
						<div class="profile-card">
							<div class="image-container">
								<img src="{{ asset('assets/images/Pwu0d2yiRvknqWIeFLVJgglzVA.avif') }}" alt="Profile Image">
								<div class="social-icons">
									<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
								</div>
							</div>
							<h3>Max Beelen</h3>
							<p>Developer</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- end third section -->

	<!-- fourth section -->
	<section class="user_benefits">
		<h1>Gebruikersvoordelen</h1>
		<div class="banifi_container">
			<div class="benifit_image">
				<img src="{{ asset('assets/images/eNwQSRBExVAo3keDyarUhBeWao.avif') }}">
			</div>
			<div class="benifit_content">
				<h1>Voordelen Consumenten</h1>
				<div class="child_content">
					<h2>Kosteloze toegang tot juridische hulp</h2>
					<p>Consumenten kunnen zonder kosten een
						vragenlijst invullen en meteen inzicht krijgen in hun juridische situatie.</p>
				</div>
				<div class="child_content">
					<h2>Snelle en eenvoudige matching</h2>
					<p>Het platform koppelt gebruikers automatisch aan de
						beste advocaten op basis van hun specifieke juridische kwestie, waardoor het proces snel
						en efficiënt verloopt</p>
				</div>
				<div class="child_content">
					<h2>Inzicht in kansen op succes</h2>
					<p>Door gebruik te maken van predictieve rechtsspraak, krijgen
						consumenten een realistisch beeld van hun slagingskansen, wat hen helpt om
						weloverwogen beslissingen te nemen</p>
				</div>
				<div class="child_content">
					<h2>Geen intakegesprekken nodig</h2>
					<p>Advocaten ontvangen gedetailleerde samenvattingen van
						de zaken, zodat consumenten direct verder kunnen zonder tijdverlies aan intakegesprekken.</p>
				</div>
				<div class="child_content">
					<h2>Transparantie en gemak</h2>
					<p> Het contractensysteem zorgt ervoor dat de afspraken helder zijn,
						en de communicatie met de advocaat verloopt via het platform, wat alles overzichtelijk en
						toegankelijk maakt.</p>
				</div>
			</div>
		</div>


		<!-- fourth section part 2 -->

		<div class="banifi_container benifit_content2">
			<div class="benifit_image">
				<img src="{{ asset('assets/images/premium_photo-1661333820879-517c5e808bfe.avif') }}">
			</div>
			<div class="benifit_content">
				<h1>Voordelen advocaten</h1>
				<div class="child_content">
					<h2>Toegang tot nieuwe cliënten</h2>
					<p>Advocaten kunnen eenvoudig nieuwe zaken binnenhalen via
						het platform, wat hun klantenbestand vergroot.</p>
				</div>
				<div class="child_content">
					<h2>Gerichte leads</h2>
					<p>Door de automatisering van het matchingsproces ontvangen advocaten
						relevante en voorgefilterde zaken die passen bij hun expertise, wat tijd bespaart</p>
				</div>
				<div class="child_content">
					<h2>Minder tijd aan intakegesprekken:</h2>
					<p> Met gedetailleerde samenvattingen van de zaken
						kunnen advocaten direct aan de slag zonder tijd te verliezen aan uitgebreide
						intakegesprekken.</p>
				</div>
				<div class="child_content">
					<h2>Duidelijke verdienstructuur</h2>
					<p>Advocaten hebben inzicht in hun kostenstructuur met
						abonnementskosten en succesfees, waardoor ze hun inkomsten beter kunnen plannen.</p>
				</div>
				<div class="child_content">
					<h2>Versterking van online aanwezigheid</h2>
					<p> Door deel te nemen aan het platform verbeteren
						advocaten hun zichtbaarheid online en positioneren ze zichzelf als experts binnen hun
						rechtsgebied.</p>
				</div>
			</div>
		</div>


		<!-- end fourth section 2 -->
	</section>
	<!-- Testomnonail Slider html -->
	<div class="outer-containerr">
		<div class="containerr testiimonal-section">
			<h2 class="testimonials">Verdictvision in de <br>
				<span style="color: #333333 !important; -webkit-text-fill-color: #333333">praktijk</span>
			</h2>
			<div class="your-class single-item-rtl">
				<div class="image-width-text">
					<div class="img">
						<img src="{{ asset('assets/images/9H9HURSZH2qNdgmEKy4tnbqNo.png') }}" alt="Image description">
					</div>
					<div class="content-test">
						<h2>Recruiters</h2>
						<p>Recruiters gebruiken onze AI-oplossing voor het efficiënt documenteren van intakegesprekken
							met
							werkzoekenden, waarbij belangrijke informatie zoals vaardigheden en werkvoorkeuren
							nauwkeurig
							worden.</p>
					</div>
				</div>

				<div class="image-width-text">
					<div class="img">
						<img src="{{ asset('assets/images/Am3OnI7MFYnFWAOMmGv9iiJDX4.jpeg') }}" alt="Image description">
					</div>
					<div class="content-test">
						<h2>Uw Toepassing Hier?</h2>
						<p>Heeft u een unieke uitdaging in gespreksverslaglegging? Laat ons weten hoe Verdictvision u
							kan
							helpen. Sluit u aan bij ons Partnerships Programma en maak van uw casus ons volgende
							succesverhaal.</p>
					</div>
				</div>

				<div class="image-width-text">
					<div class="img">
						<img src="{{ asset('assets/images/E1XwlyHnr8EUeOJOgd7jeGpNVA.jpeg') }}" alt="Image description">
					</div>
					<div class="content-test">
						<h2>Tandartsen</h2>
						<p>Via Tandartsen.ai kunnen tandartsen hun gespreksnotulering automatiseren terwijl ze een
							speldmicrofoon dragen. Dit systeem is perfect afgestemd op de professionele normen en
							specifieke
							vakterminologie van de tandheelkunde.</p>
					</div>
				</div>

				<div class="image-width-text">
					<div class="img">
						<img src="{{ asset('assets/images/O7a8TxjyzDbWy4Y0lWjb9QLJPs.png') }}" alt="Image description">
					</div>
					<div class="content-test">
						<h2>Fysiotherapeuten</h2>
						<p>Via fysio.ai kunnen fysiotherapeuten gespreksnotulering automatiseren, perfect in lijn met
							sectorrichtlijnen en vakterminologie.</p>
					</div>
				</div>

				<div class="image-width-text">
					<div class="img">
						<img src="{{ asset('assets/images/Sal8UyVMsnVI3glJi9WNEsusDhE.jpeg') }}" alt="Image description">
					</div>
					<div class="content-test">
						<h2>Bedrijfsartsen</h2>
						<p>Bedrijfsarts.ai ondersteunt bedrijfsartsen bij het vastleggen van cliëntconsultaties, waarbij
							essentiële medische informatie accuraat wordt gedocumenteerd en gestructureerd.</p>
					</div>
				</div>

				<div class="image-width-text">
					<div class="img">
						<img src="{{ asset('assets/images/Qfu5fWaly4XYKWlLUiHLhDzUUw.jpeg') }}" alt="Image description">
					</div>
					<div class="content-test">
						<h2>Inspecteurs</h2>
						<p>Inspectie.ai maakt het mogelijk voor inspecteurs om bevindingen mondeling vast te leggen,
							waarna
							deze automatisch omgezet worden in gedetailleerde rapporten. Dit bespaart tijd en elimineert
							de
							noodzaak voor handmatige invoer.</p>
					</div>
				</div>



			</div>
			<div class="custom-prev unqiue_rapper">
				<svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24" id="left-arrow" data-name="Flat Line"
					xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
					<line id="primary" x1="21" y1="12" x2="3" y2="12"
						style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</line>
					<polyline id="primary-2" data-name="primary" points="6 9 3 12 6 15"
						style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</polyline>
				</svg>
			</div>
			<div class="custom-next unqiue_rapper">
				<svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24" id="right-arrow"
					data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
					<line id="primary" x1="3" y1="12" x2="21" y2="12"
						style="fill: none; stroke:#fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</line>
					<polyline id="primary-2" data-name="primary" points="18 15 21 12 18 9"
						style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</polyline>
				</svg>
			</div>
			<div class="arrow_custom">
				<img src="{{ asset('assets/images/CKx2nlnGyaAN5lofQQwStAHRbtk.png') }}">
			</div>
		</div>
	</div>
	<!-- Review Slider Custon Html -->
	<div class="custom_review_slider">
		<div class="containerr reviews_slider">
			<h2 class="testimonials">Some excellent <br>
				<span>example by client</span>
			</h2>
			<div class="your-class-reviews single-item-rtl">
				<div class="images_reviews_slide">
					<div class="content">
						<p>A qualitative conversation is crucial to adequately understand the needs of a patient.
							However, typing in the file can distract from this conversation. Verdictvision offers a
							structured overview of the conversation, reduces distractions, minimizes administrative
							burdens and promotes a better conversation. A handy tool that really boosts interaction in
							healthcare!</p>
					</div>
					<div class="content-title">
						<div class="reviewer_name">
							<h2>Derek Sweijen</h2>
							<h3>Sento Medical Amsterdam</h3>
						</div>
						<div class="start">
							<span>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</span>
						</div>
					</div>
					<div class="reviewer_profile">
						<img src="{{ asset('assets/images/doP6Ht2CMFpbjtmmQTRl4Etovc (1).jpg') }}" alt="Profile_name">
					</div>
				</div>
				<div class="images_reviews_slide">
					<div class="content">
						<p>For years I have been used to having an assistant who takes notes during treatments, but
							since I started using Tandartsen.ai everything has changed. I now wear a small pin
							microphone that records everything I say during the treatment and then automatically
							converts it into accurate notes. It is amazing how much time and effort this saves. My
							assistant can now fully concentrate on patient care, while I no longer have to worry about
							administration. A real game-changer for my practice!</p>
					</div>
					<div class="content-title">
						<div class="reviewer_name">
							<h2>John Huizinga</h2>
							<h3>Dental practice Akersloot</h3>
						</div>
						<div class="start">
							<span>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</span>
						</div>
					</div>
					<div class="reviewer_profile">
						<img src="{{ asset('assets/images/hAjNU7Wkx1kaEINBq3NLVNp3lDA.jpg') }}" alt="Profile_name">
					</div>
				</div>
				<div class="images_reviews_slide">
					<div class="content">
						<p>At first I thought… well I’ll wait a bit longer… but I took the bait anyway. Going along with
							this lightning fast, somewhat exciting technology is also a smart move for healthcare.
							Because it saves so much time. Finally, full attention for the patient again!!!</p>
					</div>
					<div class="content-title">
						<div class="reviewer_name">
							<h2>Pim de Groot</h2>
							<h3>PA de Groot</h3>
						</div>
						<div class="start">
							<span>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</span>
						</div>
					</div>
					<div class="reviewer_profile">
						<img src="{{ asset('assets/images/J3fD7XX4aKRbj7CooIO7P48GEvw.jpg') }}" alt="Profile_name">
					</div>
				</div>
				<div class="images_reviews_slide">
					<div class="content">
						<p>The use of physio AI is simple and effective. It gives space for a good intake interview
							without the need to register everything at that moment. Initially quite challenging to use
							AI but it proves its added value time and again.</p>
					</div>
					<div class="content-title">
						<div class="reviewer_name">
							<h2>Bas Helibron</h2>
							<h3>Physio Spaland</h3>
						</div>
						<div class="start">
							<span>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</span>
						</div>
					</div>
					<div class="reviewer_profile">
						<img src="{{ asset('assets/images/CbQY0fVHGJ1j5MrfozsSn98magU.jpg') }}" alt="Profile_name">
					</div>
				</div>
			</div>
			<div class="custom-prev-reviews unqiue_rapper">
				<svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24" id="left-arrow" data-name="Flat Line"
					xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
					<line id="primary" x1="21" y1="12" x2="3" y2="12"
						style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</line>
					<polyline id="primary-2" data-name="primary" points="6 9 3 12 6 15"
						style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</polyline>
				</svg>
			</div>
			<div class="custom-next-reviews unqiue_rapper">
				<svg fill="#000000" width="30px" height="30px" viewBox="0 0 24 24" id="right-arrow"
					data-name="Flat Line" xmlns="http://www.w3.org/2000/svg" class="icon flat-line">
					<line id="primary" x1="3" y1="12" x2="21" y2="12"
						style="fill: none; stroke:#fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</line>
					<polyline id="primary-2" data-name="primary" points="18 15 21 12 18 9"
						style="fill: none; stroke: #fff; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;">
					</polyline>
				</svg>
			</div>
			<div class="arrow_custom">
				<img src="{{ asset('assets/images/rightpng.png') }}">
			</div>
		</div>
	</div>
	<div class="conatin-order-arranged">
		<!-- Input email form containerr -->
		<div class="containerr-custom-email">
			<div class="design_patter_form" style="max-width: 90%; margin: 0 auto;">
				<h2>KLAAR VOOR GESPREKKEN <br> <span>ZONDER AFLEIDING?</span></h2>
				<p>Stap over op ongestoorde interacties met Verdictvision. Boek een <br>
					vrijblijvende demo en ontdek hoe onze slimme AI-oplossing het <br>
					notuleren voor u automatiseert.
				</p>
				<div class="email-form">
					<input type="email" placeholder="Jouw e-mailadres...">
					<button type="submit">Submit</button>
				</div>
				<div class="img-arrow">
					<img src="{{ asset('assets/images/pZDW9a68OybuoyxbCvGEzmskxFc (1).png') }}">
				</div>
			</div>
		</div>
		<!-- Faq section Html -->
		<div class="custom-faq-containerr">
			<div class="faq-containerr">
				<div class="custom_faq-anser">
					<h2>
						VEELGESTELDE <br />
						VRAGEN
					</h2>

					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Hoe werkt het platform?
						</div>
						<div class="faq-answer">
							<p>
								Ons platform biedt een eenvoudige en kosteloze manier om juridische hulp te vinden. Vul
								een vragenlijst in die ons helpt uw situatie te begrijpen. Op basis van uw antwoorden
								berekenen we de kansen op succes van uw zaak en koppelen we u aan de drie beste
								advocaten die u verder kunnen helpen.
							</p>
						</div>
					</div>

					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Wat voor soort juridische kwesties kan ik indienen?
						</div>
						<div class="faq-answer">
							<p>
								U kunt allerlei juridische kwesties indienen, waaronder familierecht, arbeidsrecht,
								contractenrecht en meer. Het platform is ontworpen om u te helpen bij verschillende
								soorten
								rechtszaken.
							</p>
						</div>
					</div>

					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Hoe worden de advocaten geselecteerd?
						</div>
						<div class="faq-answer">
							<p>
								Onze selectie is gebaseerd op de specialisatie van de advocaten en hun eerdere successen
								in vergelijkbare zaken. We zorgen ervoor dat de advocaten die we aanbevelen goed passen
								bij uw juridische situatie.
							</p>
						</div>
					</div>

					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Wat zijn de kosten voor het gebruik van het platform?
						</div>
						<div class="faq-answer">
							<p>
								Het gebruik van ons platform is volledig kosteloos voor consumenten. Pas na het
								succesvol
								afronden van de zaak ontstaat er een betalingsverplichting.
							</p>
						</div>
					</div>

					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Hoe kan ik mijn kansen op succes berekenen?
						</div>
						<div class="faq-answer">
							<p>
								Onze technologie maakt gebruik van predictieve rechtsspraak op basis van historische
								data
								om de kansen op succes van uw zaak te berekenen. Dit helpt u om een beter beeld te
								krijgen van waar u aan toe bent.
							</p>
						</div>
					</div>

					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Wat gebeurt er na het vinden van een advocaat?
						</div>
						<div class="faq-answer">
							<p>
								Na een positieve match ontvangt de advocaat een gedetailleerde samenvatting van uw
								zaak, zodat zij direct aan de slag kunnen zonder een intakegesprek.
							</p>
						</div>
					</div>
					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Is er een contract voor de samenwerking met de advocaat?
						</div>
						<div class="faq-answer">
							<p>
								Ja, ons platform bevat een contractensysteem dat automatisch een overeenkomst opstelt op
								basis van uw antwoorden in de vragenlijst. Beide partijen moeten dit contract goedkeuren
								voordat de samenwerking begint.
							</p>
						</div>
					</div>
					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Kan ik mijn zaak volgen na de match?
						</div>
						<div class="faq-answer">
							<p>
								Zeker! U kunt eenvoudig communiceren met uw advocaat via ons platform en updates over
								uw zaak volgen.
							</p>
						</div>
					</div>
					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Wat als ik niet tevreden ben met de gekozen advocaat?
						</div>
						<div class="faq-answer">
							<p>
								Als u niet tevreden bent met de advocaat die aan u is gekoppeld, kunt u eenvoudig
								opnieuw
								verbinding maken met andere advocaten via ons platform.
							</p>
						</div>
					</div>
					<div class="faq-section">
						<div class="faq-question">
							<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M4 12H20M12 4V20" stroke="#cccccc" stroke-width="2" stroke-linecap="round"
									stroke-linejoin="round" />
							</svg></span>
							Hoe kan ik beginnen?
						</div>
						<div class="faq-answer">
							<p>
								U kunt direct beginnen door onze vragenlijst in te vullen op de homepage. Het proces is
								snel
								en gebruiksvriendelijk!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="footer">
		<div class="footer_content">
			<div class="header">
				<div class="footer_logo">
					<img src="{{ asset('assets/images/logo (1).png') }}">
				</div>
				<div class="footer_menu">
					<ul>
						<li><a class="font" href="#">Aanpak </a></li>
						<li><a class="font" href="#">Voordelen</a></li>
						<li><a class="font" href="#">Voorbeelden</a></li>
						<li><a class="font" href="#">Ervaringen</a></li>
						<li><a class="font" href="#">Contact</a></li>
						<li><a class="font" href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="footer_mid">
				<div class="footer_left">
					<div>
						<h1>Info@Verdictvision</h1>
						<p>You'll speak, we will write.<br>Vijverhofstraat 47, Rotterdam</p>
					</div>
				</div>
				<div class="footer_right">
					<div class="svg"> <svg xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24"
							color="rgb(255, 255, 255)"
							style="user-select: none; width: 100%; height: 100%; display: inline-block; fill: rgb(255, 255, 255); flex-shrink: 0;">
							<path
								d="M16.75 13.96c.25.13.41.2.46.3.06.11.04.61-.21 1.18-.2.56-1.24 1.1-1.7 1.12-.46.02-.47.36-2.96-.73-2.49-1.09-3.99-3.75-4.11-3.92-.12-.17-.96-1.38-.92-2.61.05-1.22.69-1.8.95-2.04.24-.26.51-.29.68-.26h.47c.15 0 .36-.06.55.45l.69 1.87c.06.13.1.28.01.44l-.27.41-.39.42c-.12.12-.26.25-.12.5.12.26.62 1.09 1.32 1.78.91.88 1.71 1.17 1.95 1.3.24.14.39.12.54-.04l.81-.94c.19-.25.35-.19.58-.11l1.67.88M12 2a10 10 0 0 1 10 10 10 10 0 0 1-10 10c-1.97 0-3.8-.57-5.35-1.55L2 22l1.55-4.65A9.969 9.969 0 0 1 2 12 10 10 0 0 1 12 2m0 2a8 8 0 0 0-8 8c0 1.72.54 3.31 1.46 4.61L4.5 19.5l2.89-.96A7.95 7.95 0 0 0 12 20a8 8 0 0 0 8-8 8 8 0 0 0-8-8z">
							</path>
						</svg></div>
					<div class="svg"> <svg xmlns="http://www.w3.org/2000/svg" focusable="false" viewBox="0 0 24 24"
							color="rgb(255, 255, 255)"
							style="user-select: none; width: 100%; height: 100%; display: inline-block; fill: rgb(255, 255, 255); flex-shrink: 0;">
							<path
								d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z">
							</path>
						</svg></div>
				</div>
			</div>
			<div class="end_content">
				<p>copyrights @ Verdictvision -2024</p>
			</div>
		</div>
	</section>
</main>
<script>
		$(document).ready(function () {
			$('.your-class').slick({
				speed: 400,
				slidesToShow: 3,
				slidesToScroll: 1,
				prevArrow: $('.custom-prev'),
				nextArrow: $('.custom-next'),
				autoplay: true,
				autoplaySpeed: 900,
				infinite: true,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 3,
							infinite: true,
							dots: false
						}
					},
					{
						breakpoint: 600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 2
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1
						}
					}
				]
			});
			$('.your-class-reviews').slick({
				speed: 400,
				slidesToShow: 2,
				slidesToScroll: 1,
				prevArrow: $('.custom-prev-reviews'),
				nextArrow: $('.custom-next-reviews'),
				autoplay: false,
				autoplaySpeed: 800,
				responsive: [
					{
						breakpoint: 1024,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: false
						}
					}
				]
			});

			$(".slides_parent").slick({
            slidesToShow: 3, // Default number of slides
            infinite: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
			prevArrow: `<button type="button" class="slick-prev">
                    <img src="{{ asset('assets/images/OV2wxJWGsrR345LxSpHbBtG6wnY.png') }}" alt="Previous">
                </button>`,
    		nextArrow: `<button type="button" class="slick-next">
                    <img src="{{ asset('assets/images/XSi7t5l9i2pw3z8LDQTKdOHZzkA.png') }}" alt="Next">
                </button>`,
            responsive: [
                {
                    breakpoint: 991, // On screens below 991px
                    settings: {
                        slidesToShow: 1, // Show only 1 slide
                        slidesToScroll: 1,
                    }
                }
            ]
        });
		});

	</script>
	<script>

		$(document).ready(function () {
			$('.faq-question').click(function () {
				$(this).next('.faq-answer').slideToggle();
				$(this).find('svg').toggleClass('rotated');
			});
		});

		document.querySelector('.menu-toggle').addEventListener('click', function () {
			const navMenu = document.querySelector('.nav-menu');
			const menuIcon = this.querySelector('i');

			navMenu.classList.toggle('show');

			// Toggle the icon between hamburger and close (X)
			if (navMenu.classList.contains('show')) {
				menuIcon.classList.remove('fa-bars');
				menuIcon.classList.add('fa-times');
			} else {
				menuIcon.classList.remove('fa-times');
				menuIcon.classList.add('fa-bars');
			}
		});

		$(document).ready(function () {
			var video = document.getElementById("myVideo");
			var logoOverlay = document.querySelector(".logo-overlay");

			// Hide logo overlay when the video starts playing
			video.addEventListener("play", function () {
				logoOverlay.style.display = "none";
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