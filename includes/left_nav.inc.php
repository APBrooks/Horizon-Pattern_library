<div class="container-fluid">

<div class="row">
        
<!-- LEFT NAV -->
<div class="col-md-3 left-nav">
	<div class="list-group" id="accordion" role="tablist" aria-multiselectable="true">
		<a href="index.php" class="list-group-item <?php if ($section == "grid") { echo "active";} ?>">Grid System</a>
		<a role="button" class="list-group-item closed" data-toggle="collapse" data-parent="#accordion" href="#collapseForms" aria-expanded="false" aria-controls="collapseForms">
          Form Elements <span class="fa fa-angle-right fa-pull-right"></span>
        </a>
		
		<div id="collapseForms" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			  
			  <a href="multiselect-kendo.php" class="list-group-item <?php if ($section == "MultiSelect") { echo "active";} ?>">MultiSelect - Kendo</a>
			  <a href="droplistcustom-kendo.php" class="list-group-item <?php if ($section == "DroplistCustom") { echo "active";} ?>">DropDownList / Custom template - Kendo</a>
			  <a href="upload-kendo.php" class="list-group-item <?php if ($section == "Upload") { echo "active";} ?>">Upload - Kendo</a>
			  <a href="datetime-kendo.php" class="list-group-item <?php if ($section == "Datetime") { echo "active";} ?>">DateTimePicker - Kendo</a>
	    </div>
	    <a role="button" class="list-group-item closed" data-toggle="collapse" data-parent="#accordion" href="#collapseGrids" aria-expanded="false" aria-controls="collapseGrids">
          Tables / Grids <span class="fa fa-angle-right fa-pull-right"></span>
        </a>
		
		<div id="collapseGrids" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			  
			  <a href="gridbasic-kendo.php" class="list-group-item <?php if ($section == "GridBasic") { echo "active";} ?>">Grid / Basic usage - Kendo</a>
			  <a href="gridtemplate-kendo.php" class="list-group-item <?php if ($section == "GridTemplate") { echo "active";} ?>">Grid / Detail template - Kendo</a>
	    </div>
	</div>
	
</div>
