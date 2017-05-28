<!-- Making a slider for underpages -->

<script>
   
    var slideIndex = 1; // Declaration of Slide
     
	showSlides(slideIndex); // Getting slide
    
	
    function plusSlides(n)  // Function for next, previous slide
    {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) // For the current slide
    {
        showSlides(slideIndex = n);
    }

    function showSlides(n) // For the slide-length
    {
        var i; // declaration for length of slides
    
        var slides = document.getElementsByClassName("Slide"); 
   
        if (n > slides.length) {slideIndex = 1} 
    
        if (n < 1) {slideIndex = slides.length} 
    
        for (i = 0; i < slides.length; i++) // for the length of slides
        {
            slides[i].style.display = "none"; 
        }
 
		slides[slideIndex-1].style.display = "block"; 

    }
       
</script>
		
		
