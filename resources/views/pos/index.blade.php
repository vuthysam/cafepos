@section('page_heading','Areng Café Managememt System')
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles-pos.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui-1.10.3.custom.min.css') }}" type="text/css" />
    @yield('styles')

</head>
<!-- returant-icon.ico -->
<body id="body-bg-color">
<div class="proccess_loading"></div>
	<div id="container-fluid">
		<nav class="navbar">
			
	    </nav>
	    <div class="container container-margin-top bg-content-color border-radius">
	        <div class="row">
			  	<div class="col-sm-7 col-sm-7-left">
			  	<!-- start category item -->
			  		<div class="row">
					  	<div class="col-lg-1-1">
					  		<a href="JavaScript:void(0);" id="pronext" data-slide="next">
				                <img src="{{ URL::asset('assets/images/back.png') }}" width="24" class="img-responsive arrow-mar-top arrow-left">
				                <!-- <i class="glyphicon glyphicon-chevron-left"></i> -->
				            </a>
					  	</div>
					  	<div class="con-cate-center" style="overflow:hidden;">
						  	<div class="slide-next-prev-running">
						  	
						  	</div>
					  	</div>
					  	<div class="col-lg-1-1">
					  		<a href="JavaScript:void(0);" id="proprev"  data-slide="prev">
				                <img src="{{ URL::asset('assets/images/next.png') }}" class="img-responsive arrow-mar-top arrow-right">
				                <!-- <i class="glyphicon glyphicon-chevron-left"></i> -->
				            </a>
					  	</div>
				  	</div>
				  	<!-- End category item row -->
				  	<div class="row">
				  		<div class="col-sm-12">
					  		<div class="col-sm-6 width">
						  			<div class="form-group margin-left-8">
										<select class="form-control" id="item_categories">
											<option value=""> All categories </option>
											<option value="1"> Favorite </option>
												
										</select>
									</div>
					  		</div>

					  		<div class="col-sm-6 width">
					  			<div class="form-group">
					  				<input id="queuecode"  class="form-control queuecode" type="hidden" name="queuecode[]" value="0">
						  			<input id="search_item"  class="form-control txt-auto search_item" type="text" placeholder="Search item Here..!" name="search_item[]">
					  			</div>
					  		</div>
				  		</div>
					</div>
				  	<!--start show item -->
				  	<div class="row">
					  	<div class="col-lg-1-1">
					  		<div class=" arrow-mar-item-top">
						  		<a href="JavaScript:void(0);" class="item-next">
					                <img src="{{ URL::asset('assets/images/back.png') }}" width="24">
					            </a>
				            </div>
					  	</div>
					  	<!--  style="height:680px;" -->
					  	<div class="con-cate-center-item" style="margin-top: -7px">
					  	 	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					  		<input type="hidden" name="endpage" id="endpage" value="0">
					  		<input type="hidden" name="next" id="next" value="0">
					  		<div class="get-item width-item"></div>
					  	</div>
					  	<div class="col-lg-1-1">
					  		<div class="arrow-mar-item-top margin-item-left">
						  		<a href="JavaScript:void(0);" class="item-prev">
					                <img src="{{ URL::asset('assets/images/next.png') }}" width="24">
					            </a>
				            </div>
					  	</div>
				  	</div>
				  	<!--end show item -->
			  	</div>
			  	<!-- -->
			  	<div class="col-sm-5 col-sm-5-right">
			  		<div class="row">
			  		<?php
			  		$url='JavaScript:void(0)';
			  		$i=1;
			  		$ModStr='';
			  		
			  		$ModStr.='<div class="col-lg-2-1 sitting-image-block" align="center">

						  			<a href="'.$url.'" class="mytoltip module-'.'" data-toggle="tooltip" title="'.'">
							  			<div class="set-border-color sitting-height-cate">
							  				'.'
							                <img src="'.'" class="img-responsive img-padding">
							            	<label class="control-label text-title-sitting">'.'</label>
							            </div>
						            </a>
							  	</div>';
							  	$i++;
			  			
			  		?>
			  		<div class="col-lg-2-1 sitting-image-block" align="center">
			  			<a href="JavaScript:void(0);" class="mytoltip module_cancel" data-toggle="tooltip" title="Cancel">
				  			<div class="set-border-color sitting-height-cate">
				                <img src="<?php echo asset('assets/images/cancel32.png');?>" class="img-responsive img-padding">
				            	<label class="control-label text-title-sitting">Cancel</label>
				            </div>
			            </a>
				  	</div>
			  		<div class="col-lg-2-1 sitting-image-block" align="center">
			  			<a href="JavaScript:void(0);" class="mytoltip module_pay" data-toggle="tooltip" title="Pay">
				  			<div class="set-border-color sitting-height-cate">
				                <img src="<?php echo asset('assets/images/pay32.png');?>" class="img-responsive img-padding">
				            	<label class="control-label text-title-sitting">Pay</label>
				            </div>
			            </a>
				  	</div>
				  	<div class="col-lg-2-1 sitting-image-block" align="center">
			  			<a href="JavaScript:void(0);" class="mytoltip module_daily_sale" data-toggle="tooltip" title="Daily Sales">
				  			<div class="set-border-color sitting-height-cate">
				                <img src="<?php echo asset('assets/images/daily_sales32.png');?>" class="img-responsive img-padding">
				            	<label class="control-label text-title-sitting">Daily Sales</label>
				            </div>
			            </a>
				  	</div>
			  		<div class="col-lg-2-1 sitting-image-block" align="center">
			  			<a href="JavaScript:void(0);" class="mytoltip module_keep" title="Keep">
				  			<div class="set-border-color sitting-height-cate">
				                <img src="<?php echo asset('assets/images/keep_order.png');?>" class="img-responsive img-padding">
				            	<label class="control-label text-title-sitting">Keep</label>
				            </div>
			            </a>
				  	</div>
			  		<div class="col-lg-2-1 sitting-image-block" align="center">
			  			<a href="JavaScript:void(0);" class="mytoltip module_pending" data-toggle="tooltip" title="Pending">
				  			<div class="set-border-color sitting-height-cate">
				                <img src="<?php echo asset('assets/images/sale_order32.png');?>" class="img-responsive img-padding">
				            	<label class="control-label text-title-sitting">Pending</label>
				            </div>
			            </a>
				  	</div>
			  		<div class="col-lg-2-1 sitting-image-block" align="center">
			  			<a href="JavaScript:void(0);" class="mytoltip module_user" data-toggle="modal" data-target="#confirm_logout" title="<?php echo Auth::User()->name;?>">
				  			<div class="set-border-color sitting-height-cate">
				                <img src="<?php echo asset('assets/images/user32.png');?>" class="img-responsive img-padding">
				            	<label class="control-label text-title-sitting"><?php echo Auth::User()->name;?></label>
				            </div>
			            </a>
				  	</div>
			  		</div>
			  		<!-- <div class="row margin-top"> -->
		  			<div class="row">
				  		<div class="col-sm-12">
							 <div class="checkbox checkbox-primary">
		                        <input id="check_customer" class="styled check_customer" type="checkbox">
		                        <label for="check_customer">
		                            Customer name:<span class="customer-name"></span>
		                        </label>
		                    </div>
				  		</div>
					</div>
			  		<!-- </div>		 -->
			  		<div class="row" style="margin-top: 20px;">
	                    <!-- start item list -->
	                    <div id="scrollbar1">
						    <div class="scrollbar">
						        <div class="track">
						            <div class="thumb">
						                <div class="end"></div>
						            </div>
						        </div>
						    </div>
						    <div class="viewport">
						        <div class="overview">

						        	<div class="table-responsive" style="overflow-y: auto; height: 620px;">
						                <table id="table-item" align="center" border="0" class="table table-condensed table-hover"  cellspacing="0" width="100%">
						                    <thead>
						                        <th class="header-table-item" width="135">
						                        	Description
						                        	<input type="hidden" class="get-customer-name" value="">
													<input type="hidden" class="get-customer-code" value="Default">
													<input type="hidden" class="form-control" id="pay_keep_notice"  keep_attr_table="0" keep_note_table_name="">
						                        </th>
						                        <th class="header-table-item"  width="50">Discount</th>
						                        <th class="header-table-item"   width="50">Qty</th>
						                        <th class="header-table-item"   width="50">Unit</th>
						                        <th class="header-table-item"   width="70">Price</th>
						                        <th class="header-table-item"   width="50">Amount</th>
						                        <th class="header-table-item"   width="50"></th>
						                    </thead>
						                    <tbody class="get-items-table">
						                    </tbody>
						                </table>
						            </div>

						        </div>
						    </div>
						</div>
	                    <!-- End item list -->
			  		</div>
			  		<div class="row margin-top20px">&nbsp;</div>

			  	</div>

			</div>
	    </div>

  	</div>
  	<div id="container-fluid" class="check-screen">
  		    <!-- start Fixed footer  -->
	    <div class="navbar navbar-default navbar-fixed-bottom footer-fixed-bottom">
			<div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <!-- <a class="navbar-brand" href="#">Table</a>  bg-content-color-->
		      </div>
		    <div class="container bg-content-color-footer border-radius-top">

		      <div class="collapse navbar-collapse">
		        <ul class="nav navbar-nav navbar-right">
	                <li>
			  			<label class="control-label set-font-total">Total: $ </label>
	                </li>
	                <!-- style="font-size:2.8em;padding:3px 0px" -->
	                <li>
	                	<label class="control-label set-font-total">
	                		<input type="hidden" class="totalprices_hide" value="0">
	                		<input type="hidden" class="get_transno" value="0">
	                		<span class="totalprices">0</span>
	                		= <span class="total_prices_khr">0</span> ៛
	                		<input type="hidden" id="total_prices_khr_hide" value="0">
	                	</label>
	                </li>
	            </ul>
		      </div>

		    </div>
		</div>
	</div>
	    <!-- End Fixed footer -->
  	<!-- set Dialog Message -->
	<div class="modal" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title">Confirm</h4>
	            </div>
	            <div class="modal-body">
	                <span class="sms-body">Are you want to delete?</span>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	                <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End Dialog Message -->
	<!-- set Dialog Customer information -->
	<div class="modal" id="customer_information" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog add-size-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title">Customer Information</h4>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
		                <div class="col-sm-12">
		                	<div class="col-sm-4">
		                		 <div class="form-group">
			                      	<label class="control-label">Card Number</label>
			                      	<input type="hidden" class="form-control" id="get_cust_id" name="get_cust_id" value="0">
			                        <input type="text" class="form-control" id="cust_code" name="cust_code" placeholder="Enter Code">
			                   </div>
		                	</div>
		                	<div class="col-sm-4">
			                    <div class="form-group">
			                      <label class="control-label">Customer Name</label>
			                        <input type="text" class="form-control" id="cust_name"  name="cust_name" placeholder="Enter Name">
			                    </div>
		                	</div>
		                	<div class="col-sm-4">
		                		<div class="form-group">
			                      	<label class="control-label">Phone</label>
			                        <input type="text" class="form-control" id="cust_tell" name="cust_tell" placeholder="Enter Phone">
			                    </div>
		                	</div>

		                </div>
		                <!-- end 12 -->
		                <div class="col-sm-12">
		                	<div class="form-group">
		                		<center>
			                		<button type="button" class="btn btn-default" id="Search-Customer">Search</button>
		                			<button type="button" class="btn btn-primary hide" id="Save-Customer">Save</button>
		                			<button type="button" class="btn btn-primary hide" id="Update-Customer">Update</button>
	                			</center>
	                		</div>
		                </div>
						<div class="col-sm-12">
							<div class="table-responsive">
								<table class="table table-cursor table-bordered">
									<thead>
										<tr>
											<th>&numero;</th>
											<th width="1%"></th>
											<th>Code</th>
											<th>Name</th>
											<th>Gender</th>
											<th>Address</th>
											<th>Phone</th>
											<th>E-mail</th>
											<th>Currency</th>
										</tr>
									</thead>
									<tbody class="get-customer-table">
										<tr>
	                      <td colspan="8" align="center">Have no record to display here...!</td>
	                  </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
	            </div>
	            <div class="modal-footer">
	            	<div class="col-sm-12">
	            		<div class="col-sm-11" align="center">
	            			<div class="get-customer-pagination"></div>
	            		</div>
	            		<div class="col-sm-1" align="center">
	                		<button type="button" class="btn btn-default" id="close-dialog-customer" data-dismiss="modal">Cancel</button>
	            		</div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End Dialog Customer information -->

	<!-- set Dialog  Payment -->
	<div class="modal" id="Payment" style="z-index: 999999999999" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-1">
	        <div class="modal-content">
	            <div class="modal-header"  style="background: #268d43;">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title" style="color: #fff;">Payment</h4>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
		                <div class="col-sm-12">
		                	<div class="col-sm-5">
		                		<div class="form-group">
		                			<label class="control-label">Total Amount In Dollar</label>
		                			<input type="hidden" class="form-control" id="select_pay_by_row_master_id">
		                			<input type="hidden" class="form-control" id="select_pay_by_customer">
		                			<input type="hidden" class="form-control" id="select_pay_by_table">
		                			<input type="hidden" class="form-control" id="select_pay_by_user">
		                			<input type="hidden" class="form-control" id="select_pay_by_note">
		                			<input type="hidden" class="form-control" id="select_pay_by_total_discount">
		                			<input type="hidden" class="form-control" id="select_pay_by_total_qty_print">
		                			<input type="hidden" class="form-control" id="select_pay_by_total_amount">
			                    </div>
		                	</div>
		                	<div class="col-sm-7">
		                		<div class="form-group" align="right">
		                			<label class="control-label"><span class="total_in_usa">0.00</span> $</label>
		                			<input type="hidden" class="form-control" id="hidden_total_in_usa">
			                    </div>
		                	</div>
		                </div>
		                <!-- end 12 -->
		                <div class="col-sm-12">
		                	<div class="col-sm-5">
		                		<div class="form-group">
		                			<label class="control-label">Total Amount In Riels</label>
			                    </div>
		                	</div>
		                	<div class="col-sm-7">
		                		<div class="form-group" align="right">
		                			<label class="control-label"><span class="total_in_khr">0.00	</span> ៛ </label>
		                			<input type="hidden" class="form-control" id="hidden_total_in_khr">
			                    </div>
		                	</div>
		                </div>
		                <!-- end 12 -->
		                <!-- <div  class="col-sm-12"><div style="border-bottom: 1px solid #e5e5e5;margin-bottom: 3px;"></div></div> -->
		                <div class="col-sm-12">
		                	<div class="col-sm-5">
		                		<div class="form-group">
		                			<label class="control-label">Receive In Dollar</label>
			                    </div>
		                	</div>
		                	<div class="col-sm-7">
		                		<div class="form-group" align="right">
		                			<input type="text" class="form-control text-align-right" id="pay_in_usa" value="0">
			                    </div>
		                	</div>
		                </div>
		                <!-- end 12 -->
		                <div class="col-sm-12">
		                	<div class="col-sm-5">
		                		<div class="form-group">
		                			<label class="control-label">Receive In Riels</label>
			                    </div>
		                	</div>
		                	<div class="col-sm-7">
		                		<div class="form-group" align="right">
		                			<input type="text" class="form-control text-align-right" id="pay_in_khr" value="0">
			                    </div>
		                	</div>
		               </div>
		              <!--   <div  class="col-sm-12"><div style="border-bottom: 1px solid #e5e5e5;margin-top: -12px;"></div></div> -->
		                <div class="col-sm-12">
		                	<div class="col-sm-5">
		                		<div class="form-group">
		                			<label class="control-label">Change In Dollar</label>
			                    </div>
		                	</div>
		                	<div class="col-sm-7">
		                		<div class="form-group" align="right">
		                			<label class="control-label"><span class="remaining_usd_khr">0.00	</span>$</label>
		                			<input type="hidden" class="form-control text-align-right" id="remaining_usd_khr_hide" value="0">
			                    </div>
		                	</div>
		                </div>
		                <!-- end 12 -->
		                <div class="col-sm-12">
		                	<div class="col-sm-5">
		                		<div class="form-group">
		                			<label class="control-label">Change In Riels</label>
			                    </div>
		                	</div>
		                	<div class="col-sm-7">
		                		<div class="form-group" align="right">
		                			<label class="control-label"><span class="change_usd_khr">0.00	</span>៛ </label>
		                			<input type="hidden" class="form-control text-align-right" id="change_usd_khr_hide" value="0">
			                    </div>
		                	</div>
		                </div>
		                 <div class="col-sm-12">
		                	<div class="form-group">
		                        <fieldset class="the-fieldset">
		                            <legend class="the-legend">Discount</legend>
		                            <input type="text" class="form-control text-align-right total_discount" id="total_discount" value="0">
		                        </fieldset>
		                    </div>
		                </div>
		                <!-- end 12 -->
					</div>
	            </div>
	            <div class="modal-footer">
	            	<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
	            	<button type="button" data-dismiss="modal" class="btn btn-success btn_pay_now" id="paynow">Pay Now</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End Dialog Payment -->

	<!-- start report list -->
	<div class="modal" id="invoice-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog add-size-dialog">
	        <div class="modal-content">
	            <div class="modal-header" style="background: #268d43;">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title" style="color: #fff">Invoice List</h4>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
		                <div class="col-sm-12">
		                	<div class="col-sm-4">
		                		<div class="form-group">
			                      <label class="control-label">From Date</label>
			                        <input type="text" class="form-control" id="from_date" name="from_date" placeholder="Select Date">
			                    </div>
		                	</div>
		                	<div class="col-sm-4">
			                    <div class="form-group">
			                      <label class="control-label">To Date</label>
			                        <input type="text" class="form-control" id="to_date"  name="to_date" placeholder="Enter Date">
			                    </div>
		                	</div>
		                	 <div class="col-sm-4">
			                    <div class="form-group" style="margin-top: 25px;">
			                      <button type="button" class="btn btn-success btn_search_inv">Search</button>
			                    </div>
		                	</div>
		                </div>
						<div class="col-sm-12">
							<div class="table-responsive">
								<table class="table table-cursor table-bordered">
									<thead>
										<tr>
											<th width="1%">&numero;</th>
											<th width="5%">Invioce</th>
											<th width="5%">Queue</th>
											<th width="10%">Date</th>
											<th>Customer</th>
											<th width="10%">Seller</th>
											<th width="10%">Amount</th>
										</tr>
									</thead>
									<tbody class="get-invoice-list">

									</tbody>
								</table>
							</div>
						</div>
					</div>
	            </div>
	            <div class="modal-footer">
	            	<div class="col-sm-12">
	            		<div class="col-sm-11" align="center">
	            			<div class="get-invoice-pagination"></div>
	            		</div>
	            		<div class="col-sm-1" align="center">
	                		<button type="button" class="btn btn-default"  data-dismiss="modal">Cancel</button>
	            		</div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End​ report list -->
	<!-- start keep list -->
	<div class="modal" id="keep-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog add-size-dialog">
	        <div class="modal-content">
	            <div class="modal-header" style="background: #268d43;">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title" style="color: #fff">Keep List</h4>
	            </div                 >
	            <div class="modal-body">
	            	<div class="row">
						<div class="col-sm-12">
							<div class="table-responsive">
								<table class="table table-cursor table-bordered">
									<thead>
										<tr>
											<th width="1%">&numero;</th>
											<th width="10%">Date</th>
											<th>Customer</th>
											<th width="10%">Table N&ordm;</th>
											<th>Note</th>
											<th width="15%">Seller</th>
											<th width="15%">Amount</th>
											<th width="1%" colspan="3" style="text-align: center;">Action</th>
										</tr>
									</thead>
									<tbody class="get-keep-list">
									</tbody>
								</table>
							</div>
						</div>
					</div>
	            </div>
	            <div class="modal-footer">
	            	<div class="col-sm-12">
	            		<div class="col-sm-11" align="center">
	            			<div class="get-keep-pagination"></div>
	            		</div>
	            		<div class="col-sm-1" align="center">
	                		<button type="button" class="btn btn-default btn_keep_cancell"  data-dismiss="modal">Cancel</button>
	            		</div>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End​ keep list -->
	<!-- start change table dialog -->
	<div class="modal" id="change-table" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog modal-dialog-2">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title">Current Table : <span class="tbname"></span></h4>
	            </div>
	            <div class="modal-body">
	            	<div class="row">
						<div class="col-sm-12">
							<!--  -->
							<ul class="nav navbar-nav get-table-loading"></ul>
							<!--  -->
						</div>
					</div>
	            </div>
	            <div class="modal-footer">
	            	<div class="col-sm-12">
	                	<button type="button" class="btn btn-default"  data-dismiss="modal">Cancel</button>
	            	</div>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End​ change table dialog -->
	<!-- Modal for loading form unit-->
	<div class="modal fade" id="myModalFormUnit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
	    <div class="modal-dialog modal-dialogscreen-show-item-unit screen-show-item-unit">
	        <div class="modal-content">
	            <!-- Modal Header -->
	            <div class="modal-header" style="background: #268d43;">
	                <button type="button" class="close" data-dismiss="modal">
	                       <span aria-hidden="true">&times;</span>
	                       <span class="sr-only">Close</span>
	                </button>
	                <h4 class="modal-title" id="myModalLabel" style="color: #fff;"><span id="unit_title"></span><input type="hidden" value="0" class="form-control get_stockid" name="get_stockid" id="get_stockid"/></h4>
	            </div>
	            <!-- Modal Body -->
	            <div class="modal-body" style="overflow: auto !important;">
	                <form role="form">
	                  <!--  lis class  -->
	                  	<div class="col-sm-12" id="block_unit_html"></div>
					          <!-- end list class -->
	                </form>
	            </div>
	            <!-- Modal Footer -->
	            <div class="modal-footer">
	                <button type="button" class="btn btn-danger btn_cancel" data-dismiss="modal"> Cancel </button>
	                <button type="button" class="btn btn-success keep-button"> Done </button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- Modal for loading form unit-->
<!-- set Quantity Message -->
	<div class="modal" id="confirm_input_quantity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header" style="background: #268d43;">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h4 class="modal-title" style="color: #fff">Confirm</h4>
	            </div>
	            <div class="modal-body">
	                <span class="sms-body">Please input quantity first!</span>
	            </div>
	            <div class="modal-footer">
	                <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
	            </div>
	        </div>
	    </div>
	</div>
	<!-- End Quantity Message -->
	<!-- Start Logout Confirm -->
	<div class="modal fade" id="confirm_logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: #268d43;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #fff">Logout</h4>
                </div>
                <div class="modal-body">
                   <!--  <p>You are about to delete <b><i class="title"></i></b> record, this procedure is irreversible.</p> -->
                    <p>Do you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-logout">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Logout Confirm -->

    <!-- Start dialog note for keep data -->
	<div class="modal fade" id="keep_note" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background: #268d43;">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel" style="color: #fff">Choose Table</h4>
                </div>
                <div class="modal-body" style="overflow: auto;">
                	<div class="col-sm-12">
					         <fieldset class="the-fieldset">
	                    	<legend class="the-legend">Type the Note</legend>
	                    	<label class="control-label" for="txt_keep_notice"><span class="note_table_name"></span></label>
	                   		<input type="text" class="form-control" id="txt_keep_notice" keep_attr_table="0" keep_note_table_name="">
	                	</fieldset>
					</div>
					<div class="col-sm-12" style="margin:5px 0px">
					       <fieldset class="the-fieldset">
	                    <legend class="the-legend">Choose the Table</legend>
	                    <div class="get-table"></div>
	                </fieldset>

					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-keep-cancel-clear" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success btn_keep_note">&nbsp;Ok&nbsp;</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End dialog note for keep data -->

  	@section('scripts')
  	<script src="{{ URL::asset('assets/js/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
  	<script src="{{ URL::asset('assets/js/eModal.min.js') }}"></script>
  	<script src="{{ URL::asset('assets/js/bootbox.js') }}"></script>
  	<script src="{{ URL::asset('assets/js/jcarousellite-js/jquery.easing-1.3.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jcarousellite-js/jquery.mousewheel-3.1.12.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jcarousellite-js/jquery.jcarousellite.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.bxslider.js') }}"></script>
	<script src="{{ URL::asset('assets/js/jquery.tinyscrollbar.js') }}"></script>
	<script type="text/javascript">
		$(function(){
			// alertTestng();
			$("#item_categories").val($("#item_categories option:eq(1)").val());
			$('#from_date,#to_date').datepicker({
                format: 'dd-mm-yyyy',
                autoclose : true,
                forceParse: false
            }).on('changeDate', function (ev) {
                $(this).datepicker('hide');
            }).datepicker("setDate", new Date());//status
			$(window).resize(function() {
			 	screenClassToMenu();
			}).trigger("resize");
		});
		function screenClassToMenu() {
			var s = $(window).innerWidth();
		    if(s > 960) {
		       $('.modal-dialogscreen-show-item-unit').addClass('screen-show-item-unit');
		    }else{
		      $('.modal-dialogscreen-show-item-unit').removeClass('screen-show-item-unit');
		    }
		}
		var getDecimalUSD = 0;
		var getCurrencyUSD = 0;
		var getDecimalKHR = 0;
		$(document).ready(function(){
			$('#confirm_logout').on('click', '.btn-logout', function(e) {
	            var $modalDiv = $(e.delegateTarget);
	            $modalDiv.addClass('loading');
	            setTimeout(function() {
	                $modalDiv.modal('hide').removeClass('loading');
	                location.replace("<?php echo url('/auth/logout');?>");
	            }, 1000)
	        });
	        $( "body" ).on('click', '.cl_table', function(e) {
			    	var table_id = $(this).attr("attr_table");
			    	var table_status = $(this).attr("table_status");
			    	var table_name = $(this).attr("attr_table_name");
			    	var check_txt_keep_notice = $("#txt_keep_notice").attr("keep_attr_table");
			    	if(table_status==0){
			    		if(check_txt_keep_notice>0){
				    		if(confirm('Are you want to change.?')){
				    			$(".note_table_name").html('Table Name: '+table_name);
					    		$("#txt_keep_notice").attr("keep_attr_table",table_id).attr("keep_note_table_name",table_name);
					    		$('.cl_table').removeClass('table_active');
		        				$(this).addClass('table_active');
		        				changetable(check_txt_keep_notice);
				    		}
				    	}
				    	else{
				    		$(".note_table_name").html('Table Name: '+table_name);
				    		$("#txt_keep_notice").attr("keep_attr_table",table_id).attr("keep_note_table_name",table_name);
				    		$('.cl_table').removeClass('table_active');
	        				$(this).addClass('table_active');
				    	}
			    	}else{
			    		toastr.error('This table is busy.');
			    	}

		  	});
	        $('#confirm_logout').on('show.bs.modal', function(e) {
	            var data = $(e.relatedTarget).data();
	            $('.title', this).text(data.recordTitle);
	            $('.btn-logout', this).data('recordId', data.recordId);
	        });
			$( "body" ).on('click', '.mini-cart-button', function(e) {
		     	$('.mini-cart-container').toggleClass('mini-cart-open');
		    });
		    $( "body" ).on('click', '.btn_print_receipt', function(e) {
		     	var transno_number = $(this).attr('rel');

		     	bootbox.confirm("Are you sure to want to print.?" , function(result) {
					if(result==true){
						$.ajax({
					        url: "{{ url('/admin/pos/updateStatusPrint') }}",
					        type: "POST",
					        dataType: "json",
					        async:false,
					        data:{
					        	'_token': $('input[name=_token]').val(),
					        	'transno_number':transno_number
					        },
					        success: function(data){
					        	if(data['defaultStatus']==0){
					        		keep_List(1);
					        		window.open("<?php echo url('/admin/receipt');?>"+"/"+transno_number,"_blank","","");
					        	}
					        }
					    });
					}
	   			});
		     	
		    });
		    
		    $( "body" ).on('click', 'a.module_keep', function(e) {
			   var count_table = $('.get-items-table tr').length;//get-items-table
			   var pay_keep_notice = $("#pay_keep_notice").val();
			   var get_keep_attr_table = $("#pay_keep_notice").attr('keep_attr_table');
			   var get_keep_note_table_name = $("#pay_keep_notice").attr('keep_note_table_name');
			   $('.note_table_name').html('Table Name: '+get_keep_note_table_name);
			   $("#txt_keep_notice").val(pay_keep_notice).attr("keep_attr_table",get_keep_attr_table).attr("keep_note_table_name",get_keep_note_table_name);
				if(count_table>0){
					$(this).attr("data-toggle","modal").attr("data-target","#keep_note");
					// $("#pay_keep_notice").val("").attr("keep_attr_table",0);
					tableLoading();
				}else{
					toastr.error('No Data for keeping.');
				}
				e.preventDefault();
		  	});
		   $( "body" ).on('click', '.plus_qty', function(e) {
			    var val = parseInt($(this).prev('input').val());
			    $(this).prev('input').val(val + 1).change();
		  	});
		    $( "body" ).on('click', '.click_on_images', function(e) {
		    	var product_code = $(this).attr('product_unit_id');
			    var val = parseInt($('.plus_qty'+product_code).prev('input').val());
			    $('.plus_qty'+product_code).prev('input').val(val + 1).change();
		  	});
		   	$( "body" ).on('click', '.increase-number,.total_discount', function(e) {
			    $(this).select();
			  });
			 $( "body" ).on('click', '.minus_qty', function(e) {
			    var val = parseInt($(this).next('input').val());
			    if (val !== 0) {
			      $(this).next('input').val(val - 1).change();
			    }
			  });

 			$( "body" ).on('click', '.plus', function(e) {
			    var val = parseInt($(this).prev('input').val());
			    if (val !== 100) {
			    	$(this).prev('input').val(val + 25).change();
				}
		  	});
			 $( "body" ).on('click', '.minus', function(e) {
			    var val = parseInt($(this).next('input').val());
			    if (val !== 0) {
			      $(this).next('input').val(val - 25).change();
			    }
			  });
			$('.totalprices_hide').val(0);
			$('#total_prices_khr_hide').val(0);
			var width = $(window).width();
			var height = $(window).height();
			var page = 1;
			if(width >=768 && width <=1200){
				var perpage = 12;
				var scroll_visible = 7;
				$('.check-screen').addClass('check-screen-small');
			}else{
				var perpage = 30;
				var scroll_visible = 10;
				if(height > 845){
					$('.check-screen').addClass('check-screen-larg-845');
				}else if(height >589 && height <=845){
					$('.check-screen').addClass('check-screen-small-845');
				}

				$('.add-size-dialog').addClass('add-size-dialog-1000px');
			}
			$('#Update-Customer').hide();
			$('#check_table_name').val(0);
		   	$('#scrollbar1').tinyscrollbar();
		    var mySlider =   $('.slide-next-prev-running').bxSlider({
								nextSelector: '#pronext',
								prevSelector: '#proprev',
								mode:'horizontal',
								startSlide: 0,
								infiniteLoop: false,
								hideControlOnEnd: true,
								prevText: '',
								nextText: '',
								minSlides: 5,
								maxSlides: 5,
								slideWidth:'.col-lg-2-2',
								slideMargin: 0,
								pager:false,
								responsive: true,
								easing: null,
								touchEnabled: true,
								oneToOneTouch: true,
								speed: 500,
								slidesToShow: 5,
								slidesToScroll: 1,
								autoplay: true,
								autoplaySpeed: 1000,
    						});
		    // 	slideWidth:120,
		   $('#pronext').click(function(){
			      mySlider.goToNextSlide();
			      return false;
		    });
		    $('#proprev').click(function(){
		      mySlider.goToPrevSlide();
		      return false;
		    });
			$(".carousel").jCarouselLite({
                btnNext: ".next-table",
                btnPrev: ".prev-table",
		        scroll: scroll_visible,
		        mouseWheel: true,
		        circular: false,
		        visible: scroll_visible
            });
             getTatas(page,1);

			$(".item-next").click(function(e){
				var catId = $('.acive_category').attr('rel');
				var endpage = $("#endpage").val();
				var next =$('#next').val();
				if(next==endpage){
					return false
				}else{
					page += 1;
					if(page==endpage){
						$(this).hide();
						$(".item-prev").show();
					}
					getTatas(page,catId);
				 }
				 e.preventDefault();

			});

			$(".item-prev").click(function(e){
				var catId = $('.acive_category').attr('rel');
				var next = $('#next').val();
				if(next==1){
					return false
				}else{
					page -= 1;
					if(page==1){
						$(this).hide();
						$(".item-next").show();
					}
					getTatas(page,catId);
				}
				 e.preventDefault();
			});
			$('#item_categories').on('change',function(){
				var search_categories = $(this).val();
				getTatas(1,search_categories);
			});

			$('#search_item').on('keyup',function(){
				var search_item = $(this).val();
				var search_categories =$('#item_categories option:selected').val();
				getTatas(1,search_categories,'',search_item);
			});
			function getTatas(page,category_id='',itemscode='',item_description){
				$.ajax({
			        url: "{{ url('/admin/pos/getDataItem') }}",
			        type: "POST",
			        dataType: "json",
			        async:false,
			        data: {
			          '_token': $('input[name=_token]').val(),
			          'itemscode':itemscode,
			          'category_id':category_id,
			          'item_description':item_description,
			          'page':page,
			          'perpage':30
			        },
			        success: function(data){
			        	$(".get-item").html(data['data']).animate({ scrollLeft: 0 }, "fast");
			        	$('#next').val(data['next']);
			        	$("#endpage").val(data['endpage']);
			        	// $(".total-table-number").text(data['totalTable']);
			        	if(data['endpage']<=1){
			        		$(".item-next").hide();
			        		$(".item-prev").hide();
			        	}
			        },
					beforeSend: function() { $('.proccess_loading').show(); },
        			complete: function() { $('.proccess_loading').hide();}
			    });
			}
			setDefaultValue();
			$( "body" ).delegate( "a.cate_process", "click", function(event) {
				event.preventDefault();
			 	var cateid = $(this).attr('rel');
			 	$('.acive_category').removeClass('acive_category');
				$(this).addClass('acive_category');
			 	getTatas(1,cateid,'');
			 	return false;
			});
			$( "body" ).delegate( "a.tblProccess", "click", function(e) {
				var custid = $('.get-customer-name').val();
					var f = $(this).parent().parent(),
					getTbleId = $(this).attr('rel'),
					tablename = f.find(".free-tbl").attr('rel');
					$('.settblid').val(getTbleId);
					$('#check_table_name').val(1);
					$('.tbl_acive').removeClass('tbl_acive');
					$(this).addClass('tbl_acive');
					$('.images-src').removeClass('acive');
					f.find('.images-src').addClass('acive');

					$("#table-item > tbody:last").children().remove();
					showDataItem(getTbleId);
					sumTotal();
					$('.remaining_usd_khr').html(numberFormat(0,getDecimalUSD));
					$('.change_usd_khr').html(numberFormat(0,getDecimalUSD));
			});
			$( "body" ).delegate( "a.module-process-12", "click", function(e) {
				var tableid = $('.settblid').val();
				var rowCount = $('#table-item > tbody > tr').length;
				if(rowCount > 0){
					bootbox.confirm("Are you sure to want to cancel.?" , function(result) {
						if(result==true){
							$.ajax({
						        url: "{{ url('/admin/pos/deleteInvoiceTemp') }}",
						        type: "POST",
						        dataType: "json",
						        async:false,
						        data:{
						        	'_token': $('input[name=_token]').val(),
						        	'tableid':tableid
						        },
						        success: function(data){
						        	if(data['del_inv_temp']=='deleted'){
						        		$("#table-item > tbody:last").children().remove();
						        		sumTotal();
						        	}

						        }
						    });
						}
		   			});
				}else{
					bootbox.alert("Have no record to delete!");
				}
				return false;
			});

			
			$( "body" ).delegate( "a.module_pending", "click", function(e) {
				keep_List(1);
				$('#keep-list').modal({
	   			 	backdrop: 'static',
	   			 	keyboard: true
	   			 });
				return false;
			});
			$( "body" ).delegate( "a.module_daily_sale", "click", function(e) {
				getInvoiceList(1);
				$('#invoice-list').modal({
	   			 	backdrop: 'static',
	   			 	keyboard: true
	   			 });
				return false;
			});

		$( "body" ).delegate( ".select_customer:checkbox", "click", function() {
		    var $this = $(this);
		    var cname = $this.attr('title');
		    var customer_code = $this.attr('deb');
		    // alert(customer_code+'=>'+cname);
		    if ($this.is(':checked')) {
		       $('.customer-name').html(cname);
		       $('.get-customer-name').val($this.val());
		       $('.get-customer-code').val(customer_code);
		       $('#close-dialog-customer').click();
		       $(this).attr('checked',false);
		    }
		});
		
		$( "body" ).delegate( ".delete_invoice", "click", function() {
			var delinv = $(this);
			var inv_id = delinv.attr('rel');
			bootbox.confirm("Are you sure to want to delete.?" , function(result) {
				if(result==true){
					$.ajax({
				        url: "{{ url('/admin/pos/deleteInvoice') }}",
				        type: "POST",
				        dataType: "json",
				        async:false,
				        data:{
				        	'_token': $('input[name=_token]').val(),
				        	'inv_id':inv_id
				        },
				        success: function(data){
				        	if(data['del_inv']=='deleted'){
				        		delinv.closest('tr').remove();
				        		getInvoiceList(1);
				        	}

				        }
				    });
				}
   			});
		});
		$( "body" ).delegate( ".keep_delete", "click", function() {
			var delinv = $(this);
			var inv_id = delinv.attr('rel');
			bootbox.confirm("Are you sure to want to delete.?" , function(result) {
				if(result==true){
					$.ajax({
				        url: "{{ url('/admin/pos/deletekeep') }}",
				        type: "POST",
				        dataType: "json",
				        async:false,
				        data:{
				        	'_token': $('input[name=_token]').val(),
				        	'inv_id':inv_id
				        },
				        success: function(data){
				        	if(data['del_inv']=='deleted'){
				        		delinv.closest('tr').remove();
				        		keep_List(1);
				        		toastr['success']('The data successfully deleted.');
				        	}

				        }
				    });
				}
   			});
		});
		$( "body" ).delegate( "a.makeOrder", "click", function(e) {
		 	var f = $(this).parent().parent(),
		 	itemcode = $(this).attr('rel'),
		 	items_prices = f.find('.items_prices').val(),
		 	items_description = f.find('.items_description').val(),
		 	items_cate_code = f.find('.items_cate_code').val(),
		 	items_barcode = f.find('.items_barcode').val();
			$.ajax({
				url: "{{ url('/admin/pos/showItemByUnit') }}",
				type: "POST",
				dataType: "json",
				async:false,
				data: {
				  '_token': $('input[name=_token]').val(),
				  itemcode:itemcode,
				  items_prices:items_prices,
				  items_description:items_description,
				  items_cate_code:items_cate_code,
				  items_barcode:items_barcode,
				  page:1,
				  perpage:9
				},
				success: function(list){
					$("#get_stockid").val(itemcode);
					$("#unit_title").html(items_description);
					var unit_row='';
				    $.each(list['list'],function(i,item)
				    {
				    	var i_d = (i+1);
				        var unit_id =item['id'];
				        var description = item['description'];
				        var get_is_sugar = item['is_sugar'];
				        var set_attr_product = 'product_unit_id="'+unit_id+'" product_code="'+itemcode+'" product_description="'+items_description+'" product_price="'+item['price']+'" pro_unit_size="'+item['unit_abbreviation']+'"';
				        unit_row+='<div class="col-sm-6">';
						unit_row+='<div class="thumbnail" style="padding: 0" align="center" style="margin:0 auto;">';
						unit_row+='<div class="click_on_images" '+set_attr_product+'>';
						unit_row+='<div style="padding:4px">';
							if(item['stock_img']!=''){
								unit_row+='<a href="JavaScript:void('+itemcode+');"><img class="img-responsive img-rounded img-padding" alt="300x200"  src="{{ URL::asset("assets/uploads/stock/items") }}/'+item['stock_img']+'"></a>';
							}else{
								unit_row+='<a href="JavaScript:void('+itemcode+');"><img class="img-responsive img-rounded img-padding" alt="300x200"  src="{{ URL::asset("assets/images/NoImage.png") }}"></a>';
							}
							unit_row+='</div>';
							unit_row+='<div class="caption">';
								unit_row+='<h2>'+item['unit_abbreviation']+'</h2>';
								unit_row+='<h2><i class="icon icon-map-marker"></i> '+numberFormat(item['price'],getDecimalUSD)+' $</h2>';
							unit_row+='</div>';
							unit_row+='</div>';
								unit_row+='<div class="modal-footer" style="text-align: center;margin-bottom:-20px;">';
									unit_row+='<div class="form-group" style="margin-top:-15px;">';
									unit_row+=' <h5>Quantity</h5>';
							          unit_row+='<input class="minus_qty btn" type="button" value="-">';
							          unit_row+='<input  value="0" '+set_attr_product+' class="increase-number input-text text unit_size_qty" size="4" id="increase-number'+unit_id+'"/>';
							          unit_row+='<input class="plus_qty plus_qty'+unit_id+' btn" type="button" value="+">';
							        unit_row+='</div>';
								unit_row+='</div>';


								unit_row+='<div class="modal-footer '+(get_is_sugar==0?"hide":"")+'" style="text-align: center;margin-bottom:-20px;">';
								unit_row+='<div class="form-group">';
								unit_row+=' <h5>Sugar Level</h5>';
						          unit_row+='<input class="minus btn" type="button" value="-">';
						          unit_row+='<input  value="'+(get_is_sugar==0?"0":100)+'" class="increase-number input-text text sugare_percent'+unit_id+'" size="4" id="increase-number'+unit_id+'"/>';
						          unit_row+='<input class="plus btn" type="button" value="+">';
						        unit_row+='</div>';
					        unit_row+='</div>';
						unit_row+='</div>';
					unit_row+='</div>';
				    });
				    if(unit_row==""){
				    		  unit_row+='<div class="col-sm-12 col-md-12">';
						            unit_row+='<div class="alert alert-info">';
						                unit_row+='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>';
						                unit_row+='<span class="glyphicon glyphicon-info-sign"></span> <strong>Not found</strong>';
						                unit_row+='<hr class="message-inner-separator"><p>We did not find anything to show here!</p>';
						            unit_row+='</div>';
						        unit_row+='</div>';
				    }
					$("#block_unit_html").html( unit_row );
					//make popup 'block unit' center
					var counter = $("#block_unit_html .col-sm-6").length;
					if(counter==1){
						$("#block_unit_html .col-sm-6").css("margin-left","25%");
					}
				}
			});
			$('#myModalFormUnit').modal({show:true});
		 	e.preventDefault();
		 	return false;
		});
		$('body').delegate('.keep-button','click', function(e) {
				var count_qyt=0;
				$('.unit_size_qty').each(function(i){
					var qyt_unit = $(this).val()-0;
					var product_unit_id = $(this).attr('product_unit_id');
				  	var get_product_code = $(this).attr('product_code');
				  	var product_description = $(this).attr('product_description');
				  	var pro_unit_size = $(this).attr('pro_unit_size');
				  	var get_product_price = $(this).attr('product_price');
				  	var sugare_percent = $(".sugare_percent"+product_unit_id).val();
				  	if(qyt_unit>0){
				  		if(itemExist(product_unit_id)==1){
				 			$('.setitemcode').each(function(i){
				 				var oldqty=0;
								var row=$(this).parent().parent();
									if(product_unit_id==$(this).val()){
										oldqty=row.find('.quantity').val()-0;
										row.find('.quantity').val(oldqty+qyt_unit);
									}
								sumPriceByLine(row);
							});
				 		}
				 		else{
				 			itemAdd(get_product_code,product_unit_id,product_description,qyt_unit,pro_unit_size,get_product_price,sugare_percent);
				 		}
				  		count_qyt=1;
				  	}
				});
			  	if(count_qyt==0){
			  		$('#confirm_input_quantity').modal({show:true});
			  	}else{
			  		$(".btn_cancel").click();
			  		sumTotal()
			  	}
		    });
			
		    $( "body" ).delegate(".btn_pay_now", "click", function() {
		    	var set_pay_usa = $("#pay_in_usa").val();
		    	var pay_object_note = $("#pay_keep_notice");
				var keep_notice     = pay_object_note.val();
				var table_id        = pay_object_note.attr("keep_attr_table");
				if(set_pay_usa>0){
			    	$.ajax({
						type : 'POST',
						url : "{{ url('/admin/queue/getQueueCode') }}",
						dataType : 'Json',
						data : {
							'_token' : '{{ csrf_token() }}'
						},
						success:function(data){
							$.ajax({
						        url: "{{ url('/admin/pos/savePayment') }}",
						        type: "POST",
						        dataType: "json",
						        async:false,
						        data:getObjectValue(data.number,table_id,keep_notice),
						        success: function(data){
						        	if(data['save']=='save'){
						        		$("#table-item > tbody").html("");
							        	$(".get_transno").val(0);
							        	sumTotal();
							        	toastr.success('The data successfully paid.');
							        	tableLoading();
							        	clear_customer();
							        	window.open("<?php echo url('/admin/invoice');?>"+"/"+data['transno'],"_blank","","");
						        	}

						        }
						    });
						},
						beforeSend: function() { $('.proccess_loading').show(); },
	        			complete: function() { $('.proccess_loading').hide();}
					});
		    	}else{
		    		toastr['error']("Can not pay!")
		    	}
			});
		    $( "body" ).delegate( ".btn_pay_selected", "click", function() {
				$( "#paynow" ).removeClass( "btn_pay_now" ).addClass( "btn_pay_by_selected" );
				var payf = $(this);
				var row_master_id       = payf.attr("attr_row_master_id");
				var keep_notice         = payf.attr("attr_comment");
				var table_id            = payf.attr("attr_table_id");
				var customerid          = payf.attr("attr_customerid");
				var userid              = payf.attr("attr_userid");
				var row_total_discount  = payf.attr("attr_total_discount");
                var row_total_qty_print = payf.attr("attr_total_qty_print");
				var total_amount        = payf.attr("attr_total_amount");
			    var is_p_select         = 0;
				var set_totalprice      = 0;
				$(".pay_selected:checked").each(function(i){
					var set_tr = $(this).parent().parent();
					var get_dis_per = set_tr.find(".set_dis_per").val();
					var get_qty = set_tr.find(".set_qty").val();
					var get_price = set_tr.find(".set_price").val();
					var total_amount_by_line = (((get_qty*get_price)*(1-get_dis_per/100))-0);
				  	set_totalprice+=total_amount_by_line;
					is_p_select++;
				});
				if(is_p_select>0 && set_totalprice>0){
					$("#select_pay_by_row_master_id").val(row_master_id);
					$("#select_pay_by_customer").val(customerid);
					$("#select_pay_by_table").val(table_id);
					$("#select_pay_by_user").val(userid);
					$("#select_pay_by_note").val(keep_notice);
					$("#select_pay_by_total_discount").val(row_total_discount);
					$("#select_pay_by_total_qty_print").val(row_total_qty_print);
					$("#select_pay_by_total_amount").val(total_amount);
					calculate_pay(set_totalprice);
					$('#Payment').modal({
		   			 	backdrop: 'static',
		   			 	keyboard: false
		   			 });
				}else{
					toastr['error']('Please check first.!');
				}
			});
			
			$( "body" ).on('click', '.btn_pay_keep', function() {
		     	var transno = $(this).attr('rel');
		     	$(".pay_selected_width_checked"+transno).prop( "checked", true );
		     	$( "#paynow" ).removeClass( "btn_pay_now" ).addClass( "btn_pay_by_selected" );
			    $.ajax({
			        url: "{{ url('/admin/pos/getDataPayKeep') }}",
			        type: "POST",
			        dataType: "json",
			        async:false,
			        data:{
				          '_token'                 :$('input[name=_token]').val(),
				          'transno'                :transno
				        },
			        success: function(data){
			        	$("#select_pay_by_row_master_id").val(data[0]['id']);
						$("#select_pay_by_customer").val(data[0]['customerid']);
						$("#select_pay_by_table").val(data[0]['table_id']);
						$("#select_pay_by_user").val(data[0]['user']);
						$("#select_pay_by_note").val(data[0]['comment']);
						$("#select_pay_by_total_discount").val(data[0]['total_discount']);
						$("#select_pay_by_total_qty_print").val(data[0]['qty_print']);
						$("#select_pay_by_total_amount").val(data[0]['amount_line']);
						var is_p_select         = 0;
						var set_totalprice      = 0;
						$(".pay_selected:checked").each(function(i){
							var set_tr = $(this).parent().parent();
							var get_dis_per = set_tr.find(".set_dis_per").val();
							var get_qty = set_tr.find(".set_qty").val();
							var get_price = set_tr.find(".set_price").val();
							var total_amount_by_line = (((get_qty*get_price)*(1-get_dis_per/100))-0);
						  	set_totalprice+=total_amount_by_line;
							is_p_select++;
						});
						if(is_p_select>0 && set_totalprice>0){
							calculate_pay(set_totalprice);
							$('#Payment').modal({
				   			 	backdrop: 'static',
				   			 	keyboard: false
				   			 });
						}else{
							toastr['error']('Please check first.!');
						}
			        }
			    });
		    });
		    $( "body" ).delegate(".btn_pay_by_selected", "click", function() {
		    	var set_pay_usa = $("#pay_in_usa").val();
				if(set_pay_usa>0){
					pay_by_selected_item($(".pay_selected:checked"));
		    	}else{
		    		toastr['error']("Can not pay!")
		    	}
			});
			$( "body" ).delegate( ".btn_keep_note", "click", function() {
				var count_table = $('.get-items-table tr').length;
				if(count_table){
					save_data();
					clear_customer();
					toastr.success('The data successfully keeped.');
					$(".btn-keep-cancel-clear").click();
				}else{
					toastr.error('No, Data to canceled.');
				}
			});

			$( "body" ).delegate( "a.module_pay", "click", function(e) {
				var count_table = $('.get-items-table tr').length;
				$( "#paynow" ).removeClass( "btn_pay_by_selected" ).addClass( "btn_pay_now" );
				if(count_table > 0){
					var total_money_is_dollar= $('.totalprices_hide').val();
					calculate_pay(total_money_is_dollar);
					$('#Payment').modal({
		   			 	backdrop: 'static',
		   			 	keyboard: false
		   			 });
				}else{
				bootbox.alert("No item to payment");
				}
				return false;
			});
			$( "body" ).delegate( "a.module_cancel", "click", function(e) {
				var count_table = $('.get-items-table tr').length;
				if(count_table){
					$("#table-item > tbody").html("");
					sumTotal();
					toastr.success('The data successfully canceled.');
				}else{
					toastr.error('No, Data to canceled.');
				}

			});
			$( "body" ).delegate( ".discount,.quantity,.setprice", "keyup", function(e) {
				var row = $(this).closest('tr');
				sumPriceByLine(row);
				sumTotal();
			});

			$( "body" ).delegate( "#pay_in_usa,#pay_in_khr,.discount,.quantity,.setprice", "click", function(e) {
				$(this).select();
			});
			$( "body" ).delegate("#pay_in_khr", "keyup", function(e) {
				$("#pay_in_usa").val(0);
			});
			$( "body" ).delegate(".pay_selected", "click", function(e) {
				var pay_selected_len = $(".pay_selected:checked").length;
				var attr_master=0;
				$(".pay_selected:checked").each(function(i){
					attr_master = $(this).attr("attr_master");
				});
				if(pay_selected_len==0){
					$(".count_pay_selected").html("");
				}else{
					$(".count_pay_selected"+attr_master).html(pay_selected_len+" Items");	
				}
				
			});
			$( "body" ).delegate( ".discount,.quantity,.setprice", "keyup", function(e) {
				if($(this).val()==""){$(this).val(0);}
			});
			$('#pay_in_usa').on('keyup',function(){
// remaining_usd_khr_hide
	       		var pay_usd = $(this).val()-0;
	       		var pay_khr = ($('#pay_in_khr').val()/getCurrencyUSD)-0;
	       		var total_usd = $('#hidden_total_in_usa').val()-0;
	       		var con_usd=0
	       		if(pay_usd <=total_usd && pay_khr <=total_usd){
	       			con_usd = total_usd-(pay_usd+pay_khr);
	       		}else{
	       			con_usd = (pay_usd-total_usd)+pay_khr;
	       		}
	       		$('.remaining_usd_khr').html(numberFormat(con_usd,getDecimalUSD));
       			$('#remaining_usd_khr_hide').val(con_usd);
       			$('.change_usd_khr').html(commaSeparateNumber(numberFormat(con_usd*getCurrencyUSD,getDecimalUSD)));
       			$('#change_usd_khr_hide').val(con_usd*getCurrencyUSD);

	       	});
	       	$('#pay_in_khr').on('keyup',function(){
	       		var pay_khr = ($(this).val()/getCurrencyUSD)-0;
	       		var pay_usa = $('#pay_in_usa').val()-0;
	       		var total_usd = $('#hidden_total_in_usa').val()-0;
	       		var con_usd =0;
	       		if(pay_usa <= total_usd){
	       			con_usd =total_usd-(pay_khr+pay_usa);
	       		}else{
	       			con_usd =(pay_usa+pay_khr)-total_usd;
	       		}
	       		$('.remaining_usd_khr').html(numberFormat(con_usd,getDecimalUSD));
	       		$('#remaining_usd_khr_hide').val(con_usd);
	       		$('.change_usd_khr').html(commaSeparateNumber(numberFormat(con_usd*getCurrencyUSD,getDecimalUSD)));
	       		$('#change_usd_khr_hide').val(con_usd*getCurrencyUSD);
	       	});

			$('#select_item_auto').autocomplete({
		        source: function( request, response ) {
		      		$.ajax({
		      			url : "{{ url('/admin/pos/getItemsCode') }}",
		      			type: "POST",
		      			dataType: "json",
						data: {
						   '_token': $('input[name=_token]').val(),
						   'itemcode': request.term
						},
						 success: function( data ) {
							 response( $.map( data, function( item ) {
								return {label: item.des+' '+item.queued_number,value:item.queued_number};
							}));
						}
		      		});
		      	},
		      	autoFocus: true,
		      	minLength: 0
		    }).focus(function(){
	            $(this).autocomplete("search");
	    	});
		    $( "body" ).delegate( "#check_customer", "click", function(e) {
		    	var is_check_customer = $(this);
		    	if(is_check_customer.is(":checked")){
		    		clearAllObj();
					$('#customer_information').modal({
		   			 	backdrop: 'static',
		   			 	keyboard: false
		   			 }).on('click', '#Save-Customer', function (e) {
		   			 	saveUpdateCust();
				        return false;
			        }).on('click', '#Search-Customer', function (e) {
			           loadingCustomer(1);
			           return false;
			        });
		    	}else{
		    		clear_customer();
		    	}
			});
			$('#Update-Customer').on('click', function (e) {
	        	saveUpdateCust();
		        return false;
		    });
			$( "body" ).on('click', '.get-customer-pagination > .pagination a', function(e) {
				var page = $(this).attr('href').split('page=')[1];
				var cust_code = $('#cust_code').val();
		        loadingCustomer(page);
	            e.preventDefault();
	        });
	        $( "body" ).on('click', '.get-invoice-pagination > .pagination a', function(e) {
				var page = $(this).attr('href').split('page=')[1];
		        getInvoiceList(page);
	            e.preventDefault();
	        });
	        $( "body" ).on('dblclick', 'tr.cus-edite_', function(e) {
				var cid = $(this).attr('rel'),
				cust_code = $('#cust_code'),
				cust_name = $('#cust_name'),
				cust_tell = $('#cust_tell'),
				gender =  $('#gender'),
				currency =  $('#currency'),
				cust_email = $('#cust_email'),
				get_cust_id = $('#get_cust_id');
				$.ajax({
			        url: "{{ url('/admin/pos/editeCustomer') }}"+'/' + cid,
			        type: "POST",
			        dataType: "json",
			        async:false,
			        data: {
			          '_token': $('input[name=_token]').val(),
			          'cust_id':cid
			        },
			        success: function(data){
			    		 $.map( data, function( item ) {
							cust_code.val(item['debtorno']);
							cust_name.val(item['name']);
							cust_tell.val(item['phone']);
							gender.val(item['sex']);
							currency.val(item['currcode']);
							cust_email.val(item['custemail']);
							get_cust_id.val(item.id);
							$('#Save-Customer').hide();
							$('#Update-Customer').show();
						});
			        }
			    });
	        });
	        $( "body" ).on('click', '.btn_search_inv', function(e) {
				getInvoiceList(1);
	        });

	    function getInvoiceList(page){
			var datas={
						'_token': $('input[name=_token]').val(),
						'from_date':$('#from_date').val(),
						'to_date':$('#to_date').val(),
						'table_number':0,
						'invoice':$('#invoice').val(),
						'Customer':$('#Customer').val(),
						'salesman':$('#salesman').val(),
						'page':page
					}
			$.ajax({
		        url: "{{ url('/admin/pos/getInvoiceList') }}",
		        type: "POST",
		        dataType: "json",
		        async:false,
		        data:datas,
		        success: function(data){
		        	console.log(data['invoice']);
		        	$('.get-invoice-list').html(data['invoice']);
		        	$('.get-invoice-pagination').html(data['pagination']);

		        },
		        beforeSend: function() { $('.proccess_loading').show(); },
        		complete: function() { $('.proccess_loading').hide();}
		    });
		}
		function keep_List(page){
			var datas={
					'_token': $('input[name=_token]').val(),
					'page':page
			}
			$.ajax({
		        url: "{{ url('/admin/pos/keeplist') }}",
		        type: "POST",
		        dataType: "json",
		        async:false,
		        data:datas,
		        success: function(data){
		        	$('.get-keep-list').html(data['invoice']);
		        	$('.get-keep-pagination').html(data['pagination']);
		        },
		        beforeSend: function() { $('.proccess_loading').show(); },
        		complete: function() { $('.proccess_loading').hide();}
		    });
		}
		
		function showDataItem(setTbleId){
			$.ajax({
		        url: "{{ url('/admin/pos/showDataItem') }}",
		        type: "POST",
		        dataType: "json",
		        async:false,
		        data: {
		          '_token': $('input[name=_token]').val(),
		          setTbleId:setTbleId
		        },
		        success: function(data){
		        	console.log(data['rows']);
		        	$('.get-items-table').html(data['rows']);
		        	$('.customer-name').html(data['name']);
			        $('.get-customer-name').val(data['id']);
			        $('.get-customer-code').val(data['debtorno']);
		        },
		        beforeSend: function() { $('.proccess_loading').show(); },
        		complete: function() { $('.proccess_loading').hide();}
		    });
		}

		function getObjectValue(queue_number='',table_id='',keep_notice=''){
			var arrItem         =[];
			var keep_object_note= $("#txt_keep_notice");
			if(table_id==''){
				var table_id    = keep_object_note.attr("keep_attr_table");
			}
			if(keep_notice==''){
				var keep_notice = keep_object_note.val();
			}
			var transno         = $('.get_transno').val();
			var remaining_money = $('#remaining_usd_khr_hide').val();
			var totalprices     = $('.totalprices_hide').val()-remaining_money-0;
			var c_code          = $('.get-customer-code').val();
			var totaldiscount   = 0;
			var totalqty        = 0;
			$('.setitemcode').each(function(i) {
				var fob            = $(this).parent().parent(),
					productcode    = $(this).attr("productcode"),
					itemcode       = $(this).val(),
					description    = $(this).attr("description"),
					sugare_percent = fob.find('.sugare_percent').val(),
					size_of_unit   = fob.find('.size_of_unit').val(),
					discount       = fob.find('.discount').val()-0,
					quantity       = fob.find('.quantity').val()-0,
					setprice       = fob.find('.setprice').val();
			  		arrItem[i]={
			  				'productcode'	 :productcode,
			  				'itemcode'	     :itemcode,
			  				'description'    :description,
			  				'sugare_percent' :sugare_percent,
			  				'size_of_unit'   :size_of_unit,
			  				'discount' 	     :discount,
			  				'quantity' 	     :quantity,
			  				'prices'	     : setprice,
			  				'amount_line'    : ((quantity*setprice)*(1-discount/100))-0,
			  			}
			  	totaldiscount+=discount-0;
			  	totalqty+=quantity-0;
			});
			//alert(totaldiscount); return false;
				var datas = {
					          '_token': $('input[name=_token]').val(),
					          'arrItem':arrItem,
					          'queue_number':queue_number,
					          'totalqty':totalqty,
					          'totaldiscount':totaldiscount,
					          'totalprices':totalprices,
					          'remaining':remaining_money,
					          'tbleID':table_id,
					          'customercode':c_code,
					          'transno':transno,
					          'keep_notice':keep_notice
					        };
				return datas;
			}
			function save_data(){
				$.ajax({
			        url: "{{ url('/admin/pos/saveDataItem') }}",
			        type: "POST",
			        dataType: "json",
			        async:false,
			        data:getObjectValue(),
			        success: function(data){
			        	$("#table-item > tbody").html("");
			        	$("#txt_keep_notice").val('');
						sumTotal();
			        },
			        beforeSend: function() { $('.proccess_loading').show(); },
        			complete: function() { $('.proccess_loading').hide();}
			    });
			}


	        function saveUpdateCust(){
	        	var cust_code = $('#cust_code'),
				cust_name = $('#cust_name').val(),
				cust_tell = $('#cust_tell').val(),
				cust_email = $('#cust_email'),
				gender = $('#gender').val(),
				currency = $('#currency').val(),
				get_cust_id = $('#get_cust_id').val();
				if(cust_code.val() =='' || cust_code.val().length==0){
					cust_code.addClass('border');
				}
				else if(cust_email.val() =='' || cust_email.val().length==0){
					cust_code.removeClass('border');
					cust_email.addClass('border');
				}else{
					cust_email.removeClass('border');
					$.ajax({
				        url: "{{ url('/admin/pos/saveCustomer') }}",
				        type: "POST",
				        dataType: "json",
				        async:false,
				        data: {
				          '_token': $('input[name=_token]').val(),
				          'cust_code':cust_code.val(),
				          'cust_name':cust_name,
				          'cust_tell':cust_tell,
				          'cust_email':cust_email.val(),
				          'gender':gender,
				          'currency':currency,
				          'get_cust_id':get_cust_id
				        },
				        success: function(data){
				        	if(data['data']=='saved'){
				        		toastr.success('Data successful saved.');
				        		loadingCustomer(1);
				        		clearAllObj()
				        	}else if(data['data']=='updated'){
				        		toastr.success('Data has been updated.');
				        		loadingCustomer(1);
				        		clearAllObj()
				        		$('#get_cust_id').val(0);
				        		$('#Save-Customer').show();
	        					$('#Update-Customer').hide();
				        	}else if(data['data']=='exists_code'){
				        		bootbox.alert("The customer code: "+cust_code.val()+" has been existed, please try again.");
				        	}else if(data['data']=='exists_email'){
				        		bootbox.alert("The Email: "+cust_email.val()+" has been existed, please try again.");
				        	}

				        }
				    });
				}
	        }
	        function setDefaultValue(){
				$('#pay_in_usa').val(0);
				$('#pay_in_khr').val(0);
				$('.settblid').val(0);
				$('#hidden_total_in_usa').val(0);
				$('#remaining_usd_khr_hide').val(0);
				$('#change_usd_khr_hide').val(0);
				$('.totalprices').html(numberFormat(0,getDecimalUSD));
				$('.customer-name').html('');
				$('.get-customer-code').val('Default');
		        $('.get-customer-name').val(0);
			}
	        function clearAllObj(){
	        	$('#cust_code').val('');
				$('#cust_name').val('');
				$('#cust_tell').val('');
				$('#cust_email').val('');
				$('#gender').val(0);
				$('#currency').val(0);
				$('#get_cust_id').val(0);
				$('#Save-Customer').show();
	        	$('#Update-Customer').hide();
	        }
  			function loadingCustomer(page){
  				var cust_code = $('#cust_code').val();
	        	var cust_tell = $('#cust_tell').val();
	        	var cust_name = $('#cust_name').val();
				$.ajax({
			        url: "{{ url('/admin/pos/loadingCustomer') }}"+'?page=' + page,
			        type: "POST",
			        dataType: "json",
			        async:false,
			        data: {
			          '_token': $('input[name=_token]').val(),
			          'cust_code':cust_code,
			          'cust_name':cust_name,
			          'cust_tell':cust_tell
			        },
			        success: function(data){
			        	$('.get-customer-table').html(data['data']);
			        	$('.get-customer-pagination').html(data['pagination']);
			        }
			    });
			}

		});
		function tableLoading(){
			$.ajax({
		        url: "{{ url('/admin/pos/tableLoading') }}",
		        type: "POST",
		        dataType: "json",
		        async:false,
		        data: {
		          '_token': $('input[name=_token]').val(),
		        },
		        success: function(data){
		        	$('.get-table').html(data['data']);
		        }
		    });
		}
		function changetable(tableid){
			$.ajax({
		        url: "{{ url('/admin/pos/changetable') }}",
		        type: "POST",
		        dataType: "json",
		        async:false,
		        data: {
		          '_token': $('input[name=_token]').val(),
		          "tableid":tableid
		        },
		        success: function(data){

		        }
		    });
		}
		function delete_item(event){
			  $(event.target).closest('tr').remove();
			  sumTotal();
		}
	  function itemExist(id){
			var result=0;
			var arrItemSelected=[];
			$(".setitemcode").each(function(i){
				if($(this).val()!=""){
					arrItemSelected[i]=$(this).val();
				}
			});
			if($.inArray(id,arrItemSelected)!=-1){
				result=1;
			}
			return result;
		}
		  function itemAdd(get_product_code,itemcode,description,quantity,pro_unit_size,prices,sugare_percent){
				var df = $('#scrollbar1').parent().parent();
				var item_code=($("#table-item > .get-items-table tr").size())-0+1;
				var cla = ((item_code%2)?'class="info text-title-item-list"':'class="active text-title-item-list"');
				var total_line_price =(quantity*prices)-0;
				var addItem = '<tr '+cla+'>'+
		                        '<td><input id="setitemcode" class="form-control setitemcode width-50px" productcode="'+get_product_code+'" description="'+description+'" value="'+itemcode+'" type="hidden" name="setitemcode">'+description+' ('+pro_unit_size+')'+(sugare_percent>0?'<br/>Sugars '+sugare_percent+'%':'')+'</td>'+
		                        '<td align="center">'+
		                        	'<div class="form-group">'+
		                        		'<input id="size_of_unit" class="form-control size_of_unit width-50px" type="hidden" value="'+pro_unit_size+'" name="size_of_unit">'+
		                        		'<input id="sugare_percent" class="form-control sugare_percent width-50px" type="hidden" value="'+sugare_percent+'" name="sugare_percent">'+
		                        		'<input id="discount" onkeypress="return isNumberKey(event);" class="form-control discount width-50px" type="text" placeholder="Dis." value="0" name="discount">'+
		                        	'</div>'+
		                        '</td>'+
		                        '<td align="center">'+
		                            '<div class="form-group">'+
							  			'<input id="quantity" class="form-control quantity width-50px" type="text" placeholder="Qty" value="'+quantity+'" name="quantity">'+
						  			'</div>'+
					  			'</td>'+
		                        '<td align="center">1</td>'+
		                        '<td align="center"><input id="setprice" class="form-control setprice width-50px" type="text" value="'+parseFloat(prices)+'" name="setprice"><span class="label_price display">'+parseFloat(prices)+' $</span></td>'+
		                        '<td align="center"><input id="set_total_price" class="form-control set_total_price width-50px" type="hidden" value="'+(total_line_price*1)+'" name="set_total_price"><span class="label_total_price">'+(total_line_price*1)+'</span> $</td>'+
		                        '<td align="center">'+
		                        	'<a href="JavaScript:void(0);">'+
		                        		'<p data-placement="top" data-toggle="tooltip" title="Delete"><button onclick="delete_item(event);" class="btn btn-danger btn-xs delete" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></p>'+
		                        	'</a>'+
		                        '</td>'+
		                    '</tr>';
				df.find('#table-item > .get-items-table').append(addItem);
			}
			function itemFromKeep(get_product_code,itemcode,description,quantity,pro_unit_size,prices,sugare_percent,discount_by_line){
				var item_code=($("#table-item > .get-items-table tr").size())-0+1;
				var cla = ((item_code%2)?'class="info text-title-item-list"':'class="active text-title-item-list"');
				var total_line_price =((quantity*prices)*(1-discount_by_line/100))-0;
				var addItemKeep = '<tr '+cla+'>'+
				                        '<td><input id="setitemcode" class="form-control setitemcode width-50px" productcode="'+get_product_code+'" description="'+description+'" value="'+itemcode+'" type="hidden" name="setitemcode">'+description+' ('+pro_unit_size+')'+(sugare_percent>0?'<br/>Sugars '+sugare_percent+'%':'')+'</td>'+
				                        '<td align="center">'+
				                        	'<div class="form-group">'+
				                        		'<input id="size_of_unit" class="form-control size_of_unit width-50px" type="hidden" value="'+pro_unit_size+'" name="size_of_unit">'+
				                        		'<input id="sugare_percent" class="form-control sugare_percent width-50px" type="hidden" value="'+sugare_percent+'" name="sugare_percent">'+
				                        		'<input onkeypress="return isNumberKey(event);" id="discount" class="form-control discount width-50px" type="text" placeholder="Dis." value="'+(discount_by_line-0)+'" name="discount">'+
				                        	'</div>'+
				                        '</td>'+
				                        '<td align="center">'+
				                            '<div class="form-group">'+
									  			'<input id="quantity" class="form-control quantity width-50px" type="text" placeholder="Qty" value="'+quantity+'" name="quantity">'+
								  			'</div>'+
							  			'</td>'+
				                        '<td align="center">1</td>'+
				                        '<td align="center"><input id="setprice" class="form-control setprice width-50px" type="text" value="'+parseFloat(prices)+'" name="setprice"><span class="label_price display">'+parseFloat(prices)+' $</span></td>'+
				                        '<td align="center"><input id="set_total_price" class="form-control set_total_price width-50px" type="hidden" value="'+(total_line_price*1)+'" name="set_total_price"><span class="label_total_price">'+numberFormat((parseFloat(total_line_price)*1),getDecimalUSD)+'</span> $</td>'+
				                        '<td align="center">'+
				                        	'<a href="JavaScript:void(0);">'+
				                        		'<p data-placement="top" data-toggle="tooltip" title="Delete"><button onclick="delete_item(event);" class="btn btn-danger btn-xs delete" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></button></p>'+
				                        	'</a>'+
				                        '</td>'+
				                    '</tr>';
				return addItemKeep;
			}
			function sumPriceByLine(row){
				var	discount = row.find('.discount').val();
				var	qty = row.find('.quantity').val();
				var	setprice = row.find('.setprice').val();
				var	total_price = ((qty*setprice)*(1-discount/100))-0;
				row.find('.label_total_price').html(numberFormat(total_price,getDecimalUSD));
				row.find('.set_total_price').val(total_price);
			}
			function sumTotal(){
	        	var tprice = 0;
	        	$(".set_total_price").each(function (){ // set_total_price
				    tprice += parseFloat($(this).val());
				});
	        	$('.totalprices').html(numberFormat(tprice,getDecimalUSD));
	        	$('.totalprices_hide').val(tprice);
	        	$('.total_prices_khr').html(commaSeparateNumber(numberFormat(tprice*getCurrencyUSD,getDecimalKHR)));
	        	$('#total_prices_khr_hide').val(tprice*getCurrencyUSD);
	        }
		// ___________________getQueueCode by vitou___________________
		 function clear_customer(){
	    	$('.customer-name').html('');
			$('.get-customer-name').val('');
			$('.get-customer-code').val('Default');
			$('#check_customer').attr('checked', false);
			$('#pay_keep_notice').val("").attr("keep_attr_table",0);
		    $('#txt_keep_notice').val("").attr("keep_attr_table",0);
		    $("#table-item > tbody").html("");
			sumTotal();
		    $("#txt_keep_notice").val("").attr("keep_attr_table",0).attr("keep_note_table_name","");
		    $("#pay_keep_notice").val("").attr("keep_attr_table",0).attr("keep_note_table_name","");
	    }
		function getQueueCode(){
			$.ajax({
				type : 'POST',
				url : "{{ url('/admin/queue/getQueueCode') }}",
				dataType : 'Json',
				data : {
					'_token' : '{{ csrf_token() }}'
				},
				success:function(data){
					$('.queuecode').val(data.number);
				}
			});
		}
		function get_list_keep(transno){
			$.ajax({
				type : 'POST',
				url : "{{ url('/admin/pos/selectdatakeep') }}",
				dataType : 'Json',
				data : {
					'_token' : '{{ csrf_token() }}',
					'transno': transno
				},
				success:function(list){
					var row_keep='';
					var scrollbar1 = $('#scrollbar1').parent().parent();
				    $.each(list['selectkeep'],function(i,keep){
				    	row_keep+=itemFromKeep(keep['stock_id'],keep['stock_size_id'],keep['stock_name'],keep['qty'],keep['size_of_unit'],keep['price'],keep['sugare_percent'],keep['dis_per']);
					});
					scrollbar1.find('#table-item > .get-items-table').html(row_keep);
					sumTotal();
					$('.get_transno').val(transno);
					$('.get-customer-code').val(list['ccode']);
		        	$('.customer-name').html(list['cname']);
		        	$('#pay_keep_notice').val(list['comment']).attr("keep_attr_table",list['table_id']).attr("keep_note_table_name",list['table_name']);
		        	$('#txt_keep_notice').val("").attr("keep_attr_table",0);
					$(".btn_keep_cancell").click();
				}
			});
		}
		function edit_keep(event){
			var transno = $(event.target).attr('rel');
			get_list_keep(transno);

		}
		function alertTestng(){ 
			$.ajax({
      			url : "{{ url('/admin/discount_item/checkDiscount') }}",
      			type: "POST",
      			dataType: "json",
				data: {
				   '_token': '{{ csrf_token() }}',
				   'stock_id': 85,
				   'customer_id' : 1
				},
				success: function( data ) { 
					alert(data.discount);
				}
      		});
		}
		function pay_keep(event){
			var transno = $(event.target).attr('rel');
			$.ajax({
				type : 'POST',
				url : "{{ url('/admin/queue/getQueueCode') }}",
				dataType : 'Json',
				data : {
					'_token' : '{{ csrf_token() }}'
				},
				success:function(data){ //data.number
					$.ajax({
						type : 'POST',
						url : "{{ url('/admin/pos/payafterkeep') }}",
						dataType : 'Json',
						data : {
							'_token' : '{{ csrf_token() }}',
							'transno': transno,
							'queuecode':data.number
						},
						success:function(list){
							delete_item(event);
							$(".btn_keep_cancell").click();
							clear_customer();
							window.open("<?php echo url('/admin/invoice');?>"+"/"+list['t'],"_blank","","");
						}
					});
				}
			});

		}
		//____________________end function______________________

		function calculate_pay(total_money_is_dollar){
			// USD
			$('.total_in_usa').html(numberFormat(total_money_is_dollar,getDecimalUSD));
			$('#hidden_total_in_usa').val(total_money_is_dollar);
			$('#pay_in_usa').val(numberFormat(total_money_is_dollar,getDecimalUSD));
			// KRH
			$('.total_in_khr').html(commaSeparateNumber(numberFormat(total_money_is_dollar*getCurrencyUSD,getDecimalKHR)));
			$('#hidden_total_in_khr').val(total_money_is_dollar*getCurrencyUSD);
			$('#pay_in_khr').val(0);
			$('.remaining_usd_khr').html(numberFormat(0,getDecimalUSD));
			$('.change_usd_khr').html(numberFormat(0,getDecimalUSD));
			
		}
		function pay_by_selected_item(checkbox_element){
			var is_p_select=0;
			var totaldiscount   = 0;
			var totalqty        = 0;
			var set_totalprice  = 0;
			var arrItemRow      =[];
			var pay_select_remaining_money = $('#remaining_usd_khr_hide').val();
			var pay_select_row_master_id   = $("#select_pay_by_row_master_id").val();
			var pay_select_userid          = $('#select_pay_by_user').val();
			var pay_select_c_code          = $('#select_pay_by_customer').val();
			var pay_select_table_id        = $('#select_pay_by_table').val();
			var pay_select_note            = $('#select_pay_by_note').val();
			var pay_by_total_discount      = $("#select_pay_by_total_discount").val();
			var pay_by_total_qty_print     = $("#select_pay_by_total_qty_print").val();
			var pay_select_total_amount    = $('#select_pay_by_total_amount').val()-0;
			checkbox_element.each(function(i){
				var row_id                 = $(this).val();
				var set_tr                 = $(this).parent().parent();
				var get_table_id           = set_tr.find(".set_table_id").val(); 
				var get_stock_id           = set_tr.find(".set_stock_id").val();
				var get_stock_name         = set_tr.find(".set_stock_name").val();
				var get_sugare_percent     = set_tr.find(".set_sugare_percent").val();
				var get_stock_size_id      = set_tr.find(".set_stock_size_id").val();
				var get_size_of_unit       = set_tr.find(".set_size_of_unit").val();
				var get_dis_per            = set_tr.find(".set_dis_per").val();
				var get_amount_line        = set_tr.find(".set_amount_line").val();
				var get_qty                = set_tr.find(".set_qty").val();
				var get_price              = set_tr.find(".set_price").val();
				var total_amount_by_line   = (((get_qty*get_price)*(1-get_dis_per/100))-0);
				arrItemRow[i]              ={
												'row_id'         :row_id,
												'table_id'       :get_table_id,
								  				'productcode'	 :get_stock_id,
								  				'itemcode'	     :get_stock_size_id,
								  				'description'    :get_stock_name,
								  				'sugare_percent' :get_sugare_percent,
								  				'size_of_unit'   :get_size_of_unit,
								  				'discount' 	     :get_dis_per,
								  				'quantity' 	     :get_qty,
								  				'prices'	     : get_price,
								  				'amount_line'    : total_amount_by_line
			  								}
			  	totaldiscount+=get_dis_per-0;
			  	totalqty+=get_qty-0;
			  	set_totalprice+=total_amount_by_line;
				is_p_select++;
			});
			if(is_p_select>0 && set_totalprice>0){
				$.ajax({
					type : 'POST',
					url : "{{ url('/admin/queue/getQueueCode') }}",
					dataType : 'Json',
					data : {
						'_token' : '{{ csrf_token() }}'
					},
					success:function(data){
					    $.ajax({
					        url: "{{ url('/admin/pos/saveDataBySelectedItem') }}",
					        type: "POST",
					        dataType: "json",
					        async:false,
					        data:{
						          '_token'                 : $('input[name=_token]').val(),
						          'arrItem'                :arrItemRow,
						          'row_master_id'          :pay_select_row_master_id,
						          'queue_number'           :data.number,
						          'totalqty'               :totalqty,
						          'totaldiscount'          :totaldiscount,
						          'totalprices'            :set_totalprice,
						          'remaining'              :pay_select_remaining_money,
						          'user'                   :pay_select_userid,
						          'tbleID'                 :pay_select_table_id,
						          'customercode'           :pay_select_c_code,
						          'keep_notice'            :pay_select_note,
						          'row_totalqty'           :(pay_by_total_qty_print-(totalqty-0)),
						          'row_totaldiscount'      :(pay_by_total_discount-(totaldiscount-0)),
						          'total_amount'           :(pay_select_total_amount-(set_totalprice-0))
						        },
					        success: function(data){
					        	$(".btn_keep_cancell").click();
					        	clear_customer();
					        	toastr.success('The data successfully paid.');
								window.open("<?php echo url('/admin/invoice');?>"+"/"+data['transno'],"_blank","","");
					        }
					    });
					},
					beforeSend: function() { $('.proccess_loading').show(); },
        			complete: function() { $('.proccess_loading').hide();}
				});
			}
			
		}
	</script>
	@stop
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/toastr/toastr.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/Menu.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/sb-admin-2.js') }}"></script>
	<script src="{{ URL::asset('assets/js/date_picker/bootstrap-datepicker.js') }}"></script>

    @yield('scripts')

</body>
</html>
