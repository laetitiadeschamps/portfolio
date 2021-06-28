const contact = {
    init:function() {
      
    },
    //Method
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
        
       return formIsValid;
    },
    //Method for reseting error fields on submission in order to display new errors
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