<?php

namespace Database\Seeders;

use App\Models\EmpresaNaercris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmpresaNaercris::create([
            'quienesSomos' => 'Somos una empresa con raíces profundas que se remonta a 1987, cuando en el municipio de Mapastepec, Chiapas, México, se fundó nuestra primera sucursal dedicada a la venta de muebles y electrodomésticos. A lo largo de los años, hemos evolucionado y diversificado nuestras actividades como productos de ferretería, materiales para la construcción y servicios de transporte terrestre de carga. Además, damos un paso importante hacia la energía, operando gasolineras en Mapastepec y Ulapa (autopista). La creación de Comercializadora de Combustibles y Lubricantes Criserna SA de CV demuestra nuestro compromiso con la innovación y la adaptación a las necesidades cambiantes del mercado. Nuestra historia es una narrativa de crecimiento, esfuerzo colectivo y adaptabilidad. Hoy, como resultado de ese viaje, nos encontramos como una empresa sólida y comprometida, siempre buscando nuevas formas de servir a nuestra comunidad y más allá.',
            'mision' => 'Somos un grupo empresarial a lograr la satisfacción de nuestros clientes al ofrecer los más altos estándares de calidad, seguridad y servicio en todos los trabajos que realizamos, así como contribuir en el desarrollo económico y social de las localidades en las que realizamos operaciones.',
            'vision' => 'Ser los principales proveedores de nuestros productos en la zona, impulsando el desarrollo de las familias de la zona y brindar los productos y servicios de mayor calidad en el mercado.',
            'valores' => 'En todos los niveles de la organización nuestro desempeño se rige con base a los siguientes valores fundamentales: ·Compromiso ·Profesionalismo ·Honestidad ·Dedicación ·Trato justo ·Trabajo en equipo',
            'historia' => 'En el año de 1987, en el municipio de Mapastepec, Chiapas, México, se creó la primera sucursal dedicada a la venta de muebles y electrodomésticos al público en general, posteriormente se apertura una sucursal más en Mapastepec, dedicada a la venta de productos de ferretería y materiales para la construcción. Ya posicionados en Mapastepec, se abrieron nuevas sucursales, además de los municipios de Tonalá, Escuintla, Pijijiapan, de igual manera se realizó la construcción de un hotel ubicado en el municipio de Tonalá. Se creó la empresa dedicada al transporte terrestre de carga, y en 2011 se creó la empresa dedicada a la venta de combustibles en Mapastepec, esta es una gasolinera; unos años después se creó una nueva razón social Comercializadora de combustibles y lubricantes Criserna SA de CV, que también operaría una nueva gasolinera ubicada en Ulapa (autopista). Las empresas se fueron desarrollando con el paso del tiempo y el esfuerzo de muchas personas hasta llegar a ser lo que son hoy en día, empresas con gran potencial.',
        ]);
    }
}
