<div class="panel panel-default sidebar-menu"> <!-- panel sidebar menu starts -->
    <div class="panel-heading"><!-- panel-heading starts -->
        <h3 class="panel-title">Products Categories</h3>
    </div><!-- panel-heading ends -->

        <div class="panel-body"><!-- panel body starts -->
            <ul class="nav nav-pills nav-stacked category-meu"><!-- nav-stacked category-meu starts -->

            <?php
              getPCats();
              
            ?>
                    


            </ul><!-- nav-stacked category-meu ends -->
        </div><!-- panel body ends -->



</div><!-- panel sidebar menu ends -->











<div class="panel panel-default sidebar-menu"> <!-- panel sidebar menu starts -->
    <div class="panel-heading"><!-- panel-heading starts -->
        <h3 class="panel-title"> Categories</h3>
    </div><!-- panel-heading ends -->

        <div class="panel-body"><!-- panel body starts -->
            <ul class="nav nav-pills nav-stacked category-meu"><!-- nav-stacked category-meu starts -->

                    <?php 
                    getCats();
                    
                    ?>
            </ul><!-- nav-stacked category-meu ends -->
        </div><!-- panel body ends -->



</div><!-- panel sidebar menu ends -->