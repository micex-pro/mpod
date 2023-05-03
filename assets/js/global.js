// Makes Sure The Document Has Loaded
window.addEventListener('load', function(){
    // Smooth Scroll For Anchors
    document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
        if (anchor.getAttribute('href') == "#"){
            anchor.addEventListener("click", function(e){
                e.preventDefault();
            });
        }else{
            anchor.addEventListener("click", function(e){
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        }
    });
});

