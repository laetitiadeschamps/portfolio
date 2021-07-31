
const app = {
    
    init:function() {
        // Initiating other modules + AOS library 
        display.init();
        contact.init();
        portfolio.init();
        AOS.init();
        //Configuration of scrollspy
        app.scrollSpyConfig();
        //Launching loop over letters for home page
        app.loop();
       
    },
    // Config of scrollspy library to track user scroll and activate appropriate menu item
    scrollSpyConfig:function() {
        scrollSpy('#main-nav', {
          sectionSelector: 'section',
          targetSelector: 'a',
          offset: 100, // in pixels
          hrefAttribute: 'href',
          activeClass: 'active',
      });
      scrollSpy('#hamburger-nav', {
          sectionSelector: 'article',
          targetSelector: 'a',
          offset: 100, // in pixels
          hrefAttribute: 'href',
          activeClass: 'active',
      });
      scrollSpy('#hamburger-nav', {
          sectionSelector: 'section',
          targetSelector: 'a',
          offset: 100, // in pixels
          hrefAttribute: 'href',
          activeClass: 'active',
      });
    },
    
    //Method for looping through letters to display animation on homepage
    loop:function() {
        const target = document.querySelector('#target');

        setTimeout(()=> {
            if(display.wordIndex >= display.words.length) {      
                display.wordIndex = 0;
                display.letterIndex = 0;
                app.loop();   
            }
            else if(display.letterIndex < display.words[display.wordIndex].length) {
            
                display.createLetter();
                display.letterIndex++;
                app.loop();
            }
            else {
                  display.wordIndex++;
                  display.letterIndex=0;
                  setTimeout(()=> {
                      app.loop();
                  }, 2000);
              }
        }, 150)

    },

}

document.addEventListener('DOMContentLoaded', app.init);

