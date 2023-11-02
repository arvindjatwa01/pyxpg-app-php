	$(document).ready(function(){
     $(".mainmenu1").click(function(){
      $(".submenu1").css("position","relative");
     	$(".submenu1").css("visibility","visible");
       $(".submenu1").toggle();
     });
    
    
  });
	$(document).ready(function(){
     $(".mainmenu2").click(function(){
      $(".submenu2").css("position","relative");
     	$(".submenu2").css("visibility","visible");
       $(".submenu2").toggle();
     });
    
    
  });

$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        placement : 'bottom',
    trigger : 'click',
        html : true,
        content :'<div class="row"><div class="media col-sm-12"><a href="#" class="media-heading"><i class="fa fa-cogs fa-1x">&nbsp;&nbsp;Settings</i></a><br><a href="#" class="media-heading"><i class="fa fa-user fa-1x">&nbsp;&nbsp;&nbsp;Profile</i></a><br><a href="logout.php" class="media-heading"><i class="fa fa-sign-out fa-1x">&nbsp;&nbsp;&nbsp;Logout</i></a></div></div>'    
    });
});	

