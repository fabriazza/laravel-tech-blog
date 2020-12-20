<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     // funzione che ritorna la home page
    public function index(){

        $articles = collect([
            [
                'title' => "Apple iPhone 13: finalmente arrivano gli schermi OLED Pro Motion?",
                'description' => "A bordo di almeno due delle versioni di iPhone 13 ci sarebbe il celebre display OLED Pro Motion – con refresh rate da 120 Hz – che per ora caratterizza solo gli iPad Pro. A corfermarlo sarebbe un nuovo report.",
                'img' => "/img/iphone13.jpeg",
                'date' => "2020-03-22"
            ],
            [
                'title' => "Cashback: che cos’è, come funziona e cosa è andato storto",
                'description' => "È da fine settembre che sentiamo parlare di Cashback e Super Cashback, ma è solo dall’8 dicembre che l’argomento è tornato sulle prime pagine dei quotidiani grazie alla proposta dell’Extra Cashback di Natale.",
                'img' => "/img/cashback.jpg",
                'date' => "2020-07-10"
            ],
            [
                'title' => "Digital signage: come sarà il suo futuro nel 2021?",
                'description' => "Il Digital Signage, ossia una segnaletica digitale in grado di comunicare, informare, attrarre e mantenere l’attenzione del pubblico attraverso display di grandi dimensioni, ha svolto un ruolo molto importante nei primi mesi del 2020.",
                'img' => "/img/digital-signage.png",
                'date' => "2020-11-05"
            ],
            [
                'title' => "Aruba instant on: il caso hard soft house",
                'description' => "Aruba Instant On è una soluzione HPE che consente alle piccole e medie imprese, ma anche ai privati cittadini, di ottenere una maggiore flessibilità per l’accesso alla rete ed evitare di eseguire ulteriori passaggi.",
                'img' => "/img/hard-soft.png",
                'date' => "2020-10-26"
            ],
            [
                'title' => "Accelerare il business delle pmi? Sì, con aruba action partner club!",
                'description' => "In sostanza, se inizi a vendere soluzioni Aruba per Piccole e Medie imprese, ricevi un cash bonus pari al 2% sulle vendite di soluzioni Aruba Small Business, che comprendono sia soluzioni di Aruba Instant On sia soluzioni di HPE Office Connect.",
                'img' => "/img/aruba-action-partner-club.jpg",
                'date' => "2020-05-22"
            ],
            [
                'title' => "Intel lancia il nuovo processore intel core di 11th gen!",
                'description' => "I nuovi processori hanno capacità ineguagliate in termini di produttività, collaborazione, creazione, gioco e intrattenimento su computer portatili ultrasottili e leggeri basati su Windows e ChromeOS.",
                'img' => "/img/Unintel.png",
                'date' => "2020-12-02"
            ]
        ]);

        $sortedByDate = $articles->sortBy('date');

        $lastThree = $sortedByDate->slice(0, 3);

        return view('home', ['articles' => $lastThree]);
    }

// funzione che ritorna la pagina contatti
    public function contacts(){
        return view('contacts');
    }

// funzione che ritorna la pagina chi siamo
    public function aboutus(){
        return view('aboutus');
    }
// funzione che ritorna la pagina del blog
    public function blog(){

        $articles = collect([
            [
                'title' => "Apple iPhone 13: finalmente arrivano gli schermi OLED Pro Motion?",
                'description' => "A bordo di almeno due delle versioni di iPhone 13 ci sarebbe il celebre display OLED Pro Motion – con refresh rate da 120 Hz – che per ora caratterizza solo gli iPad Pro. A corfermarlo sarebbe un nuovo report.",
                'img' => "/img/iphone13.jpeg"
            ],
            [
                'title' => "Cashback: che cos’è, come funziona e cosa è andato storto",
                'description' => "È da fine settembre che sentiamo parlare di Cashback e Super Cashback, ma è solo dall’8 dicembre che l’argomento è tornato sulle prime pagine dei quotidiani grazie alla proposta dell’Extra Cashback di Natale.",
                'img' => "/img/cashback.jpg"
            ],
            [
                'title' => "Digital signage: come sarà il suo futuro nel 2021?",
                'description' => "Il Digital Signage, ossia una segnaletica digitale in grado di comunicare, informare, attrarre e mantenere l’attenzione del pubblico attraverso display di grandi dimensioni, ha svolto un ruolo molto importante nei primi mesi del 2020.",
                'img' => "/img/digital-signage.png"
            ],
            [
                'title' => "Aruba instant on: il caso hard soft house",
                'description' => "Aruba Instant On è una soluzione HPE che consente alle piccole e medie imprese, ma anche ai privati cittadini, di ottenere una maggiore flessibilità per l’accesso alla rete ed evitare di eseguire ulteriori passaggi.",
                'img' => "/img/hard-soft.png"
            ],
            [
                'title' => "Accelerare il business delle pmi? Sì, con aruba action partner club!",
                'description' => "In sostanza, se inizi a vendere soluzioni Aruba per Piccole e Medie imprese, ricevi un cash bonus pari al 2% sulle vendite di soluzioni Aruba Small Business, che comprendono sia soluzioni di Aruba Instant On sia soluzioni di HPE Office Connect.",
                'img' => "/img/aruba-action-partner-club.jpg"
            ],
            [
                'title' => "Intel lancia il nuovo processore intel core di 11th gen!",
                'description' => "I nuovi processori hanno capacità ineguagliate in termini di produttività, collaborazione, creazione, gioco e intrattenimento su computer portatili ultrasottili e leggeri basati su Windows e ChromeOS.",
                'img' => "/img/Unintel.png"
            ]
        ]);

        $articlesDescrTrunc = $articles->map(function ($item) {
            $descrCut = substr($item['description'],0,80);
            $item['description'] = $descrCut . '[...]';
            return $item;
        });

        return view('blog', ['articles' => $articlesDescrTrunc]);
    }
}
