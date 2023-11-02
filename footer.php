<!-- Footer section   -->
    <footer class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 order-1 order-md-2">
                    <div class="footer-social-links">
                        <!-- <a href=""><i class="fa fa-pinterest"></i></a> -->
                        <a href="https://www.facebook.com/Pyx-Photography-on-demand-102812318787264/" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                        <!-- <a href=""><i class="fa fa-behance"></i></a> -->
                    </div>
                </div>
                
                <div class="col-md-6 order-2 order-md-1">
                    <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Pyx Photography, part of the Jeetlo.com India Pvt. Ltd. family
</div>  
                </div>
                
            </div>
            
        </div>
    </footer>
    
    <!-- Footer section end  -->

    <!-- Search model --
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
   
    <!-- Search model end -->
    <!---try search modal---->
    <div class="modal fade searchmodal" id="searchmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width:100%;max-width: none;
    height: 100%;
    margin: 0;">
    <div class="modal-content" style="height: 100%;
    border: 0;background: black!important;
    border-radius: 0;">
      <div class="modal-header" style="border:none">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:gray">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="search-model-form d-flex align-items-center justify-content-center" style="padding-top:40px!important;margin-bottom:0px!important">
                <input type="text" id="search-input" placeholder="Search here.....">
        </form>
            <div class="row justify-content-md-center" id="listofsearch">
                <div class="col-md-5" style="padding:0px">
                    <ul id="myList" style="display:none;list-style:none">
                     <li onclick="search('photo')">Photo</li>
                     <li onclick="search('photography')">Photography</li>
                     <li onclick="search('photographers')">Photographer</li>
                     <li onclick="search('pyx photography')">pyx photography</li>
                     <li onclick="search('Shoots')">shoot</li>
                     <!---1st page------>
                     
                     <li onclick="search('about')">About</li>
                     <li onclick="search('about us')">About us</li>
                     <li onclick="search('about photography')">About photography</li>
                     <li onclick="search('about pyx')">About Pyx</li>
                     <!---2nd page------>
                     <li onclick="search('shoot us')">shoot us</li>
                     <li onclick="search('shooting')">shooting</li>
                      <li onclick="search('shoot at mumbai')">shoot at mumbai</li>
                      
                    </ul>
                </div>
            </div>  
            
        </div>
    </div>
      </div>
      
    </div>
  </div>
</div>
    <!----try end---->
    <script>
    $(document).ready(function(){
  $("#search-input").on("keyup", function() {
    $("#myList").css("display","block");
    var value = $(this).val().toLowerCase();
    $("#myList li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    </script>
   <script>
   function openmodal()
   {
       $("#searchmodal").modal("show");
   }
   function search(val)
        {
           var searchval=val;
          //alert(val);
            if(searchval=='photographers' || searchval=='photo')
            {
              window.location.href="index.php#photographers-intro";
            }
            if(searchval=='photography' || searchval=='pyx photography' || searchval=="Shoots")
            {
             window.location.href="index.php#pyxphotography";   
            }
            if(searchval=='join us' || searchval=='how to join' || searchval=="Join")
            {
             window.location.href="join-us.php";   
            }
            //freelancers
            if(searchval=='event shoot cost' || searchval=='price' || searchval=="Mumbai")
            {
             window.location.href="pricing.php";   
            }
            if(searchval=='freelancers' || searchval=='bookings' || searchval=="booking with pyx")
            {
             window.location.href="pricing.php#searchbyfreelancers";   
            }
            if(searchval=='shoot at Mumbai' || searchval=='shoot cost')
            {
             window.location.href="pricing.php#shootcostatmumbai";   
            }
            if(searchval=='Get in touch' || searchval=='Contact US' || searchval=="contact")
            {
             window.location.href="contact.php";   
            }
            if(searchval=='about' || searchval=='about pyx' || searchval=="about photography" || searchval=="about us")
            {
             window.location.href="about-us.php";   
            }
             if(searchval=='policy' || searchval=='payment' || searchval=="privacy&policy")
            {
             window.location.href="privacy.php";   
            }
             if(searchval=='terms' || searchval=='conditions')
            {
             window.location.href="terms.php";   
            }
             $('#searchmodel').modal("hide");
        }
    
   </script>