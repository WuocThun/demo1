        <div class="row  footer">
            Tâm đẹp trai && TRung đẹp trai 
        </div>
</div>

<!-- JS Cho slide show -->
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
<script src="https://kit.fontawesome.com/b8d3f92d8d.js" crossorigin="anonymous"></script>
<script src="./view/js/boxright.js"></script>
</body>
</html>