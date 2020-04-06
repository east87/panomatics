<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
   <!-- begin:: Page -->
   <div class="m-grid m-grid--hor m-grid--root m-page">
      <?php include VIEWS_PATH_BACKEND."/menu.php"; ?>
      <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
         <?php include VIEWS_PATH_BACKEND."/leftMenu.php"; ?>	
         <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
               <div class="d-flex align-items-center">
                  <div class="mr-auto">
                     <h4 class="m-subheader__title m-subheader__title--separator">
                        <?= $breadcrump['module_group_name']; ?> - <?= $breadcrump['module_name']; ?> - List
                     </h4>
                  </div>
               </div>
            </div>
            <?php if(isset($error)){ ?>
            <div class="panel-body">
               <div class="form-group has-error">
                  <label for="inputError" class="col-sm-2 control-label col-lg-2"><?= $error;?></label>
               </div>
            </div>
            <?php } ?>
            <!-- END: Subheader -->
            <div class="m-content">
               <div class="m-portlet m-portlet--mobile">
                  <div class="m-portlet__body">
                     <!--begin: Search Form -->
                     <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                           <form class="col-xl-8 order-2 order-xl-1" role="form" method="post" name="frmSearch" action="<?= BASE_URL_BACKEND.'/'.$controller;?>/view">
                              <div class="form-group m-form__group row align-items-center">
                                 <div class="col-md-4">
                                    <div class="m-input-icon m-input-icon--left">
                                       <input type="text" class="form-control m-input m-input--solid" name="searchkey" placeholder="Search..." value="<?php if(!empty($searchkey)){echo $searchkey;} ?>">
                                       <span class="m-input-icon__icon m-input-icon__icon--left">
                                       <span>
                                       <i class="la la-search"></i>
                                       </span>
                                       </span>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="m-form__group m-form__group--inline">
                                       <div class="m-form__label">
                                          <label>
                                          per page:
                                          </label>
                                       </div>
                                       <div class="m-form__control">
                                          <select name="perpage" id="perpage" size="1" aria-controls="editable-sample" class="form-control xsmall">
                                             <option value="<?php echo PER_PAGE;?>" <?php if($perpage == "10") { echo "selected"; }?>><?php echo PER_PAGE;?></option>
                                             <option value="20" <?php if($perpage == "20") { echo "selected"; }?>>20</option>
                                             <option value="50" <?php if($perpage == "50") { echo "selected"; }?>>50</option>
                                             <option value="100" <?php if($perpage == "100") { echo "selected"; }?>>100</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                 </div>
                                 <div class="col-md-4">
                                    <div class="m-form__group m-form__group--inline">
                                       <div class="m-form__control">
                                          <input class="btn btn-success btn-sm" name="tbSearch" type="submit" value="Search">
                                       </div>
                                       <div class="m-form__label">
                                          <label class="m-label m-label--single">
                                          Total: <?php echo $total;?>
                                          </label>
                                       </div>
                                    </div>
                                    <div class="d-md-none m--margin-bottom-10"></div>
                                 </div>
                              </div>
                           </form>
                           <div class="col-xl-4 order-1 order-xl-2 m--align-right">
                              <a href="<?= BASE_URL_BACKEND.'/'.$controller;?>/add/" class="btn btn-success btn-sm m-btn  m-btn m-btn--icon">
                              <span> <i class="fa fa-plus"></i> <span> ADD</span>
                              </span>
                              </a>
                              <button id="doOrder" class="btn btn-success btn-sm m-btn  m-btn m-btn--icon">
                              <span> <i class="fa fa-repeat"></i> <span> Order</span>
                              </span>
                              </button>
                              <div class="m-separator m-separator--dashed d-xl-none"></div>
                           </div>
                        </div>
                     </div>
                     <!--end: Search Form -->  
                     <!--end: Search Form -->
                     <!--begin: Datatable -->
                     <section id="unseen">
                        <div class="m_datatable m-datatable m-datatable--default m-datatable--brand m-datatable--subtable m-datatable--loaded" id="child_data_local" style="">
                           <form name="formAssignment" method="POST" action="" onsubmit="return false;">
                              <table class="" id="html_table" width="100%">
                                 <thead>
                                    <tr>
                                       <th>No</th>
                                       <?php  if(count($ListLabel) > 0){
                                          foreach($ListLabel as $label){ 
                                          if($label['label_view'] == 1) {
                                          ?>
                                       <th>
                                          <?= $label['label_title'];?>
                                       </th>
                                       <?php } 
                                          }
                                          } ?>
                                       <th>order</th>
                                       <th colspan="3">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php
                                       if($countContent > 0){
                                       $no=0;
                                       foreach($ListContent as $content){
                                               $no++;
                                       ?>
                                    <tr>
                                       <td><?= $no;?></td>
                                       <?= resultData($content['content'],$controller);?> 
                                       <?php if($order){ ?>
                                       <td><input type="text" class="form-control" style="text-align:center;" name="order[<?= $content['row_id'];?>]" size="1" maxlength="5" value="<?= $content['row_order'];?>"></td>
                                       <?php } ?>
                                       <td colspan="3">
                                          <?php if($approve){ ?>
                                          <?php if($content['row_active_status'] == 1) {?>
                                          <a class="btn-outline-success btn-sm" title="Click to Inactive" href="<?= BASE_URL_BACKEND.'/'.$controller."/active/".$content['row_id'];?>"><i class="la la-check-circle"></i></a> 
                                          <?php } else { ?>
                                          <a class="btn-outline-danger btn-sm" title="Click to Active" href="<?= BASE_URL_BACKEND.'/'.$controller."/active/".$content['row_id'];?>"><i class="la la-power-off"></i></a>
                                          <?php } ?>
                                          <?php } ?>
                                          <?php if($edit){ ?>
                                          <a class="btn-outline-primary btn-sm" title="Click to Edit" href="<?= BASE_URL_BACKEND.'/'.$controller;?>/edit/<?= $content['row_id'];?>"><i class="la la-edit"></i></a>
                                          <?php } ?>
                                          <?php if($delete){ ?>
                                          <a class="btn-outline-danger btn-sm" title="Click to Delete" onclick="var answer = confirm('delete <?= $content['row_id'];?> ?'); if (answer){window.location = '<?= BASE_URL_BACKEND.'/'.$controller;?>/delete/<?= $content['row_id'];?>';}"><span class="la la-trash"></span></a>
                                          <?php } ?>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                    <?php } else {?>
                                    <tr>
                                       <td align="center" colspan="10">Data Not Found</td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                           </form>
                           <?php echo($paging); ?>
                        </div>
                     </section>
                     <!--end: Datatable -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end:: Body -->
      <?php include VIEWS_PATH_BACKEND."/footer.php"; ?>
   </div>
   <!-- end:: Page -->
   <!--begin::Base Scripts -->
   <script src="<?= BACKEND_BASE_URL; ?>/vendors/base/vendors.bundle.js" type="text/javascript"></script>
   <script src="<?= BACKEND_BASE_URL; ?>/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
   <!--end::Base Scripts -->   
   <!--begin::Page Vendors -->
   <!--end::Page Snippets -->
   <script language="javascript">
      $(document).ready(function(){
      $("#doOrder").click(function() {
         var frm = document.formAssignment;
      var answer = confirm('are you sure want to update order?');
      if(answer){
      frm.action = '<?= BASE_URL_BACKEND.'/'.$controller;?>/doOrder';
      frm.submit();
      } else {
      return false;
      }
      });
      });
   </script>
</body>
<!-- end::Body -->
</html>