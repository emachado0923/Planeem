<?php
/*
|--------------------------------------------------------------------------
| Web Routes De Planeem
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    // Route::get('/', function () {return view('index');})->name('index');
    if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    }


    //Contáctanos
    Route::post('/preguntacontroller','preguntacontroller@storage')->name('pre');
    
    //Inicio de planeem
    Route::post('/index/plam','planeacionControlle@indexp')->name('index/plam')->middleware('verified');

    // Inicio papelera
    Route::get('papelera', 'HomeController@papelera' )->name('papelera');
    Route::get('Restaurar/{id}','HomeController@Restaurar')->name('Restaurar');

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Modulo1
    Route::post('updatepensamiento','planeacionControlle@update')->middleware('verified')->name('update/pensamiento');
    Route::post('/updatePlanecion','planeacionControlle@updatePlanecion')->middleware('verified')->name('updatePlanecion');
    Route::post('/updatePropuesta','planeacionControlle@updatePropuesta')->middleware('verified')->name('updatePropuesta');
    Route::post('update/Valor', 'planeacionControlle@updateValor' )->middleware('verified')->name('updateValor');
    Route::post('update/Mision', 'planeacionControlle@retuMision_Organizacional' )->middleware('verified')->name('update/Mision');
    Route::post('update/Mision/1', 'planeacionControlle@updateMision_Organizacional' )->middleware('verified')->name('update/Mision1');
    Route::post('update/vision/1', 'planeacionControlle@updateVision_Organizacional' )->middleware('verified')->name('update/vision1');
    Route::post('update/Vision', 'planeacionControlle@up_Vision_Organizacional' )->middleware('verified')->name('update/Vision');
    Route::post('update/mega', 'planeacionControlle@up_Mega_Empresarial' )->middleware('verified')->name('update/mega');
    Route::post('update/Mision/1', 'planeacionControlle@updateMision_Organizacional' )->middleware('verified')->name('update/Mision1');
    Route::post('update/mega/1', 'planeacionControlle@updateMega_Empresarial' )->middleware('verified')->name('update/mega1');

    //Modulo 1 parte 2
    Route::get('/', 'inicioController@index')->name('index');
    Route::post('/planeacion/create','planeacionControlle@planeacion')->name('create')->middleware('verified');
    Route::post('/Corporativos/list','planeacionControlle@planeacion_id')->name('list')->middleware('verified');
    Route::post('/Corporativos','CorporativosController@store')->name('Corporativos')->middleware('verified');
    Auth::routes(['verify'=>true]);
    Route::get('/terminos',function(){return view('terminos');})->name('terminos')->middleware('verified');
    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::post('/home/proyecto','HomeController@store')->name('proyecto')->middleware('verified');
    Route::get('/home/planeacion/{planeacion}','HomeController@show')->name('proyect')->middleware('verified');
    Route::get('/delecte/{id}','HomeController@delecte')->name('delecte')->middleware('verified');
    Route::post('/planeacion2','planeacionControlle@Proyectos')->name('vista2');
    Route::get('/Propuesta/paso1', function () { return view('Modulo1.Propuesta.vista3');})->name('Propuesta/paso1')->middleware('auth')->middleware('verified');
    Route::get('/Propuesta/paso2', function () { return view('Modulo1.Propuesta.vista4');})->name('Propuesta/paso2')->middleware('auth')->middleware('verified');
    Route::post('/mega','planeacionControlle@vista24')->name('mega')->middleware('verified');
    Route::get('/Propuesta/Editar', function () { return view('Modulo1.Propuesta.Editar');})->name('Propuesta/editar')->middleware('auth')->middleware('verified');
    Route::get('/Propuesta', function () {return view('Modulo1.Propuesta.vista8');})->name('Propuesta')->middleware('auth')->middleware('verified');
    Route::get('/Mision/paso1', function () {return view('Modulo1.Mision.vista9');})->name('Mision/paso1')->middleware('auth')->middleware('verified');
    Route::get('/Mision/paso2', function () {return view('Modulo1.Mision.vista10');})->name('Mision/paso2')->middleware('auth')->middleware('verified');
    Route::get('/mision/edit', function () {return view('Modulo1.Mision.vista13');})->name('mision/edit')->middleware('auth')->middleware('verified');
    Route::get('/Mision/list', function () {return view('Modulo1.Mision.vista14');})->name('Mision/list')->middleware('auth')->middleware('verified');
    Route::get('/Vision/paso1', function () {return view('Modulo1.Vision.vista15');})->name('Vision/paso1')->middleware('auth')->middleware('verified');
    Route::get('/Vision/paso2', function () {return view('Modulo1.Vision.vista16');})->name('Vision/paso2')->middleware('auth')->middleware('verified');
    Route::get('/Vision/edt', function () {return view('Modulo1.Vision.vista17');})->name('Vision/edt')->middleware('auth');
    Route::get('/Vision/list', function () {return view('Modulo1.Vision.vista18');})->name('tist')->middleware('auth');
    Route::get('/MEGA/paso1', function () {return view('Modulo1.MEGA.vista19');})->name('MEGA/paso1')->middleware('auth');
    Route::get('/MEGA/paso2', function () {return view('Modulo1.MEGA.vista20');})->name('MEGA/paso2')->middleware('auth');
    Route::get('/MEGA/paso3', function () {return view('Modulo1.MEGA.vista21');})->name('MEGA/paso3')->middleware('auth');
    Route::get('/MEGA/edt', function () {return view('Modulo1.MEGA.vista22');})->name('MEGA/edt')->middleware('auth');
    Route::get('/MEGA/list', function () {return view('Modulo1.MEGA.vista23');})->name('MEGA/list')->middleware('auth');
    Route::get('/Corporativos/paso1', function () {return view('Modulo1.Corporativos.vista24');})->name('Corporativos/paso1')->middleware('auth')->middleware('verified');
    Route::get('/Corporativos/paso1_1', function () {return view('Modulo1.Corporativos.vista24_1');})->name('Corporativos/paso1_1')->middleware('auth')->middleware('verified');
    Route::get('select/{id}','planeacionControlle@select')->name('select')->middleware('auth')->middleware('verified');
    Route::get('/Corporativos/paso2', function () {return view('Modulo1.Corporativos.vista28');})->name('Corporativos/paso2')->middleware('auth')->middleware('verified');
    Route::get('/Corporativos/paso3', function () {return view('Modulo1.Corporativos.vista29');})->name('Corporativos/paso3')->middleware('auth')->middleware('verified');
    Route::post('/create/Planeacion','planeacionControlle@store')->name('Planeacion')->middleware('auth','verified');
    Route::post('/indexValor','planeacionControlle@indexValor')->name('indexValor')->middleware('auth','verified');

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //MODULO 2
    Route::get('/diagnosticoEstra', function () {return view('Modulo2.diagnosticoEstra');})->name('diagnosticoEstra')->middleware('verified')->middleware('auth');
    Route::get('/anaPestal', function () {return view('Modulo2.anaPestal');})->name('anaPestal')->middleware('verified')->middleware('auth');
    Route::get('/anaPorter', function () {return view('Modulo2.anaPorter');})->name('anaPorter')->middleware('verified')->middleware('auth');
    Route::get('/analisisPorter', function () {return view('Modulo2.anaPorter');})->name('analisisPorter');
    Route::get('/capacidadInterna', function () {return view('Modulo2.capacidadInterna');})->name('capacidadInterna')->middleware('verified')->middleware('auth');
    Route::get('/factoresInternosI', function () {return view('Modulo2.factoresInternosI');})->name('factoresInternosI')->middleware('verified')->middleware('auth');
    Route::get('/ansorftMercado', function () {return view('Modulo2.ansorftMercado');})->name('ansorftMercado')->middleware('verified')->middleware('auth');
    Route::get('/ansorftDesarrollo', function () {return view('Modulo2.ansorftDesarrollo');})->name('ansorftDesarrollo')->middleware('verified')->middleware('auth');
    Route::get('/ansorftDesarrolloMerca', function () {return view('Modulo2.ansorftDesarrolloMerca');})->name('ansorftDesarrolloMerca')->middleware('verified')->middleware('auth');
    Route::get('/ansorftDiversifica', function () {return view('Modulo2.ansorftDiversifica');})->name('ansorftDiversifica')->middleware('verified')->middleware('auth');
    Route::get('/factoresExternosI', function () {return view('Modulo2.factoresExternosI');})->name('factoresExternosI')->middleware('verified')->middleware('auth');
    Route::get('/factoresExternos', function () {return view('Modulo2.factoresExternos');})->name('factoresExternos')->middleware('verified')->middleware('auth');
    Route::get('/analisisEFInfo', function () {return view('Modulo2.analisisEFInfo');})->name('analisisEFInfo')->middleware('verified')->middleware('auth');
    Route::get('/analisisDofaInfo', function () {return view('Modulo2.analisisDofaInfo');})->name('analisisDofaInfo')->middleware('verified')->middleware('auth');
    Route::get('/analisisDofaI', function () {return view('Modulo2.analisisDofaI');})->name('analisisDofaI')->middleware('verified')->middleware('auth');
    Route::get('/Dofa2/{id}','DofaController@dofa2')->name('dofa2')->middleware('verified')->middleware('auth');
    Route::get('/dofaSelec', function () {return  view('Modulo2.analisisAnsorftB');})->name('dofaSelec')->middleware('verified')->middleware('auth');
    Route::get('/Dofa2', function () {return view('Modulo2.analisisDofa');})->name('Dofa2')->middleware('verified')->middleware('auth');
    Route::get('/amenaza/{id}')->middleware('verified')->middleware('auth');

    //Routes de capacidad Interna
    Route::post('/capacidadInte','CapacidadController@index')->name('capacidadInte')->middleware('auth');
    Route::get('/capacidadInte','CapacidadController@index')->name('capacidadInte')->middleware('auth');
    Route::get('/capacidadInte/create','CapacidadController@create')->middleware('auth');
    Route::post('/capacidadInte/create','CapacidadController@store')->name('guardaCapa')->middleware('auth');

    //Routes de perfil Competitivo
    //PerfilCompeController
    Route::get('/perfilCompeInfo','PerfilCompeController@indexInfo')->name('perfilCompeInfo')->middleware('verified')->middleware('auth');
    Route::post('/perfilCompeInfoGstore','PerfilCompeController@store')->name('savePerfilCompe')->middleware('verified')->middleware('auth');
    Route::get('/perfil/show/{id}','PerfilCompeController@getAnswersMyEmpre')->middleware('verified')->middleware('auth');
    Route::get('/perfil/empresa/{id}','PerfilCompeController@empresa')->middleware('verified')->middleware('auth');


    //PerfilCompeEmpresaController
    
    Route::get('/perfilCompeempresa/{id}','PerfilCompeEmpresaController@getCantidad');
    Route::post('/perfilCompeempresa','PerfilCompeEmpresaController@index')->name('perfilem')->middleware('verified')->middleware('auth');
    Route::get('/perfilem/cantida','PerfilCompeEmpresaController@index')->middleware('verified')->middleware('auth');
    Route::get('/Competitivo/show/{id}','PerfilCompeEmpresaController@show')->middleware('verified')->middleware('auth');
    Route::post('/perfilCompe','PerfilCompeEmpresaController@storeEmpe')->name('saveEmpresa')->middleware('verified')->middleware('auth');
    Route::get('/perfilCompe/empresas/{id}','PerfilCompeEmpresaController@show')->middleware('verified')->middleware('auth');
    Route::post('/perfilCompeStore','PerfilCompeController@storeEmpe')->middleware('verified')->middleware('auth');
    //Route::get('/perfilCompe','PerfilCompeController@storeEmpe');
    //Route::get('/perfil','PerfilCompeController@index')->name('perfil');
    //Route perfil competitivo ajax

    Route::post('/FactorExter','FactorExternoAController@index')->name('FactorExter')->middleware('auth');
    //Matriz
    Route::post('/MatrizStore','MatrizController@storg')->name('MatrizStore')->middleware('verified')->middleware('auth');
    Route::get('/Matrizindex/{id}','MatrizController@index')->name('Matrizindex');
    Route::get('/Penetración/{id}','MatrizController@Penetración')->name('Matrizindex');
    Route::get('/Mercado/{id}','MatrizController@Mercado')->name('Matrizindex');
    Route::get('/Producto/{id}','MatrizController@Producto')->name('Matrizindex');
    Route::get('/Diversificación/{id}','MatrizController@Diversificación')->name('Matrizindex');


    
    //Grafica Ansorff
    Route::get('/graficaAnsorfInfo', function () {return view('Modulo2.info2');})->name('info2')->middleware('auth');
    Route::get('/graficaAnsorff', function () {return view('Modulo2.graficaAnsorff');})->name('graficaAnsorff')->middleware('auth');
    
    
    Route::get('/grafica/{id}','MatrizController@grafica');
    Route::get('/grafica2/{id}','MatrizController@grafica2');


    //Routes de capacidad interna
    Route::post('/capacidadInte','CapacidadController@index')->name('capacidadInte')->middleware('verified')->middleware('auth');
    Route::get('/capacidadInte','CapacidadController@index')->name('capacidadInte')->middleware('verified')->middleware('auth');
    Route::get('/capacidadInte/create','CapacidadController@create')->middleware('verified')->middleware('auth');
    Route::get('/capacidadInte/show/{id}','CapacidadController@getAnswers')->middleware('verified')->middleware('auth');
    Route::post('/capacidadInte/create','CapacidadController@store')->name('guardaCapa')->middleware('verified')->middleware('auth');

    //Routes de Factor Interno fortaleza
    Route::post('/factorInt','FactorInternoController@index')->middleware('verified')->middleware('auth');
    Route::get('/factorInt/show/{id}','FactorInternoController@getAnswers')->middleware('verified')->middleware('auth');
    Route::post('/factorIntcreate','FactorInternoController@store')->name('saveFactorInterno')->middleware('verified')->middleware('auth');

    //Routes de Factor Interno debilidad
    Route::post('/factorIntD','FactorInternoDController@index')->middleware('verified')->middleware('auth');
    Route::get('/factorIntD','FactorInternoDController@index')->middleware('verified')->middleware('auth');
    Route::post('/factorIntDcreate','FactorInternoDController@store')->name('saveFactorInternoD');

    //Routes de Factor Externo Oportunidad
    Route::post('/factorExt','FactorInternoController@index')->middleware('verified')->middleware('auth');
    Route::get('/factorExt','FactorInternoController@index')->middleware('verified')->middleware('auth');
    Route::get('/factorExt/create','FactorInternoController@create')->middleware('verified')->middleware('auth');
    Route::get('/factorExt/show/{id}','FactorInternoController@getAnswers')->middleware('verified')->middleware('auth');
    Route::post('/factorExt/create','FactorInternoController@store')->name('saveFactorExterno')->middleware('verified')->middleware('auth');

    //Routes de Factor Externo amenaza
    Route::post('/factorExtA','FactorInternoDController@index')->middleware('verified')->middleware('auth');
    Route::get('/factorExtA','FactorInternoDController@index')->middleware('verified')->middleware('auth');
    Route::get('/factorExtA/create','FactorInternoDController@create')->middleware('verified')->middleware('auth');
    Route::get('/factorExtA/show/{id}','FactorInternoDController@getAnswers')->middleware('verified')->middleware('auth');
    Route::post('/factorExtA/create','FactorInternoDController@store')->name('saveFactorExternoA')->middleware('verified')->middleware('auth');

    //Routes de analisis pestal
    Route::post('/analisisPestal','AnalisisController@index')->name('analisisPestal')->middleware('verified')->middleware('auth');
    Route::get('/analisisPestal','AnalisisController@index')->name('analisisPestal')->middleware('verified')->middleware('auth');
    Route::get('/analisisPestal/create','AnalisisController@create')->middleware('verified')->middleware('auth');
    Route::get('/analisisPestal/show/{id}','AnalisisController@getAnswers')->middleware('verified')->middleware('auth');
    Route::post('/analisisPestal/create','AnalisisController@store')->name('guardaAna')->middleware('verified')->middleware('auth');

    //Routes análisis EFI y EFi
    Route::post('/getDebiAmena','AnalisisController@getEFI')->name('analisisEFI')->middleware('verified')->middleware('auth');
        //esta se saco esta ruta
    Route::post('/getOpoFor','AnalisisController@getDOFA')->name('analisisDOFA')->middleware('verified')->middleware('auth');
    Route::post('/getOpoForb','AnalisisController@getDOFA1')->name('analisisDOFA1')->middleware('verified')->middleware('auth');

    //Análisis EFE y EFI graficas
    Route::get('/graficas/{id}','graficaControler@dotos');
    Route::post('penetracion_mercadoanf', 'respues_PenetracionController@storage')->name('penetracion_mercadoanf')->middleware('verified')->middleware('auth');
    Route::post('Desarrollo_ProductoController', 'Desarrollo_ProductoController@storage')->name('Desarrollo_ProductoController')->middleware('verified')->middleware('auth');
    Route::get('/analisisEFIgrafica', function () { return view('Modulo2.analisisEFIgrafica');})->name('analisisEFIgrafica')->middleware('verified')->middleware('auth');
    Route::post('/estrategiasCon','estrategiasController@storage')->name('estrategiasController')->middleware('verified')->middleware('auth');

    //Routes de análisis porter
    Route::post('/analisisporter','AnalisisPorterController@index')->name('analisisporter')->middleware('verified')->middleware('auth');
    Route::get('/analisisporter','AnalisisPorterController@index')->name('analisisporter')->middleware('verified')->middleware('auth');
    Route::get('/analisisporter/show/{id}','AnalisisPorterController@getAnswers')->middleware('verified')->middleware('auth');
    Route::post('/analisisportercreate','AnalisisPorterController@store')->name('guardaporter')->middleware('verified')->middleware('auth');
    Route::post('/analisisportermercado','AnalisisPorterController@mercado')->name('mercado')->middleware('verified')->middleware('auth');
    Route::post('/storageAnsController','storageAnsController@storage')->name('storageAnsController')->middleware('verified')->middleware('auth');

    //Routes de ansorft tipo 1
    Route::post('/ansorftTipo1','AnsorftController@index')->name('tipo1')->middleware('verified')->middleware('auth');
    Route::get('/ansorftTipo1','AnsorftController@index')->name('tipo1')->middleware('verified')->middleware('auth');
    Route::post('/ansorftTipoho%/create','AnsorftController@store')->middleware('verified')->middleware('auth')->name('SaveDesarrolloMerca');
    // Route::get('/ansorftTipo1/create','AnsorftController@create');
    Route::get('/ansorftdatos/{id}','AnsorftController@datos');
    Route::post('/ansorftDiversificacion', 'PenetracionMercadoController@storage')->name('ansorftDiversificacion')->middleware('verified')->middleware('auth');

    //Dofa
    Route::post('/analisisDofa', 'DofaController@dofa')->name('analisisDofa')->middleware('verified')->middleware('auth');

    //Item 11 Estrategia
    Route::get('/misEstrategiasInfo', function () {return view('Modulo2.estrategiaInfo');})->name('estrategiaInfo')->middleware('verified')->middleware('auth');
    Route::post('/misEstrategias0','MisEstrategiasController@estrategias1')->name('estrategia0')->middleware('auth')->middleware('verified');
    Route::post('/misEstrategias1','MisEstrategiasController@estrategias1')->name('estrategia1')->middleware('auth')->middleware('verified');
    Route::post('/misEstrategias2','MisEstrategiasController@estrategias2')->name('estrategia2')->middleware('auth')->middleware('verified');
    Route::post('/misEstrategias3','MisEstrategiasController@estrategias3')->name('estrategia3')->middleware('auth')->middleware('verified');
    Route::post('/misEstrategias4','MisEstrategiasController@estrategias4')->name('estrategia4')->middleware('auth')->middleware('verified');
    
    //Mis estrategias jajax :p 
    Route::get('/FoAll/{id}','estrategias_ofensivasController@FoAll')->name('FoAll');
    Route::get('/FaAll/{id}','estrategias_ofensivasController@FaAll')->name('FaAll');
    Route::get('/DoAll/{id}','estrategias_ofensivasController@DoAll')->name('DoAll');
    Route::get('/DaAll/{id}','estrategias_ofensivasController@DaAll')->name('DaAll');
    
    //Guardar de estrategias
    Route::post('/ofensivas','estrategias_ofensivasController@storage')->name('ofensivas');
    Route::post('/misEstrategias1.1','EstrategiasDiagnosticoController@store')->name('estrategia5')->middleware('auth')->middleware('verified');
  
        //Guardar de estrategias


    //Matriz
    Route::post('/estrategiasmatriz','estrategias_matrizController@storage')->name('estrategiasmatriz')->middleware('auth')->middleware('verified');
    Route::post('/MatrizStore','MatrizController@storg')->name('MatrizStore')->middleware('verified')->middleware('auth');
    Route::get('/Matrizindex/{id}','MatrizController@index')->name('Matrizindex');
    Route::get('/Penetración/{id}','MatrizController@Penetración')->name('Matrizindex');
    Route::get('/Mercado/{id}','MatrizController@Mercado')->name('Matrizindex');
    Route::get('/Producto/{id}','MatrizController@Producto')->name('Matrizindex');
    Route::get('/Diversificación/{id}','MatrizController@Diversificación')->name('Matrizindex');


        

    // Esta ruta me sirve para redirigirme de una otra: ->Route::redirect('/here', '/there');
   ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Módulo $argv
    Route::post('/Capacidad','respuestaController@index' )->name('Capacidad')->middleware('verified')->middleware('auth');
    Route::post('/estrategias','Modulo3Controller@estrategias')->name('estrategias')->middleware('verified')->middleware('auth');

    //Verbos
    Route::post('/Verbos','Modulo3Controller@Verbos')->name('Verbos')->middleware('verified')->middleware('auth');
    Route::post('/Objetivos/storg','Modulo3Controller@guardar')->name('Objetivos')->middleware('verified')->middleware('auth');
    Route::post('/FormulacionResumen','FormulacionController@storeage')->name('FormulacionCon')->middleware('verified')->middleware('auth');
    
    //Diseño de objetivos
    Route::get('vervoslis/{id}', 'Modulo3Controller@vervoslis');
    Route::get('posicion/{id}', 'Modulo3Controller@posicion');
    Route::get('/DisenoObjetivos', function () {return view('Modulo3.DisenoObjetivos');})->name('DisenoObjetivos')->middleware('verified')->middleware('auth');
    Route::get('/DisenoObjetivos2', function () {return view('Modulo3.DisenoObjetivos2');})->name('DisenoObjetivos2')->middleware('verified')->middleware('auth');
    Route::get('/DisenoObjetivos3', function () {return view('Modulo3.DisenoObjetivos3');})->name('DisenoObjetivos3')->middleware('verified')->middleware('auth');
    
    //Esta me permite eliminar del array desde la vista de formulacion de los objetivos
    Route::get('EV/{id}','Modulo3Controller@EV')->name('EV')->middleware('auth')->middleware('verified');
    Route::POST('eliminarObjetivos','FormulacionController@eliminarObjetivos');

    //Estas rutas son aparte
    Route::get('/DisenoObjetivos3/{$id?}', function () {return view('Modulo3.DisenoObjetivos3');})->name('DisenoOb3')->middleware('verified')->middleware('auth');
    Route::get('/FormulacionInfo', function () {return view('Modulo3.FormulacionInfo');})->name('FormulacionInfo')->middleware('verified')->middleware('auth');
    Route::post('/FormulacionAsociar','FormulacionController@index')->name('FormulacionAsociar')->middleware('verified')->middleware('auth');
    Route::get('/ObjetivosResumen', function () {return view('Modulo3.ObjetivosResumen');})->name('ObjetivosResumen')->middleware('verified')->middleware('auth');
    Route::get('/FormulacionResumen', function () {return view('Modulo3.FormulacionResumen');})->name('FormulacionResumen')->middleware('verified')->middleware('auth');
    
    //Estoy trabajando en esta ruta 21 de julio
    Route::post('/FormulacionResumen2','FormulacionController@resumenDos')->name('resumenDos')->middleware('verified')->middleware('auth');
    //Estoy trabajando en esta ruta 22 de julio
    Route::post('/ObjetivosResumen','FormulacionController@guardarResumenDos')->name('guardarResumenDos')->middleware('verified')->middleware('auth');
    //Estoy trabajando en esta ruta 24 de julio
    Route::post('/objetivosEstrategias','FormulacionController@objetivosEstrategias')->name('objetivosEstrategias')->middleware('verified')->middleware('auth');
    
    //Aca esto es del domingo
    Route::get('/final1/{id}','FormulacionController@Final1')->name('Final1');
    Route::get('/final2/{id}','FormulacionController@Final2')->name('Final2');
    Route::get('/final3/{id}','FormulacionController@Final3')->name('Final3');
    //Esto es del 29 de julio
    Route::post('/finalGuardar','FormulacionController@finalGuardar')->name('finalGuardar')->middleware('verified')->middleware('auth');
     //Aca esto es del jueves 30 de julio
     Route::get('/estrategiasFinal1/{id}','FormulacionController@estrategiasFinal1')->name('estrategiasFinal1');
     Route::get('/estrategiasFinal2/{id}','FormulacionController@estrategiasFinal2')->name('estrategiasFinal2');
     Route::get('/estrategiasFinal3/{id}','FormulacionController@estrategiasFinal3')->name('estrategiasFinal3');

    Route::post('/createWord', ['as'=>'createWord','uses'=>'WordTestController@createWordDocx'])->     middleware('verified')->middleware('auth');
    Route::post('/createpdf','pdfController@pdf')->name('createpdf')->middleware('verified')->middleware('auth');
    Route::post('/Evaluacion','Evaluacion_FactoresController@store')->name('Evaluacion')->middleware('verified')->middleware('auth');


    Route::get('/modulo2-4', function () {return view('Modulo3.tercero2-4');})->name('modulo2-4')->middleware('verified')->middleware('auth');

    Route::get('/tercero1-1', function () {return view('Modulo3.formulacion_de_estrategias.tercero1-1');})->name('tercero1-1')->middleware('verified')->middleware('auth');
    Route::get('/tercero1-2', function () {return view('Modulo3.formulacion_de_estrategias.tercero1-2');})->name('tercero1-2')->middleware('verified')->middleware('auth');
    Route::get('/tercero1-3', function () {return view('Modulo3.formulacion_de_estrategias.tercero1-3');})->name('tercero1-3')->middleware('verified')->middleware('auth');
    Route::get('/tercero2-4', function () {return view('Modulo3.tercero2-4');})->name('tercero2-4')->middleware('verified')->middleware('auth');
    Route::get('/terminos', function () {return view('terminos');})->name('terminos');

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Módulo 4
    Route::get('/vista1-1', function () {return view('Modulo4.vista1-1');})->name('vista1-1')->middleware('verified')->middleware('auth');
    Route::get('/vista1-2', function () {return view('Modulo4.vista1-2');})->name('vista1-2')->middleware('verified')->middleware('auth');
    Route::get('/vista1-3', function () {return view('Modulo4.vista1-3');})->name('vista1-3')->middleware('verified')->middleware('auth');
    Route::get('/vista2-1', function () {return view('Modulo4.vista2-1');})->name('vista2-1')->middleware('verified')->middleware('auth');
    Route::get('/vista2-2', function () {return view('Modulo4.vista2-2');})->name('vista2-2')->middleware('verified')->middleware('auth');
    Route::get('/analisisAnsorft', function () {return view('Modulo2.analisisAnsorft');})->name('analisisAnsorft')->middleware('verified')->middleware('auth');

          //cotrolador indicadores de objetivos controller // creado: YrLondon
    Route::get('indicadores/{id}','IndicadoresDeObjetivosController@index')->name('Indicadores');
    Route::get('indicador/{id}','IndicadoresDeObjetivosController@indicador');
    Route::get('resumenObjetivos','ResumenObjetivosController@index')->name('resumenObjetivos');
    Route::post('resumenObjetivos','ResumenObjetivosController@store')->name('resumenObjetivos1');



    /*
     Rutas eliminadas pero existentes con el nuevo diseño
         /analisisDofa
         /getOpoFor

    */
