const app = {
    
    compteur:0,
    init:function() {
        display.init();
        contact.init();
        app.compteur=0;
       
       display.displayActiveTab();
       let images = document.querySelectorAll('.portfolio__image');
       images.forEach(image=>{
           display.displayBackground(image);
           image.addEventListener('click', app.handleImageClick);
       });

       app.loop();
       
      
       document.querySelector('.portfolio').firstElementChild.classList.add('active-img');
       document.querySelector('#site-type').addEventListener('change', app.handleTypeChange);
       window.addEventListener('resize', app.handleWindowResize);


    },
    handleWindowResize:function() {
        let images = document.querySelectorAll('.portfolio__image');
        images.forEach(image=>{
           
            if(image.querySelector('img'))image.querySelector('img').remove();
           display.displayBackground(image);
           
        });  
    },
    
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
    
    handleImageClick:function(event) {
        console.log(event.currentTarget);
        let images = document.querySelectorAll('.portfolio__image');
        images.forEach(image=> {
            image.classList.remove('active-img');
        })
        event.currentTarget.classList.add('active-img')


    },
    handleTypeChange:function(event) {
       
       let type = event.target.value  ;
       let count = 0;
       const images = document.querySelectorAll('.portfolio__image');
      
        images.forEach(image=> {
            image.classList.remove('active-img');
            image.style.display = 'block';
            if(type) {
             
            if(image.querySelector('.portfolio__type').textContent != type) {
                
                image.style.display = 'none';
    
            } else {
              
               if(count == 0) {
                    image.classList.add('active-img')
               }
               count++;
            }
           
        } else {
            if(count == 0) {
                image.classList.add('active-img')
           }
           count++;
        }
            
        })


    }
}

document.addEventListener('DOMContentLoaded', app.init);

