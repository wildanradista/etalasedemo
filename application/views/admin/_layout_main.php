<?php $this->load->view('admin/components/page_head'); ?>
  <body>
     
    <nav class="navbar navbar-default navbar-static-top navbar-inverse">
            <div class="container-fluid">
                
              
              <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                      <div class="navbar-inner">
                            <ul class='nav'>
                                 <a class="navbar-brand" href="<?php echo site_url('admin/dashboard');?>"><?php echo $meta_title; ?></a>
                            </ul>
                            
                      </div>
                  
              </div>
              
              
              <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo site_url('admin/dashboard');?>">Beranda <span class="sr-only">(current)</span></a></li>
                            <li><a href="<?php echo site_url('admin/user');?>">Akun</a></li>
                            <li><a href="<?php echo site_url('admin/page');?>">Artikel</a></li>
                            <li><a href="<?php echo site_url('admin/news');?>">News</a></li>
                            
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
             
            </div><!-- /.container-fluid -->
            
          </nav>
          <div class="container">
				<div class="row">
			<!-- Main column -->
				<div class="col-sm-8" >
					<?php $this->load->view($subview); ?>	
						
					</div>
					<div class="col-md-4 ">
            
            <div class="search_box pull-right">
                                                    <input type="text" placeholder="Search"/>
            </div>
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><?php echo mailto('wildan@gmail.com', '<i class="glyphicon glyphicon-envelope"></i> wildan@gmail.com'); ?><br></li>
                                <li><a href="<?php echo base_url('admin/user/logout');?>"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
         					                                 
							</ul>

						</div>
					</div>

                </div>
             
		</div>
    <footer id="footer"><!--Footer-->
    <div class="footer-top">
      
    </div>
    
    <div class="footer-widget">
      
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <p class="pull-left">Copyright © 2015 ExploreSurabaya  </p>
          <p class="pull-right">Designed by <span><a target="_blank" href="http://www.wildanradista.com">Wildan Radista W.</a></span></p>
        </div>
      </div>
    </div>
    
  </footer><!--/Footer-->

  </nav>

	
          
<?php $this->load->view('admin/components/page_tail'); ?>