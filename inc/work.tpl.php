<main>
    <select id="site-type">
        <option value="">Sélectionnez un type de site</option>
        <option value="vitrine">Site vitrine</option>
        <option value="vitrine_contact">Site vitrine avec formulaire de contact</option>
        <option value="ecommerce">Site e-commerce</option>
        <option value="jeu">Jeu</option>
    </select>
    <section class="portfolio">
        <?php foreach($sitesWeb as $name => $infos) : ?>
            <div class="portfolio__image" >
                <div class="portfolio__text-container">
                    <div class="portfolio__text">
                        <div class="portfolio__badges">
                            <?php foreach($infos['badges'] as $badge) : ?>
                               <div class="portfolio__badge" style="background-color:<?= $badges[$badge]->color?>" ><?= $badges[$badge]->name; ?></div> 
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
</main>