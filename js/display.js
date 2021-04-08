const display = {
    letterIndex:0,
    wordIndex:0,
    words:[],
    init:function() {
        display.letterIndex=0;
        display.wordIndex=0;
        display.words=['Développer', 'Inventer', "S'améliorer", 'Apprendre'];
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
    displayActiveTab:function() {
        let tabs = document.querySelectorAll('#main-nav li a');
        tabs.forEach(tab=>  {
            tab.classList.remove('active');
          if(tab.href == document.location.href) {
              tab.parentNode.classList.add('active');
          }
          
        })
    },
}