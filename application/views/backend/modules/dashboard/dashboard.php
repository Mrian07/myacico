<!-- Main content -->
<section class="content">

	<!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-blue">
                <div class="inner">
                    <h3><?php echo $total_kupon; ?></h3>
                    <p>Kupon</p>
                </div>
                <div class="icon">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                </div>
				<?php echo anchor('backend/kupon/', 'More info <i class="fa fa-arrow-circle-right"></i>', array('class'=>'small-box-footer'));?>
            </div>
        </div><!-- ./col -->
     
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $total_quota; ?></h3>
                    <p>Quotation</p>
                </div>
                <div class="icon">
                    <i class="fa fa-credit-card" aria-hidden="true"></i>
                </div>
				<?php echo anchor('backend/quotation/', 'More info <i class="fa fa-arrow-circle-right"></i>', array('class'=>'small-box-footer'));?>
            </div>
        </div><!-- ./col -->
     
    </div><!-- /.row -->
	

</section>