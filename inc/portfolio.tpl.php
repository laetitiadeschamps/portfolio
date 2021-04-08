<main>
    <select name="techno" id="techno">
        <option value="">Sélectionnez un type de site</option>
        <option value="vitrine">Site vitrine</option>
        <option value="vitrine_contact">Site vitrine avec formulaire de contact</option>
        <option value="ecommerce">Site e-commerce</option>
        <option value="jeu">Jeu</option>
       
    </select>
    <div class="portfolio">
      
        <?php foreach($sitesWeb as $name => $infos) : ?>
          
            <div class="image" >
                <div class="text-container">
                    <div class="text">
                        <div class="badges">
                            <?php foreach($infos['badges'] as $badge) : ?>
                               
                            <div class="badge" style="background-color:<?= $badgeColors[$badge]?>" ><?= $badge; ?></div>
                            <?php endforeach; ?>
                      
                         </div>
                         <h3><?php echo $name; ?></h3>
                            <p><?= $infos['description'] ?></p>
                            <a class="link" href="<?=$infos['url'] ?>"> Visiter le site <i class="fas fa-external-link-square-alt"></i></a>
                            <p style="display:none" class="type"><?= $infos['type'] ?></p>
                            <p style="display:none" class="url"><?= $infos['image_name'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
       
   
           
    </div>
</main>
