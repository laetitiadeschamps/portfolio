const portfolio = {
    init:function() {
        // By default, show first portfolio project
        document.querySelector('.portfolio').firstElementChild.classList.add('active-img');
        // Handle select element
        document.querySelector('#site-type').addEventListener('change', portfolio.handleTypeChange);
        // For each image, show background according to image url and attach events
        const images = document.querySelectorAll('.portfolio__image');
        images.forEach(image=>{
           portfolio.displayBackground(image);
           image.addEventListener('click', portfolio.handleImageClick);
        });  
    },
    //Method for showing appropriate image according to image url
    displayBackground:function(image) {
        image.style.background='url(../img/'+ image.querySelector('.portfolio__url').textContent + ')';
        image.style.backgroundPosition="center";
        image.style.backgroundSize="cover";
    },
    // Method for toggling active class to displaying current image
    handleImageClick:function(event) { 
        let images = document.querySelectorAll('.portfolio__image');
        images.forEach(image=> {
            image.classList.remove('active-img');
        })
        event.currentTarget.classList.add('active-img')
    },
    //Method for handling selected type on select element
    handleTypeChange:function(event) { 
        let type = event.target.value;
        let count = 0;
        const images = document.querySelectorAll('.portfolio__image');
        images.forEach(image=> {
            // For each image, we remove active class
            image.classList.remove('active-img');
            image.style.display = 'block';
            if(type) { 
                // If a type has been selected and it does not match project type, we hide it
                if(image.querySelector('.portfolio__type').textContent != type) {
                    image.style.display = 'none';
                } else {
                    //If project type matches type selected, we add active class to the first element only
                    if(count == 0) {
                        image.classList.add('active-img')
                    }
                    count++;
                }
            } else {
                //If no type has been selected, we don't hide any project and we add active class to the first one only
                if(count == 0) {
                    image.classList.add('active-img')
                }
                count++;
            }    
        })
    }
}