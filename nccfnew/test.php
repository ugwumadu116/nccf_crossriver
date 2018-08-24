<html>
   <head>
      <title></title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1"> 
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> 
     <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">

      <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
       
      
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
   </head>
   
   <body class = "container">


 <ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>







<div class="container">
<br /><br />
  <a class="waves-effect waves-light btn" onClick="expandAll();"><i class="material-icons left">fullscreen</i>Expand All</a>
  <a class="waves-effect waves-light btn" onClick="collapseAll();"><i class="material-icons left">fullscreen_exit</i>Collapse All</a>
<br /><br />
        <ul class="collapsible" data-collapsible="expandable">
            <li>
              <div class="collapsible-header"><i class="mdi-navigation-chevron-right"></i><a name="987"/>First</a></div>
              <div class="collapsible-body"><p>First Things First</p></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="mdi-navigation-chevron-right"></i>Second</div>
              <div class="collapsible-body"><p>Give me a second ...</p></div>
            </li>
            <li>
              <div class="collapsible-header"><i class="mdi-navigation-chevron-right"></i>Third</div>
              <div class="collapsible-body"><p>I don't like being a third wheel</div>
            </li>
        </ul>

    </div>


   
 
   </body> 



<script>

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>   

  






<script>
    	function expandAll(){
  $(".collapsible-header").addClass("active");
  $(".collapsible").collapsible({accordion: false});
}

function collapseAll(){
  $(".collapsible-header").removeClass(function(){
    return "active";
  });
  $(".collapsible").collapsible({accordion: true});
  $(".collapsible").collapsible({accordion: false});
}
</script>




</html>






