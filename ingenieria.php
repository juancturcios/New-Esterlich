<?php
  include 'header.html';
 ?>
 <style media="screen">
 .container {
   position: relative;
 }
 .image {
   display: block;
   height: auto;
 }

 .overlay {
   position: absolute;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   height: auto;
   width: 112%;
   opacity: 0;
   transition: .3s ease;
   background-color: black;
 }

 .container:hover .overlay {
   opacity: 0.8;
 }

 .text {
   color: white;
   font-size: 20px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
 }
 a{
   color: black;
 }
 a:hover{
   color:rgb(100, 103, 105);
 }
 /*a img{
   -webkit-filter: grayscale(100%);
   filter: grayscale(100%);
 }
 a img:hover{
   -webkit-filter: grayscale(0%);
   filter: grayscale(0%);
 }*/
 </style>
        <!-- Slider Start -->
    <section id="global-header" class="header-ingenieria">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>INGENIERÍA</h1>
                        <p>DISEÑAMOS EL FUTURO </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Portfolio Start -->
        <section id="ingenieria">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="block">
                  <div class="text-center">
                    <br>
                    <h2><b>Esterlich &</b> HMC Ingenium SA</h2>
                  </div>
                  <div class="media">

                    <div class="media-body">

                      <div class="text-justify">

                        <br>
                      <p>Esterlich & HMC Ingenium SA son una empresa especializada en prestar servicios de ingeniería para proyectos diversos en los sectores de:
                        <br>
                        <br>
                          <b>Ingeniería Hidráulica:</b> Proyectos de Riego, centrales hidroeléctricas, presas, canales de drenaje, de irrigación, potabilización y canalización.
                        <br>
                          <b>Ingeniería Mecánica:</b> Equipamiento electromecánico para centrales hidroeléctricas, plantas de tratamiento de residuales, estaciones de bombeo, diseños de estructuras metálicas para casa de máquina, esclusas, rompeolas, válvulas y compuertas de cierre.
                        <br>
                          <b>Ingeniería Civil:</b> Pasos de nivel, presas y derivadoras, canales, sistemas de riego y drenaje, acueductos y alcantarillado, estaciones de bombeo, tratamiento de residuales.</p>

                      </div>
                    </div>
                    <div class="media-right media-middle">

                        <img class="media-object" src="img/Ing.png" style="width:70%; margin-left:50px;" alt="Ingenieria">

                    </div>
                  </div>



                </div>
              </div><!-- .col-md-7 close -->

            </div>
          </div>
        </section>

        <section class="segunda-seccion">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <div >
                    <h2 class="title-mision">Misión</h2>

                  </div>
                  <p class="text-justify">Somos una empresa dedicada a prestar servicios consultoría e ingeniería a nuestros clientes y aliados con el objetivo de complementar los diversos proyectos e inversiones, usando para ello modernos software y la experiencia de nuestro personal técnico.</p>
                </div>
              </div><!-- .col-md-7 close -->
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <div >
                    <h2 class="title-mision">Visión</h2>

                  </div>
                  <p class="text-justify">Ser una Empresa líder en Centroamérica, reconocida por un servicio de ingeniería de calidad y excelente relación calidad, precio, complementando con nuestra ingeniería la competitividad de nuestros aliados.</p>
                </div>
              </div><!-- .col-md-5 close -->
            </div>
          </div>
        </section>

        <section class="tercera-seccion">
          <div class="container">
            <h2 class="title-mision">Experiencia</h2>
            <br>
            <div class="row">
              <div class="col-sm-4">
                    <!-- <button type="button" data-toggle="modal" data-target="#hidroenergia" style="padding:0px;"> -->
                      <a data-toggle="modal" href="#hidroenergia" >
                        <img src="img/hidroenergia.png" class="img-responsive center-block">
                          <div class="text-center">
                            <h3><b>Centrales hidroeléctricas</b></h3>
                            <hr>
                          </div>
                      </a>
              </div>

              <div class="col-md-4 col-sm-12">
                  <a data-toggle="modal" href="#riego-drenaje" >
                    <img src="img/drenaje-riego.png" class="img-responsive center-block">
                      <div class="text-center">
                        <h3><b>Sistema de riego y drenaje</b></h3>
                        <hr>
                      </div>
                  </a>
              </div>
              <div class="col-md-4 col-sm-12">
                    <a data-toggle="modal" href="#plantas-tratamiento" >
                      <img src="img/planta-tratamiento.png" class="img-responsive center-block">
                        <div class="text-center">
                          <h3><b>Plantas de tratamiento</b></h3>
                          <hr>
                        </div>
                    </a>
            </div>
        </section>

        <section id="portfolio-work" class="cuarta-seccion">
          <div class="container">
            <div class="row">
              <h2>STAFF</h2>
              <h3>Equipo altamente calificado</h3><br>
              <div class="col-sm-3">
                <a data-toggle="modal" href="#ing-edgar" >
                  <img src="img/Ing. Edgar.png" alt="" width="230">
                    <div class="text-center">
                      <h3><b>MSC. Ing. Edgar O. Zumaquero Martínez</b></h3>
                    </div>
                </a>
              </div>

              <div class="col-sm-3">
                <a data-toggle="modal" href="#ing-ariel" >
                  <img src="img/Ing. Ariel.png" alt="" width="230">
                    <h3><b>MSC. Ing. Ariel Enrique Ramos Hernández</b></h3>
                </a>
              </div>

              <div class="col-sm-3">
                <a data-toggle="modal" href="#ing-javier" >
                  <img src="img/Ing. Javi.png" alt="" width="230">
                    <h3><b>MSC. Ing. Javier Peña González</b></h3>
                </a>
              </div>

              <div class="col-sm-3">
                <a data-toggle="modal" href="#ing-yanel" >
                  <img src="img/Ing. Yanel.png" alt="" width="230">
                      <h3><b>Ing. Yanel Llanes Pozo</b></h3>
                </a>
              </div>
            </div>
          </div>
        </section>

        <!-- Modal -->
        <div id="hidroenergia" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color:#d8d8d8;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center" >Hidroenergía</h2>
              </div>
              <div class="modal-body text-justify">
                <h3>2015</h3>
                <hr>
                <p>Estudio de factibilidad PCH Samayare, Dpto. Danlí, Potencia 2.7 KW.<br>
                  Supervisíon y asesoria técnica civil e hidroenergética a los proyectos PCH Las Puertas I,II,III, Dpto. Francisco Morazan, Potencia 9.5 KW.<br>
                  Diseños finales PCH Jicaro 1, Dpto. lempira, Hn. Potencia: 3.84 MW.<br>
                  Supervisión a la construcción PCH San Alejo, Dpto. Fco Morazán, Potencia 2.4 MW.<br>
                  Due diligence PCH Samayare, Dpto. Paraiso, Hn: Potencia: 2.18 MW.<br>
                  Estudio de factibilidad PCH Toco-Yase, Dpto. Intibuca, Hn, Potencia: 5.7 MW.<br>
                  Diseños finales (2da revisión) PCH Paso Viejo, Dpto Cortés, Hn, Potencia 2.6 MW.</p>

                  <h3>2014</h3><hr><p>
        Supervisión a la construcción PCH San Alejo, Dpto. Fco Morazán, Potencia 2.4 MW.<br>
        Estudio de prefactibilidad PCH Fenix, Dpto. Lempira, Hn: Potencia: 21.9 MW.<br>
        Due diligence técnico /comercial PCH Betulia, Dpto. Colon: Potencia 9.1 MW.<br>
        Due diligence prefactibilidad PCH Toco-Yase, Dpto. Intibuca, Hn, Potencia: 5.7. MW<br>
        Due diliegence técnico PCH Zinguizapa, Dpto. Fco Morazan, Potencia 2.6 MW.<br>
        Diseños finales PCH Paso Viejo, Dpto. Cortés, Hn, Potencia 2.6 MW.</p>
        <h3>2013</h3><hr><p>
        Supervisión a diseños finales PCH Las Puertas 1, 2, 3, Fco Morazán, Potencia 11.0 MW.<br>
        Perfil y Estudio de prefactibilidad PCH Telica, Dpto. Olancho, Hn, Potencia 6.0 MW.<br>
        Due Diligence a diseños PCH Petacon, Dpto. Fco Morazán, Hn, Potencia 11.1 MW.<br>
        Estudio de prefactibilidad PCH Jicaro 3. Potencia estimada 10.3 MW.<br>
        Estudio de factibilidad PCH Paso Viejo. Dpto. Cortés,Hn, Potencia 2.4 MW.<br>
        Estudio de factibilidad PCH Jicaro 1, Dpto. Lempira, Hn, Potencia 8.0 MW.</p>
        <h3>2012</h3><hr><p>
        Supervisión y asesoría técnica civil e hidroenergética al proyecto PCH Petacón, Año 2012.<br>
        Revisión PCH El Netapa, Dpto. Comayagua, Potencia 2.3 MW.<br>
        Estudio de prefactibilidad PCH Cuyamelito, Dpto. Cortés, Potencia 5.1MW<br>
        Estudio de prefactibilidad PCH Paso Viejo, Dpto. Cortés, Potencia 1.9MW.<br>
        Estudio técnico aprovechamiento Hidroenergético al Sur de Tegucigalpa (SANAA), Dpto. Francisco Morazán.<br>
        Rediseño de Presa PCH Petacón, Dpto. Francisco de Morazán, Honduras, N= 12.5MW<br>
        Revisión estudio factibilidad PCH Joya de la Laguna, Dpto. Santa Bárbara, Potencia 33 MW.<br>
        Revisión estudio de factibilidad PCH El Zapote, Dpto. Cortés, Potencia 13.0 MW</p>
        <h3>2011</h3><hr><p>
        Proyecto ejecutivo PCH "San Alejo". Dpto. de Comayagua, Potencia: 2.3 MW.<br>
        Estudio de factibilidad PCH Rio Blanco. Dpto. de Santa Bárbara, Potencia 1.50 MW.<br>
        Estudio de factibilidad PCH Petacón, Dpto. Francisco Morazán, Potencia 4.7 MW<br>
        Estudio prefactibilidad Jalán, Dpto. Olancho, Honduras, N= 8800 Kw.<br>
        Estudio prefactibilidad Río Blanco, Dpto. Santa Barbara, Honduras, N= 1466Kw.<br>
        Estudio prefactibilidad Río Negro, Dpto. Intibucá, Honduras, N= 2323Kw.<br>
        Estudio prefactibilidad Jacoral, Dpto. El Paraíso, Honduras, N= 3700 Kw.<br>
        Proyecto ejecutivo PCH Petacón, Dpto. Francisco de Morazán, Honduras, N= 5250 Kw.</p>
        <h3>2009-2010</h3><hr><p>
        Revisión y actualización del estudio hidroeléctrico PCH Aguan Bassin, Honduras N= 19178 Kw.<br>
        Estudio prefactibilidad PCH San Antonio, Dpto. Atlántida, Honduras, N=4200 Kw.<br>
        Estudio prefactibilidad PCH Toco Yase, Dpto La Paz , Honduras, N= 2000 Kw.<br>
        Perfil base hidroenergético Dpto. Lempira, Honduras, N=33708 Kw.<br>
        Factibilidad hidroeléctrica PCH Petacón, Dpto. Francisco de Morazán, Honduras, N= 5250 Kw<br>
        Revisión estudio de factibilidad hidro energética PCH Petacón, Dpto. Francisco de Morazán, Honduras, N= 5250 Kw.<br>
        Revisión y actualización del estudio PCH Toco -Yase, Dpto. Intibucá, Honduras, N=5376 Kw.<br>
        Revisión y actualización técnico económico Estudio Factibilidad PCH Puringla - Sazagua, Honduras, N= 8300.<br>
        Factibilidad hidroeléctrica, Pequeña Central Hidroeléctrica Blanco-La Puerta I , Dpto. Francisco de Morazán, Honduras, N= 2018 Kw.<br>
        Factibilidad hidroeléctrica, Pequeña Central Hidroeléctrica Singuizapa I y II, Dpto. Francisco de Morazán, Honduras, N= 2752 Kw.<br>
        Factibilidad hidroeléctrica, Pequeña Central Hidroeléctrica Blanco-La Puerta II, Dpto. Francisco de Morazán, Honduras, N= 2500 Kw.</p>
        <h3>2008</h3><hr><p>
        Estudio de prefactibilidad PCH Toco, Dpto. Francisco de Morazán, Honduras N=2000.<br>
        Revisión y actualización estudio PCH Verdugo (VER-150), Dpto La Paz, Honduras, N=5256 Kw.<br>
        Revisión del estudio hidroeléctrico San Martín, Honduras N= 24469,940 KWH.</p>
        <h3>2005</h3><hr><p>
        Factibilidad, Proyecto ejecutivo Hidroeléctrica Santa Elena (Chamalecón), Dpto. Copán Honduras, N= 1645 Kw.</p>
        <h3>2004</h3><hr><p>
        Factibilidad hidroeléctrica Finca Vinarós, Dpto. Acatenango, N= 1200Kw.<br>
        Factibilidad hidroeléctrica Finca Los Almendros, Guatemala, N= 1000 Kw.</p>
        <h3>2003</h3><hr><p>
        Factibilidad hidroeléctrica Rio Metapa, Dpto. Acatenango, Guatemala, N= 3075Kw.<br>
        Estudio de factibilidad hidroeléctrica Finca la Libertad, Guatemala, N= 1350Kw.<br>
        Proyecto ejecutivo y supervisión montaje Hidroeléctrica Finca La Soledad, Potencia: N=2000 Kw, Guatemala.<br>
        Estudio de factibilidad hidroeléctrica Finca El Naranjo, Guatemala, N= 80Kw.</p>
        <h3>2002</h3><hr><p>
        Estudio de Pre factibilidad hidroeléctrica Dpto. Macuro, Puerto de Sucre, Venezuela, N= 146 Kw.<br>
        Estudio de factibilidad hidroeléctrica Municipio Tacana, Guatemala, N=1000Kw.</p>
        <h3>2001</h3><hr><p>
        Participación en estudios de impacto ambiental, Québec, Canadá.<br>
        Estudio de factibilidad hidroeléctrica Finca La Soledad, Guatemala, N= 2000 Kw.</p>
        <h3>2000</h3><hr><p>
        Estudio de factibilidad central hidroeléctrica Bucaramanga, Colombia, año 2000, N= 1600Kwh.<br>
        Estudio de pre factibilidad hidroeléctrica Fincas "La Conchita" y Agrícola Industrial Santa Rosa, Guatemala. N= 680 Kw y N=750 Kw.<br>
        Estudio de factibilidad, Proyecto Ejecutivo, supervención y administración de obra Pequeña Central Hidroeléctrica Finca El Platanar, N= 100 Kw, Guatemala.</p>
        <h3>1999</h3><hr><p>
        Proyecto técnico ejecutivo de Mini Centrales Hidroeléctricas en el Escambray, N = 100 kW.<br>
        Proyecto ejecutivo y construcción Pequeña central Hidroeléctrica "Bahia Solano", N = 2200 kW.</p>
        <h3>1998</h3><hr><p>
        Montaje tuberías de presión hidroeléctrica "Bahia Solano" 1.6 km tubería 20", 1500m3, Dpto. Choco, Colombia.</p>
        <h3>1986</h3><hr><p>
        Proyecto ejecutivo, pequeña central hidroeléctrica "Pico blanco" N=1200 Kw</p>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>

        <!-- Modal -->
        <div id="riego-drenaje" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color:#d8d8d8;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center" >Riego y Drenajes</h2>
              </div>
              <div class="modal-body text-justify">
                <h3>2005-2006</h3>
                <hr>
                <p>Esquema de proyecto para el desarrollo agrícola de 500 000 ha del programa Guanare-Masparro, Barinas, Venezuela., con participación de la empresa constructora ODERBRECH (Brasil), Venezuela.<br>
Proyecto de rehabilitación: Rehabilitación del sistema de riego del río Santo Domingo, Barinas, Venezuela.<br>
Proyecto para construcción: Sistemas de riego "Peña Larga" y "Hacienda La Marqueseña". Barinas, Venezuela.</p>

                  <h3>2003</h3><hr><p>

        Proyecto ejecutivo conductora de aguas mineral "A", 3.5 lts/ seg.</p>
        <h3>1998</h3><hr><p>
        Proyecto ejecutivo y supervisión a la construcción civil, puente colgante para hidroeléctrica "Bahia Solano", 36 m de luz, Dpto. Choco, Colombia.</p>
        <h3>1997</h3><hr><p>
          Montaje tuberías de presión hidroeléctrica "Bahia Solano" 1.6 km tubería 20", 1500m3, Dpto. Choco, Colombia.<br>
          Supervisión al montaje sistema de riego y drenaje Campo de Golf "Las A" 100Km tuberías.
        </p>
        <h3>1996</h3><hr><p>
        Diseño, control de obras y supervisión tubería de presión Pequeña central hidroeléctrica "P- II ", 1.2 m3/ seg.</p>
        <h3>1994</h3><hr><p>
        Diseño, control de obras y supervisión tubería de presión Pequeña central hidroeléctrica "P- I ", 0.6 m3/ seg.</p>
        <h3>1992</h3><hr><p>
      Proyecto ejecutivo conductora para población "O", (10.5 Km CoAo DE 36"), 0.9 m3/ seg.</p>
        <h3>1990</h3><hr><p>
        Proyecto ejecutivo y control de obra conductora potabilizadora "A", (CoAo DE 36"), 0.9 m3/seg.</p>
        <h3>1988</h3><hr><p>
        Diseño conductora para frutales "A- J" (CoAo 36"), 2 x17.5 Km, 1.2m3/seg.</p>
        <h3>1987</h3><hr><p>
        Diseño ejecutivo y supervisión de sistema de riego por aspersión para frutales "J" , 1500 Ha.</p>
        <h3>1985</h3><hr><p>
        Diseño estación de bombeo para frutales "M-II", 7.5 m3/seg.</p>
        <h3>1983</h3><hr><p>
          Diseño ejecutivo y control de obras canal magistral para Frutales "M" , 7.5 m3/seg.<br>
  Diseño ejecutivo sistema de riego por aspersión para Frutales "M", 2832 Ha.</p>
        <h3>1973</h3><hr><p>
          Diseño ejecutivo, control de obras canal magistral para cultivos varios "Z", 50 m3/ seg.</p>
        <h3>1971</h3><hr><p>
        Diseño ejecutivo Sistema de riego para arroz "Per"1500 Ha.</p>
        <h3>1970</h3><hr><p>
        Diseño ejecutivo, control de obras sistema de riego para arroz "Las N", 2000 Ha.</p>
        <h3>1969</h3><hr><p>
          Diseño ejecutivo, control de obras sistema de riego para caña de azúcar "Ana I y II", 500 Ha.<br>
  Diseño ejecutivo, control de obras sistema de riego para arroz, "SF" , 1000 ha.</p>
      <h3>1968</h3><hr><p>
      Diseño ejecutivo, control de obras sistema de riego para Viandas "'H-Y", 1500 Ha..</p>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>

        <!-- Modal -->
        <div id="plantas-tratamiento" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color:#d8d8d8;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center" >Riego y Drenajes</h2>
              </div>
              <div class="modal-body text-justify">
                <h3>2009-2010</h3>
                <hr>
                <p>Construcción acometida "El P y la E- I y II"<br>
                  Construcción colector residuales "Pta P"<br>
                  Construcción de red de impulsión residuales "Lor"<br>
                  Rehabilitación redes "Pta P"<br>
                  Supervisión al montaje planta de tratamiento de residuales, Qd=1 300 m3/d.<br>
                  Supervisión al montaje mecánico planta de tratamiento de Residuales, Instalación de tratamiento compacta, Qd = 50 m3/d.<br>
                  Construcción red impulsión residuales (e. bombeo) para viviendas, Qd = 1 728 m3/d.<br>
                  Montaje planta potabilizadora por decantación Acelerada, Qd = 108 m3/h.<br>
                  Supervisión al montaje de suavizador de agua por intercambio iónico en resinas. Sistema Duplex. Qd = 15 m3/h.<br>
                  Supervisión al montaje de suavizador de agua por intercambio iónico en resinas. Sistema Duplex. Qd = 45 m3/h.</p>

                  <h3>2008</h3><hr><p>
                    Montaje de planta potabilizadora de filtración a presión, en lecho multicapa arena-antracita, Qd = 360 m3/h.<br>
                    Supervisión a la construcción red residuales "La E I" Qd = 20 m3/dDigestión Anaerobia - Aireación - Sedimentación - Cloración.</p>
        <h3>2007</h3><hr><p>
        Proyecto y construcción red residuales y planta de tratamiento de sesiduales "La G", Qd = 25 m3/d Digestión Anaerobia - Filtración - Cloración.</p>
        <h3>2003</h3><hr><p>
          Supervisión planta potabilizadora de filtros lentos de 60 m3/d, Qd = 3 módulos x 20 m3/d = 65 m3/d.<br>
        </p>
        <h3>1997</h3><hr><p>
        Diseño de conductoras para residuales del turismo (8 Km AoCo DE 10''), 0.6m3/seg.</p>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>

        <div id="ing-edgar" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color:#d8d8d8;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center" >MSC. Ing. Edgar O. Zumaquero Martínez</h2>
              </div>
              <div class="modal-body text-justify">
                <h3>Director Ejecutivo de HMC</h3>
                <hr>
                <p>Ingeniero Mecánico con Maestría en Comercio Internacional, Diplomados en Gestión Económica Financiera y Finanzas Internacionales, con más de 20 años de experiencia profesional en ventas y negociaciones internacionales y exportaciones de equipos Industriales como Bombas, centrifugas, compresores, turbinas hidráulicas y proyectos de factibilidad y diseños finales, entre los más relevantes suministros de centrifugas azucareras (FCB Francia), para 4 zafras, venta de repuestos Jamaica Sugar Co., rehabilitación de la refinería de petróleo PDVSA-CUPET, Estudios de Factibilidad y Diseño Finales Hidroeléctricos en México, Guatemala, Venezuela y Honduras (Ejemplo; PCHE El Platanar, Los almendros, Vinarós, Macuro, San Alejo, Petacón, Jicaro I, II, y III, Netapa, Chinacla, Perla, Santiago, Paso Viejo, Las Puertas, otros).</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>

        <div id="ing-ariel" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color:#d8d8d8;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center" >MSC. Ing. Ariel Enrique Ramos Hernández</h2>
              </div>
              <div class="modal-body text-justify">
                <h3>Ingeniero Hidráulico</h3>
                <hr>
                <p>Ingeniero Hidráulico con Maestría en Matemática e Hidráulica, Diplomado en Marketing y Negociación y Auditor de Sistemas de Gestión de Calidad de la LLOYDs. Especialista Superior de Proyectos e investigaciones hidrológicas con más de 20 años de experiencia profesional. Ha incursionado como Ingeniero a Pie de Obra y ha desarrollado importantes Temas Científicos. En los últimos años se ha especializado en la Dirección Técnica de Grupos de Proyectos. Los trabajos más relevantes son Diseño y Construcción Acueducto de Baracoa (incluye Presa de Derivación - población 60000hab), Reparación de la cortina de la Presa Lebrije (56 m de altura), Pronósticos hidrológicos y manejo de grandes cuencas. Estudio de Desarrollo de 500 000 Ha bajo riego Estado Barinas, Venezuela. Estudios de Factibilidad y Diseño Finales Hidroeléctricos, Honduras (Ejemplo; PCHE San Alejo, Petacón, Jicaro I, II, y III, Netapa, Chinacla, Perla, Santiago, Paso Viejo, Las Puertas, otros).</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>

        <div id="ing-javier" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color:#d8d8d8;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center" >MSC. Ing. Javier Peña González</h2>
              </div>
              <div class="modal-body text-justify">
                <h3>Ingeniero Hidráulico</h3>
                <hr>
                <p>Ingeniero Hidráulico y Master en ingeniería para el "Manejo de los recursos hidráulicos y el medioambiente" (UNESCO-IHE, Reino de los Países Bajos). Ha trabajado por más de 22 años como proyectista y director de proyectos para presas y obras hidrotécnicas en general. Posee conocimientos y experiencia en la gestión y explotación de los recursos hídricos por cuencas, en el diseño hidráulico y en la supervisión durante la construcción de presas de tierra, pequeñas centrales hidroeléctricas, viales, obras de abasto, y de alcantarillado y drenaje. Entre sus logros principales se incluyen los estudios hidroeconómicos del Programa para la lucha contra la desertificación y la sequía en la región Chelif-Zharez, República Democrática y Popular de Argelia y la supervisión de los trabajos de compactación de los materiales en el vial marítimo Caibarién-Cayo Santa María (50 km).</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>

        <div id="ing-yanel" class="modal fade" role="dialog">
          <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="background-color:#d8d8d8;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title text-center" >Ing. Yanel Llanes Pozo</h2>
              </div>
              <div class="modal-body text-justify">
                <h3>Ingeniero Hidráulico</h3>
                <hr>
                <p>Ingeniero Hidráulico por más de 14 años, con experiencia en consultoría, diseño y construcción de obras de ingeniería, relacionadas con sistemas de alta presión (abastecimiento, saneamiento e hidroenergía), rectificación de causes y dragado - construcción de canales. Dentro de los proyectos más significativos se destacan la dirección de proyectos del sistema de abastecimiento y saneamiento de Cayo Santa María y Varadero, así como la construcción y rehabilitación de pequeñas centrales hidroeléctricas en la región central del país (Cuba). Trabajos de diseño en Centrales Hidroeléctricas como San Alejo, Petacón, Jicaro I, en la república de Honduras.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              </div>
            </div>

          </div>
        </div>


    <!-- Clients Logo Section Start -->



<!-- Call to action Start -->

    <!-- footer Start
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                  <div class="footer-manu">
                    <ul>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Contact us</a></li>
                      <li><a href="#">How it works</a></li>
                      <li><a href="#">Support</a></li>
                      <li><a href="#">Terms</a></li>
                    </ul>
                  </div>
                  <p>Copyright &copy; Crafted by <a href="https://dcrazed.com/">Dcrazed</a>.</p>
                </div>
            </div>
        </div>
    </footer>
 -->


 <?php
   include 'footer.html';
  ?>
