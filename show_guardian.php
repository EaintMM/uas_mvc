<?php
$output = '' ;
$gname = "";
//echo "hello";
//echo $_POST['gstatus'];
if(isset($_POST['gstatus']))
{
    $gname = isset($_POST['gname'])?$_POST['gname']:"";
    $gnationality = isset($_POST['gnationality'])?$_POST['gnationality']:"";
    $gcitizen = isset($_POST['gcitizen'])?$_POST['gcitizen']:"";
    $gstatus1 = isset($_POST['gstatus1'])?$_POST['gstatus1']:"";
    $gage = isset($_POST['gage'])?$_POST['gage']:"";
    $goccupation = isset($_POST['goccupation'])?$_POST['goccupation']:"";
    $gposition = isset($_POST['gposition'])?$_POST['gposition']:"";
    $gaddress = isset($_POST['gaddress'])?$_POST['gaddress']:"";
    //echo $gaddress;
    $gstreet = isset($_POST['gstreet'])?$_POST['gstreet']:"";
    $gtownship = isset($_POST['gtownship'])?$_POST['gtownship']:"";
    $gcity = isset($_POST['gcity'])?$_POST['gcity']:"";
    $gzipcode = isset($_POST['gzipcode'])?$_POST['gzipcode']:"";
    $gtelephone = isset($_POST['gtelephone'])?$_POST['gtelephone']:"";
    $gmobile = isset($_POST['gmobile'])?$_POST['gmobile']:"";

    $cksta = "";

    if($gstatus1 === "gdecease"){
        $cksta="checked";

    }
    $checkboxsta = "";
    if($gaddress == "ck"){
        $checkboxsta = "checked";
    }
   
    
    

    if($_POST['gstatus']=="other" or $_POST['gstatus'] == "on")
    {
        $output = '' ;
        $output .='<div class="form-group ">
            <label class="control-label col-md-2" for="gname">Name<span class="help-inline">*</span></label>
                <div class="controls col-md-4">
                   <input name="gname" type="text" id="gname" class="form-control form-control-inline col-md-4" value="'. $gname .'" >
                                
                </div>
                
        </div>
        <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gnationality">Nationality</label>
            <div class="controls col-md-4">
               <input name="gnationality" type="text" id="gnationality" class="form-control form-control-inline col-md-4" value="'. $gnationality .'" >
                            
            </div>
            <label class="control-label col-md-2" for="gcitizen">Citizenship</label>
            <div class="controls col-md-4">
               <input name="gcitizen" type="text" id="gcitizen" class="form-control form-control-inline col-md-4" value=" ' . $gcitizen. '" >
                            
            </div>
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gstatus">Status</label>
            <div class="controls col-md-4">
            <label class="radio-inline"><input type="radio" name="gstatus1" value="gliving" id="gliving" checked>Living</label>
            <label class="radio-inline"><input type="radio" name="gstatus1" value="gdecease" id="gdecease"'. $cksta .'>Decese</label>
                            
            </div>
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gage">Age</label>
        <div class="controls col-md-4">
               <input name="gage" type="text" id="gage" class="form-control form-control-inline col-md-4" value="'. $gage.'" >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="goccupation">Occuputation</label>
        <div class="controls col-md-4">
               <input name="goccupation" type="text" id="goccupation" class="form-control form-control-inline col-md-4" value=" ' . $goccupation. '" >
                            
            </div>  
            <label class="control-label col-md-2" for="gposition">Position</label>
        <div class="controls col-md-4">
               <input name="gposition" type="text" id="gposition" class="form-control form-control-inline col-md-4" value=" ' . $gposition. '"  >
                            
            </div> 
    </div>
    <br><br>
    <div class="form-check">
        <label class="control-label col-md-2" for="gaddress">Guardian address</label>
        <div class="controls col-md-4">
               <input name="gaddress" type="checkbox" id="gaddress" class="form-check-input form-control-inline col-md-4" value=" ' . $checkboxsta. '" >
               <label class="form-check-label" for="gaddress">Same as applicant address</label>           
        </div>  
    </div>
    <br><br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gstreet">Street</label>
        <div class="controls col-md-4">
               <input name="gstreet" type="text" id="gstreet" class="form-control form-control-inline col-md-4" value=" ' . $gstreet.'" >
                            
            </div>  
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gtownship">Township<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="gtownship" type="text" id="gtownship" class="form-control form-control-inline col-md-4" value=" ' . $gtownship. '" >
                            
            </div> 
            <label class="control-label col-md-2" for="gcity">City<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="gcity" type="text" id="gcity" class="form-control form-control-inline col-md-4" value="'.$gcity.'" >
                            
        </div>  
    </div>
    <br>
    <div class="form-group ">
        <label class="control-label col-md-2" for="gzipcode">Zip Code</label>
            <div class="controls col-md-4">
               <input name="gzipcode" type="text" id="gzipcode" class="form-control form-control-inline col-md-4" value=" ' .$gzipcode. ' " >
                            
            </div>
            
    </div>
    <br>
    <div class="form-group">
        <label class="control-label col-md-2" for="gtelephone">Telephone</label>
        <div class="controls col-md-4">
               <input name="gtelephone" type="text" id="gtelephone" class="form-control form-control-inline col-md-4" value=" ' . $gtelephone.' " >
                            
            </div> 
            <label class="control-label col-md-2" for="gmobile">Mobile<span class="help-inline">*</span></label>
        <div class="controls col-md-4">
               <input name="gmobile" type="text" id="gmobile" class="form-control form-control-inline col-md-4" value=" ' . $gmobile. ' " >
                            
        </div>  
    </div>';
    }

    
    echo $output;
    
  
}

?>