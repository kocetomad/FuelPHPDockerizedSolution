<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.6.0/p5.js"></script>
<?php echo Asset::js('js.js') ?>
<?php echo Asset::css('style.css') ?>

<div class='form'>
<?php 
            echo Form::open(array('action' => 'employee/add', 'method' => 'post')); 
         ?>  
         
         <div class = "form-group"> 
            <?php 
               echo Form::label('Longtitude:', 'name'); 
               echo Form::input('Longtitude', '', array('class' => 'form-control')); 
            ?> 
         </div> 
         
         <div class = "form-group"> 
            <?php 
               echo Form::label('Latitude:', 'age'); 
               echo Form::input('Latitude', '', array('class' => 'form-control')); 
            ?> 
         </div> 
         
         <?php echo Form::button('frmbutton', 'Submit', array(
            'class' => 'btn btn-default')); 
         ?> 
         
         <?php 
            echo Form::close(); 
         ?> 
</div>

<div class='max-values'>

        
         <div class = "form-group"> 
                    <label id="lel" for="male">Test Label</label>

<script type="text/javascript">
    
        
            
        
</script>
 
        </div> 
         
         <div class = "form-group"> 
            <?php 
               echo Form::label('MAX Latitude:', 'MAX Latitude:'); 
            ?> 
         </div> 
         
         <?php 
            echo Form::close(); 
         ?> 
</div>

