<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div class="Section">
    <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
    <div class="Section_counter">
        <div class="Counter_content">
        <div class="Section_ppal_form">
            <p class="Section_ppal_form_text">¿Estás listo para perder el miedo a ser millonario?<br>​Inscríbete ahora para empezar a ser tu mejor versión</p>
            <div data-dp-form="o%2fqXy9gdWyFbZ9GmjwG8mQ%3d%3d"></div>
        </div>
        <p class="Section_counter_text">Prepárate para recibir todas las herramientas de una <strong>FEARLESS MIND</strong> en:</p>
        </div>
        <div class="Counter_content">
            <section class="Regresive_counter">
                <p>
                    <span id="days"></span> | <span id="hours"></span> | <span id="minutes"></span> | <span id="seconds"></span>
                </p>
            </section> 
            <section class="Regresive_counter_text">
                <p>
                    <span>días</span><span>horas</span><span>minutos</span><span>segundos</span>
                </p>
            </section>
        </div>
    </div>

    <div class="Section_history">
        <div class="Section_video_content">
            <video controls>
                <source src="<?php bloginfo('template_directory'); ?>/assets/video/invitacion_TR.mp4" type="video/mp4">
            </video>
        </div>
        <div class="Section_history_content">
            <div class="History_header">
                <div class="History_title">
                    <h1>TU TAMBIÉN SERÁS PARTE</h2>
                    <h2>DE ESTE GRAN MOVIMIENTO </h3>
                </div>
                <div class="History_header_body">
                    <div class="History_image">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/exma_history.png" />
                    </div>
                    <p class="History_text">
                        Hará que cientos de mentes utilicen el miedo como el motor de sus sueños y Tony Robbins te enseñará como.<br><br>
                        
                        <b>¡TE ESPERAMOS EN SEPTIEMBRE CON MÁS DE 20 MENTES SIN MIEDOS!</b>
                    </p>
                </div>
                <div class="History_button">
                    <span class="Button_TR"><a data-toggle="modal" data-target="#dollarModal"></a></span>
                </div>
            </div>
        </div>
    </div>
    
    <div class="Section_agenda">
        <div class="Agenda_title">
            <h1>AGENDA</h1>
            <p>Prográmate para no perderte nada del evento de marketing más grande de mundo, y lograr ser una Fearless Mind, junto a grandes maestros que te ayudarán a empoderar tu mente y hacer de tus miedos metas.</p>
            <small></small>
        </div>
        <div class="Agenda_content">
            <div class="Tabs_days">
                <button class="tabButton active" onclick="openDay(event, 'Dia_1')">
                    <h4>DÍA 01</h4>
                    <p>Mié, Septiembre 21</p>
                </button>
                <button class="tabButton" onclick="openDay(event, 'Dia_2')">
                    <h4>DÍA 02</h4>
                    <p>Jue, Septiembre 22</p>
                </button>
            </div>
            <div id="Dia_1" class="Day_content tabContent">
                <div class="Day_activity">
                    <p>8:00 AM - 8:30 AM</p>
                    <div>
                        <h5>Registro</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>8:30 AM - 9:00 AM</p>
                    <div>
                        <h5>HAJJ</h5>
                        <small>Invitado musical</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>9:00 AM - 9:10 AM</p>
                    <div>
                        <h5>Bienvenida</h5>
                        <small>Fernando Anzures | Ricardo Leyva</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>9:10 AM - 9:30 AM</p>
                    <div>
                        <h5>Conferencia Jorge Serratos</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>9:30 AM - 9:50 AM</p>
                    <div>
                        <h5>Conferencia Moris Dieck</h5>
                        <small>Influencer y podcaster de finanzas</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>9:50 AM - 10:10 AM</p>
                    <div>
                        <h5>Conferencia Alfonso Y Christian</h5>
                        <small>Empresarios, mentores en cierre de ventas, negociación, consultores estratégicos de negocios b2c y b2b y conferencistas</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>10:10 AM - 10:30 AM</p>
                    <div>
                        <h5>Conferencia Sebastián Lora</h5>
                        <small>Especialista en habilidades de comunicación, 
                            Formador, autor, conferencista y youtuber</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>10:30 AM - 10:50 AM</p>
                    <div>
                        <h5>Conferencia Roberto Ramirez</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>10:50 AM - 11:10 AM</p>
                    <div>
                        <h5>BREAK</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>11:10 AM - 11:30 AM</p>
                    <div>
                        <h5>Conferencia Rodrigo Saa</h5>
                        <small>Ingeniero, profesor, conferencista consultor en innovacion, director ejecutivo humind</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>11:30 AM - 12:00 PM</p>
                    <div>
                        <h5>Conferencia Paola Aldaz</h5>
                        <small>Ceo president & CIO DDB Colombia</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>12:00 PM - 12:10 PM</p>
                    <div>
                        <h5>Conferencia Millan Ludeña</h5>
                        <small>Conferencista Motivacional</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>12:10 PM - 12:50 PM</p>
                    <div>
                        <h5>Panel BIOHACKING:</h5>
                        <small>Perla Machaen, Claudia Lizaldi, Nataly Marcus, German Castelo</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>12:50 PM - 1:10 PM</p>
                    <div>
                        <h5>BREAK</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>1:10 PM - 1:30 PM</p>
                    <div>
                        
                    </div>
                </div>
                <div class="Day_activity">
                    <p>1:30 PM - 1:50 PM</p>
                    <div>
                        <h5>Conferencia Rodolfo Echeverría</h5>
                        <small>Lider, marketer, storyteller, conferencista y ex - global head of creative (vp global de creatividad) de the coca cola company</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>1:50 PM - 2:10 PM</p>
                    <div>
                        <h5>Conferencia Regina Carrot</h5>
                        <small>Estrella Multiplataforma</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>2:10 PM - 2:40 PM</p>
                    <div>
                        <h5>PANEL "EMPODERAMIENTO Y NETWORKING":</h5>
                        <small>Jorge Rodríguez, Carlos Maldonado, Iván Vélez y Humberto Herrera</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>2:40 PM - 4:10 PM</p>
                    <div>
                        <h5>ALMUERZO</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>4:10 PM - 4:30 PM</p>
                    <div>
                        <h5>Conferencia Efren Martinez</h5>
                        <small>Doctor en Psicologia/Coach Existencial</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>4:30 PM - 4:50 PM</p>
                    <div>
                        <h5>Conferencia Erika De La Vega</h5>
                        <small>Presentadora, locutora, comediante, productora y actriz</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>4:50 PM - 5:10 PM</p>
                    <div>
                        <h5>Conferencia Ricardo Perret</h5>
                        <small>Fundador de La Montaña, Conferencista</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>5:10 PM - 5:30 PM</p>
                    <div>
                        <h5>Conferencia Juan Carlos Arroyo</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>5:30 PM - 5:50 PM</p>
                    <div>
                        <h5>Cierre</h5>
                        <small>Fernando Anzures | Ricardo Leyva</small>
                    </div>
                </div>
            </div>

            <div id="Dia_2" class="Day_content tabContent">
                <div class="Day_activity">
                    <p>8:00 AM - 9:00 AM</p>
                    <div>
                        <h5>Registro</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>9:00 AM - 9:05 AM</p>
                    <div>
                        <h5>Bienvenida</h5>
                        <small>Fernando Anzures | Ricardo Leyva</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>9:05 AM - 9:25 AM</p>
                    <div>
                        <h5>Conferencia Alex Dey</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>9:25 AM - 10:10 AM</p>
                    <div>
                        <h5>Conferencia Marco Antonio Regil</h5>
                        <small>Conferencista internacional, conductor de televisión</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>10:10 AM - 10:30 AM</p>
                    <div>
                        <h5>Conferencia Oso Trava</h5>
                        <small>Emprendedor, Podcaster, Conferencista</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>10:30 AM - 11:00 AM</p>
                    <div>
                        <h5>Conferencia Ismael Cala</h5>
                        <small>Estratega de vida y negocios, autor de best-sellers, comunicador social y conferencista internacional</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>11:00 AM - 11:15 AM</p>
                    <div>
                        <h5>BREAK</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>11:15 AM - 11:45 AM</p>
                    <div>
                        <h5>Conferencia Margarita Pasos</h5>
                        <small>Líder de opinión, Escritora, Empresaria</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>11:45 AM - 12:25 PM</p>
                    <div>
                        <h5>Panel Sharks</h5>
                        <small>Host: Daniel Molina</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>12:25 PM - 12:45 PM</p>
                    <div>
                        <h5>Conferencia Fernando Anzures</h5>
                        <small>Fundador Y CEO De Exma Global</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>12:45 PM - 1:40 PM</p>
                    <div>
                        <h5>ALMUERZO</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>1:40 PM - 2:00 PM</p>
                    <div>
                        <h5>Conferencia Ricardo Salinas</h5>
                        <small></small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>2:00 PM - 5:10 PM</p>
                    <div>
                        <h5 class="Activity_TR">Conferencia Tony Robbins</h5>
                        <small>Empresario, autor de best sellers, filántropo y el estratega de vida y negocios numero 1 de estados unidos</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>5:10 PM - 5:20 PM</p>
                    <div>
                        <h5>Cierre</h5>
                        <small>Fernando Anzures | Ricardo Leyva</small>
                    </div>
                </div>
                <div class="Day_activity">
                    <p>5:20 PM - 6:20 PM</p>
                    <div>
                        <h5>Meet & Greet</h5>
                        <small class="Activity_TR">Tony Robbins</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Section_masters">
        <h1>MAESTROS</h1>
        <h5>GRANDES MAESTROS PARA <b>MENTES IMPARABLES</b></h5>
        <div class="Masters_ppal">
            <a class="Masters_TR" href="<?php echo home_url('/speaker/tony-robbins/'); ?>">
                <h1>TONY <br>ROBBINS</h1>
                <p>Autor número #1 en ventas del NY Times.</p>
            </a>
        </div>
        <div class="Masters_home">
            <div class="Masters_home_slider">
                <?php
                    $speaker = new WP_Query( array( 'post_type' => 'speaker', 'orderby' => 'rand',
                    'order'   => 'ASC', 'posts_per_page' => -1));
                    if ( $speaker->have_posts() ) :
                    while ( $speaker->have_posts() ) : $speaker->the_post();
                    $pillar = get_the_category($id);
                    if ($speaker->current_post % 2 == 0): ?>
                    <a class="Speaker_card_home <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>" href="<?php the_permalink(); ?>">
                        <?php $imagen = get_field("image_home");
                            if (isset($imagen['url']) == '') {?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/speaker_home.png" />
                            <?php } 
                            else { ?>
                            <img src="<?php echo esc_url($imagen['url']); ?>" />
                        <?php } ?>
                        <section>
                            <h2 class="Speaker_card_home_title"><?php the_title(); ?></h2>
                            <p class="Speaker_card_home_position"><?php echo substr(get_field("cargo"), 0, 20); ?>...</p>
                        </section>
                    </a>
                    <?php else: ?>
                    <a class="Speaker_card_home dark item <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>" href="<?php the_permalink(); ?>">
                        <?php $imagen = get_field("image_home");
                            if (isset($imagen['url']) == '') {?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/speaker_home.png" />
                            <?php } 
                            else { ?>
                            <img src="<?php echo esc_url($imagen['url']); ?>" />
                        <?php } ?>
                        <section>
                            <h2 class="Speaker_card_home_title"><?php the_title(); ?></h2>
                            <p class="Speaker_card_home_position"><?php echo substr(get_field("cargo"), 0, 20); ?>...</p>
                        </section>
                    </a>
                    <?php endif ?>
                <?php 
                    endwhile; endif; 
                ?>
            </div>
        </div>
    </div>
    
    <div class="Event_list">
        <div class="Image_list">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/img_maestros.png" alt="">
        </div>
        <div class="List_content">
            <section>
            <h1>ESTE EVENTO <br><span>ES PARA TI</span></h1>
                <ul>
                    <li><b>Identifica y enfrenta tus miedos,</b><br>para poder utilizarlos como gasolina<br> de los sueños.</li>
                    <li><b>Domina tus pensamientos,</b> para<br> demostrarle al mundo que los límites<br> no existen cuando crees en tu poder. ​</li>
                    <li><b>Aprovecha tu tiempo</b> utilizando<br> el sistema de tony robbins para hacer<br> más eficiente tu tiempo.</li>
                    <li><b>Aprovecha toda la energía</b> de tu<br> cuerpo para poder ser y hacer más.</li>
                    <li><b>Supera el estancamiento y avanza</b><br> a grandes pasos, utilizando<br> herramientas psicológicas probadas.</li>
                    <li><b>Llega a la meta,</b> convierte tus objetivos<br> en la nueva realidad de tu vida.</li>
                </ul>
            </section>
        </div>
        <div class="List_figures">
            <div class="Figure_value">
                <p>+ 14MIL</p>
                <small>ASISTENTES</small>
            </div>
            <div class="Figure_value">
                <p>2 DÍAS</p>
                <small>LLENOS DE<br><b>INSPIRACIÓN</b></small>
            </div>
            <div class="Figure_value">
                <p>+ 20</p>
                <small><b>SPEAKERS</b><br>DE TALLA MUNDIAL</small>
            </div>
        </div>
        <div class="Event_button">
            <span class="Button_event"><a data-toggle="modal" data-target="#dollarModal"></a></span>
        </div>
    </div>

    <div class="Section_history_two">
        <div class="Section_history_content_two">
            <div class="History_header">
                <div class="History_title_two">
                    <h1>HISTORIA</h2>
                    <h2>NUESTRA HUELLA:</h3>
                </div>
                <p class="History_text_two">
                    <b>EXMA</b> es la plataforma más grande de contenido y capacitación de alto nivel en latinoamérica, con más de 15 eventos anuales, speakers de mayor impacto mundial, presencia en 9 países y un record guinness.
                </p>
                <p class="History_text_two">
                    Aquí, el poder del marketing, la innovación y experiencias, <b>transforman la visión de los más grandes líderes corporativos,</b> y tú puedes ser parte de esta comunidad.
                </p>
            </div>
            <div class="History_body">
                <h3 class="Figures_title">HABLEMOS DE NÚMEROS</h3>
                <div class="Figures_section">
                    <div class="Figures_content">
                        <div class="Figures_more_number">
                            <p class="Figures_text_large">+</p>
                            <p class="Figures_text_medium">09</br>PAÍSES</p>
                        </div>
                        <p class="Figures_text_small">USA, Colombia, México, Panamá, Bolivia, Ecuador,
                            República Dominicana, Venezuela y Perú</p>
                    </div>
                    <div class="Figures_content">
                        <div class="Figures_more_number">
                            <p class="Figures_text_large">+</p>
                            <p class="Figures_text_medium">315</br>MIL</p>
                        </div>
                        <p class="Figures_text_small">Mentes superando sus miedos</p>
                    </div>
                    <div class="Figures_content">
                        <div class="Figures_more_number">
                            <p class="Figures_text_large">+</p>
                            <p class="Figures_text_medium">2MIL</br>300</p>
                        </div>
                        <p class="Figures_text_small">Estudiantes aprendiendo
                            a superar sus límites</p>
                    </div>
                    <div class="Figures_content">
                        <div class="Figures_more_number">
                            <p class="Figures_text_large">+</p>
                            <p class="Figures_text_medium">2MIL</br>800</p>
                        </div>
                        <p class="Figures_text_small">Participantes en
                            eventos live y online.</p>
                    </div>
                </div>
                <div class="History_button">
                    <span class="Button_history"><a data-toggle="modal" data-target="#dollarModal"></a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="Section_HR">
        <h1>EN EXMA FEARLESS MINDS TE ESPERA<br>
            EL INICIO DE UNA GRAN HISTORIA​</h1>
    </div>

    <div class="Section_history">
        <div class="Section_video_content_two">
            <video controls poster="<?php bloginfo('template_directory'); ?>/assets/images/poster_amarillo.png">
                <source src="<?php bloginfo('template_directory'); ?>/assets/video/video_exma_2.mp4" type="video/mp4">
            </video>
        </div>
        <div class="Section_history_content">
            <div class="History_header">
                <div class="History_header_body_column">
                    <p class="History_text_ref">
                        Tenemos para ti más de <b>20 speakers</b> que te enseñaran a ser una <b>Fearless Mind,</b> uno de ellos <br>
                        es <b>el gran Tony Robbins,</b> el líder de las mentes sin miedo, quien ha sido coach de grandes <br>
                        personajes como Barack Obama y Michael Jordan.​
                    </p>
                    <h2>¿ESTÁS PREPARADO PARA CAMBIAR TU VIDA?​</h2>
                </div>
                <div class="Event_button_two">
                    <span class="Button_event_two"><a data-toggle="modal" data-target="#dollarModal"></a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="Section_news">
        <div class="Media_title">
            <h2>QUE DICEN</h2>
            <h1>LOS MEDIOS</h1>
        </div>
        <div class="Ppal_new">
            <div class="New_video">
                <video controls poster="<?php bloginfo('template_directory'); ?>/assets/images/poster_naranja.png">
                    <source src="<?php bloginfo('template_directory'); ?>/assets/video/video_exma_3.mp4" type="video/mp4">
                </video>
            </div>
            <div class="New_content">
                <h3>Tony Robbins será el headliner de EXMA 2022, el mayor evento sobre marketing</h3>
                <p>Hablará sobre la resiliencia y la importancia de combatir los miedos para convertirlos en acciones concretas; se realizará del 21 al 22 de septiembre en la Arena Ciudad de México.</p>
            </div>
        </div>
        <!-- <div class="Secondary_news">
            <div class="New_secondary_content">
                <h3>NOTICIA 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="New_secondary_content">
                <h3>NOTICIA 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="New_secondary_content">
                <h3>NOTICIA 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud</p>
            </div>
        </div> -->
        <div class="Event_button_three">
            <span class="Button_event_three"><a data-toggle="modal" data-target="#dollarModal"></a></span>
        </div>
    </div>
    <!-- <div class="Section_membreship">
        <div class="Member_title">
            <h2>ADQUIERE YA TU</h2>
            <h1>MEMBRESÍA</h1>
        </div>
        <div class="Membership_content">
            <?php
                    $membresia = new WP_Query( array( 'post_type' => 'membresia', 'orderby' => 'publish_date',
                    'order'   => 'DESC', 'posts_per_page' => -1));
                    if ( $membresia->have_posts() ) :
                    while ( $membresia->have_posts() ) : $membresia->the_post();
                ?>
                    <div class="Member">
                        <div class="Member_list">
                            <?php the_field("lista"); ?>
                        </div>
                        <div class="Home_member Tickets_info <?php echo $post->post_name; ?>">
                            <p>USD $<?php the_field("precio"); ?></p>
                        </div>
                        <div class="Tickets_button">
                            <?php $url_ticket = get_field("url_ticket"); ?>
                            <span class="Tickets_button_buy <?php echo $post->post_name; ?> <?php echo $url_ticket == ''? 'Sold_out' : 'Reserve' ?>"><a data-toggle="modal" data-target="#dollarModal_<?php echo $post->post_name; ?>"></a></span>
                        </div>
                    </div>
                <?php 
                    endwhile; endif; 
                ?>
        </div>
    </div> -->
    <div class="Section_sponsors">
        <div class="Sponsors_1">
            <div>
                <h3>POWERED BY:</h3>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/skyhaus.png" alt="">
                </div>
            </div>
            <div>
                <h3>PRESENTED BY:</h3>
                <div>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/master-card.png" alt="">
                </div>
            </div>
            <div>
                <h3>SPONSORED BY:</h3>
                <div class="Sponsors_by">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/copa-airlines.png" alt="">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/libertex.png" alt="">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/Logo-baz.png" alt="">
                </div>
            </div>
        </div>
        <hr class="one">
        <div class="Sponsors_2">
            <h3>PARTNERS:</h3>
            <div class="Media_partners">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/cnn.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/publimetro.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/multimedios.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/el-heraldo.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/radio-centro.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/mundo-ejecutivo.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/el-universal.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/zav.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/doppler.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/vibe.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/mexico_travel.png" alt="">
                <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/lideres.png" alt=""> -->
                <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/Logo-mmp.png" alt=""> -->
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Logo-tvazteca.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/Logo-university.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/miller.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/linda.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/alia.png" alt="">
            </div>
        </div>
        <hr class="two">
        <div class="Sponsors_3">
            <h3>PRODUCIDO POR:</h3>
            <div>
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/exma.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/latir.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/molina.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/billions.png" alt="">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/cyan.png" alt="">
            </div>
        </div>
    </div>
    <!-- <div class="Section_speakers_home">
        <div class="Ppal_speaker_card">
            <a class="Ppal_speaker" href="<?php echo home_url('/speaker/tony-robbins/'); ?>">
                <h1>TONY ROBBINS</h1>
                <p>Autor número #1 en ventas del NY Times.</p>
            </a>
        </div>
        <div class="Speakers_home">
            <?php
                $speaker = new WP_Query( array( 'post_type' => 'speaker', 'orderby' => 'rand',
                'order'   => 'ASC', 'posts_per_page' => 6));
                if ( $speaker->have_posts() ) :
                while ( $speaker->have_posts() ) : $speaker->the_post();
                $pillar = get_the_category($id);
                if ($speaker->current_post % 2 == 0): ?>
                <a class="Speaker_card_home <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>" href="<?php the_permalink(); ?>">
                    <?php $imagen = get_field("image_home");
                        if (isset($imagen['url']) == '') {?>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/speaker_home.png" />
                        <?php } 
                        else { ?>
                        <img src="<?php echo esc_url($imagen['url']); ?>" />
                    <?php } ?>
                    <section>
                        <h2 class="Speaker_card_home_title"><?php the_title(); ?></h2>
                        <p class="Speaker_card_home_position"><?php echo substr(get_field("cargo"), 0, 20); ?>...</p>
                    </section>
                </a>
                <?php else: ?>
                <a class="Speaker_card_home dark <?php echo isset($pillar[0]->slug)? $pillar[0]->slug : '' ?>" href="<?php the_permalink(); ?>">
                    <?php $imagen = get_field("image_home");
                        if (isset($imagen['url']) == '') {?>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/speaker_home.png" />
                        <?php } 
                        else { ?>
                        <img src="<?php echo esc_url($imagen['url']); ?>" />
                    <?php } ?>
                    <section>
                        <h2 class="Speaker_card_home_title"><?php the_title(); ?></h2>
                        <p class="Speaker_card_home_position"><?php echo substr(get_field("cargo"), 0, 20); ?>...</p>
                    </section>
                </a>
                <?php endif ?>
            <?php 
                endwhile; endif; 
            ?>
        </div>
    </div> -->
    <!-- <div class="Section_masters">
        <h1>MAESTROS</h1>
        <img  src="<?php bloginfo('template_directory'); ?>/assets/images/master_robbins.png" alt="Tony Robbins" />
    </div> -->
    <!-- <div class="Section_obama">
        <div class="Obama_header">
            <p>Grandes mentes han hecho parte</br> 
                de nuestros eventos</p>
        </div>
        <div class="Obama_video">
            <iframe width="800" height="394" src="https://www.youtube.com/embed/b_EkIZFALbc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="Obama_info">
            <h1>BARACK</br><span>OBAMA</span></br>(2019)</h1>
            <p>Colombia, un hombre que</br>nos enseñó que el cambio</br>positivo es posible.</p>
        </div>
    </div> -->
</div>

<?php get_footer(); ?>
