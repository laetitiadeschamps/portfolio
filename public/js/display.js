const display = {
    letterIndex:0,
    wordIndex:0,
    words:[],
    animationDuration:0.5,
    init:function() {
        display.letterIndex=0;
        display.wordIndex=0;
        display.words=['Développer', 'Inventer', "S'améliorer", 'Apprendre'];
        display.displayProgress();
       document.querySelectorAll('.scroll').forEach(scroll=> {
           scroll.addEventListener('click', display.handleScroll)
       })
       document.querySelector('#hamburger').addEventListener('click', display.handleHamburgerClick);
       document.addEventListener('scroll', display.handleHamburgerDisplay);
       document.querySelector('.scene__character').addEventListener('click', display.handleAnimationCLick);

    }, 
    handleScroll:function(e) {
       let ancre = e.currentTarget.dataset.target;
       location.href = "#" + ancre;
    },
   handleHamburgerClick:function() {
    document.querySelector('#hamburger').classList.toggle('open');
   },
   handleAnimationCLick:function() {
    
       display.animationDuration -=0.1;
        
    display.animationDuration > 0 ? display.animationDuration = display.animationDuration.toFixed(1) : display.animationDuration == 0;
    document.querySelector('.scene__character').style.animationDuration = display.animationDuration +'s';
    console.log(display.animationType);
    
   },
   handleHamburgerDisplay:function() {
      
    if(window.scrollY > 300){
        document.getElementById('hamburger').classList.add('visible');
        document.getElementById('back-to-top').classList.add('visible');
    } else {
        document.getElementById('hamburger').classList.remove('visible');
        document.getElementById('back-to-top').classList.remove('visible');
    }
    let links = document.querySelectorAll('nav li a');
    links.forEach(link=> {
        if(link.classList.contains('active')) {
            link.parentNode.classList.add('active');
        } else {
            link.parentNode.classList.remove('active');
        }
    })
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
        //console.log('body ; ' + window.innerWidth);

        //if(window.innerWidth  > 1100) {
            image.style.background='url(../public/img/'+ image.querySelector('.portfolio__url').textContent + ')';
            image.style.backgroundPosition="center";
            image.style.backgroundSize="cover";
        // } else {
        //     let img = document.createElement('img');
        //     img.classList.add('img-mobile')
        //     img.src="img/"+ image.querySelector('.portfolio__url').textContent;
        //     if(window.innerWidth > 540) {
             
        //         if(app.compteur % 2 == 0) {
        //             image.style.background='#4a1818f5';
        //             image.prepend(img);
        //         } else {
        //             image.style.background='#232121f5';
        //             image.appendChild(img)
        //         }
        //       app.compteur++;
        //     }
        //     else {
        //         if(app.compteur % 2 == 0) {
        //             image.style.background='#4a1818f5';
                    
        //         } else {
        //             image.style.background='#232121f5';
        //         }
        //         image.prepend(img);
        //       app.compteur++;
        //     }
            
        //}
        
    },
    displayActiveTab:function() {
        let tabs =document.querySelectorAll('nav li a');
        
        //TODO Ajouter hamburger-nav
        tabs.forEach(tab=>  {
            console.log(tab.href);
            console.log(document.location.href);
            console.log(tab.href == document.location.href);
            tab.parentNode.classList.remove('active');
            
          if(tab.href == document.location.href) {
              tab.parentNode.classList.add('active');
          }
          
        })
    },
    handleTabClick:function(e){
        display.displayActiveTab();
    },
     displayProgress:function() {
        const bars = document.querySelectorAll('.skills-section__progress-bar');
      

        bars.forEach(bar=> {
            let progress = bar.querySelector('.advancement').textContent;
            let color = bar.querySelector('.color').textContent;
            console.log(progress);
            bar.querySelector('.full').style.width = progress + '%';
            // bar.querySelector('.full').style.background =  color;
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