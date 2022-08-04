<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categorie extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //A verifier avec l'excel 
        DB::table('diag_lots')->delete();
        DB::table('diag_lots')->insert([
            ['name' => 'Lot 1 : Enveloppe - Superstructure - Infrastructures - Maçonnerie'],
            ['name' => 'Lot 2 : Charpente et couverture'],
            ['name' => 'Lot 3 : Cloison - Doublage - Bardage'],
            ['name' => 'Lot 4 : CVC (Climatisation, ventilation, chauffage)'],
            ['name' => 'Lot 5 : Appareils d\'éclairage'],
            ['name' => 'Lot 6 : Plafond suspendu'],
            ['name' => 'Lot 7 : Mobilier'],
            ['name' => 'Lot 8 : Installation sanitaire'],
            ['name' => 'Lot 9 : Revêtement de sol'],
            ['name' => 'Lot 10 : Ascenseur et monte charge'],
            ['name' => 'Lot 11 : Isolation - Étanchéité'],
            ['name' => 'Lot 12 : Aménagement extérieur'],
            ['name' => 'Lot 13 : Sécurité incendie'],
            ['name' => 'Lot 14 : Menuiserie - huisserie'],
            ['name' => 'Lot 15 : Installation électrique'],
            ['name' => 'Lot 16 : Déchets divers en vrac'],
            ['name' => 'Lot 17 : Polluants - Amiante - Plomb'],
            ['name' => 'Lot 18 : Installation diverse - Appareil / Equipement / Produit']
        ]);
        //-----------------------------------------------------------------------------------------------\\
        DB::table('diag_categories')->delete();
        DB::table('diag_categories')->insert([
            ['name' => 'DD - Autres'],
            ['name' => 'DND - Métal'],
            ['name' => 'DND - DEEE'],
            ['name' => 'DD - DEEE'],
            ['name' => 'DND - Autres'],
            ['name' => 'DND - Bois'],
            ['name' => 'DD - Amiante'],
            ['name' => 'DI - Béton/Pierre'],
            ['name' => 'DND - Plâtre'],
            ['name' => 'DD - Plomb'],
            ['name' => 'DI - Terre cuite'],
            ['name' => 'DND - Plastique'],
            ['name' => 'DND - Etanchéité'],
            ['name' => 'DND - Minérale'],
            ['name' => 'DI - Céramique'],
            ['name' => 'DND - Moquette'],
            ['name' => 'DI - Verre'],
            ['name' => 'DI - Bitume'],
            ['name' => 'DND - Mélange'],
            ['name' => 'DND - Plâtre + inerte'],
            ['name' => 'DND - Plâtre/Béton'],
            ['name' => 'DND - Terre'],
            ['name' => 'DD - Climatisation'],
            ['name' => 'TEST']
        ]);
        //-----------------------------------------------------------------------------------------------\\
        DB::table('diag_cerfas')->delete();
        DB::table('diag_cerfas')->insert([
            ['name' => "Autres DD (à détailler obligatoirement en fin du présent tableau) (5)"],
            ['name' => "Métaux (à détailler éventuellement en fin du présent tableau)"],
            ['name' => "DEEE (2) non dangereux (à détailler obligatoirement en fin du présent tableau)"],
            ['name' => "Equipements de chauffage, de climatisation ou frigorifiques contenant des fluides frigorigènes dangereux"],
            ['name' => "Sources lumineuses (tubes fluorescents, néons, lampes à décharges, lampes à LED)"],
            ['name' => "Autres DND (à détailler obligatoirement en fin du présent tableau) (5)"],
            ['name' => "Faiblement adjuvantés"],
            ['name' => "Amiante friable"],
            ['name' => "Amiante lié à des matériaux inertes"],
            ['name' => "Béton et pierre"],
            ['name' => "Plaques et carreaux"],
            ['name' => "Non traités"],
            ['name' => "Peintures contenant des substances dangereuses (4)"],
            ['name' => "Autres types d'amiante lié (3)"],
            ['name' => "Tuiles et briques"],
            ['name' => "Plastiques (à détailler)"], /// Plastiques (à détailler éventuellement selon type de plastiques) (2)
            ['name' => "Sources lumineuses (tubes fluorescents, néons, lampes à décharges, lampes à LED)"],
            ['name' => "Autres DEEE (2) contenant des substances dangereuses (à détailler obligatoirement en fin du présent tableau) (5)"],
            ['name' => "Enduit + support inerte"],
            ['name' => "Complexe d'étanchéité sans goudron (à détailler éventuellement en fin du présent tableau)"],
            ['name' => "Plastiques alvéolaires (PSE, XPS, PU) (2)"],
            ['name' => "Laines minérales"],
            ['name' => "Autres (Isolants)"],
            ['name' => "Céramique (carrelage, faïence et sanitaires)"],
            ['name' => "Fenêtres et autres ouvertures vitrées"],
            ['name' => "Revêtements de sols"],
            ['name' => "Verre sans menuiserie"],
            ['name' => "Mélanges bitumineux (sans goudron) (à détailler éventuellement en fin du présent tableau)"],
            ['name' => "Mélanges de DND listés ci-dessus"],
            ['name' => "Terre végétale"],
            ['name' => "Autres DD"],
            ['name' => "TEST"],

            /* Pas de materiaux dedans */
            ['name' => "Terre non polluées"],   
            ['name' => "Mélanges de DI listés ci-dessus sans DND"],   
            ['name' => "Autres déchets inertes"],   
            ['name' => "Complexes plâtre + isolant"],   
            ['name' => "Isolants Autres"],   
            ['name' => "Végétaux"],   
            ['name' => "Mélanges bitumineux contenant du goudron"],   
            ['name' => "Complexe d'étanchéité contenant du goudron"],   
            ['name' => "Bois traités contenant des substances dangereuses"],   
            ['name' => "Terres contenant des substances dangereuses"]
        ]);
        //--------------------------------------------------------------------------------------------\\
        DB::table('diag_produit_types')->delete();
        DB::table('diag_produit_types')->insert([
            ['name' => '"Divers - DD" ou "comptage DD"'],
            ['name' => '"Divers - DND" ou \'comptage"'],
            ['name' => 'Autre - Amiante'],
            ['name' => 'Bardage'],
            ['name' => 'Bardage - Amiante'],
            ['name' => 'Charpente'],
            ['name' => 'Charpente - Plomb'],
            ['name' => 'Conduit - Amiante'],
            ['name' => 'Couverture'],
            ['name' => 'Couverture - Amiante'],
            ['name' => 'DEEE - DND'],
            ['name' => 'Divers - DI'],
            ['name' => 'Divers - Plomb'],
            ['name' => 'Enduit'],
            ['name' => 'Escalier'],
            ['name' => 'Etanchéité'],
            ['name' => 'Faux plafond'],
            ['name' => 'Infrastructure'],
            ['name' => 'Isolation - Mur'],
            ['name' => 'Joint - Amiante'],
            ['name' => 'Mur et cloison'],
            ['name' => 'Mur - Amiante'],
            ['name' => 'Mur - Infrastructure'],
            ['name' => 'Mur - Plomb'],
            ['name' => 'Ouvrant'],
            ['name' => 'Ouvrant - Amiante'],
            ['name' => 'Ouvrant - Plomb'],
            ['name' => 'Plafond - Amiante'],
            ['name' => 'Plancher'],
            ['name' => 'Plinthe'],
            ['name' => 'Plinthe - Amiante'],
            ['name' => 'Plinthe - Plomb'],
            ['name' => 'Poteaux - Poutre'],
            ['name' => 'Poutre - IPN - Plomb'],
            ['name' => 'Revêtement de sol'],
            ['name' => 'Revêtement de sol - Amiante'],
            ['name' => 'Sanitaire -Equipements'],
            ['name' => 'Voirie - Amiante'],
            ['name' => 'Vrac - Amiante'],
            ['name' => 'VRD'],
            ['name' => 'TEST'],
            ['name' => 'Autre'],
            ['name' => 'Dépôt - Amiante'],
            ['name' => 'Cloisonnement'],
            ['name' => 'Marche - Plomb'],
            ['name' => 'Toiture'],
            ['name' => 'Amiante'],
            ['name' => 'Revêtement mur'],
            ['name' => 'Sol'],
            ['name' => 'Mur'],
            ['name' => 'Convoyeur 50 T/h'],
            ['name' => 'Convoyeur 350 T/h'],
            ['name' => 'Convoyeur 1050 T/h'],
            ['name' => 'Convoyeur 350 - 500 T/h'],
            ['name' => 'Convoyeur 1050 T/h 2'],
            ['name' => 'Eclairage'],
            ['name' => 'Ouvrant'],
            ['name' => 'Panneaux']
        ]);
    }
}
