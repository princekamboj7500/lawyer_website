@extends('layouts.app')

@section('content')
<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registration</h2>
            </div>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="type" class="col-form-label text-md-right">Type</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="type">
                            <option value="lawyer">Lawyer</option>
                            <option value="client">Client</option>
                        </select>
                </div>
               
                <h4 class="mb-3">{{ __('Basisinformatie') }}</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name" class="col-form-label text-md-right">{{ __('Wat is je volledige naam?') }}</label> <span class="text-danger">*</span>

                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" pattern="[a-zA-Z][a-zA-Z ]{2,}" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                        <!-- Wat is je e-mailadres? -->
                    <div class="form-group col-md-6">
                        <label for="email" class="col-form-label text-md-right">{{ __('Wat is je e-mailadres?') }}</label> <span class="text-danger">*</span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone" class="col-form-label text-md-right">{{ __('Wat is je telefoonnummer?') }}</label> <span class="text-danger">*</span>
                        <input id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="tel">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password" class="col-form-label text-md-right">{{ __('Wachtwoord') }} (min. 8 karakters)</label> <span class="text-danger">*</span>
                        
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Bevestig Wachtwoord') }}</label> <span class="text-danger">*</span>
                        
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>

                <div id="lawyer-fields">
                    <h4 class="mb-3">{{ __('Kantoorinformatie') }}</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="functie" class="col-form-label text-md-right">{{ __('Wat is je functie binnen het kantoor?') }}</label> <span class="text-danger">*</span>
                            <select id="functie" class="form-control @error('functie') is-invalid @enderror" name="office_role">
                                <option value="Partner">Partner</option>
                                <option value="Senior advocaat">Senior advocaat</option>
                                <option value="Junior advocaat">Junior advocaat</option>
                                <!-- Add more options as needed -->
                            </select>
                            @error('functie')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name" class="col-form-label text-md-right">{{ __('Wat is de naam van je advocatenkantoor?') }}</label> <span class="text-danger">*</span>

                                <input id="firm_name" type="text" class="form-control @error('firm_name') is-invalid @enderror" name="firm_name" value="{{ old('firm_name') }}"  autocomplete="firm_name" pattern="[a-zA-Z][a-zA-Z ]{2,}" autofocus>
                                
                                @error('firm_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- In welke stad en regio is je kantoor gevestigd? -->
                        <div class="form-group col-md-6">
                            <label for="city_region" class="col-form-label text-md-right">{{ __('In welke stad en regio is je kantoor gevestigd?') }}</label> <span class="text-danger">*</span>
                            <input id="city_region" type="text" class="form-control @error('city_region') is-invalid @enderror" name="city_region" value="{{ old('city_region') }}" autocomplete="address-level2">
                            @error('city_region')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address" class="col-form-label text-md-right">{{ __('Wat is je kantooradres?') }}</label> <span class="text-danger">*</span>
                            <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" autocomplete="street-address">
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="mb-3">{{ __('Specialisaties en Ervaring') }}</h4>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="specializations" class="col-form-label text-md-right">
                                {{ __('In welke rechtsgebieden ben je gespecialiseerd?') }}
                            </label> <span class="text-danger">*</span>
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="specializations[]" value="Civiel recht" id="civiel_recht">
                                <label class="form-check-label" for="civiel_recht">Civiel recht</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="specializations[]" value="Strafrecht" id="strafrecht">
                                <label class="form-check-label" for="strafrecht">Strafrecht</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="specializations[]" value="Arbeidsrecht" id="arbeidsrecht">
                                <label class="form-check-label" for="arbeidsrecht">Arbeidsrecht</label>
                            </div>

                            <!-- Additional checkboxes go here... -->

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="specializations[]" value="Overig" id="overig" onchange="toggleOtherSpecialization()">
                                <label class="form-check-label" for="overig">Overig</label>

                                <input type="text" class="form-control mt-2" name="other_specialization" id="other_specialization" 
                                    placeholder="{{ __('Vul in welke rechtsgebieden') }}" style="display:none;">
                            </div>

                            <!-- Displaying the error -->
                            @error('specializations')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Hoeveel jaar ervaring heb je in jouw specialisaties? -->
                        <div class="form-group col-md-6">
                            <label for="experience_years" class="col-form-label text-md-right">{{ __('Hoeveel jaar ervaring heb je in jouw specialisaties?') }}</label>
                            <select id="experience_years" class="form-control @error('experience_years') is-invalid @enderror" name="experience_years">
                                <option value="0-2 jaar">0-2 jaar</option>
                                <option value="3-5 jaar">3-5 jaar</option>
                                <option value="6-10 jaar">6-10 jaar</option>
                                <option value="11+ jaar">11+ jaar</option>
                            </select>
                            @error('experience_years')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Heb je enige certificeringen of lidmaatschappen die relevant zijn voor je specialisaties? -->
                        <div class="form-group col-md-12">
                            <label for="certifications" class="col-form-label text-md-right">{{ __('Heb je enige certificeringen of lidmaatschappen die relevant zijn voor je specialisaties?') }}</label> <span class="text-danger">*</span>
                            <input id="certifications" type="text" class="form-control @error('certifications') is-invalid @enderror" name="certifications" value="{{ old('certifications') }}" autocomplete="certifications">
                            @error('certifications')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="mb-3">{{ __('Diensten en Voorkeuren') }}</h4>

                    <div class="form-row">
                        <!-- Welke diensten bied je aan? -->
                        <div class="form-group col-md-12">
                            <label for="services" class="col-form-label text-md-right">{{ __('Welke diensten bied je aan?') }}</label> <span class="text-danger">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services[]" value="Advies en consultatie" id="advies_consultatie">
                                <label class="form-check-label" for="advies_consultatie">
                                    Advies en consultatie
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services[]" value="Rechtsbijstand in procedures" id="rechtsbijstand">
                                <label class="form-check-label" for="rechtsbijstand">
                                    Rechtsbijstand in procedures
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services[]" value="Contractonderhandelingen" id="contractonderhandelingen">
                                <label class="form-check-label" for="contractonderhandelingen">
                                    Contractonderhandelingen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services[]" value="Mediation en geschiloplossing" id="mediation_geschiloplossing">
                                <label class="form-check-label" for="mediation_geschiloplossing">
                                    Mediation en geschiloplossing
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services[]" value="Overig" id="services_overig" onchange="toggleOtherService()">
                                <label class="form-check-label" for="services_overig">
                                    Overig
                                </label>
                                <input type="text" class="form-control mt-2" name="other_service" id="other_service" placeholder="{{ __('Vul in welke diensten') }}" style="display:none;">
                            </div>
                            @error('services')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="online_cases" class="col-form-label text-md-right">{{ __('Ben je bereid om zaken op afstand (online) te behandelen?') }}</label> <span class="text-danger">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="online_cases" value="Ja" id="online_ja">
                                <label class="form-check-label" for="online_ja">
                                    Ja
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="online_cases" value="Nee" id="online_nee">
                                <label class="form-check-label" for="online_nee">
                                    Nee
                                </label>
                            </div>
                            @error('online_cases')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <!-- Wat is je beschikbaarheid voor nieuwe zaken? -->
                        <div class="form-group col-md-6">
                            <label for="availability" class="col-form-label text-md-right">{{ __('Wat is je beschikbaarheid voor nieuwe zaken?') }}</label>
                            <select id="availability" class="form-control @error('availability') is-invalid @enderror" name="availability">
                                <option value="Direct beschikbaar">Direct beschikbaar</option>
                                <option value="Binnen 1 maand">Binnen 1 maand</option>
                                <option value="Binnen 3 maanden">Binnen 3 maanden</option>
                            </select>
                            @error('availability')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Welke soorten cliënten heb je de voorkeur voor? -->
                        <div class="form-group col-md-12">
                            <label for="client_types" class="col-form-label text-md-right">{{ __('Welke soorten cliënten heb je de voorkeur voor?') }}</label> <span class="text-danger">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="client_types[]" value="Particulieren" id="particulieren">
                                <label class="form-check-label" for="particulieren">
                                    Particulieren
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="client_types[]" value="Bedrijven" id="bedrijven">
                                <label class="form-check-label" for="bedrijven">
                                    Bedrijven
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="client_types[]" value="Non-profitorganisaties" id="non_profit">
                                <label class="form-check-label" for="non_profit">
                                    Non-profitorganisaties
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="client_types[]" value="Overheidsinstellingen" id="overheidsinstellingen">
                                <label class="form-check-label" for="overheidsinstellingen">
                                    Overheidsinstellingen
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="client_types[]" value="Overig" id="client_overig" onchange="toggleOtherClientType()">
                                <label class="form-check-label" for="client_overig">
                                    Overig
                                </label>
                                <input type="text" class="form-control mt-2" name="other_client_type" id="other_client_type" placeholder="{{ __('Vul in welke soorten cliënten') }}" style="display:none;">
                            </div>
                            @error('client_types')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="mb-3">{{ __('Locatie en Bereikbaarheid') }}</h4>

                    <div class="form-row">
                        <!-- Heb je voorkeur voor zaken binnen een specifieke geografische regio? -->
                        <div class="form-group col-md-12">
                            <label for="preferred_regions" class="col-form-label text-md-right">{{ __('Heb je voorkeur voor zaken binnen een specifieke geografische regio?') }}</label> <span class="text-danger">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="preferred_regions[]" value="Noord-Nederland" id="noord_nederland">
                                <label class="form-check-label" for="noord_nederland">
                                    Noord-Nederland
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="preferred_regions[]" value="Midden-Nederland" id="midden_nederland">
                                <label class="form-check-label" for="midden_nederland">
                                    Midden-Nederland
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="preferred_regions[]" value="Zuid-Nederland" id="zuid_nederland">
                                <label class="form-check-label" for="zuid_nederland">
                                    Zuid-Nederland
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="preferred_regions[]" value="Overig" id="preferred_regions_overig" onchange="toggleOtherRegion()">
                                <label class="form-check-label" for="preferred_regions_overig">
                                    Overig
                                </label>
                                <input type="text" class="form-control mt-2" name="other_preferred_region" id="other_preferred_region" placeholder="{{ __('Vul in welke regio') }}" style="display:none;">
                            </div>
                            @error('preferred_regions')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Wat zijn je werkuren en dagen? -->
                        <div class="form-group col-md-6">
                            <label for="working_hours" class="col-form-label text-md-right">{{ __('Wat zijn je werkuren en dagen?') }}</label> <span class="text-danger">*</span>
                            <input id="working_hours" type="text" class="form-control @error('working_hours') is-invalid @enderror" name="working_hours" placeholder="{{ __('Bijv. Ma-Vr 9:00 - 17:00') }}" value="{{ old('working_hours') }}">
                            @error('working_hours')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="willing_to_travel" class="col-form-label text-md-right">{{ __('Ben je bereid om zaken te behandelen die mogelijk reizen naar andere regio’s of landen vereisen?') }}</label> <span class="text-danger">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="willing_to_travel" value="Ja" id="travel_ja">
                                <label class="form-check-label" for="travel_ja">
                                    Ja
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="willing_to_travel" value="Nee" id="travel_nee">
                                <label class="form-check-label" for="travel_nee">
                                    Nee
                                </label>
                            </div>
                            @error('willing_to_travel')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    <h4 class="mb-3">{{ __('Prijzen en Betalingen') }}</h4>

                    <div class="form-row">
                        <!-- Wat is je typische uurtarief of honorarium voor juridische diensten? -->
                        <div class="form-group col-md-12">
                            <label for="hourly_rate" class="col-form-label text-md-right">{{ __('Wat is je typische uurtarief of honorarium voor juridische diensten?') }}</label> <span class="text-danger">*</span>
                            <input id="hourly_rate" type="text" class="form-control @error('hourly_rate') is-invalid @enderror" name="hourly_rate" placeholder="{{ __('Bijv. €100 per uur') }}" value="{{ old('hourly_rate') }}">
                            @error('hourly_rate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Welke betalingsmethoden accepteer je? -->
                        <div class="form-group col-md-12">
                            <label for="payment_methods" class="col-form-label text-md-right">{{ __('Welke betalingsmethoden accepteer je?') }}</label> <span class="text-danger">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="payment_methods[]" value="Bankoverschrijving" id="bank_transfer">
                                <label class="form-check-label" for="bank_transfer">
                                    Bankoverschrijving
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="payment_methods[]" value="Creditcard" id="credit_card">
                                <label class="form-check-label" for="credit_card">
                                    Creditcard
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="payment_methods[]" value="Contant" id="cash">
                                <label class="form-check-label" for="cash">
                                    Contant
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="payment_methods[]" value="Andere" id="other_payment" onchange="toggleOtherPayment()">
                                <label class="form-check-label" for="other_payment">
                                    Andere
                                </label>
                                <input type="text" class="form-control mt-2" name="other_payment_method" id="other_payment_method" placeholder="{{ __('Vul in welke betaalmethode') }}" style="display:none;">
                            </div>
                            @error('payment_methods')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Wat is je beleid met betrekking tot pro bono (gratis) werk? -->
                        <div class="form-group col-md-12">
                            <label for="pro_bono_policy" class="col-form-label text-md-right">{{ __('Wat is je beleid met betrekking tot pro bono (gratis) werk?') }}</label> <span class="text-danger">*</span>
                            <select id="pro_bono_policy" class="form-control @error('pro_bono_policy') is-invalid @enderror" name="pro_bono_policy">
                                <option value="" disabled selected>{{ __('Selecteer een optie') }}</option>
                                <option value="Regelmatig">{{ __('Regelmatig') }}</option>
                                <option value="Af en toe">{{ __('Af en toe') }}</option>
                                <option value="Nooit">{{ __('Nooit') }}</option>
                            </select>
                            @error('pro_bono_policy')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <h4 class="mb-3">{{ __('Overige Informatie') }}</h4>

                    <div class="form-row">
                        <!-- Heb je eerdere ervaring met soortgelijke platforms of leadgeneratie tools? -->
                        <div class="form-group col-md-12">
                            <label for="experience_platforms" class="col-form-label text-md-right">{{ __('Heb je eerdere ervaring met soortgelijke platforms of leadgeneratie tools?') }}</label> <span class="text-danger">*</span>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="experience_platforms" value="Ja" id="experience_yes" onchange="toggleExperienceDescription()">
                                <label class="form-check-label" for="experience_yes">
                                    Ja
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="experience_platforms" value="Nee" id="experience_no" onchange="toggleExperienceDescription()">
                                <label class="form-check-label" for="experience_no">
                                    Nee
                                </label>
                            </div>
                            <input type="text" class="form-control mt-2" name="experience_description" id="experience_description" placeholder="{{ __('Beschrijf je ervaring') }}" style="display:none;">
                            @error('experience_description')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Wat zou je willen bereiken door deel te nemen aan dit platform? -->
                        <div class="form-group col-md-12">
                            <label for="platform_goals" class="col-form-label text-md-right">{{ __('Wat zou je willen bereiken door deel te nemen aan dit platform?') }}</label>
                            <textarea id="platform_goals" class="form-control @error('platform_goals') is-invalid @enderror" name="platform_goals" placeholder="{{ __('Beschrijf je doelen') }}">{{ old('platform_goals') }}</textarea>
                            @error('platform_goals')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <!-- Is er nog andere informatie die je relevant acht voor een betere afstemming met cliënten? -->
                        <div class="form-group col-md-12">
                            <label for="additional_info" class="col-form-label text-md-right">{{ __('Is er nog andere informatie die je relevant acht voor een betere afstemming met cliënten?') }}</label>
                            <textarea id="additional_info" class="form-control @error('additional_info') is-invalid @enderror" name="additional_info" placeholder="{{ __('Voeg extra opmerkingen of informatie toe') }}">{{ old('additional_info') }}</textarea>
                            @error('additional_info')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div style="display:flex; gap:5px;">
                        <h4 class="mb-3">{{ __('Selecteer een abonnementsplan:') }}</h4> 
                        <span class="text-danger">*</span>
                    </div>
                    <div class="form-group" id="subs-plan">
                    
                        <input type="radio" id="basic" name="subscription_plan" value="basic">
                        <label for="basic">Basisplan - $10/maand</label><br>

                        <input type="radio" id="premium" name="subscription_plan" value="premium">
                        <label for="premium">Premium-abonnement - $20/maand</label>
                        @if ($errors->has('subscription_plan'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('subscription_plan') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- <h4 class="mb-3">{{ __('Conclusie') }}</h4> -->

                    <!-- <div class="form-row">
                        <div class="form-group col-md-12">
                            <p>{{ __('Bedankt voor het invullen van je gegevens. Je registratie is nu voltooid en we zullen je gegevens gebruiken om de beste cliëntenmatches voor jou te vinden.') }}</p>
                            <p>{{ __('Je ontvangt binnenkort een bevestiging van je registratie en verdere instructies over hoe je toegang krijgt tot je dashboard op het platform.') }}</p>
                        </div>
                    </div> -->

                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" {{ old('terms') ? 'on' : '' }} required>
                        <label class="form-check-label" for="terms">
                            Ik ga akkoord met de <a href="#" target="_blank">algemene voorwaarden</a>.
                        </label>
                        @if ($errors->has('terms'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('terms') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group  mb-0" style="text-align:center;">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                </div>
            </form>
        </div>
    </section>
</main>
@endsection