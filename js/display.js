const display = {
    letterIndex:0,
    wordIndex:0,
    words:[],
    init:function() {
        display.letterIndex=0;
        display.wordIndex=0;
        display.words=['Développer', 'Inventer', "S'améliorer", 'Apprendre'];
        display.displayProgress();
       
    }, 
    createLetter:function() {
        
        const target = document.querySelector('#target');
        let span = document.createElement('span');
        target.appendChild(span);
        span.textContent=display.words[display.wordIndex][display.letterIndex] ;
        
        setTimeout(()=> {
            span.remove();
        }, 2000)
    },
    displayBackground:function(image) {
        console.log('body ; ' + window.innerWidth);

        if(window.innerWidth  > 1100) {
            image.style.background='url(img/'+ image.querySelector('.portfolio__url').textContent + ')';
            image.style.backgroundPosition="center";
            image.style.backgroundSize="cover";
        } else {
            let img = document.createElement('img');
            img.classList.add('img-mobile')
            img.src="img/"+ image.querySelector('.portfolio__url').textContent;
            if(window.innerWidth > 540) {
             
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
    displayActiveTab:function() {
        let tabs = document.querySelectorAll('#main-nav li a');
        tabs.forEach(tab=>  {
            tab.classList.remove('active');
          if(tab.href == document.location.href) {
              tab.parentNode.classList.add('active');
          }
          
        })
    },
    displayProgress:function() {
        const bars = document.querySelectorAll('.skills-section__progress-bar');
      

        bars.forEach(bar=> {
            let progress = bar.querySelector('.advancement').textContent;
            let color = bar.querySelector('.color').textContent;
            console.log(progress);
            bar.querySelector('.full').style.width = progress + '%';
            bar.querySelector('.full').style.background =  `linear-gradient(45deg, ${color} 12.5%, #fff 12.5%, #fff 37.5%, ${color} 37.5%, ${color} 62.5%, #fff 62.5%, #fff 87.5%, ${color} 87.5%)`;
        })
    },
    sticky:function() {
     
        const nav = document.querySelector('#header');
        let memoPositionNav = nav.offsetTop;
        var posCurseur = this.pageYOffset;
        console.log(memoPositionNav-posCurseur)
        if(memoPositionNav-posCurseur<1){
            nav.style.position = "fixed";
            nav.style.top = 0;
            nav.style.height='fit-content';
            nav.style.zIndex = 999;
            nav.style.width='100%';
           
         
           }
         if(posCurseur<101){
            nav.style.position = "relative";
            nav.classList.remove('background');
          
    
         }
       
        
    }
}