<?php echo form_open_multipart(BASE_URL_BACKEND."/module/doAddLabel", array('id' => 'upload-file-form'));?>
<div class="m-portlet__body">
                        <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                       Label Title:
                                </label>
                                <div class="col-lg-6">
                                    <input name="label_title" type="text" class="form-control m-input" placeholder="Label title" value="<?php if(!empty($label_title)){echo $label_title;} ?>">
                                    <input type="hidden" name="label_parent" readonly="readonly" id="label_parent" class="form-control" value="<?= $label['label_id'];?>">
       
                 
                                    <span class="m-form__help">
                                            Please enter Label title
                                    </span>
                                </div>
                        </div> 
                        <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                       Label Name:
                                </label>
                                <div class="col-lg-6">
                                    <input name="label_name" type="text" class="form-control m-input" placeholder="Label Name" value="<?php if(!empty($label_name)){echo $label_name;} ?>">
                                    <span class="m-form__help">
                                            Please enter Label Name
                                    </span>
                                </div>
                        </div> 
                        <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                       Type:
                                </label>
                                <div class="col-lg-6">
                                       <select class="form-control" name="type_id" id="type_id">
                                            <option value="0">Choose a Type</option>
                                            <?php foreach($ListType as $type){ ?>
                                            <option value="<?php echo $type['type_id'];?>" <?php if($type['type_id'] == $type_id) { echo "selected";} ?>> <?php echo $type['type_title']?> </option>
                                            <?php } ?>
                                          </select> 
                                        <span class="m-form__help">
                                                Please choose type
                                        </span>
                                </div>
                        </div>
                        
                        <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                      Set vicible:
                                </label>
                                <div class="col-lg-6">  
                                    <select class="form-control" name="label_view" id="label_view">
                                       <option value="1" <?php if($label_view == 1) { echo "selected";} ?>>Show</option>
                                       <option value="0" <?php if($label_view == 0) { echo "selected";} ?>>Hide</option>
                                    </select>
                                </div>
                        </div>  
                         <div class="form-group m-form__group row">
                                <label class="col-lg-2 col-form-label">
                                       Label Notif:
                                </label>
                                <div class="col-lg-6">
                                    <input name="label_notif" type="text" class="form-control m-input" placeholder="Label Notif" value="<?php if(!empty($label_notif)){echo $label_notif;} ?>">
                                    <span class="m-form__help">
                                            Please enter Label notif
                                    </span>
                                </div>
                        </div>
                        
                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
                                <div class="m-form__actions m-form__actions--solid">
                                        <div class="row">
                                                <div class="col-lg-2"></div>
                                                <div class="col-lg-6">
                                                    <input name="tbSave" class="btn btn-info btn-sm" type="submit" value="Save">&nbsp;
                                                    <input class="btn btn-sm btn-danger" type="button" id="<?= $label['label_id'];?>" value="Cancel" onClick="hideFormChild(this.id)">                                                     
                                                </div>
                                        </div>
                                </div>
                        </div>
                </form>
                <!--end::Form-->
        </div>

<?php
   echo form_close();
   ?>
      
     <script type="text/javascript">
        $(document).ready(function() {
            $("input[id^='upload_file']").each(function() {
                var id = parseInt(this.id.replace("upload_file", ""));
                $("#upload_file" + id).change(function() {
                    if ($("#upload_file" + id).val() !== "") {
                        $("#moreImageUploadLink").show();
                    }
                });
            });
        });
     </script>