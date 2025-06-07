<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Korra</title>
        <link rel = 'stylesheet' href = 'css/style.css'>
        <link rel = 'icon' href = 'img/favicon.ico' type = 'image/x-icon'/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
        <meta charset = utf-8/>     
    </head>
    <body>
            <?php include('header.php'); ?>
            <section id = 'portfolio'>
                <div id = 'section-title'><h1>PORTFOLIO</h1></div>
                <div id ='container-view'>
                    <button id = 'previous'>
                        ◀
                    </button>
                    <div id = 'container-carousel'>
                        <div id ='carousel'>
							<ul>
                                    <a href = '../citations_kaamelott' target='_blank'>
                                        <div id = 'view' style = "background-image: url('img/project/Kaamelott');">
                                        </div>
                                    </a>
								</li>
                                <li>
                                    <a href = 'https://github.com/flemelle/Memento' target='blank'>
									    <div id = 'view' style = "background-image: url('img/project/Memento.jpeg');"></div>
                                    </a>
								</li>
								<li>
                                    <a href = '../drop/' target='blank'>
									    <div id = 'view' style = "background-image: url('img/project/Drop.png');"></div>
                                    </a>
								</li>
                                <li>
                                    <a href = '../white_lotus/' target='blank'>
									    <div id = 'view' style = "background-image: url('img/project/White_Lotus.png');"></div>
                                    </a>
								</li>
                                <li>
                                    <a href = '../waves/' target='blank'>
									    <div id = 'view' style = "background-image: url('img/project/Waves.png');"></div>
                                    </a>
								</li>
							</ul>
                        </div>
                    </div>
                    <button id = 'next'>
                        ▶
                    </button>
                </div>
            </section>
            <section id = 'parcours'>
                <div id = 'section-title'><h1>PARCOURS</h1></div>
                <div id = 'parcours-container'>
                    <div id = 'parcours-part'>
                    <div>
                            <h2>LANGAGES</h2>
                            <ul>
                                <li><i class="fa-brands fa-html5"></i>HTML</li>
								<li><i class="fa-brands fa-css3-alt"></i>CSS</li>
                                <li><img src = 'img/icons8-sql-60.png' id = 'icon-parcours'>SQL</li>
                                <li><i class="fa-brands fa-js-square"></i>JAVASCRIPT</li>
                                <li><i class="fa-brands fa-java"></i>JAVA</li>
                                <li><img src = 'img/icons8-logo-php.svg' id = 'icon-parcours'>PHP</li>
                                <li><i class="fa-brands fa-python"></i>Python</li>
                                </ul><br/>
                        </div>
                        <div>
                            <h2>LOGICIELS</h2>
                            <ul>
                                <li><img src = 'img/icons8-office-365.svg' id = 'icon-parcours'>Suite Office Microsoft</li>
                                <li><img src = 'img/icons8-visual-studio.svg' id = 'icon-parcours'>Visual Studio Code</li>
                                <li><img src = 'img/icons8-krita.svg' id = 'icon-parcours'>Krita</li>
                                <li><i class="fa-brands fa-git-alt"></i>GIT</li>
                                <li><img src = 'img/icons8-gimp.svg' id = 'icon-parcours'>GIMP</li>
								<li><img src = 'img/icons8-logo-de-mysql.svg' id = 'icon-parcours'>MySQL</li>
                            </ul><br/>
                        </div>
                        <div>
                            <h2>SYSTÈMES D'EXPLOITATION</h2>
                            <ul>
                                <li><i class="fa-brands fa-windows"></i>Microsoft Windows</li>
                                <li><i class="fa-brands fa-linux"></i>Linux</li>
                            </ul><br/>
                        </div>
                    </div>
                    <div id = 'parcours-part'>
                        <div>
                            <h2>LANGUES</h2>
                            <ul>
                                <li><img src = 'img/icons8-great-britain-50.png' id = 'icon-parcours'>Anglais professionnel</li>
                            </ul><br/>
                        </div>
                            <div id = 'second-parcours-part'>    
                                <h2>QUALITÉS</h2>
                                <ul>
                                    <li><img src = 'img/icons8-lotus-64.png' id = 'icon-parcours'>Calme</li>
                                    <li><img src = 'img/icons8-search.svg' id = 'icon-parcours'>Curiosité</li>
                                    <li><img src = 'img/icons8-drawing-64.png' id = 'icon-parcours'>Créativité</li>
                                    <li><img src = 'img/icons8-eye-90.png' id = 'icon-parcours'>Observation</li>
                                    <li><img src = 'img/icons8-drawer-60.png' id = 'icon-parcours'>Organisation</li>
                                </ul><br/>
                                <h2>CENTRES D'INTERÊTS</h2>
                                <ul>
                                    <li><img src = 'img/icons8-volant-de-badminton-50.png' id = 'icon-parcours'>Badminton</li>
                                    <li><img src = 'img/icons8-escalade-24.png' id = 'icon-parcours'>Escalade</li>
                                    <li><img src = 'img/icons8-lire-24.png' id = 'icon-parcours'>Lecture</li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
                <div id = 'parcours-part-formation'>
                    <div id = 'section-title'><h1>DIPLÔMES ET FORMATIONS</h1></div>
                    <div id = 'part-formation'>
                        <ul>
                            <li id = title-formation><h3>BTS SIO SLAM (en cours)</h3></li>
                            <li>Institut National Supérieur des Technologies Avancées<br/></li>
                            <li>Paris, France - De 2022 à 2024</li>
                        </ul>
                    </div>
                    <div id = 'part-formation'>
                        <ul>
                            <li id = title-formation><h3>Licence informatique (2 ans)</h3></li>
                            <li>Université Paris-Est Créteil (UPEC)<br/></li>
                            <li>Créteil, France - Depuis septembre 2020</li>
                        </ul>
                    </div>
                    <div id = 'part-formation'>
                        <ul>
                            <li id = title-formation><h3>Baccalauréat Scientifique option ISN (Informatique et Sciences du Numérique)</h3></li>
                            <li>Lycée Gutenberg<br/></li>
                            <li>Créteil, France - 2018</li>
                        </ul>
                    </div>
                    </div>
                <div>
                    <a id = 'cv' href = 'files/CV Tiphereth Bruce.pdf' title='CV' target='_blank'>
                            <div><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                            </svg></div>
                            <div><p> Télécharger mon CV</p></div>
                            </a>
                </div>
            </section>
            <section id = 'apropos'>
                <h1>À PROPOS</h1>
                <div id = 'part-apropos'>
                <p>
                    Je m'appelle Tiphereth BRUCE.</br>
Je suis actuellement en première année BTS SIO SLAM à l'Institut National des Technologie Avancées. Je recherche un contrat d'alternance pour une durée d'un an débutant en septembre 2023. Mon alternance est sur un rythme de deux jours en écoles pour trois jours en entreprise. 
                </p>
                </div>
            </section>
            <!--
            <section id = 'contact'>
                <div id = 'section-title'><h1>CONTACT</h1></div>
                <div id = 'formular-container'>
                    <form method = 'post' action = 'traitement_contact.php'>
                            <input type="email" name="email" placeholder = 'Adresse e-mail' required="required" />
                            <textarea name = "message" id = "message" placeholder = 'Message' required="required"></textarea>
                        <div id = 'captcha'><div class="g-recaptcha" data-theme="dark" data-sitekey=""></div></div>
                        <div id = 'submit-container'>
                            <input name = 'submit' type="submit" value="Envoyer" />
                        </div>
                    </form>
                </div>
            </section>
            -->
			<div id = 'notification-background'>
				<div id = 'sent_notification'>
					<img src = 'img/icons8-mail-100.png' id = 'notification-icon'>
                    <p>Message envoyé</p>
				</div>
				<div id = 'captcha_notification'>
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
						<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
					</svg>
                    <p>Veuillez compléter le captcha</p>
				</div>
			</div>
             <button onclick="appear()" type="button" id = 'notification-button'>Press</button> 
             <div id = 'overview-background'>
                <div id = 'overview'>
                    <div id = 'overview-title'>
                        <h2>TITLE</h2>
                    </div>
                    <div id = 'overview-main'>
                        <div id = 'overview-picture'>
                            <img src = 'https://via.placeholder.com/550x400'>
                        </div>
                        <div id = 'overview-description'>
                            <p> Vestibulum bibendum nulla lacus, eu aliquam erat fringilla et. Nam in lacus arcu. Etiam varius at lorem et luctus. Donec a cursus lectus. Nam fermentum lobortis nisi ac rhoncus. Nam ut eros dapibus, hendrerit tortor sed, aliquam lacus. Duis sed convallis nisi. Fusce a arcu cursus turpis luctus convallis. </p>
                        </div>
                    </div>
                    <div id = 'overrview-tool'>
                        tool
                    </div>
                </div>
            </div>
            <?php include('footer.php'); ?>
            
            <script src = 'js/script.js' type='text/javascript'></script>  
    </body>
</html>
<?php
    /*if ($_SESSION['sentmail']){
    echo
     '<script type="text/javascript">',
     'sent_appear();',
     '</script>';
        $_SESSION['sentmail'] = false;
    }
    if ($_SESSION['captcha']){
    echo
     '<script type="text/javascript">',
     'captcha_appear();',
     '</script>';
        $_SESSION['captcha'] = false;
    }*/
?>
