    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" >US Healthcare Analysis</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
			
            <li<?php if ($activeMenu == "State") { ?> class="active"<?php } ?> ><a href="visual_state.php">States</a></li>	
      			<li<?php if ($activeMenu == "DRG") { ?> class="active"<?php } ?> ><a href="visual_DRG.php">DRGs</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>