<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Usuario;
use App\Models\Pregunta;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

    for ($i = 0; $i < 10; $i++) {
        Usuario::create([
            'nombre' => $faker->firstName,
            'apellido' => $faker->lastName,
            'dni' => $faker->unique()->randomNumber(4),
            'email'=>$faker->unique()->email(),
            'fecha_nacimiento' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'educacion_alcanzada' => $faker->randomElement(['Primaria', 'Secundaria', 'Terciaria']),
            'edad' => $faker->numberBetween(18, 80)
        ]);
    }
    $coleccion_preguntas = [
        ['Proyectar, poner en marcha, operar y administrar industrias donde se realizan operaciones químicas simples y/o procesos químicos, físico-químicos y de bioingeniería complejos, sus instalaciones complementarias como agua, vapor, efluentes,  y equipos de medición o control de procesos, refrigeración y calefacción. ' , 1,1,'Quimica'],
        ['Diseñar, instalar, proyectar, dirigir la construcción y operar equipos para industrias, laboratorios y plantas pilotos.' , 1,1,'Quimica'],
        ['Asesorar en estudios de relevamiento, ubicación y ponderación de yacimientos.' , 1,2,'Petróleo'],
        ['Realizar estudios de factibilidad, proyectos, cálculos, dirección, construcción, instalación, inspección, operación y mantenimiento de obras de exploración y explotación de yacimientos de petróleo y gas; instalaciones de superficie vinculadas a la producción de hidrocarburos; instalaciones de tratamiento, transporte y almacenamiento, así como de alumbramiento y utilización de aguas subterráneas e instalaciones auxiliares (agua, vapor, gas, vacío, entre otras) para las obras mencionadas.' , 1,2,'Petróleo'],
        ['Seleccionar máquinas, aparatos e instrumentos relacionados con la actividad petrolera.' , 1,2,'Petróleo'],
        ['Diseñar, implementar, operar y controlar sistemas de procesamiento industrial, fraccionamiento y envasado de alimentos.' , 1,3,'Alimentos'],
        ['Investigar y desarrollar procesos de fabricación, transformación y fraccionamiento y envasado de alimentos.' , 1,3,'Alimentos'],
        ['Supervisar operaciones correspondientes al control de calidad de las materias primas a procesar, de los productos de elaboración y de los productos elaborados en la industria alimentaria.' , 1,3,'Alimentos'],
        ['Proyectar, dirigir, operar, controlar y mantener instalaciones destinadas a evitar la contaminación ambiental por efluentes de todo tipo.' , 1,1,'Quimica'],
        ['Diseñar, proyectar, instalar, operar y mantener sistemas de control, automatización y robótica industrial.' , 1,4,'Mecánica'],
        ['Proyectar, construir, dirigir, operar y mantener máquinas, equipos y sistemas destinados a procesos industriales y a la generación, transformación, regulación, conducción y aplicación de la energía mecánica.' , 1,4,'Mecánica'],
        ['Realizar estudios de comportamiento, ensayos, análisis de estructura y determinación de fallas de materiales, empleados en los sistemas mecánicos.' , 1,4,'Mecánica'],
        ['Realizar estudios de factibilidad, proyectar, dirigir, implementar, operar y evaluar el proceso de producción de bienes industrializados y la administración de los recursos destinados a la producción de dichos bienes.' , 2,5,'Industrial'],
        ['Planificar y organizar plantas industriales y plantas de transformación de recursos naturales de bienes industrializados y servicios.' , 2,5,'Industrial'],
        ['Proyectar las instalaciones necesarias para el desarrollo de procesos productivos destinados a la producción de bienes industrializados y dirigir su ejecución y mantenimiento.' , 2,5,'Industrial'],
        ['Llevar adelante el planeamiento del uso y administración de recursos hídricos; estudios hidrológicos, de agua subterránea, mecánica de suelos y rocas y comportamiento de materiales.' , 2,6,'Civil'],
        ['Planificar, proyectar, diseñar, calcular, especificar, construir, dirigir, operar, controlar y mantener instalaciones eléctricas y electromecánicas como redes de alta tensión, sistemas de distribución de energía, instalaciones de acondicionamiento de aire y fuerza motriz, y sistemas de generación de energía eólica, solar, hidroeléctrica, biomásica y a gas o a vapor.' , 2,8,'Electricista'],
        ['Analizar territorios para la construcción de edificios, caminos, redes ferroviarias, diques y grandes construcciones, a través del reconocimiento, determinación, medición y representación del espacio y sus características.' , 2,9,'Agrimensura'],
        ['Diseñar, construir, ensayar y mantener máquinas, dispositivos y equipos electromecánicos y electromagnéticos.. ' , 2,8,'Electricista'],
        ['Intervenir en la elaboración de la cartografía del país, a partir del relevo de terrenos y la interpretación de trabajos topográficos, hidrográficos y fotogramétricos, con representación geométrica, gráfica, y analítica, y fotografías aéreas o satelitales para usos civiles (planeamiento de ciudades, estudios de suelos, detección de obras clandestinas).' , 2,9,'Agrimensura'],
        ['Participar en la elaboración de políticas públicas y estudios de consultoría relacionados con la infraestructura eléctrica, la actividad regulatoria de la energía, estudios técnico-económicos de tarifas, precios y costos marginales de generación, transporte y distribución de energía eléctrica y evaluación de proyectos de inversión en el área. ' , 2,8,'Electricista'],
        ['Realizar el estudio, proyecto, diseño y cálculo de estructuras, de: edificios industriales y urbanos; obras de embalse, gestión y abastecimiento de agua e instalaciones hidromecánicas.' , 2,6,'Civil'],
        ['Realizar la dirección, inspección, construcción, explotación y mantenimiento obras vinculadas con los diversos modos de transporte (vial, ferroviario, fluvial, marítimo y aéreo) y obras vinculadas al planeamiento urbano.' , 2,6,'Civil'],
        ['Realizar planos de mensura de inmuebles y parcelas.' , 2,9,'Agrimensura'],
        ['Administrar centros de producción, manutención y reparación de construcciones navales de cualquier índole.' , 2,7,'Naval'],
        ['Diseñar, proyectar, construir, inspeccionar y reparar buques de cualquier tipo, construcciones flotantes deportivas, militares o utilitarias y artefactos navales.' , 2,7,'Naval'],
        ['Realizar investigación aplicada y desarrollo tecnológico vinculados al área naval.' , 2,7,'Naval'],
        ['Dirigir construcciones y estructuras, donde estudia las estructuras resistentes y obras civiles en sus diferentes aspectos (edificios, puentes, represas, líneas de alta tensión, torres para transmisiones radioeléctricas)' , 2,6,'Civil'],
        ['Realizar determinaciones geográficas de precisión' , 2,9,'Agrimensura'],
        ['Participar en el desarrollo de aplicaciones informáticas como sistemas de gestión y control de sistemas eléctricos o programas de cálculo' , 2,8,'Electricista'],
        ['Proyectar, diseñar, planificar, construir, dirigir y operar sistemas irradiantes, de enlace de comunicaciones (satélites y otros elementos de aplicación espacial) y de procesamiento electrónico de datos (hardware), incluyendo su programación (software).' , 3,10,'Electrónica'],
        ['Estudiar, diseñar, construir, programar  y operar sistemas, subsistemas y componentes para la generación, transmisión, recepción, distribución, reproducción y procesamiento de señales electromagnéticas, ópticas y acústicas, entre otras.' , 3,10,'Electrónica'],
        ['Desarrollar tanto software como hardware para sistemas específicos de información.' , 3,10,'Electrónica'],
        ['Dirigir proyectos de desarrollo y/o implantación de soluciones informáticas.' , 3,11,'Informática'],
        ['Diseñar metodologías y tecnologías para el desarrollo de software para sistemas específicos de información.  ' , 3,12,'Sistemas'],
        ['Diseñar y proyectar sistemas de información para una organización determinada mediante el relevamiento y análisis de sus procesos funcionales.' , 3,12,'Sistemas'],
        ['Gestionar desde el diseño y el desarrollo hasta la operación y el mantenimiento de proyectos asociados a los sistemas de información.' , 3,11,'Informática'],
        ['Orientar los procesos de diseño hacia el procesamiento automático, planificando y especificando el proyecto y su implementación. ' , 3,12,'Sistemas'],
        ['Proyectar y diseñar sistemas de inteligencia en edificios y viviendas, tráfico urbano y carreteras, sistemas y medios de transporte.' , 3,11,'Informática'],
        ['Proyectar sistemas de comunicaciones, automatismos para control industrial y audio profesional' , 3,10,'Electrónica'],
        ['Dirigir proyectos de desarrollo y/o implantación de soluciones informáticas.' , 3,12,'Sistemas'],
        ['Proyectar y diseñar sistemas de inteligencia en edificios y viviendas, tráfico urbano y carreteras, sistemas y medios de transporte' , 3,10,'Electrónica'],
        ['Realizar auditorías, arbitrajes, peritajes, certificaciones y tasaciones referidas a las áreas específicas de información' , 3,11,'Informática'],
        ['Dirigir organizaciones de tecnología informática' , 3,12,'Sistemas'],
        ['Organizar y dirigir el área de sistemas de todo tipo de organizaciones, determinar el perfil de los recursos humanos necesarios y contribuir a su selección y formación' , 3,11,'Informática']
        
    ];
    for ($i = 0; $i < count($coleccion_preguntas); $i++) {
        Pregunta::create([
            'pregunta' => $coleccion_preguntas[$i][0],
            'area' => $coleccion_preguntas[$i][1],
            'carreraid' => $coleccion_preguntas[$i][2],
            'carrera' => $coleccion_preguntas[$i][3]
        ]);
    }
    
    }
}
