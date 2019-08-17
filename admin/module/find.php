<form method="POST" action="module/ok.php" class="form-inline">
<div class="control-group">
    <div class="controls">
        <div class="col-md-3">
            <input type="date" style="color:black;" value="<?php echo date('Y-m-d'); ?>"
 name="datefrom" class="form-control has-feedback-left" 
placeholder="Date From" aria-describedby="inputSuccess2Status4" required
 />
            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
        </div>
    </div>
</div>
<div class="control-group">
    <div class="controls">
        <div class="col-md-3">
            <input type="date" style="color:black;" value="<?php echo date('Y-m-d'); ?>"
 name="dateto" class="form-control has-feedback-left" placeholder="Date 
To" aria-describedby="inputSuccess2Status4" required />
            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
        </div>
    </div>
</div>
<button type="submit" name="search" class="btn btn-primary btn-outline"><i class="fa fa-calendar-o"></i> Search By Date Log In</button>		
</form>