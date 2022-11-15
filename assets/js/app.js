// ========================================fixed header
$(window).scroll(function(e){ 
    var $el = $('.navbar-header'); 
    var $body=$('body')
    if ($(this).scrollTop() >= 50){ 
      $el.css({'position': 'fixed'}); 
      $body.css({'padding-top': '70px'}); 
    }
    if ($(this).scrollTop() <= 50 ){
        $el.css({'position': 'relative'}); 
        $body.css({'padding-top': '0px'});  
    } 
});


// =================================================slider
var owl = $('.prtners-slider');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
      0:{
          items:2,
          nav:true
      },
      400:{
          items:3,
      },
      1000:{
          items:5,
          nav:true,
          loop:true
      }
  }
});

  // ==========================================packages
  function packages_duraton(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent-duration");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinksD");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active-duration", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active-duration";
  }
  document.getElementById("defaultpkg-duration").click();


  function packages(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent-pkg");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active-pkg", "");
    }
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active-pkg";
  }
  document.getElementById("defaultOpenpkg").click();

  function packagesC(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent-pkgC");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinksC");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active-pkgC", "");
    }
    document.getElementById(cityName).style.display = "flex";
    evt.currentTarget.className += " active-pkgC";
  }
  document.getElementById("defaultOpenpkgC").click();


  // =========================services tabs
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("servicescontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("serviceslinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("defaultservice").click();
