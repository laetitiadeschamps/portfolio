

const app = {
    
    compteur:0,
    init:function() {
        display.init();
        contact.init();
        app.compteur=0;
       
        scrollSpy('#main-nav', {
            sectionSelector: 'section',
            targetSelector: 'a',
            offset: 100, // in pixels
            hrefAttribute: 'href',
            activeClass: 'active',
          });
          scrollSpy('#hamb-nav', {
            sectionSelector: 'article',
            targetSelector: 'a',
            offset: 100, // in pixels
            hrefAttribute: 'href',
            activeClass: 'active',
          });
          scrollSpy('#hamb-nav', {
            sectionSelector: 'section',
            targetSelector: 'a',
            offset: 100, // in pixels
            hrefAttribute: 'href',
            activeClass: 'active',
          });
          app.handleAnimation();
       //display.displayActiveTab();
       let images = document.querySelectorAll('.portfolio__image');
       images.forEach(image=>{
           display.displayBackground(image);
           image.addEventListener('click', app.handleImageClick);
       });

       app.loop();
       
      
       document.querySelector('.portfolio').firstElementChild.classList.add('active-img');
       document.querySelector('#site-type').addEventListener('change', app.handleTypeChange);
       //window.addEventListener('resize', app.handleWindowResize);


    },
    handleAnimation:function() {
       // usage:
batch(".cv-section__infos", {
    interval: 0.1, // time window (in seconds) for batching to occur. The first callback that occurs (of its type) will start the timer, and when it elapses, any other similar callbacks for other targets will be batched into an array and fed to the callback. Default is 0.1
    batchMax: 3,   // maximum batch size (targets)
    onEnter: batch => gsap.to(batch, {autoAlpha: 1, stagger: 0.15, overwrite: true}),
    onLeave: batch => gsap.set(batch, {autoAlpha: 0, overwrite: true}),
    onEnterBack: batch => gsap.to(batch, {autoAlpha: 1, stagger: 0.15, overwrite: true}),
    onLeaveBack: batch => gsap.set(batch, {autoAlpha: 0, overwrite: true})
    // you can also define things like start, end, etc.
  });
  batch("section", {
    interval: 0.1, // time window (in seconds) for batching to occur. The first callback that occurs (of its type) will start the timer, and when it elapses, any other similar callbacks for other targets will be batched into an array and fed to the callback. Default is 0.1
    batchMax: 3,   // maximum batch size (targets)
    onEnter: batch => gsap.to(batch, {autoAlpha: 1, stagger: 0.15, overwrite: true}),
    onLeave: batch => gsap.set(batch, {autoAlpha: 0, overwrite: true}),
    onEnterBack: batch => gsap.to(batch, {autoAlpha: 1, stagger: 0.15, overwrite: true}),
    onLeaveBack: batch => gsap.set(batch, {autoAlpha: 0, overwrite: true})
    // you can also define things like start, end, etc.
  });
  
  
  
  
  // the magical helper function (no longer necessary in GSAP 3.3.1 because it was added as ScrollTrigger.batch())...
  function batch(targets, vars) {
    let varsCopy = {},
        interval = vars.interval || 0.1,
        proxyCallback = (type, callback) => {
          let batch = [],
              delay = gsap.delayedCall(interval, () => {callback(batch); batch.length = 0;}).pause();
          return self => {
            batch.length || delay.restart(true);
            batch.push(self.trigger);
            vars.batchMax && vars.batchMax <= batch.length && delay.progress(1);
          };
        },
        p;
    for (p in vars) {
      varsCopy[p] = (~p.indexOf("Enter") || ~p.indexOf("Leave")) ? proxyCallback(p, vars[p]) : vars[p];
    }
    gsap.utils.toArray(targets).forEach(target => {
      let config = {};
      for (p in varsCopy) {
        config[p] = varsCopy[p];
      }
      config.trigger = target;
      ScrollTrigger.create(config);
    });
  }
        
        
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

