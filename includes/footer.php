
    <!-- footer section -->
    <footer class="page-footer green darken-2" style="background-image:url(img/16.jpg)">
        <div class="container" >
            <div class="row">
                <div class="col l3 m3 s12">
                    <h5 class="Header white-text">Quick Links</h5>
                    <hr class="hr">
                    <ul>
                        <li><a class="white-text" href="#!">Hire Professional Drivers</a></li>
                        <li><a class="white-text" href="#!">Apply As A Driver</a></li>
                        <li><a class="white-text" href="#!">About Us</a></li>
                        <li><a class="white-text" href="#!">Terms And Condition</a></li>
                        <li><a class="white-text" href="#!">Support</a></li>
                    </ul>
                </div>

                <div class="col l6 m6 s12">
                    <h5 class="header white-text">Contact Information</h5>
                    <hr class="hr">
                    <ul>
                        <li><span class=""><img src="img/ic_domain_white_24dp.png"></span><a class="white-text" href="#!">Blue Roof House Off Mukadam Street Mowe, Ogun State.</a></li>
                        <li><span class=""><img src="img/ic_local_phone_white_24dp.png"></span><a class="white-text" href="#!">08145358784</a></li>
                        <li><a class="white-text" href="#!"><img src="img/ic_mail_outline_white_24dp.png">Support@idrive.com.ng</a></li>
                    </ul>
                </div>

                <div class="col l3 m3 s12">
                    <h5 class="header white-text">Social Platforms</h5>
                    <hr class="hr">
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="yellow-text text-lighten-3" href="#!">Innovatio</a>
            </div>
        </div>
    </footer>


    <!--  Scripts-->

    <!--  <script src="js/init.js"></script>-->
    <script type="text/javascript">
        
        $(document).ready(function(){
            $('.button-collapse').sideNav();
            $('.parallax').parallax();
             $('select').material_select();
            $('.slider').slider({full_width: true});
        
//           check if element is scrolled into view
            
            function isScrolledIntoView(elem){
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();
                
                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(elem).height();
                
                return((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
            }
//            if Element is scolled into view, add relevant actions
        $(window).scroll(function(){
                $('.row1').each(function(){
                if(isScrolledIntoView(this) === true){
                $('#card1').addClass("fadeInLeft");
                $('#card2').addClass("fadeInLeft");
                $('#card3').addClass("fadeInLeft");
//                $('#fourth').addClass("fadeInDown");
                }
                }); 
                
                $('.row2').each(function(){
                    if(isScrolledIntoView(this)){
                $('#fourth').addClass("fadeInDown");
            }
                });
            
            $('.row3').each(function(){
                    if(isScrolledIntoView(this)){
                $('#first').addClass('slideInLeft hinge');
                $('#second').addClass("slideInUp hinge");
                $('#third').addClass("slideInRight hinge");
            }
                });
            
            $('.row4').each(function(){
                    if(isScrolledIntoView(this)){
                $('#card4').addClass("slideInDown");
                $('#card5').addClass("slideInUp");
                $('#card6').addClass("fadeInRight");
            }
            });
                
                 $('.row5').each(function(){
                    if(isScrolledIntoView(this)){
                $('#fifth').addClass("fadeInDown");
                $('#sixth').addClass("fadeInLeft");
            }
                });
                
                $('.row6').each(function(){
                    if(isScrolledIntoView(this)){
                $('#l_name').addClass("fadeInRight");
                $('#subject').addClass("fadeInRight");
                $('#f_name').addClass("fadeInLeft");
                $('#mail').addClass("fadeInLeft");
                $('#msg').addClass("fadeInLeft");
            }
                });
            });
        });
       
        
  
        

    </script>
</body>