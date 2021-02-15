<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $(".openMenu").click(function(){
      $("body").toggleClass("menuOpened");
   });

   $(".menu_overlay").click(function(){
      $("body").removeClass("menuOpened");
   });
});
</script>


<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>