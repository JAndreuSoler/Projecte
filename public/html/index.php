<?php
session_start();
require '../../app/BDConnectio/DBConnection.php';

function autoloader($classname) {
    if (file_exists("../../app/Model/".$classname.".php")){
        require '../../app/Model/'.$classname.'.php';
    }
    if (file_exists("../../app/DAOs/".$classname.".php")){
        require '../../app/DAOs/'.$classname.'.php';
    }
    if (file_exists("../../app/Controllers/".$classname.".php")){
        require '../../app/Controllers/'.$classname.'.php';
    }
    if (file_exists("../../app/DAO_Implements/".$classname.".php")){
        require '../../app/DAO_Implements/'.$classname.'.php';
    }
}
spl_autoload_register("autoloader");

$links = [
    "" => "index.php",
    "inici" => "index.php",
    "comp-registre" => "compRegistre.php",
    "comp" => "comp.php",
    "excursions" => "llistaexcursions.php",
    "les-meves-excursions" => "misExcursiones.php",
    "els-meus-cursos" => "misCursos.php",
    "pagament" => "pagament.php",
    "excursio" => "excursio.php",
    "login" => "login.php",
    "registre" => "registre.php",
    "tancar-sessio" => "tancarsessio.php",
    "sessio-idioma" => "sesioIdioma.php",
    "arrayLanguage" => "arrayLanguage.php",
    "social" => "social.php",
    "perfil" => "perfil.php",
    "cursos" => "llistacursos.php",
    "historia" => "historia.php",
    "missatges" => "chat.php",
    "curs" => "curs.php",
    "perfil-opcions" => "perfilOpcions.php",
];



$path = strtolower($_SERVER['REQUEST_URI']);
$url = explode('/', $path);
$link = explode( '?', $url[sizeof($url)-1]);
$path = explode( '?', $path)[0];



switch ($path) {
    case '/api/insert/user':
        $controller = new UserController();
        $controller->insertUser();
        break;
    case '/api/get/user':
        $controller = new UserController();
        $controller->getUser();
        break;
    case '/api/get/my-user-id':
        $controller = new UserController();
        $controller->getMyUserId();
        break;
    case '/api/delete/user':
        $controller = new UserController();
        $controller->deleteUser();
        break;
    case '/api/get/user/all':
        $controller = new UserController();
        $controller->getAllUsers();
        break;
    case '/api/update/user':
        $controller = new UserController();
        $controller->updateUser();
        break;
    case '/api/login/user':
        $controller = new UserController();
        $controller->login();
        break;
    case '/api/insert/publication':
        $controller = new PublicationController();
        $controller->insertPublication();
        break;
    case '/api/get/publication':
        $controller = new PublicationController();
        $controller->getPublication();
        break;
    case '/api/delete/publication':
        $controller = new PublicationController();
        $controller->deletePublication();
        break;
    case '/api/get/user/publications':
        $controller = new PublicationController();
        $controller->getUserPublications();
        break;
    case '/api/followers/publications':
        $controller = new PublicationController();
        $controller->getFollowersPublication();
        break;
    case '/api/get/route/publications':
        $controller = new PublicationController();
        $controller->getRoutePublications();
        break;
    case '/api/insert/publication/comment':
        $controller = new CommentPublicationController();
        $controller->insertComment();
        break;
    case '/api/get/publication/comment':
        $controller = new CommentPublicationController();
        $controller->getCommentById();
        break;
    case '/api/get/publication/comments':
        $controller = new CommentPublicationController();
        $controller->getReferenceComments();
        break;
    case '/api/get/publication/comment/response':
        $controller = new CommentPublicationController();
        $controller->getResponseComments();
        break;
    case '/api/insert/route/comment':
        $controller = new CommentRouteController();
        $controller->insertComment();
        break;
    case '/api/get/route/comment':
        $controller = new CommentRouteController();
        $controller->getCommentById();
        break;
    case '/api/get/route/comments':
        $controller = new CommentRouteController();
        $controller->getReferenceComments();
        break;
    case '/api/get/route/comment/response':
        $controller = new CommentRouteController();
        $controller->getResponseComments();
        break;
    case '/api/insert/curs/comment':
        $controller = new CommentCursController();
        $controller->insertComment();
        break;
    case '/api/get/curs/comment':
        $controller = new CommentCursController();
        $controller->getCommentById();
        break;
    case '/api/get/curs/comments':
        $controller = new CommentCursController();
        $controller->getReferenceComments();
        break;
    case '/api/get/curs/comment/response':
        $controller = new CommentCursController();
        $controller->getResponseComments();
        break;
    case '/api/insert/user/comment':
        $controller = new CommentUserController();
        $controller->insertComment();
        break;
    case '/api/get/user/comment':
        $controller = new CommentUserController();
        $controller->getCommentById();
        break;
    case '/api/get/user/comments':
        $controller = new CommentUserController();
        $controller->getReferenceComments();
        break;
    case '/api/get/user/comment/response':
        $controller = new CommentUserController();
        $controller->getResponseComments();
        break;
    case '/api/get/first-point-route/all':
        $controller = new PointController();
        $controller->getFirstZoneOfAllRoutes();
        break;
    case '/api/update/publications':
        $controller = new PublicationController();
        $controller->updatePublication();
        break;
    case '/api/insert/paypal':
        $controller = new PaypalController();
        $controller->insertPaypal();
        break;
    case '/api/get/paypal':
        $controller = new PaypalController();
        $controller->getPaypal();
        break;
    case '/api/delete/paypal':
        $controller = new PaypalController();
        $controller->deletePaypal();
        break;
    case '/api/get/paypal/all':
        $controller = new PaypalController();
        $controller->getAllPaypals();
        break;
    case '/api/update/paypal':
        $controller = new PaypalController();
        $controller->updatePaypal();
        break;
    case '/api/insert/targeta':
        $controller = new TarjetaController();
        $controller->insertTargeta();
        break;
    case '/api/get/targeta':
        $controller = new TarjetaController();
        $controller->getTargeta();
        break;
    case '/api/delete/targeta':
        $controller = new TarjetaController();
        $controller->deleteTargeta();
        break;
    case '/api/get/targeta/all':
        $controller = new TarjetaController();
        $controller->getAllTargetes();
        break;
    case '/api/update/targeta':
        $controller = new TarjetaController();
        $controller->updateTargeta();
        break;
    case '/api/insert/grup':
        $controller = new GrupController();
        $controller->insertGrup()();
        break;
    case '/api/get/grup':
        $controller = new GrupController();
        $controller->getGrup();
        break;
    case '/api/delete/grup':
        $controller = new GrupController();
        $controller->deleteGrup();
        break;
    case '/api/get/grup/all':
        $controller = new GrupController();
        $controller->getAllGrups();
        break;
    case '/api/update/grup':
        $controller = new GrupController();
        $controller->updateGrup();
        break;
    case '/api/insert/nivell':
        $controller = new NivellController();
        $controller->insertNivell();
        break;
    case '/api/get/nivell':
        $controller = new NivellController();
        $controller->getNivell();
        break;
    case '/api/delete/nivell':
        echo 'hola';
        $controller = new NivellController();
        $controller->deleteNivell();
        break;
    case '/api/get/nivell/all':
        $controller = new NivellController();
        $controller->getAllNivells();
        break;
    case '/api/update/nivell':
        $controller = new NivellController();
        $controller->updateNivell();
        break;
    case '/admin/nivell':
        $controller = new NivellController();
        $controller->viewCRUD();
        break;
    case '/api/insert/modalitat':
        $controller = new ModalitatController();
        $controller->insertModalitat();
        break;
    case '/api/get/modalitat':
        $controller = new ModalitatController();
        $controller->getModalitat();
        break;
    case '/api/delete/modalitat':
        $controller = new ModalitatController();
        $controller->deleteModalitat();
        break;
    case '/api/get/modalitat/all':
        $controller = new ModalitatController();
        $controller->getAllModalitats();
        break;
    case '/api/update/modalitat':
        $controller = new ModalitatController();
        $controller->updateModalitat();
        break;
    case '/admin/modalitat':
        $controller = new ModalitatController();
        $controller->viewCRUD();
        break;
    case '/api/insert/country':
        $controller = new CountryController();;
        $controller->insertCountry();
        break;
    case '/api/get/country':
        $controller = new CountryController();
        $controller->getCountry();
        break;
    case '/api/delete/country':
        $controller = new CountryController();
        $controller->deleteCountry();
        break;
    case '/api/get/country/all':
        $controller = new CountryController();
        $controller->getAllCountry();
        break;
    case '/api/update/country':
        $controller = new CountryController();
        $controller->updateCountry();
        break;
    case '/admin/country':
        $controller = new CountryController();
        $controller->viewCRUD();
        break;
    case '/api/insert/region':
        $controller = new RegionController();;
        $controller->insertRegion();
        break;
    case '/api/get/region':
        $controller = new RegionController();
        $controller->getRegion();
        break;
    case '/api/delete/region':
        $controller = new RegionController();
        $controller->deleteRegion();
        break;
    case '/api/get/region/all':
        $controller = new RegionController();
        $controller->getAllRegion();
        break;
    case '/api/update/region':
        $controller = new RegionController();
        $controller->updateRegion();
        break;
    case '/admin/region':
        $controller = new RegionController();
        $controller->viewCRUD();
        break;
    case '/api/insert/city':
        $controller = new CityController();
        $controller->insertCity();
        break;
    case '/api/get/city':
        $controller = new CityController();
        $controller->getCity();
        break;
    case '/api/delete/city':
        $controller = new CityController();
        $controller->deleteCity();
        break;
    case '/api/get/city/all':
        $controller = new CityController();
        $controller->getAllCity();
        break;
    case '/api/update/city':
        $controller = new CityController();
        $controller->updateCity();
        break;
    case '/admin/city':
        $controller = new CityController();
        $controller->viewCRUD();
        break;
    case '/api/insert/route':
        $controller = new ExcursioController();
        $controller->insertExcursio();
        break;
    case '/api/get/route':
        $controller = new ExcursioController();
        $controller->getExcursio();
        break;
    case '/api/delete/route':
        $controller = new ExcursioController();
        $controller->deleteExcursio();
        break;
    case '/api/get/route/all':
        $controller = new ExcursioController();
        $controller->getAllExcursions();
        break;
    case '/api/get/route/user':
        $controller = new ExcursioController();
        $controller->getAllExcursionsByIdPropietari();
        break;
    case '/api/update/route':
        $controller = new ExcursioController();
        $controller->updateExcursio();
        break;
    case '/api/get/route/distance':
        $controller = new ExcursioController();
        $controller->getAllExcursionsByDistance();
        break;
    case '/api/get/route/duration':
        $controller = new ExcursioController();
        $controller->getAllExcursionsByDuration();
        break;
    case '/api/get/route/price':
        $controller = new ExcursioController();
        $controller->getAllExcursionsByPric();
        break;
    case '/api/get/route/difficulty':
        $controller = new ExcursioController();
        $controller->getAllExcursionsByDifficulty();
        break;
    case '/api/get/route/modality':
        $controller = new ExcursioController();
        $controller->getAllExcursionsByModality();
        break;
    case '/api/insert/curs':
        $controller = new CursController();
        $controller->insertCurs();
        break;
    case '/api/get/curs':
        $controller = new CursController();
        $controller->getCurs();
        break;
    case '/api/delete/curs':
        $controller = new CursController();
        $controller->deleteCurs();
        break;
    case '/api/get/curs/all':
        $controller = new CursController();
        $controller->getAllCursos();
        break;
    case '/api/get/curs/perfil':
        $controller = new CursController();
        $controller->getAllCursosByIdPropietari();
        break;
    case '/api/update/curs':
        $controller = new CursController();
        $controller->updateCurs();
        break;
    case ( preg_match( '/excursio\/\.*/', $path ) ? true : false ):
        $_GET['id'] = $url[sizeof($url)-1];
        include '../../app/Views/excursio.php';
        break;
    case '/api/test':
        $controller = new CommentPublicationDAO();
        $controller->insertCommentari(new CommentPublication(1,1,1,1));
        break;
    case '/api/view/graph':
        include '../../app/Views/GRAPH.html';
        break;
    case '/api/view/chart':
        include '../../app/Views/CHART.html';
        break;
    default:
        include '../../app/Views/' . $links[$link[0]];
}

