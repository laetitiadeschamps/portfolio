<main class="cv" id="top">
    <div id="back-to-top">
        <a href="#top"><i class="fas fa-arrow-circle-up"></i></a>
    </div>
    <nav> 
        <ul>
            <li><a href="#formation">Formation</a></li>
            <li><a href="#experiences">Expériences</a></li>
            <li><a href="#competences">Compétences</a></li>
            <li><a href="#divers">Autre</a></li>
        </ul>
       <i class="fas fa-chevron-down scroll" data-target="formation"></i>
    </nav>
        <section id="formation" class="cv-section">
           
            <h2>
                <i class="fas fa-graduation-cap"></i>Formation
            </h2>
   
            <article class="cv-section__container">
            <div class="cv-section__infos--inner">
                <div class="cv-section__infos left">
                 
                    <p>Développement Web et Web Mobile, <span class="school">O'clock</span></p>
            
                    <p class="dates">02/2021 - 08/2021</p>
                    <p>HTML5/CSS3, PHP, Javascript, POO, Git</p>
                    <div class="cv-section__timeline"></div>
                    </div>
                   
                   
                    <div class="clear"></div>
                <div class="cv-section__infos right">
                
                    <p>Webmaster, <span class="school">ESECAD</span></p>
                    <p class="dates">2018 - 2020</p>
                    <p>Formation en ligne en parallèle de mon travail. HTML5/CSS3, PHP, MySQL, Photoshop, gestion de projet, SEO</p>
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
                <div class="cv-section__infos left">
                    <p>MBA Management du Tourisme, spécialité hôtellerie,  <span class="school">Sup de Co, La Rochelle</span></p>
                    <p class="dates">2014 - 2016</p>
                    <p>Hôtellerie, Management culturel, droit du tourisme, Revenue Management, SEO, gestion de projet, comptabilité </p>
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
                <div class="cv-section__infos right">
                    <p>Licence Langues Etrangères Appliquées - Anglais allemand <span class="school">Université Michel Montaigne, Bordeaux</span></p>
                    <p class="dates">2011 - 2014</p>
                    <p>Anglais, allemand, économie, droit, culture anglaise, culture allemande. Un semestre en Allemagne dans le cadre d'un programme ERASMUS.</p>
                    <div class="cv-section__timeline"></div>
                </div>
                </div>
                <div class="clear"></div>
            </article>
            <i class="scroll fas fa-chevron-down" data-target ="experiences"></i>
        </section>
        <section id="experiences" class="cv-section">
            <h2>
                <i class="fas fa-user-tie"></i>Expériences professionnelles
            </h2>
            <div class="cv-section__container">
                <div class="cv-section__infos left">
                    <p>Responsables des opérations, <span class="school">Hostmaker, Cannes</span></p>
                    <p class="dates">Novembre 2019 - Juillet 2020</p>
                    <p>Gestion des plannings (arrivées, ménages, maintenance) d'un parc de 80 appartements. Gestion d'une équipe de 10 personnes.</p>
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
                <div class="cv-section__infos right">
                    <p>Assistante administration des ventes, <span class="school">Residhotel, Mougins</span></p>
                    <p class="dates">Avril 2017 - Novembre 2019</p>
                    <p>Paramétrage et gestion du progiciel Résalys, mise en place de procédures, aide technique aux utilisateurs, support et formation des nouveaux arrivants (5 par an environ), gestion du Channel Manager. Vente : rédaction de réponses aux avis clients en ligne.</p>
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
                <div class="cv-section__infos left">
                    <p>Assistante administration des ventes, <span class="school">Residhotel, Mougins</span></p>
                    <p class="dates">Juillet 2016 - Avril 2017</p>
                    <p>Gestion des stocks et Revenue Management pour un parc de 3 résidences de tourisme dans une optique d'optimisation du chiffre d'affaire. Gestion des relations avec les partenaires de vente. </p>
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
                <div class="cv-section__infos right">
                    <p>Réceptionniste, <span class="school">Radisson Blu ****, Dublin</span></p>
                    <p class="dates">Avril - Juin 2016</p>
                    <p>Check-ins, check-outs, facturation</p>
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
            </div>
           <i class="scroll fas fa-chevron-down" data-target="competences"><a href="#competences"></a></i>
        </section>
        <section id="competences" class="cv-section">
            <h2>
                <i class="fas fa-code"></i>Compétences
            </h2>
            <div class="cv-section__container skills">
                <div class="skills-section">
                    <h3 class="skills-title">Développement Web</h3>
                    <div class="cv-section__infos skills-section__infos">
                    <ul>
                        <?php foreach($badges as $badge) : ?>
                            <li><div class="skills-section__name"><?= $badge->name ?></div>
                                <div class="skills-section__progress-bar">
                                    <div class="full"></div>
                                    <span class="hidden advancement"><?= $badge->advancement ?></span>
                                    <span class="hidden color"><?= $badge->color ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    </div>
                </div>
                <div class="skills-section">
                    <h3 class="skills-title">Langues étrangères</h3>
                    <div class="cv-section__infos skills-section__infos">
                    <ul>
                        <?php foreach($langues as $langue) : ?>
                            <li>
                                <div class="skills-section__name"><?= $langue->name ?></div>
                                <div class="skills-section__progress-bar">
                                    <div class="full"></div>
                                    <span class="hidden advancement"><?= $langue->advancement ?></span>
                                    <span class="hidden color"><?= $langue->color ?></span>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                </div>
            </div>
           <i class="fas fa-chevron-down scroll" data-target='divers'></i>
        </section>
        <section id="divers" class="cv-section">
            <h2>
                <i class="fas fa-globe"></i>Divers
            </h2>
            <div class="cv-section__container">
                <div class="cv-section__infos left ">
                    <i class="fas fa-hands-helping"></i> 2015 : Bénévolat dans une association au Laos pendant deux mois : dispense de cours d'anglais, travail agricole, mise en place d'un restaurant organique
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
                <div class="cv-section__infos right">
                    <i class="fas fa-fish"></i> Intérêts : vélo, escalade, plongée, voyages
                    <div class="cv-section__timeline"></div>
                </div>
                <div class="clear"></div>
            </div>
            
        </section>
</main>