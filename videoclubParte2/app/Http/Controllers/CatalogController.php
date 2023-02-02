<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    private $arrayPeliculas = array(
        array(
            'title' => 'El padrino',
            'year' => '1972',
            'director' => 'Francis Ford Coppola',
            'poster' => 'https://pics.filmaffinity.com/El_padrino-993414333-large.jpg',
            'rented' => false,
            'synopsis' => 'Don Vito Corleone (Marlon Brando) es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York. Tiene cuatro hijos: Connie (Talia Shire), el impulsivo Sonny (James Caan), el pusilÃ¡nime Freddie (John Cazale) y Michael (Al Pacino), que no quiere saber nada de los negocios de su padre. Cuando Corleone, en contra de los consejos de \'Il consigliere\' Tom Hagen (Robert Duvall), se niega a intervenir en el negocio de las drogas, el jefe de otra banda ordena su asesinato. Empieza entonces una violenta y cruenta guerra entre las familias mafiosas.'
        ),
        array(
            'title' => 'El Padrino. Parte II',
            'year' => '1974',
            'director' => 'Francis Ford Coppola',
            'poster' => 'https://pics.filmaffinity.com/El_padrino_II-124238415-large.jpg',
            'rented' => false,
            'synopsis' => 'ContinuaciÃ³n de la historia de los Corleone por medio de dos historias paralelas: la elecciÃ³n de Michael Corleone como jefe de los negocios familiares y los orÃ­genes del patriarca, el ya fallecido Don Vito, primero en Sicilia y luego en Estados Unidos, donde, empezando desde abajo, llegÃ³ a ser un poderosÃ­simo jefe de la mafia de Nueva York.'
        ),
        array(
            'title' => 'La lista de Schindler',
            'year' => '1993',
            'director' => 'Steven Spielberg',
            'poster' => 'https://es.web.img3.acsta.net/pictures/19/02/12/18/49/4078948.jpg',
            'rented' => false,
            'synopsis' => 'Segunda Guerra Mundial (1939-1945). Oskar Schindler (Liam Neeson), un hombre de enorme astucia y talento para las relaciones pÃºblicas, organiza un ambicioso plan para ganarse la simpatÃ­a de los nazis. DespuÃ©s de la invasiÃ³n de Polonia por los alemanes (1939), consigue, gracias a sus relaciones con los nazis, la propiedad de una fÃ¡brica de Cracovia. AllÃ­ emplea a cientos de operarios judÃ­os, cuya explotaciÃ³n le hace prosperar rÃ¡pidamente. Su gerente (Ben Kingsley), tambiÃ©n judÃ­o, es el verdadero director en la sombra, pues Schindler carece completamente de conocimientos para dirigir una empresa.'
        ),
        array(
            'title' => 'Pulp Fiction',
            'year' => '1994',
            'director' => 'Quentin Tarantino',
            'poster' => 'https://m.media-amazon.com/images/I/81UTs3sC5hL._SL1500_.jpg',
            'rented' => true,
            'synopsis' => 'Jules y Vincent, dos asesinos a sueldo con muy pocas luces, trabajan para Marsellus Wallace. Vincent le confiesa a Jules que Marsellus le ha pedido que cuide de Mia, su mujer. Jules le recomienda prudencia porque es muy peligroso sobrepasarse con la novia del jefe. Cuando llega la hora de trabajar, ambos deben ponerse manos a la obra. Su misiÃ³n: recuperar un misterioso maletÃ­n. '
        ),
        array(
            'title' => 'Cadena perpetua',
            'year' => '1994',
            'director' => 'Frank Darabont',
            'poster' => 'https://pics.filmaffinity.com/Cadena_perpetua-211849172-large.jpg',
            'rented' => true,
            'synopsis' => 'Acusado del asesinato de su mujer, Andrew Dufresne (Tim Robbins), tras ser condenado a cadena perpetua, es enviado a la cÃ¡rcel de Shawshank. Con el paso de los aÃ±os conseguirÃ¡ ganarse la confianza del director del centro y el respeto de sus compaÃ±eros de prisiÃ³n, especialmente de Red (Morgan Freeman), el jefe de la mafia de los sobornos.'
        ),
        array(
            'title' => 'El golpe',
            'year' => '1973',
            'director' => 'George Roy Hill',
            'poster' => 'https://pics.filmaffinity.com/El_golpe-433653100-large.jpg',
            'rented' => false,
            'synopsis' => 'Chicago, aÃ±os treinta. Redford y Newman son dos timadores que deciden vengar la muerte de un viejo y querido colega, asesinado por orden de un poderoso gÃ¡ngster (Robert Shaw). Para ello urdirÃ¡n un ingenioso y complicado plan con la ayuda de todos sus amigos y conocidos.'
        ),
        array(
            'title' => 'La vida es bella',
            'year' => '1997',
            'director' => 'Roberto Benigni',
            'poster' => 'https://pics.filmaffinity.com/La_vida_es_bella-611574521-large.jpg',
            'rented' => true,
            'synopsis' => 'En 1939, a punto de estallar la Segunda Guerra Mundial (1939-1945), el extravagante Guido llega a Arezzo (Toscana) con la intenciÃ³n de abrir una librerÃ­a. AllÃ­ conoce a Dora y, a pesar de que es la prometida del fascista Ferruccio, se casa con ella y tiene un hijo. Al estallar la guerra, los tres son internados en un campo de exterminio, donde Guido harÃ¡ lo imposible para hacer creer a su hijo que la terrible situaciÃ³n que estÃ¡n padeciendo es tan sÃ³lo un juego.'
        ),
        array(
            'title' => 'Uno de los nuestros',
            'year' => '1990',
            'director' => 'Martin Scorsese',
            'poster' => 'https://pics.filmaffinity.com/Uno_de_los_nuestros-618727911-large.jpg',
            'rented' => false,
            'synopsis' => 'Henry Hill, hijo de padre irlandÃ©s y madre siciliana, vive en Brooklyn y se siente fascinado por la vida que llevan los gÃ¡ngsters de su barrio, donde la mayorÃ­a de los vecinos son inmigrantes. Paul Cicero, el patriarca de la familia Pauline, es el protector del barrio. A los trece aÃ±os, Henry decide abandonar la escuela y entrar a formar parte de la organizaciÃ³n mafiosa como chico de los recados; muy pronto se gana la confianza de sus jefes, gracias a lo cual irÃ¡ subiendo de categorÃ­a. '
        ),
        array(
            'title' => 'Alguien voló sobre el nido del cuco',
            'year' => '1975',
            'director' => 'Milos Forman',
            'poster' => 'https://pics.filmaffinity.com/Alguien_vol_sobre_el_nido_del_cuco-886138071-large.jpg',
            'rented' => false,
            'synopsis' => 'Randle McMurphy (Jack Nicholson), un hombre condenado por asalto, y un espÃ­ritu libre que vive contracorriente, es recluido en un hospital psiquiÃ¡trico. La inflexible disciplina del centro acentÃºa su contagiosa tendencia al desorden, que acabarÃ¡ desencadenando una guerra entre los pacientes y el personal de la clÃ­nica con la frÃ­a y severa enfermera Ratched (Louise Fletcher) a la cabeza. La suerte de cada paciente del pabellÃ³n estÃ¡ en juego.'
        ),
        array(
            'title' => 'American History X',
            'year' => '1998',
            'director' => 'Tony Kaye',
            'poster' => 'https://pics.filmaffinity.com/American_History_X-976983577-large.jpg',
            'rented' => false,
            'synopsis' => 'Derek (Edward Norton), un joven "skin head" californiano de ideologÃ­a neonazi, fue encarcelado por asesinar a un negro que pretendÃ­a robarle su furgoneta. Cuando sale de prisiÃ³n y regresa a su barrio dispuesto a alejarse del mundo de la violencia, se encuentra con que su hermano pequeÃ±o (Edward Furlong), para quien Derek es el modelo a seguir, sigue el mismo camino que a Ã©l lo condujo a la cÃ¡rcel.'
        ),
        array(
            'title' => 'Sin perdón',
            'year' => '1992',
            'director' => 'Clint Eastwood',
            'poster' => 'https://cloud10.todocoleccion.online/cine-peliculas-dvd/tc/2009/09/25/15085326.jpg',
            'rented' => false,
            'synopsis' => 'William Munny (Clint Eastwood) es un pistolero retirado, viudo y padre de familia, que tiene dificultades econÃ³micas para sacar adelante a su hijos. Su Ãºnica salida es hacer un Ãºltimo trabajo. En compaÃ±Ã­a de un viejo colega (Morgan Freeman) y de un joven inexperto (Jaimz Woolvett), Munny tendrÃ¡ que matar a dos hombres que cortaron la cara a una prostituta.'
        ),
        array(
            'title' => 'El precio del poder',
            'year' => '1983',
            'director' => 'Brian De Palma',
            'poster' => 'https://pics.filmaffinity.com/El_precio_del_poder-798722679-large.jpg',
            'rented' => false,
            'synopsis' => 'Tony Montana es un emigrante cubano frÃ­o y sanguinario que se instala en Miami con el propÃ³sito de convertirse en un gÃ¡ngster importante. Con la colaboraciÃ³n de su amigo Manny Rivera inicia una fulgurante carrera delictiva con el objetivo de acceder a la cÃºpula de una organizaciÃ³n de narcos.'
        ),
        array(
            'title' => 'El pianista',
            'year' => '2002',
            'director' => 'Roman Polanski',
            'poster' => 'https://pics.filmaffinity.com/El_pianista-978132965-large.jpg',
            'rented' => true,
            'synopsis' => 'Wladyslaw Szpilman, un brillante pianista polaco de origen judÃ­o, vive con su familia en el ghetto de Varsovia. Cuando, en 1939, los alemanes invaden Polonia, consigue evitar la deportaciÃ³n gracias a la ayuda de algunos amigos. Pero tendrÃ¡ que vivir escondido y completamente aislado durante mucho tiempo, y para sobrevivir tendrÃ¡ que afrontar constantes peligros.'
        ),
        array(
            'title' => 'Seven',
            'year' => '1995',
            'director' => 'David Fincher',
            'poster' => 'https://pics.filmaffinity.com/Seven_Se7en-734875211-large.jpg',
            'rented' => true,
            'synopsis' => 'El veterano teniente Somerset (Morgan Freeman), del departamento de homicidios, estÃ¡ a punto de jubilarse y ser reemplazado por el ambicioso e impulsivo detective David Mills (Brad Pitt). Ambos tendrÃ¡n que colaborar en la resoluciÃ³n de una serie de asesinatos cometidos por un psicÃ³pata que toma como base la relaciÃ³n de los siete pecados capitales: gula, pereza, soberbia, avaricia, envidia, lujuria e ira. Los cuerpos de las vÃ­ctimas, sobre los que el asesino se ensaÃ±a de manera impÃºdica, se convertirÃ¡n para los policÃ­as en un enigma que les obligarÃ¡ a viajar al horror y la barbarie mÃ¡s absoluta.'
        ),
        array(
            'title' => 'El silencio de los corderos',
            'year' => '1991',
            'director' => 'Jonathan Demme',
            'poster' => 'https://pics.filmaffinity.com/El_silencio_de_los_corderos-767447992-large.jpg',
            'rented' => false,
            'synopsis' => 'El FBI busca a "Buffalo Bill", un asesino en serie que mata a sus vÃ­ctimas, todas adolescentes, despuÃ©s de prepararlas minuciosamente y arrancarles la piel. Para poder atraparlo recurren a Clarice Starling, una brillante licenciada universitaria, experta en conductas psicÃ³patas, que aspira a formar parte del FBI. Siguiendo las instrucciones de su jefe, Jack Crawford, Clarice visita la cÃ¡rcel de alta seguridad donde el gobierno mantiene encerrado a Hannibal Lecter, antiguo psicoanalista y asesino, dotado de una inteligencia superior a la normal. Su misiÃ³n serÃ¡ intentar sacarle informaciÃ³n sobre los patrones de conducta de "Buffalo Bill".'
        ),
        array(
            'title' => 'La naranja mecánica',
            'year' => '1971',
            'director' => 'Stanley Kubrick',
            'poster' => 'https://wmagazin.com/wp-content/uploads/2021/08/Cine-Club-literario-Lanaranjamecanica-cartel-1-e1628878059463.jpg',
            'rented' => false,
            'synopsis' => 'Gran BretaÃ±a, en un futuro indeterminado. Alex (Malcolm McDowell) es un joven muy agresivo que tiene dos pasiones: la violencia desaforada y Beethoven. Es el jefe de la banda de los drugos, que dan rienda suelta a sus instintos mÃ¡s salvajes apaleando, violando y aterrorizando a la poblaciÃ³n. Cuando esa escalada de terror llega hasta el asesinato, Alex es detenido y, en prisiÃ³n, se someterÃ¡ voluntariamente a una innovadora experiencia de reeducaciÃ³n que pretende anular drÃ¡sticamente cualquier atisbo de conducta antisocial.'
        ),
        array(
            'title' => 'La chaqueta metálica',
            'year' => '1987',
            'director' => 'Stanley Kubrick',
            'poster' => 'https://pics.filmaffinity.com/La_chaqueta_met_lica-577943737-large.jpg',
            'rented' => true,
            'synopsis' => 'Un grupo de reclutas se prepara en Parish Island, centro de entrenamiento de la marina norteamericana. AllÃ­ estÃ¡ el sargento Hartman, duro e implacable, cuya Ãºnica misiÃ³n en la vida es endurecer el cuerpo y el alma de los novatos, para que puedan defenderse del enemigo. Pero no todos los jÃ³venes estÃ¡n preparados para soportar sus mÃ©todos. '
        ),
        array(
            'title' => 'Blade Runner',
            'year' => '1982',
            'director' => 'Ridley Scott',
            'poster' => 'https://pics.filmaffinity.com/Blade_Runner-351607743-large.jpg',
            'rented' => true,
            'synopsis' => 'A principios del siglo XXI, la poderosa Tyrell Corporation creÃ³, gracias a los avances de la ingenierÃ­a genÃ©tica, un robot llamado Nexus 6, un ser virtualmente idÃ©ntico al hombre pero superior a Ã©l en fuerza y agilidad, al que se dio el nombre de Replicante. Estos robots trabajaban como esclavos en las colonias exteriores de la Tierra. DespuÃ©s de la sangrienta rebeliÃ³n de un equipo de Nexus-6, los Replicantes fueron desterrados de la Tierra. Brigadas especiales de policÃ­a, los Blade Runners, tenÃ­an Ã³rdenes de matar a todos los que no hubieran acatado la condena. Pero a esto no se le llamaba ejecuciÃ³n, se le llamaba "retiro". '
        ),
        array(
            'title' => 'Taxi Driver',
            'year' => '1976',
            'director' => 'Martin Scorsese',
            'poster' => 'https://pics.filmaffinity.com/Taxi_Driver-173769074-mmed.jpg',
            'rented' => false,
            'synopsis' => 'Para sobrellevar el insomnio crÃ³nico que sufre desde su regreso de Vietnam, Travis Bickle (Robert De Niro) trabaja como taxista nocturno en Nueva York. Es un hombre insociable que apenas tiene contacto con los demÃ¡s, se pasa los dÃ­as en el cine y vive prendado de Betsy (Cybill Shepherd), una atractiva rubia que trabaja como voluntaria en una campaÃ±a polÃ­tica. Pero lo que realmente obsesiona a Travis es comprobar cÃ³mo la violencia, la sordidez y la desolaciÃ³n dominan la ciudad. Y un dÃ­a decide pasar a la acciÃ³n.'
        ),
        array(
            'title' => 'El club de la lucha',
            'year' => '1999',
            'director' => 'David Fincher',
            'poster' => 'http://es.web.img3.acsta.net/c_215_290/medias/nmedia/18/69/04/88/20140966.jpg',
            'rented' => true,
            'synopsis' => 'Un joven hastiado de su gris y monÃ³tona vida lucha contra el insomnio. En un viaje en aviÃ³n conoce a un carismÃ¡tico vendedor de jabÃ³n que sostiene una teorÃ­a muy particular: el perfeccionismo es cosa de gentes dÃ©biles; sÃ³lo la autodestrucciÃ³n hace que la vida merezca la pena. Ambos deciden entonces fundar un club secreto de lucha, donde poder descargar sus frustaciones y su ira, que tendrÃ¡ un Ã©xito arrollador.'
        )
    );

    public function getIndex(){

        return view('catalog.index')->with('arrayPeliculas',$this->arrayPeliculas);
    }

    public function getShow($id){
        return view('catalog.show',array('pelicula'=>$this->arrayPeliculas[$id]));
    }

    public function getCreate(){
        return view('catalog.create');
    }

    public function getEdit($id){
        return view('catalog.edit',array('id'=>$id));
    }
}
