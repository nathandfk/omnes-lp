<?php

class Sections {

    public static function areas_activity () {
        $areas_activity = [
            "Stratégie" => DIR_IMG . "areas-activity/strategie.svg",
            "Marketing" => DIR_IMG . "areas-activity/marketing.svg",
            "Digital" => DIR_IMG . "areas-activity/digital.svg",
            "Création" => DIR_IMG . "areas-activity/creation.svg",
            "Influence" => DIR_IMG . "areas-activity/influence.svg",
            "Événementiel" => DIR_IMG . "areas-activity/evenementiel.svg",
            "Expérience" => DIR_IMG . "areas-activity/experience.svg",
            "Luxe" => DIR_IMG . "areas-activity/luxe.svg",
        ];
        return $areas_activity;
    }

    public static function first_three_years () {
        $areas_activity = [
            "1ère" => 
                ["ANNÉE", "Titulaire Baccalauréat", "(toutes options)<br><br>", "Découvre nos 5 parcours découverte : 100% anglophone / Marketing / Création / Communication / Hybride <br> Inscriptions Hors Parcoursup"],
            "2ème" => 
                ["ANNÉE", "Titulaire Bac+1", "(en communication, management ou marketing)<br><br>", "Approfondis tes connaissances sur les nouvelles technologies digitales ou sur les nouvelles techniques créatives & multimédia"],
            "3ème" => 
                ["ANNÉE", "Titulaire Bac+2", "<br>", "8 spécialisations dont 4 possibles en alternance*<br>
                    <ul>
                        <li>Stratégie des marques</li> 
                        <li>Marketing Digital</li> 
                        <li>Marketing Événementiel</li> 
                        <li>Communication & Stratégie rédactionnelle</li>
                    </ul>"],
        ];
        return $areas_activity;
    }


    public static function cursus () {
        $areas_activity = [
        DIR_IMG . "cursus/cursus1.svg" => 
                ["45", "universités partenaires en Europe (Erasmus+) et dans le monde entier​"],
        DIR_IMG . "cursus/cursus2.svg" => 
                ["01", "semestre à l’étranger possible en 3è année"],
        DIR_IMG . "cursus/cursus3.svg" => 
                ["03", "poursuites d’études proposées en M1/M2 à Londres, Barcelone, San Francisco, New York, Bali/Costa Rica, Munich"],
        DIR_IMG . "cursus/cursus4.svg" => 
                ["01", "parcours 100% anglophone avec notre nouveau Bachelor à Paris, pour une carrière à l’international​"],
        ];
        return $areas_activity;
    }


    public static function ours_campus () {
        $areas_activity = [
            "Bordeaux" => "/",
            "Lyon" => "/",
            "Paris" => "/",
            "Rennes" => "/"
        ];
        return $areas_activity;
    }
}
