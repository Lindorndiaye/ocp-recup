

<?php $__env->startSection('content'); ?>


    <h2>Ajouter un Enseignant</h2>
    <hr/>
    <a class="btn btn-primary" href="/enseignants" style="margin-bottom: 15px;">Revenir à la liste</a>
    
    
  
    
    <form method="post" action="<?php echo e(route('enseignants.store')); ?>" enctype="multipart/form-data" style="width:350px; text-align:center; margin-left:430px;">

  <?php echo e(csrf_field()); ?>

   <div class="form-group" >
        <?php echo Form::label('prenom', 'Prenom');; ?>  
        <?php echo Form::text('prenom', null, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('nom', 'Nom');; ?>

        <?php echo Form::text('nom', null, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('age', 'Age');; ?>

        <?php echo Form::text('age', null, ['class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('mobile', 'Telephone');; ?>

        <?php echo Form::text('mobile', null, [ 'class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('email', 'Email'); ?>

        <?php echo Form::email('email', null, ['class' => 'form-control']);; ?>

    </div>
      
    <div class="form-group">
        <?php echo Form::label('region', 'Région');; ?>

       
    <select class="form-control m-bot15" name="region">
        
      <option >Dakar</option> 
      <option >Thies</option>  
      <option >Louga</option> 
      <option >Saint-louis</option>  
      <option >Fatick</option>
      <option >Kaolack</option>
      <option >Ziguinchor</option>
     </select>
</div>
<div class="form-group">
        <?php echo Form::label('ville', 'Ville'); ?>

        <?php echo Form::text('ville', null, ['class' => 'form-control']);; ?>

    </div>
    
   <div class="form-group">
        <?php echo Form::label('renseigner votre derniere diplome', 'Renseigner votre derniere Diplôme');; ?>

       
    <select class="form-control m-bot15" name="deniere_diplome">
        
      <option>CAEM</option> 
      <option>CAES</option>  
      <option>Doctorat</option> 
     
     </select>
</div>
<div class="form-group" >
        <?php echo Form::label('combien d année d expérience', 'Combien d année d expérience');; ?>

       
        <?php echo Form::text('année_exper', null, ['class' => 'form-control']);; ?>


</div>

<div class="form-group" >
        <?php echo Form::label('Avez-vous une expérience en fos, fle, français professionel: oui ou non', 'Avez-vous une expérience en FOS, FLE, Français professionel: Oui ou Non');; ?>

       <div style="display:flex; margin-left:120px;">
     <p> Oui:<input type="radio" style="width:25px" id="ocp" name="experience" class="myfrm form-control" value="Oui"></p>
      <p style="margin-left:20px;"> Non:<input type="radio"  style="width:25px" ocp="opc" name="experience" class="myfrm form-control" Value="Non"></p>
       </div>
</div>

    <div class="form-group" >
<?php echo Form::label('numéro de la carte d identité national', 'Numéro de la carte d identité national');; ?>


<input type="number" name="num_cni" class="myfrm form-control"><br>


</div>

<div class="form-group">
<?php echo Form::label('votre cv en pdf', 'Votre CV en PDF');; ?>

        <input type="file" name="cv_file" class="myfrm form-control">
    </div>



    

   
   <button type="submit" class="btn btn-success" style="margin-top:10px">S'inscrire</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <script>


  $(".btn-success").click(function(){ 

      var lsthmtl = $(".clone").html();

      $(".increment").after(lsthmtl);  

  });

  $("body").on("click",".btn-danger",function(){ 

     
      $('#removed').remove();

  });


</script>
<?php $__env->stopSection(); ?>
	
	
	

<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>