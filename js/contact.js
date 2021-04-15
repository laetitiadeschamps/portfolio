const contact = {
    init:function() {
        
    },
    
    checkErrors:function() {
        contact.emptyAllErrors();
        let inputs = Array.from(document.querySelectorAll('input'));
        let textareas = Array.from(document.querySelectorAll('textarea'));
        let formIsValid=true;
        let inputsToCheck = inputs
        .concat(textareas)
        .filter(input =>  {
        return input.id !== 'submitBtn'})
        .forEach(input => {
            
            if(!contact.checkInput(input)) {
                formIsValid=false;
            };
            
        })
        console.log(formIsValid);
       return formIsValid;
    },
    
    // handleContactFormSubmit:function(e) {
    //     e.preventDefault();
    //     contact.emptyAllErrors();
    //     let inputs = Array.from(document.querySelectorAll('input'));
    //     let textareas = Array.from(document.querySelectorAll('textarea'));
    //     let formIsValid=true;
    //     let inputsToCheck = inputs
    //     .concat(textareas)
    //     .filter(input =>  {
    //     return input.id !== 'submitBtn'})
    //     .forEach(input => {
            
    //         if(!contact.checkInput(input)) {
    //             formIsValid=false;
    //         };
            
    //     })
       
       
        
    // }, 
    emptyAllErrors:function () {
       const errors=  document.querySelector('form').querySelectorAll('.error');
       errors.forEach(error=> {
           error.textContent='';
       })
    },
    
    checkInput:function (inputToCheck) {
        let value;
        value=inputToCheck.value.trim();
        if(!value) {  
            let parent = inputToCheck.parentNode.parentNode;
            parent.querySelector('.error').textContent = "Merci de remplir le champ"
            inputToCheck.value='';
       } else {
           return true;
       }
        return false;
    }
}