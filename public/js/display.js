const display = {
    //Variables for the animation on homepagr=e
    letterIndex:0,
    wordIndex:0,
    words:[],
    animationDuration:0.5,
    init:function() {
        display.letterIndex=0;
        display.wordIndex=0;
       
        display.words=['Développer', 'Inventer', "S'améliorer", 'Apprendre'];
        //display.displayProgress();
        // For each scroll button, we handle target block accordingly
        document.querySelectorAll('.scroll').forEach(scroll=> {
           scroll.addEventListener('click', display.handleScroll)
        })
        // Toggle hamburger display on click or on scroll, as it only appears after scrollong down a bit
        document.querySelector('#hamburger').addEventListener('click', display.handleHamburgerClick);
        document.addEventListener('scroll', display.handleHamburgerDisplay);
        //handles dark mode changes
        display.updateFromOsMode();
        //Fixes bug on mobile browsers
        display.resizeHome();
        window.addEventListener('resize', display.handleWindowResize);
        document.addEventListener('scroll', display.handleHomeSize);
        document.querySelector('.home-scene__character').addEventListener('click', display.handleAnimationClick);

    }, 
    //Method for creating each individual letter for the hompepage animation according to currrent word and letter index
    createLetter:function() {
        const target = document.querySelector('#target');
        let span = document.createElement('span');
        target.appendChild(span);
        span.textContent=display.words[display.wordIndex][display.letterIndex] ;
        setTimeout(()=> {
            span.remove();
        }, 2000)
    },
    handleAnimationClick:function() {
        
        if(display.animationDuration > 0) {
            display.animationDuration -=0.1;
        } else {
            display.animationDuration =0.5;
        }   
           
        display.animationDuration > 0 ? display.animationDuration = display.animationDuration.toFixed(1) : display.animationDuration == 0;
        document.querySelector('.home-scene__character').style.animationDuration = display.animationDuration +'s';
    
    },
    handleHamburgerClick:function() {
        document.querySelector('#hamburger').classList.toggle('open');
    },
    //Method for showing /hiding hamburger and scroll to top arrow according to scroll of user
    handleHamburgerDisplay:function() { 
      
        if(window.scrollY > 300){
            document.getElementById('hamburger').classList.add('visible');
            document.getElementById('back-to-top').classList.add('visible');
        } else {
            document.getElementById('hamburger').classList.remove('visible');
            document.getElementById('back-to-top').classList.remove('visible');
        }
        //toggling active class on li elements if a elements are active (scrollspy config)
        const links = document.querySelectorAll('nav li a');
        links.forEach(link=> {
            if(link.classList.contains('active')) {
                link.parentNode.classList.add('active');
            } else {
                link.parentNode.classList.remove('active');
            }
        })
    },
    //Method for scrolling to appropriate anchor according to scroll arrow clicked
    handleScroll:function(e) {
       let ancre = e.currentTarget.dataset.target;
       location.href = "#" + ancre;
    },
    resizeHome:function() {
            const homeHeight = document.querySelector('#home').clientHeight;
            document.querySelector('#home').style.height = homeHeight+'px';
            document.querySelector('#home').style.minHeight = homeHeight+'px';
    },
   
    updateFromOsMode:function() {
        let matched = window.matchMedia('(prefers-color-scheme: dark)').matches;

        if(matched){
            
            document.querySelectorAll('#hamburger span').forEach(span=> {
                span.style.backgroundColor="white";
            })
        }
    },
    handleWindowResize:function() {
        document.querySelector('#home').style.height="85vh";
        display.resizeHome();
    }
   
    
   
    // displayActiveTab:function() {
    //     let tabs =document.querySelectorAll('nav li a');
    //     tabs.forEach(tab=>  {
    //         console.log(tab.href);
    //         console.log(document.location.href);
    //         console.log(tab.href == document.location.href);
    //         tab.parentNode.classList.remove('active');
            
    //       if(tab.href == document.location.href) {
    //           tab.parentNode.classList.add('active');
    //       }
          
    //     })
    // },
    // handleTabClick:function(e){
    //     display.displayActiveTab();
    // },
    //  displayProgress:function() {
    //     const bars = document.querySelectorAll('.skills-section__progress-bar');
      

    //     bars.forEach(bar=> {
    //         let progress = bar.querySelector('.advancement').textContent;
    //         let color = bar.querySelector('.color').textContent;
    //         console.log(progress);
    //         bar.querySelector('.full').style.width = progress + '%';
    //         // bar.querySelector('.full').style.background =  color;
    //     })
    // },

}