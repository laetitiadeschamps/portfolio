
<?php if(isset($_SESSION['infos'])): ?>
    
        <?php foreach($_SESSION['infos'] as $error): ?>
            <div class="alert alert-success">
                <?= $error ?>
            </div>
        <?php endforeach; ?>
        <!-- On nettoie la session après affichage -->
        <?php unset($_SESSION['infos']) ?>
  
<?php endif; ?>
