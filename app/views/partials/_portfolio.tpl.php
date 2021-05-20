<section class="portfolio__section" id="portfolio">
    <h2>Mes projets</h2>
    <select class="portfolio__section-select" id="site-type">
        <option value="">Sélectionnez un type de site</option>
        <option value="vitrine">Site vitrine</option>
        <option value="vitrine_contact">Site vitrine avec formulaire de contact</option>
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