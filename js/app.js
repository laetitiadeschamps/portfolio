const app = {
    letterIndex:0,
    wordIndex:0,
    words:[],
    compteur:0,
    init:function() {
        app.letterIndex=0;
        app.wordIndex=0;
        app.compteur=0;
        app.words=['Développer', 'Inventer', "S'améliorer", 'Apprendre'];
       app.displayActiveTab();
       let images = document.querySelectorAll('.image');
       images.forEach(image=>{
           app.displayBackground(image);
           image.addEventListener('click', app.handleImageClick);
       });

       app.loop();
       
      
       document.querySelector('.portfolio').firstElementChild.classList.add('active-img');
       document.querySelector('#techno').addEventListener('change', app.handleTypeChange);
       window.addEventListener('resize', app.handleWindowResize);


    },
    handleWindowResize:function() {
        let images = document.querySelectorAll('.image');
        images.forEach(image=>{
           
            if(image.querySelector('img'))image.querySelector('img').remove();
            app.displayBackground(image);
           
        });  
    },
    displayBackground:function(image) {
        console.log(document.body.width);
        if(screen.width  > 1100) {
            image.style.background='url(img/'+ image.querySelector('.url').textContent + ')';
            image.style.backgroundPosition="center";
            image.style.backgroundSize="cover";
        } else {
            let img = document.createElement('img');
            img.classList.add('img-mobile')
            img.src="img/"+ image.querySelector('.url').textContent;
            if(screen.width > 540) {
             
                if(app.compteur % 2 == 0) {
                    image.style.background='#4a1818f5';
                    image.prepend(img);
                } else {
                    image.style.background='#232121f5';
                    image.appendChild(img)
                }
              app.compteur++;
            }
            else {
                if(app.compteur % 2 == 0) {
                    image.style.background='#4a1818f5';
                    
                } else {
                    image.style.background='#232121f5';
                }
                image.prepend(img);
              app.compteur++;
            }
            
        }
        
    },
    loop:function() {
        const target = document.querySelector('#target');
        setTimeout(()=> {
            if(app.wordIndex >= app.words.length) {      
                app.wordIndex = 0;
                app.letterIndex = 0;
                app.loop();
                
            }
            else if(app.letterIndex < app.words[app.wordIndex].length) {
            
                app.createLetter();
                app.letterIndex++;
                app.loop();
        }
       else {
            app.wordIndex++;
            app.letterIndex=0;
            setTimeout(()=> {
                app.loop();
            }, 2000);
        }
    }, 150)

    },
    createLetter:function() {
        
        const target = document.querySelector('#target');
        let span = document.createElement('span');
        target.appendChild(span);
        span.textContent=app.words[app.wordIndex][app.letterIndex] ;
        
        setTimeout(()=> {
            span.remove();
        }, 2000)
    },
    displayActiveTab:function() {
        let tabs = document.querySelectorAll('#main-nav li a');
        tabs.forEach(tab=>  {
            tab.classList.remove('active');
          if(tab.href == document.location.href) {
              tab.parentNode.classList.add('active');
          }
          
        })
    },
    
    handleImageClick:function(event) {
        console.log(event.currentTarget);
        let images = document.querySelectorAll('.image');
        images.forEach(image=> {
            image.classList.remove('active-img');
        })
        event.currentTarget.classList.add('active-img')


    },
    handleTypeChange:function(event) {
       
       let type = event.target.value  ;
       let count = 0;
       const images = document.querySelectorAll('.image');
      
        images.forEach(image=> {
            image.classList.remove('active-img');
            image.style.display = 'block';
            if(type) {
             
            if(image.querySelector('.type').textContent != type) {
                
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

