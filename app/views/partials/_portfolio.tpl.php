<div class="content-container"><section class="portfolio__section" id="portfolio" data-aos="fade-up">
    <h2>Mes projets</h2>
    <p class="portfolio-description">Ces projets, excepté le site vitrine, sont des projets développés en parallèle de ma formation. Ils ne sont pas parfaits et utilisables dans un contexte professionnel, mais m'ont permis de consolider les connaissances vues en cours et d'explorer les limites des outils sans framework. Le site de messagerie est protégé par un mot de passe, n'hésitez pas à me contacter pour que je vous le transmette, ou à visiter mon espace Github</p>
    <select class="portfolio__section-select" id="site-type">
        <option value="">Sélectionnez un type de site</option>
        <option value="vitrine_contact">Site vitrine avec formulaire de contact</option>
        <option value="social">Réseau social</option>
        <option value="map">Carte</option>
        <option value="ecommerce">Site e-commerce</option>
        <option value="jeu">Jeu</option>
    </select>
    <section class="portfolio">
   
        <?php foreach($viewVars['sites'] as $name => $infos) : ?>
            <div class="portfolio__image" >
            <div class="portfolio__title"><?= $name ?></div>
                <div class="portfolio__text-container">
                    <div class="portfolio__text">
                        
                        <div class="portfolio__badges">
                            <?php foreach($infos['badges'] as $badge) : ?>
                               <div class="portfolio__badge" style="background-color:<?= $viewVars['badges'][$badge]->color?>" ><?= $viewVars['badges'][$badge]->name; ?></div> 
                            <?php endforeach; ?>    
                        </div>
                        <h3><?php echo $name; ?></h3>
                        <p><?= $infos['description'] ?></p>
                        <a class="portfolio__link" href="<?=$infos['url'] ?>"> Visiter le site <i class="fas fa-external-link-square-alt"></i></a>
                        <p style="display:none" class="portfolio__type"><?= $infos['type'] ?></p>
                        <p style="display:none" class="portfolio__url"><?= $infos['image_name'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
       
   
           
    </section>
</section>