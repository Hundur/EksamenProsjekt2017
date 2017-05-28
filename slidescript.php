<script>
   
    var slideIndex = 1;
     
    showSlides(slideIndex); 

    
    function plusSlides(n)  
    {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) // For the current slide
    {
        showSlides(slideIndex = n);
    }

    function showSlides(n)
    {
        var i; // declaration for slide-length
    
        var slides = document.getElementsByClassName("Slide"); // getting a Slidepage 
   
        if (n > slides.length) {slideIndex = 1}  // for the length of slides
    
        if (n < 1) {slideIndex = slides.length}
    
        for (i = 0; i < slides.length; i++)
        {
            slides[i].style.display = "none"; 
        }
 
		slides[slideIndex-1].style.display = "block"; 
  
		dots[slideIndex-1].className += " active";
    }
       
</script>
		
		
