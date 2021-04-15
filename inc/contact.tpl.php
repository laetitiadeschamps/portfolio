<main>
    <section id="contact">
        <article class="contact-infos">
            <h2>Vous pouvez me contacter : </h2>
            <p>Laetitia Deschamps</p>
            <p>147 rue des jardins, 83600 FREJUS</p>
            <p><a href="tel:+33617245207" >06.17.24.52.07</a></p>
            <p><a href="mailto:deschamps.laetitia33@gmail.com">deschamps.laetitia33@gmail.com</a></p>
            <p><a href="https://www.linkedin.com/in/laetitia-deschamps-3298238b/"><i class="fab fa-linkedin"></i></a></p>
        </article>
        <form id="contact-form" onsubmit="return contact.checkErrors()" action="index.php?page=contact" method="post">
            <fieldset>
                <div class="form-control"> 
                    <input type="text" name="name" id="name">
                    <label for="name">Nom </label>
                </div>  
                <div class="error"></div> 
            </fieldset>
       
            <fieldset>
                <div class="form-control"> 
                    <input type="email" name="email" id="email">
                    <label for="email">Mail </label>
                </div>   
                <div class="error"></div>
            </fieldset>
        
            <fieldset>
                <div class="form-control message"> 
                    <textarea name="message" id="message"></textarea>
                    <label for="message">Message</label>
                </div>  
                <div class="error"></div>
            </fieldset>
        
            <fieldset class="submit">
                <div class="form-control">
                    <input type="submit" value="Envoyer votre message" id="submitBtn">
                </div>
            </fieldset>
        <div class="confirmation-message"><?php if(isset($message)) echo $message ?></div>
        </form>
    </section>
</main>