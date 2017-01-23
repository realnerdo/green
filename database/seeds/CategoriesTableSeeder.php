<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        	"Orgánicos" => "Productos que no utilizan químicos en su producción y están certificados.",
        	"Agroecológicos" => "Productos que no utilizan químicos en su producción. ",
        	"Naturales" => "Productos de origen natural.",
        	"Ahorro energético" => "Productos eficientes (focos ahorradores), energía alternativa",
        	"Energía alternativa" => "Productos (paneles solares, calentadores solares, energía eólica)",
        	"Reciclados" => "Productos hechos a base de residuos.",
        	"Reuso" => "Productos seminuevos.",
        	"Vegano" => "No contiene productos de origen animal ni derivados.",
        	"Calzado" => "Zapatos, chanclas, sandalias - Mujer, Hombre",
        	"Ropa" => "Blusas, pantalones, faldas",
        	"Bolsas" => "De fiesta, mochilas, bolsos, etc.",
        	"Muebles" => "Sillas, mesas.",
        	"Tecnología" => "Paneles solares, calentadores solares, losetas recargables",
        	"Alimentos" => "Semillas, Miel, frutos secos, etc.",
        	"Higiene" => "Desodorantes, etc.",
        	"Maquillaje" => "Rubor, labiales, bálsamos, etc.",
        	"Niños" => "Juguetes, etc.",
        	"Hogar" => "Decoración, Baño.",
        	"Joyería" => "Madera."
        ];

        foreach ($categories as $title => $description) {
        	$cat = Category::create(['title' => $title, 'description' => $description]);
        }
    }
}
