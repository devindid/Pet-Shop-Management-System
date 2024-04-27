<script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<style>
        .footer-section {
            background: #166a84;
            padding-bottom: 80px;
        }
        
        .footer-section-row {
            background: #1d7590;
            padding: 18px;
            margin-bottom: 50px;
        }
        
        .address {
            padding: 10px;
            display: flex;
        }
        
        .right-text {
            padding-left: 28px;
        }
        
        .right-text h3 {
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #fff;
            font-size: 17px;
            font-weight: 700;
        }
        
        .right-text p {
            margin: 0px;
            color: #fff;
            font-size: 15px;
            line-height: 23px;
        }
        
        .footer-title {
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #f7bb07;
            font-size: 20px;
            margin-bottom: 23px;
            font-weight: 700;
            position: relative;
        }
        /* .footer-title span::before {
            content: "";
            position: absolute;
            right: 0px;
            bottom: 0px;
            width: 117px;
            height: 2px;
            background-color: #f7bb07;
        } */
        
        .footer-title-text {
            background: #166a84;
            z-index: 999;
            position: relative;
        }
        
        .footer-title-underline {
            height: 1px;
            background-color: #f7bb07;
            width: 100%;
            position: absolute;
            bottom: 3px;
            left: 0px;
        }
        
        .quick-link-list {
            list-style-type: none;
            padding: 0px;
        }
        
        .quick-link-list li a {
            color: #fff;
            margin-bottom: 8px;
            display: block;
        }
        
        .footer-section-bottom {
            background: #1d7590;
            padding: 17px 0px;
        }
        
        .footer-bottom-left p {
            margin: 0px;
            color: #fff;
        }
        
        .footer-bottom-right p {
            margin: 0px;
            color: #fff;
            text-align: right;
        }
        
        .footer-bottom-right p a {
            color: #dcd735;
        }
        
        .title-transparent {
            opacity: 0 !important;
        }
        
        #social {
            margin: 20px 10px;
            text-align: center;
        }
        
        .smGlobalBtn {
            /* global button class */
            display: inline-block;
            position: relative;
            cursor: pointer;
            width: 50px;
            height: 50px;
            border: 2px solid #ddd;
            /* add border to the buttons */
            box-shadow: 0 3px 3px #999;
            padding: 0px;
            text-decoration: none;
            text-align: center;
            color: #fff;
            font-size: 22px;
            font-weight: normal;
            line-height: 2em;
            border-radius: 27px;
            -moz-border-radius: 27px;
            -webkit-border-radius: 27px;
        }
        /* facebook button class*/
        
        .facebookBtn {
            background: #4060A5;
        }
        
        .facebookBtn:before {
            /* use :before to add the relevant icons */
            font-family: "FontAwesome";
            content: "\f09a";
            /* add facebook icon */
        }
        
        .facebookBtn:hover {
            color: #4060A5;
            background: #fff;
            border-color: #4060A5;
            /* change the border color on mouse hover */
        }
        /* twitter button class*/
        
        .twitterBtn {
            background: #00ABE3;
        }
        
        .twitterBtn:before {
            font-family: "FontAwesome";
            content: "\f099";
            /* add twitter icon */
        }
        
        .twitterBtn:hover {
            color: #00ABE3;
            background: #fff;
            border-color: #00ABE3;
        }
        /* google plus button class*/
        
        .googleplusBtn {
            background: #e64522;
        }
        
        .googleplusBtn:before {
            font-family: "FontAwesome";
            content: "\f0d5";
            /* add googleplus icon */
        }
        
        .googleplusBtn:hover {
            color: #e64522;
            background: #fff;
            border-color: #e64522;
        }
        /* linkedin button class*/
        
        .linkedinBtn {
            background: #0094BC;
        }
        
        .linkedinBtn:before {
            font-family: "FontAwesome";
            content: "\f0e1";
            /* add linkedin icon */
        }
        
        .linkedinBtn:hover {
            color: #0094BC;
            background: #fff;
            border-color: #0094BC;
        }
        /* youtube button class */
        
        .youtubeBtn {
            background: #bf1d23;
        }
        
        .youtubeBtn:before {
            font-family: "FontAwesome";
            content: "\f167";
            /* add linkedin icon */
        }
        
        .youtubeBtn:hover {
            color: #bf1d23;
            background: #fff;
            border-color: #bf1d23;
        }
        /* youtube button class */
        /* pinterest button class*/
        
        .pinterestBtn {
            background: #cb2027;
        }
        
        .pinterestBtn:before {
            font-family: "FontAwesome";
            content: "\f0d2";
            /* add pinterest icon */
        }
        
        .pinterestBtn:hover {
            color: #cb2027;
            background: #fff;
            border-color: #cb2027;
        }
        /* tumblr button class*/
        
        .tumblrBtn {
            background: #3a5876;
        }
        
        .tumblrBtn:before {
            font-family: "FontAwesome";
            content: "\f173";
            /* add tumblr icon */
        }
        
        .tumblrBtn:hover {
            color: #3a5876;
            background: #fff;
            border-color: #3a5876;
        }
        /* rss button class*/
        
        .rssBtn {
            background: #e88845;
        }
        
        .rssBtn:before {
            font-family: "FontAwesome";
            content: "\f09e";
            /* add rss icon */
        }
        
        .rssBtn:hover {
            color: #e88845;
            background: #fff;
            border-color: #e88845;
        }
        
        .form-control-new {
            border-radius: 0px;
            position: relative;
        }
        
        .form-control-new:before {
            content: "/f0e0";
            font-family: FontAwesome;
            position: absolute;
            left: 0px;
            top: 0px;
        }
        
        .newsletter {
            color: #fff;
        }
        
        .subscribe {
            width: 100%;
            border-radius: 0px;
            background: #24829f;
            border: 1px solid #6ac5e1;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <section class="footer-section">
        <div class="container">
            <div class="row footer-section-row">     
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Quick Link</span><span class="footer-title-underline"></span></h3>
                    <ul class="quick-link-list">
                    <li><a aria-current="page" href="./">Home</a></li>
                    <li><a href="./?p=about">About</a></li>
                    <li><a href="./?p=products">Products</a></li>
                    </ul>
                </div>
                
                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Address</span><span class="footer-title-underline"></span></h3>
                    <p class="newsletter">No: 53/A, New Road</p>
                    <p class="newsletter">Ambalangoda</p>
                </div>

                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Email</span><span class="footer-title-underline"></span></h3>
                    <p class="newsletter">chamodikadevindi555@gmail.com</p>
                </div>

                <div class="col-md-3">
                    <h3 class="footer-title"><span class="footer-title-text">Phone</span><span class="footer-title-underline"></span></h3>
                    <p class="newsletter">+91 9437040140</p>
                    <p class="newsletter">+91 7873708010</p>
                </div>
            </div>
        </div>
    </section>
    <section class="footer-section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 footer-bottom-left">
                    <p>© 2023 PETMART. All Rights Reserved. Powered by PETMART.LK</p>
                </div>
                <div class="col-md-6 footer-bottom-right">
                    <p>Developed by <a href="#">KKVC Devindi</a></p>
                </div>
            </div>
        </div>
    </section>
   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>