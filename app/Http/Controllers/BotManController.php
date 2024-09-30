<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('start', function(BotMan $botman) {
            $botman->reply("Starting the conversation...");
            $botman->startConversation(new IntakeConversation());
        });

        $botman->fallback(function($botman) {
            $botman->reply('Voer "start" in om te beginnen met het intakeproces.');
        });

        $botman->listen();
    }
}

class IntakeConversation extends Conversation
{
    protected $name;
    protected $region;
    protected $consultedLawyer;
    protected $issueType;
    protected $problemDescription;
    protected $startDate;
    protected $urgent;
    protected $urgentDate;
    protected $parties;
    protected $otherParties;
    protected $relationship;
    protected $legalStepsTaken;
    protected $documents;
    protected $evidence;
    protected $financialClaim;
    protected $financialClaimAmount;
    protected $personalImpact;
    protected $desiredOutcome;
    protected $outOfCourtSettlement;
    protected $previousActions;
    protected $lawyerPreference;
    protected $lawyerLocation;
    protected $budget;
    protected $additionalInfo;
    protected $annualIncome;
    protected $dependents;
    protected $householdIncome;
    protected $unexpectedExpenses;
    protected $monthlyHousingCost;
    protected $outstandingDebts;
    protected $legalAid;
    protected $otherLegalProcedures;
    protected $specialCircumstances;
    protected $phonenumber;

    public function run()
    {
        $this->askIntroduction();
    }

    public function askIntroduction()
    {
        $this->ask('Hallo! Ik ben hier om je te helpen met het beoordelen van je juridische zaak. Laten we beginnen met een paar basisvragen. Wat is je volledige naam?', function(Answer $answer) {
            $this->name = $answer->getText();
            Session::put('bot_user_name', $this->name);
            $this->askRegion();
        });
    }

    public function askRegion()
    {
        $this->ask('In welk land of regio woon je?', function(Answer $answer) {
            $this->region = $answer->getText();
            Session::put('bot_region', $this->region);
            $this->askConsultedLawyer();
        });
    }

    public function askConsultedLawyer()
    {
        $this->ask('Heb je eerder al een advocaat geraadpleegd voor deze zaak? (Ja/Nee)', function(Answer $answer) {
            $this->consultedLawyer = $answer->getText();
            Session::put('bot_consulted_lawyer', $this->consultedLawyer);
            $this->askIssueType();
        });
    }

    public function askIssueType()
    {
        $this->ask('Wat voor soort juridische kwestie heb je? Kies uit: Civiel recht, Strafrecht, Arbeidsrecht, Vastgoedrecht, Letselschade, Ondernemingsrecht, Overig', function(Answer $answer) {
            $this->issueType = $answer->getText();
            Session::put('bot_issue_type', $this->issueType);
            $this->askProblemDescription();
        });
    }

    public function askProblemDescription()
    {
        $this->ask('Kun je in je eigen woorden kort beschrijven wat het probleem is?', function(Answer $answer) {
            $this->problemDescription = $answer->getText();
            Session::put('bot_problem_description', $this->problemDescription);
            $this->askStartDate();
        });
    }

    public function askStartDate()
    {
        $this->ask('Wanneer is dit probleem ontstaan?', function(Answer $answer) {
            $this->startDate = $answer->getText();
            Session::put('bot_start_date', $this->startDate);
            $this->askUrgency();
        });
    }

    public function askUrgency()
    {
        $this->ask('Zijn er aankomende deadlines of rechtszittingen met betrekking tot deze zaak? (Ja/Nee)', function(Answer $answer) {
            $this->urgent = strtolower($answer->getText());
            Session::put('bot_urgent', $this->urgent);
            if ($this->urgent == 'ja') {
                $this->askUrgencyDetails();
            } else {
                $this->askInvolvedParties();
            }
        });
    }

    public function askUrgencyDetails()
    {
        $this->ask('Geef alsjeblieft de datum van de deadline of rechtszitting door.', function(Answer $answer) {
            $this->urgentDate = $answer->getText();
            Session::put('bot_urgent_date', $this->urgentDate);
            $this->askInvolvedParties();
        });
    }

    public function askInvolvedParties()
    {
        $this->ask('Hoeveel partijen zijn betrokken bij deze zaak, inclusief jezelf?', function(Answer $answer) {
            $this->parties = $answer->getText();
            Session::put('bot_parties', $this->parties);
            $this->askOtherParties();
        });
    }

    public function askOtherParties()
    {
        $this->ask('Kun je kort beschrijven wie de andere partijen zijn?', function(Answer $answer) {
            $this->otherParties = $answer->getText();
            Session::put('bot_other_parties', $this->otherParties);
            $this->askRelationship();
        });
    }

    public function askRelationship()
    {
        $this->ask('Wat is jouw relatie tot de andere partij?', function(Answer $answer) {
            $this->relationship = $answer->getText();
            Session::put('bot_relationship', $this->relationship);
            $this->askLegalStepsTaken();
        });
    }

    public function askLegalStepsTaken()
    {
        $this->ask('Zijn er al juridische stappen gezet of documenten ingediend voor deze zaak? (Ja/Nee)', function(Answer $answer) {
            $this->legalStepsTaken = strtolower($answer->getText());
            Session::put('bot_legal_steps_taken', $this->legalStepsTaken);
            if ($this->legalStepsTaken == 'ja') {
                $this->askDocuments();
            } else {
                $this->askEvidence();
            }
        });
    }

    public function askDocuments()
    {
        $this->ask('Wat voor soort documenten of procedures zijn er al? (Bijv. Dagvaarding, contract, politierapport, etc.)', function(Answer $answer) {
            $this->documents = $answer->getText();
            Session::put('bot_documents', $this->documents);
            $this->askEvidence();
        });
    }

    public function askEvidence()
    {
        $this->ask('Wat voor soort bewijsmateriaal of documentatie heb je om je zaak te ondersteunen? Kies uit: Getuigenverklaringen, Contracten, E-mails, Foto’s/video’s, Medische dossiers, Geen', function(Answer $answer) {
            $this->evidence = $answer->getText();
            Session::put('bot_evidence', $this->evidence);
            //$this->askFinancialClaim();
            $this->RegisterLink();
        });
    }

    public function askFinancialClaim()
    {
        $this->ask('Is er een geldbedrag verbonden aan deze zaak? (Ja/Nee)', function(Answer $answer) {
            $this->financialClaim = strtolower($answer->getText());
            Session::put('bot_financial_claim', $this->financialClaim);
            if ($this->financialClaim == 'ja') {
                $this->askClaimAmount();
            } else {
                $this->askPersonalImpact();
            }
        });
    }

    public function askClaimAmount()
    {
        $this->ask('Hoeveel probeer je te claimen, of hoeveel wordt er tegen jou geclaimd?', function(Answer $answer) {
            $this->financialClaimAmount = $answer->getText();
            Session::put('bot_financial_claim_amount', $this->financialClaimAmount);
            $this->askPersonalImpact();
        });
    }

    public function askPersonalImpact()
    {
        $this->ask('Hoe groot is de persoonlijke impact van deze zaak op je leven? Kies uit: Laag, Gemiddeld, Hoog', function(Answer $answer) {
            $this->personalImpact = $answer->getText();
            $this->askDesiredOutcome();
        });
    }

    public function askDesiredOutcome()
    {
        $this->ask('Wat zou voor jou de ideale uitkomst van deze zaak zijn? Kies uit: Schadevergoeding, Verwerping van aanklachten, Oplossing van geschil, Overig', function(Answer $answer) {
            $this->desiredOutcome = $answer->getText();
            $this->askOutOfCourtSettlement();
        });
    }

    public function askOutOfCourtSettlement()
    {
        $this->ask('Sta je open voor een schikking buiten de rechtbank? (Ja/Nee/Weet ik niet)', function(Answer $answer) {
            $this->outOfCourtSettlement = $answer->getText();
            $this->askPreviousActions();
        });
    }

    public function askPreviousActions()
    {
        $this->ask('Heb je al stappen ondernomen om het probleem op te lossen? (Ja/Nee)', function(Answer $answer) {
            $this->previousActions = strtolower($answer->getText());
            if ($this->previousActions == 'ja') {
                $this->askActionDetails();
            } else {
                $this->askLawyerPreferences();
            }
        });
    }

    public function askActionDetails()
    {
        $this->ask('Welke acties heb je ondernomen? (Bijv. Direct contact, Juridische kennisgeving, Klacht ingediend, Bemiddeling)', function(Answer $answer) {
            $this->previousActions = $answer->getText();
            $this->askLawyerPreferences();
        });
    }

    public function askLawyerPreferences()
    {
        $this->ask('Heb je de voorkeur voor een advocaat die gespecialiseerd is in een bepaald vakgebied?', function(Answer $answer) {
            $this->lawyerPreference = $answer->getText();
            $this->askLawyerLocation();
        });
    }

    public function askLawyerLocation()
    {
        $this->ask('Heb je een voorkeur voor een locatie, of ben je open voor advocaten uit andere regio’s?', function(Answer $answer) {
            $this->lawyerLocation = $answer->getText();
            $this->askBudget();
        });
    }

    public function askBudget()
    {
        $this->ask('Heb je een budget in gedachten voor advocaatkosten? (Ja/Nee)', function(Answer $answer) {
            $this->budget = strtolower($answer->getText());
            if ($this->budget == 'ja') {
                $this->askBudgetAmount();
            } else {
                $this->askAdditionalInfo();
            }
        });
    }

    public function askBudgetAmount()
    {
        $this->ask('Wat is je geschatte budget?', function(Answer $answer) {
            $this->budget = $answer->getText();
            $this->askAdditionalInfo();
        });
    }

    public function askAdditionalInfo()
    {
        $this->ask('Is er nog iets anders wat we moeten weten over je zaak?', function(Answer $answer) {
            $this->additionalInfo = $answer->getText();
            $this->askIncomeDetails();
        });
    }

    public function askIncomeDetails()
    {
        $this->ask('Wat is je huidige bruto jaarinkomen?', function(Answer $answer) {
            $this->annualIncome = $answer->getText();
            $this->askDependents();
        });
    }

    public function askDependents()
    {
        $this->ask('Heb je een partner of andere gezinsleden die financieel afhankelijk van je zijn? (Ja/Nee)', function(Answer $answer) {
            $this->dependents = $answer->getText();
            $this->askHouseholdIncome();
        });
    }

    public function askHouseholdIncome()
    {
        $this->ask('Wat is het gezamenlijke jaarinkomen van jouw huishouden (indien van toepassing)?', function(Answer $answer) {
            $this->householdIncome = $answer->getText();
            $this->askUnexpectedExpenses();
        });
    }

    public function askUnexpectedExpenses()
    {
        $this->ask('Heb je in de afgelopen 12 maanden onverwachte kosten of schulden gehad? (Ja/Nee)', function(Answer $answer) {
            $this->unexpectedExpenses = strtolower($answer->getText());
            if ($this->unexpectedExpenses == 'ja') {
                $this->askExpensesDetails();
            } else {
                $this->askHousingCost();
            }
        });
    }

    public function askExpensesDetails()
    {
        $this->ask('Kun je kort beschrijven welke financiële lasten je hebt gehad?', function(Answer $answer) {
            $this->unexpectedExpenses = $answer->getText();
            $this->askHousingCost();
        });
    }

    public function askHousingCost()
    {
        $this->ask('Wat zijn je maandelijkse woonlasten (huur/hypotheek)?', function(Answer $answer) {
            $this->monthlyHousingCost = $answer->getText();
            $this->askDebts();
        });
    }

    public function askDebts()
    {
        $this->ask('Heb je op dit moment openstaande schulden? (Ja/Nee)', function(Answer $answer) {
            $this->outstandingDebts = strtolower($answer->getText());
            if ($this->outstandingDebts == 'ja') {
                $this->askDebtAmount();
            } else {
                $this->askLegalAid();
            }
        });
    }

    public function askDebtAmount()
    {
        $this->ask('Wat is het totale bedrag van je openstaande schulden?', function(Answer $answer) {
            $this->outstandingDebts = $answer->getText();
            $this->askLegalAid();
        });
    }

    public function askLegalAid()
    {
        $this->ask('Heb je eerder gebruikgemaakt van gesubsidieerde rechtsbijstand? (Ja/Nee)', function(Answer $answer) {
            $this->legalAid = $answer->getText();
            $this->askOtherLegalProcedures();
        });
    }

    public function askOtherLegalProcedures()
    {
        $this->ask('Ben je momenteel betrokken bij andere juridische procedures die mogelijk invloed hebben op je financiën? (Ja/Nee)', function(Answer $answer) {
            $this->otherLegalProcedures = $answer->getText();
            $this->askSpecialCircumstances();
        });
    }

    public function askSpecialCircumstances()
    {
        $this->ask('Zijn er bijzondere omstandigheden die invloed hebben op je financiële situatie?', function(Answer $answer) {
            $this->specialCircumstances = $answer->getText();
            $this->conclude();
        });
    }

    public function conclude()
    {
        $this->say('Bedankt! Op basis van je antwoorden berekenen we nu de kans op succes van je zaak.');
        $this->say('Je ontvangt zo een lijst met advocaten die je kunnen helpen met je zaak.');
    }

    public function RegisterLink()
    {
        $this->say("Please register by clicking this link: <a target='_blank' href='/register'>Register</a>");
    }
}
