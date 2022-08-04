<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use App\Models\Prod;

class ProdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        DB::table('diag_produits')->delete();

        $csvData = fopen(storage_path('\BDD_04082022.csv'), 'r');
        $firstline = true; 

        $c=0;

        while (($line = fgetcsv($csvData,1000, "\n")) !== false) {
            if (!$firstline) {
                //print_r($line);
                $lineItems = explode(';',($line[0])); 
                //print_r($lineItems);
                $ref    =   trim($lineItems[0]);
                

                if (!empty($ref)) {

                    $name = trim($lineItems[2]);

                    $type_produit_name      =   $lineItems[1]; 
                    $cerfa_name             =   $lineItems[4];
                    $cat_name               =   $lineItems[6];
                    $lot_name               =   $lineItems[16]; 

                    $mv         =   $lineItems[3];

                    $unite      =   trim($lineItems[7]);
                    $long       =   $lineItems[8];
                    $larg       =   $lineItems[9];
                    $epaiss     =   $lineItems[10];
                    $volume     =   $lineItems[11];
                    $code_dechet =  trim(str_replace(' ', '', $lineItems[12]));
                    $catD3E     =   trim($lineItems[15]);

                    //Clé étrangers 

                    //A verifieer !! //fcihier excel si c'est ecrit correctement 

                    if ($type_produit_name != null)
                        $type   =   DB::table('diag_produit_types')->where('name', 'LIKE', "%" . $type_produit_name)->first();
                    if ($cerfa_name != null)
                        $cerfa  =   DB::table('diag_cerfas')->where('name', 'LIKE', "%" . $cerfa_name)->first();
                    if ($cat_name != null)
                        $cat    =   DB::table('diag_categories')->where('name', 'LIKE', "%" . $cat_name)->first();
                    if ($lot_name != null)
                        $lot    =   DB::table('diag_lots')->where('name', 'LIKE', "%" . $lot_name)->first();


                    
                    $a = explode('-', $cat_name);
                    $produit_name = trim($name);
                    $produit_option_name=$produit_name;

                    $produit_id = DB::table('diag_produits')->insertGetId([
                        'name'                  => $produit_name,
                        //'user_id'             =>
                        'cerfa_id'              => !empty($cerfa)   ? $cerfa->id    : null,
                        'type_produit_id'       => !empty($type)    ? $type->id     : null,
                        'cat_id'                => !empty($cat)     ? $cat->id      : null,
                        'lot_id'                => !empty($lot)     ? $lot->id      : null,
                        'classe'                => str_replace(' ', '', $a[0]),
                        'tags'                  => (!empty($catD3E)) ? $catD3E . "," : null, 

                        'created_at' => date('Y-m-d H:i:s')
                    ]);

                    DB::table('diag_produit_options')->insert([
                        'produit_id'            => $produit_id,
                        'name'                  => $produit_option_name,

                        'unite'                 => $unite,
                        'masse_volumique'       => doubleval($this->tDouble($mv)),                    
                        'longueur'              => doubleval($this->tDouble($long)), 
                        'largeur'               => doubleval($this->tDouble($larg)), 
                        'epaisseur'             => doubleval($this->tDouble($epaiss)), 
                        'volume'                => doubleval($this->tDouble($volume)),

                        'code_dechet'           => $code_dechet,
                        'created_at' => date('Y-m-d H:i:s')
                    ]);
                }
            }
            
            $firstline = false;
        }
        fclose($csvData);
    }
    public function tDouble($str)
    {
        return str_replace(',', '.', $str);
    }
}