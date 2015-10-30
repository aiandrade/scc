<?php $page = basename($_SERVER['SCRIPT_NAME']); ?> 
<header>

<div id="logo">
<h1>Visit Mexico</h1>
</div><!--end logo-->
<div id="social">
    <ul>
       <li class="utilities"><a href="javascript:;" onclick="MM_openBrWindow('contact.php','contact','scrollbars=yes,width=400px,height=885px')"><img src="images/contactus.png" alt="Contact Us"></a></li>
        <li class="utilities"><a href=""><img src="images/facebook-circle.png" alt="Facebook"></a></li>

    </ul>
</div> <!--end social-->
<nav>

<ul>

<li class="nav<?php if ($page == 'index.php') { print '-on'; } ?>"><a href="index.php">HOME</a></li>
<li class="nav<?php if ($page == 'monterrey.php') { print '-on'; } ?>"><a href="monterrey.php">MONTERREY</a></li>
<li class="nav<?php if ($page == 'cancun.php') { print '-on'; } ?>"><a href="cancun.php">CANCUN</a></li>
<li class="nav<?php if ($page == 'acapulco.php') { print '-on'; } ?>"><a href="acapulco.php">ACAPULCO</a></li>
<li class="nav<?php if ($page == 'oaxaca.php') { print '-on'; } ?>"><a href="oaxaca.php">OAXACA</a></li>
<li class="nav<?php if ($page == 'mexicocity.php') { print '-on'; } ?>"><a href="mexicocity.php">MEXICO CITY</a></li>
</ul>
</nav>

</header>

