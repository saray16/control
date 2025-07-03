<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Formacion;

class FormacionSeeder extends Seeder
{
    public function run()
    {
        // Mapeo de categorías a iconos con múltiples opciones por categoría
               $categoryIcons = [
            'Biología' => ['bi-flower2', 'bi-tree', 'bi-droplet', 'bi-bug', 'bi-egg-fill'],
            'Física' => ['bi-lightning-charge', 'bi-asterisk', 'bi-magnet', 'bi-speedometer2', 'bi-sun'],
            'Química' => ['bi-funnel', 'bi-thermometer-sun', 'bi-bezier2', 'bi-flask', 'bi-atom'],
            'Matemática' => ['bi-calculator', 'bi-infinity', 'bi-graph-up-arrow', 'bi-pie-chart', 'bi-grid-3x3-gap'],
            'Artes' => ['bi-palette', 'bi-brush', 'bi-music-note-beamed', 'bi-camera', 'bi-film'],
            'Idiomas' => ['bi-translate', 'bi-chat-quote', 'bi-globe2', 'bi-bookmark', 'bi-flag'],
            'Tecnología' => ['bi-cpu', 'bi-robot', 'bi-motherboard', 'bi-code-slash', 'bi-joystick'],
            'Ambiente' => ['bi-tree', 'bi-recycle', 'bi-cloud-sun', 'bi-water', 'bi-flower2'],
            'OCEV' => ['bi-clipboard-data', 'bi-bar-chart-line', 'bi-file-text', 'bi-diagram-3', 'bi-check-circle'],
            'Ajedrez' => ['bi-chess', 'bi-chess-knight', 'bi-chess-board', 'bi-chess-queen', 'bi-chess-pawn'],
            'Lectura/Escritura' => ['bi-book', 'bi-pencil', 'bi-journal-text', 'bi-file-earmark-text', 'bi-quote'],
            'TICs' => ['bi-laptop', 'bi-tablet', 'bi-phone', 'bi-wifi', 'bi-broadcast'],
            'EIS' => ['bi-lightbulb', 'bi-people', 'bi-gear', 'bi-puzzle', 'bi-stars'],
            'Deporte' => ['bi-trophy', 'bi-activity', 'bi-heart-pulse', 'bi-bicycle', 'bi-stopwatch'],
            'HSE' => ['bi-shield-check', 'bi-person-check', 'bi-emoji-smile', 'bi-hand-thumbs-up', 'bi-heart']
        ];

        $formaciones = [
            // Talleres
            [
                'nombre' => 'TALLER CONOCIENDO EL FUNCIONAMIENTO DE NUESTRO CUERPO',
                'tipo' => 'T',
                'descripcion' => 'Los niños y las niñas también saben de ciencia. El secreto está en las estrategias de enseñanza y aprendizaje.',
                'categoria' => 'Biología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][0]
            ],
            [
                'nombre' => 'TALLER APRENDIENDO SOBRE EL MUNDO ANIMAL',
                'tipo' => 'T',
                'descripcion' => 'Descripción del taller sobre el mundo animal.',
                'categoria' => 'Biología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][1]
            ],
            [
                'nombre' => 'INTERDISCIPLENARIEDAD EN LAS CIENCIAS NATURALES',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre interdisciplinariedad en ciencias naturales.',
                'categoria' => 'Biología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][2]
            ],
            [
                'nombre' => 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA BIOLOGÍA',
                'tipo' => 'T',
                'descripcion' => 'Estrategias innovadoras para la enseñanza de biología.',
                'categoria' => 'Biología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][3]
            ],
            [
                'nombre' => 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DEL USO Y EL MANEJO DE LOS INSTRUMENTOS DE LABORATORIO',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre manejo de instrumentos de laboratorio.',
                'categoria' => 'Biología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][4]
            ],
            [
                'nombre' => 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE BIOLOGÍA',
                'tipo' => 'T',
                'descripcion' => 'Taller práctico sobre materiales de laboratorio de biología.',
                'categoria' => 'Biología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][0]
            ],
            [
                'nombre' => 'El divertido mundo de las plantas',
                'tipo' => 'T',
                'descripcion' => 'Taller interactivo sobre el mundo vegetal.',
                'categoria' => 'Biología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][1]
            ],
            [
                'nombre' => 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA FÍSICA',
                'tipo' => 'T',
                'descripcion' => 'Estrategias innovadoras para la enseñanza de física.',
                'categoria' => 'Física',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Física'][0]
            ],
            [
                'nombre' => 'LA DIDÁCTICA DE LA FÍSICA DESDE EL ERROR DE LOS CONCEPTOS Y SUS APLICACIONES EN EL AULA',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre didáctica de la física.',
                'categoria' => 'Física',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Física'][1]
            ],
            [
                'nombre' => 'Descubriendo la cotidianidad a través del juego para la mejora de la calidad educativa',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre aprendizaje a través del juego.',
                'categoria' => 'OCEV',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['OCEV'][0]
            ],
            [
                'nombre' => 'Física Recreativa',
                'tipo' => 'T',
                'descripcion' => 'Taller de física aplicada de forma recreativa.',
                'categoria' => 'Física',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Física'][2]
            ],
            [
                'nombre' => 'Los juegos tradicionales aplicados a la física',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre física a través de juegos tradicionales.',
                'categoria' => 'Física',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Física'][3]
            ],
            [
                'nombre' => 'Diseño para la Elaboración de Materiales Educativos Alternativos para la Enseñanza de las Ciencias Integradas',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre creación de materiales educativos.',
                'categoria' => 'OCEV',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['OCEV'][1]
            ],
            [
                'nombre' => 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECANICA I/PARTE I)',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre manejo de materiales de laboratorio de física parte I.',
                'categoria' => 'Física',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Física'][4]
            ],
            [
                'nombre' => 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE FÍSICA (MECANICA I/PARTE II)',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre manejo de materiales de laboratorio de física parte II.',
                'categoria' => 'Física',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Física'][0]
            ],
            [
                'nombre' => 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y APRENDIZAJE DE LA QUÍMICA',
                'tipo' => 'T',
                'descripcion' => 'Estrategias innovadoras para la enseñanza de química.',
                'categoria' => 'Química',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Química'][0]
            ],
            [
                'nombre' => 'MANEJO DE MATERIALES DEL KIT DE LABORATORIO DE QUÍMICA',
                'tipo' => 'T',
                'descripcion' => 'Taller práctico sobre materiales de laboratorio de química.',
                'categoria' => 'Química',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Química'][1]
            ],
            [
                'nombre' => 'El mundo entre la quimica, el arte y los vegetales',
                'tipo' => 'T',
                'descripcion' => 'Taller interdisciplinario sobre química, arte y botánica.',
                'categoria' => 'Química',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Química'][2]
            ],
            [
                'nombre' => 'LA QUIMÍCA EN LO COTIDIANO Y LAS DANZAS TRADICIONALES',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre química aplicada a la vida cotidiana y danzas.',
                'categoria' => 'Química',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Química'][3]
            ],
            [
                'nombre' => 'TALLER CONOCIENDO EL APASIONANTE MUNDO DE LA QUÍMICA',
                'tipo' => 'T',
                'descripcion' => 'Taller introductorio al mundo de la química.',
                'categoria' => 'Química',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Química'][4]
            ],
            [
                'nombre' => 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA',
                'tipo' => 'T',
                'descripcion' => 'Estrategias innovadoras para la enseñanza de matemática.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][0]
            ],
            [
                'nombre' => 'FRACCIONES DE MATEMATICA',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre enseñanza de fracciones matemáticas.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][1]
            ],
            [
                'nombre' => 'ESTRATEGIAS DIDÁCTICAS PARA LA INNOVACIÓN EN LA ENSEÑANZA Y EL APRENDIZAJE DE LA MATEMÁTICA. Jornada II',
                'tipo' => 'T',
                'descripcion' => 'Segunda parte del taller de estrategias para matemática.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][2]
            ],
            [
                'nombre' => 'CONSTRUCCIÓN Y USO DIDÁCTICO DEL TANGRAM',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre construcción y uso educativo del tangram.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][3]
            ],
            [
                'nombre' => 'JUEGOS Y ALGO MÁS',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre juegos educativos.',
                'categoria' => 'OCEV',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['OCEV'][2]
            ],
            [
                'nombre' => 'MATEMÁTICA Y ARTES',
                'tipo' => 'T',
                'descripcion' => 'Taller interdisciplinario entre matemática y artes.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][4]
            ],
            [
                'nombre' => 'TALLER LAS MEDIDAS DEL MUNDO',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre sistemas de medida.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][0]
            ],
            [
                'nombre' => 'DISEÑO DE TAREAS COMPLEMENTARIAS DE MATEMÁTICA',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre diseño de tareas complementarias en matemática.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][1]
            ],
            [
                'nombre' => 'TALLER PARA EL DISEÑO DE ACTIVIDADES REMEDIALES DE MATEMÁTICA',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre diseño de actividades remediales en matemática.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][2]
            ],
            [
                'nombre' => 'MATEMATICA RECREATIVA',
                'tipo' => 'T',
                'descripcion' => 'Taller de matemática aplicada de forma recreativa.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][3]
            ],
            [
                'nombre' => 'TALLER BUSCANDO LAS MATEMÁTICAS',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre identificación de conceptos matemáticos en la vida cotidiana.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][4]
            ],
            [
                'nombre' => 'Por amor a las matemáticas',
                'tipo' => 'T',
                'descripcion' => 'Taller motivacional sobre matemáticas.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][0]
            ],
            [
                'nombre' => 'Acertijos Divertidos',
                'tipo' => 'T',
                'descripcion' => 'Taller de acertijos matemáticos.',
                'categoria' => 'Matemática',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][1]
            ],
            [
                'nombre' => 'MUÑECAS INTERACTIVAS',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre creación de muñecas interactivas con fines educativos.',
                'categoria' => 'Artes',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Artes'][0]
            ],
            [
                'nombre' => 'TALLER DE TEATRO ACCION CREATIVA',
                'tipo' => 'T',
                'descripcion' => 'Taller de teatro creativo.',
                'categoria' => 'Artes',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Artes'][1]
            ],
            [
                'nombre' => 'TALLER DE TEATRO LA EXPRESIÓN DRAMÁTICA',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre expresión dramática.',
                'categoria' => 'Artes',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Artes'][2]
            ],
            [
                'nombre' => 'TALLER JOROPO ORIENTAL, SAN JUAN DE BARLOVENTO, CULO ´E PUYA, MINA',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre danzas tradicionales venezolanas.',
                'categoria' => 'Artes',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Artes'][3]
            ],
            [
                'nombre' => 'TALLER GAITA DE TAMBORA, TAMBOR CORIANO, SANGUEO Y GOLPE DE SAN MILLAN',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre ritmos musicales tradicionales.',
                'categoria' => 'Artes',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Artes'][4]
            ],
            [
                'nombre' => 'TALLER LÚDICO DE FRANCÉS',
                'tipo' => 'T',
                'descripcion' => 'Taller de francés a través del juego.',
                'categoria' => 'Idiomas',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Idiomas'][0]
            ],
            [
                'nombre' => 'TALLER LA MARAVILLA DEL INGLES EN NUESTRAS VACACIONES',
                'tipo' => 'T',
                'descripcion' => 'Taller de inglés para vacaciones.',
                'categoria' => 'Idiomas',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Idiomas'][1]
            ],
            [
                'nombre' => 'Aprendiendo inglés y francés en vacaciones',
                'tipo' => 'T',
                'descripcion' => 'Taller combinado de inglés y francés para vacaciones.',
                'categoria' => 'Idiomas',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Idiomas'][2]
            ],
            [
                'nombre' => 'TALLER INGLÉS PARA PRINCIPIANTES',
                'tipo' => 'T',
                'descripcion' => 'Taller introductorio de inglés.',
                'categoria' => 'Idiomas',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Idiomas'][3]
            ],
            [
                'nombre' => 'FORMACIÓN EN MECATRONICA PARA PROFESORES',
                'tipo' => 'T',
                'descripcion' => 'Taller de mecatrónica para docentes.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][0]
            ],
            [
                'nombre' => 'IMPRESIÓN 3D',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre impresión 3D.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][1]
            ],
            [
                'nombre' => 'ARDUINO NIVEL 1',
                'tipo' => 'T',
                'descripcion' => 'Taller introductorio de Arduino.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][2]
            ],
            [
                'nombre' => 'PYTHON',
                'tipo' => 'T',
                'descripcion' => 'Taller de programación en Python.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][3]
            ],
            [
                'nombre' => 'FORMACIÓN DE PROGRAMAS OFIMÁTICOS. WORD BÁSICO',
                'tipo' => 'T',
                'descripcion' => 'Taller básico de Microsoft Word.',
                'categoria' => 'TICs',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['TICs'][0]
            ],
            [
                'nombre' => 'TALLER EL MUNDO DEL TIK TOK',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre creación de contenido en TikTok.',
                'categoria' => 'TICs',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['TICs'][1]
            ],
            [
                'nombre' => 'LA RADIO COMO MEDIO DE COMUNICACIÓN',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre producción radiofónica.',
                'categoria' => 'TICs',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['TICs'][2]
            ],
            [
                'nombre' => 'FORMACIÓN DE ROBÓTICA EDUCATIVA REGRESO A CLASES 2024/2025',
                'tipo' => 'T',
                'descripcion' => 'Taller de robótica educativa.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][4]
            ],
            [
                'nombre' => 'PROGRAMACIÓN APLICADA A ROBOT SEGUIDOR DE LÍNEAS',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre programación de robots seguidores de línea.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][0]
            ],
            [
                'nombre' => 'MECATRÓNICA Y PROGRAMACIÓN APLICADA A PROYECTOS EDUCATIVOS',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre mecatrónica aplicada a proyectos educativos.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][1]
            ],
            [
                'nombre' => 'IOT INTERNET DE LAS COSAS',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre Internet de las Cosas.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][2]
            ],
            [
                'nombre' => 'CONVERSATORIO Jornada reflexiva sobre el cambio climático. Un problema que nos afecta a todos',
                'tipo' => 'T',
                'descripcion' => 'Conversatorio sobre cambio climático.',
                'categoria' => 'Ambiente',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Ambiente'][0]
            ],
            [
                'nombre' => 'TALLER PROCESO DE ELABORACIÓN DE ITEM. LA VALIDEZ Y CONFIABILIDAD DEL ITEM',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre elaboración de ítems de evaluación.',
                'categoria' => 'OCEV',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['OCEV'][3]
            ],
            [
                'nombre' => 'Ajedrez',
                'tipo' => 'T',
                'descripcion' => 'Taller básico de ajedrez.',
                'categoria' => 'Ajedrez',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Ajedrez'][0]
            ],
            [
                'nombre' => 'TALLER AJEDREZ INTERMEDIO PARA NIÑOS',
                'tipo' => 'T',
                'descripcion' => 'Taller de ajedrez nivel intermedio para niños.',
                'categoria' => 'Ajedrez',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Ajedrez'][1]
            ],
            [
                'nombre' => 'TALLER CUÉNTAME UN CUENTO',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre narración de cuentos.',
                'categoria' => 'Lectura/Escritura',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Lectura/Escritura'][0]
            ],
            [
                'nombre' => 'TALLER MATERIALES ARTESANALES PARA EL APRENDIZAJE COMPUTACIONAL',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre creación de materiales didácticos para computación.',
                'categoria' => 'Tecnología',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][3]
            ],
            [
                'nombre' => 'INDUCCIÓN AL PROGRAMA EIS',
                'tipo' => 'T',
                'descripcion' => 'Taller de inducción al programa EIS.',
                'categoria' => 'EIS',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['EIS'][0]
            ],
            [
                'nombre' => 'INTRODUCCION DE HABILIDADES SOCIOEMOCIONALES PARA LOS DOCENTES',
                'tipo' => 'T',
                'descripcion' => 'Taller sobre habilidades socioemocionales para docentes.',
                'categoria' => 'HSE',
                'duracion' => 10,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['HSE'][0]
            ],

            // Cursos
            [
                'nombre' => 'MATEMÁTICA Y BOTÁNICA. BOTÁNICA POR UN DÍA',
                'tipo' => 'C',
                'descripcion' => 'Curso interdisciplinario entre matemática y botánica.',
                'categoria' => 'Matemática',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][2]
            ],
            [
                'nombre' => 'RESOLUCIÓN DE PROBLEMAS',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre estrategias de resolución de problemas.',
                'categoria' => 'Matemática',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][3]
            ],
            [
                'nombre' => 'LAS MEDIDAS DEL MUNDO',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre sistemas de medida.',
                'categoria' => 'Matemática',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Matemática'][4]
            ],
            [
                'nombre' => 'ESCRITURA CREATIVA EN ESCENA',
                'tipo' => 'C',
                'descripcion' => 'Curso de escritura creativa aplicada al teatro.',
                'categoria' => 'Lectura/Escritura',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Lectura/Escritura'][1]
            ],
            [
                'nombre' => 'CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 1',
                'tipo' => 'C',
                'descripcion' => 'Curso básico de inglés nivel 1.',
                'categoria' => 'Idiomas',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Idiomas'][4]
            ],
            [
                'nombre' => 'CURSO BÁSICO DE INGLÉS PARA PRINCIPIANTES Nivel 2',
                'tipo' => 'C',
                'descripcion' => 'Curso básico de inglés nivel 2.',
                'categoria' => 'Idiomas',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Idiomas'][0]
            ],
            [
                'nombre' => 'MECATRÓNICA CREATIVA',
                'tipo' => 'C',
                'descripcion' => 'Curso de mecatrónica con enfoque creativo.',
                'categoria' => 'Tecnología',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][4]
            ],
            [
                'nombre' => 'MECATRÓNICA INTERMEDIA',
                'tipo' => 'C',
                'descripcion' => 'Curso intermedio de mecatrónica.',
                'categoria' => 'Tecnología',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][0]
            ],
            [
                'nombre' => 'USO INTELIGENTE DE LAS REDES SOCIALES',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre uso responsable de redes sociales.',
                'categoria' => 'TICs',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['TICs'][3]
            ],
            [
                'nombre' => 'CURSO PASANTIA PARA DOCENTES DE EDUCACIÓN BÁSICA EN EL USO INTELIGENTE DE LAS TIC EN LA ERA DE LA INTELIGENCIA ARTIFICIAL',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre TIC e inteligencia artificial para docentes.',
                'categoria' => 'TICs',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['TICs'][4]
            ],
            [
                'nombre' => 'Introducción a la Informática',
                'tipo' => 'C',
                'descripcion' => 'Curso introductorio a la informática.',
                'categoria' => 'TICs',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['TICs'][0]
            ],
            [
                'nombre' => 'INTELIGENCIA ARTIFICIAL - FUNDAMENTOS DE MACHINE LEARNING Y PROBLEMAS DE REGRESIÓN',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre fundamentos de inteligencia artificial.',
                'categoria' => 'Tecnología',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][1]
            ],
            [
                'nombre' => 'INDICADORES DE CALIDAD DE VIDA ESTUDIANTIL PARA LA EVALUACIÓN DE LA CALIDAD EDUCATIVA',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre indicadores de calidad educativa.',
                'categoria' => 'OCEV',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['OCEV'][4]
            ],
            [
                'nombre' => 'ESTRATEGIA Y TÁCTICA DEL JUEGO DE AJEDREZ',
                'tipo' => 'C',
                'descripcion' => 'Curso avanzado de estrategias de ajedrez.',
                'categoria' => 'Ajedrez',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Ajedrez'][2]
            ],
            [
                'nombre' => 'AJEDREZ MULTINIVEL',
                'tipo' => 'C',
                'descripcion' => 'Curso de ajedrez para diferentes niveles.',
                'categoria' => 'Ajedrez',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Ajedrez'][3]
            ],
            [
                'nombre' => 'ORGANIZACIÓN DE GRUPOS ESTABLES PARA LA TRANSFORMACIÓN CURRICULAR POR LA CALIDAD EDUCATIVA CON EL USO DE LAS TICS',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre organización de grupos con TIC.',
                'categoria' => 'TICs',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['TICs'][1]
            ],
            [
                'nombre' => 'PENSAMIENTO COMPUTACIONAL Y CALIDAD EDUCATIVA',
                'tipo' => 'C',
                'descripcion' => 'Curso sobre pensamiento computacional en educación.',
                'categoria' => 'Tecnología',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Tecnología'][2]
            ],
            [
                'nombre' => 'DEFENSA PERSONAL',
                'tipo' => 'C',
                'descripcion' => 'Curso de técnicas básicas de defensa personal.',
                'categoria' => 'Deporte',
                'duracion' => 30,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Deporte'][1]
            ],

            // Diplomados
            [
                'nombre' => 'DIPLOMADO INVESTIGACIÓN SOCIOCRÍTICA EN CIENCIAS NATURALES, MATEMÁTICA O TECNOLOGÍA',
                'tipo' => 'D',
                'descripcion' => 'Diplomado sobre investigación en ciencias.',
                'categoria' => 'Biología',
                'duracion' => 60,
                'disponible' => true,
                'disponible_hoy' => true,
                'icono' => $categoryIcons['Biología'][2]
            ],
        ];

        foreach ($formaciones as $formacion) {
            DB::table('formaciones')->insert($formacion);
        }
    }
}