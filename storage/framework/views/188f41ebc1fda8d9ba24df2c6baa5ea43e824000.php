

<?php $__env->startSection('content'); ?>

   
    <h2>Ajouter un étudiant</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Revenir à la liste</a>
    
    

    
    <form method="post" action="<?php echo e(route('students.store')); ?>" enctype="multipart/form-data" style="width:350px; text-align:center; margin-left:430px;">

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

        <?php echo Form::number('age', null, ['class' => 'form-control']);; ?>

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
        <?php echo Form::label('specialite', 'Specialité');; ?>

       
    <select class="form-control m-bot15" name="specialite">
        
      <option >Stylisme</option> 
      <option >Couture</option>  
      <option >Creation de mode</option> 
      <option >Manager mode</option>  
      
     </select>
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

        <select class="form-control m-bot15" name="ville">
        
        <option id="dakar">Dakar</option>
        <option id="thies">Thies</option>  
        <option id="louga">Louga</option> 
        <option id="saint-l">Saint-louis</option>  
        <option id="fatick">Fatick</option>
        <option id="kaolack">Kaolack</option>
        <option id="zig">Ziguinchor</option>
       </select> 
       <p id="dak">Guediawaye, Pikine, Parcelle, Rufisque, Dakar</p>
       <p id="thie">keur cheikh, angle laobé, mbour</p>
       <p id="loug">louga, niambour, keur mor</p>
       <p id="saint">ndar, rue 18, keur ndiaye</p>
       <p id="fatik">sine, koumpentoum, bourou</p>
       <p id="kaol">saloum, ndiobene, galobe</p>
       <p id="zi">casamance, sediou, wilingara</p>
  </div>
    

   <div class="form-group">
        <?php echo Form::label('diplome', 'Diplôme');; ?>

       
    <select class="form-control m-bot15" name="diplome">
        
      <option>BFEM</option> 
      <option>BAC + 1</option>  
      <option>BAC + 2</option> 
      <option>BAC + 3</option>  
      <option>BAC + 4</option>  
      <option>BAC + 5</option>
         

     </select>
</div>
<div class="form-group" >
        <?php echo Form::label('diplomem', 'Diplôme en mode');; ?>

       
    <select class="form-control m-bot15" name="diplomem">
        
      <option>Pas de diplôme</option> 
      <option>CAP</option>  
      <option>BT</option> 
      <option>BTS</option>  
      <option>Licence</option>  
      <option>Master</option>
         

     </select>
</div>

<div class="form-group">
        <?php echo Form::label('adressed', 'Adresse Domicile'); ?>

        <?php echo Form::text('adressed', null, ['class' => 'form-control']);; ?>

</div>
<div class="form-group">
        <?php echo Form::label('adressea', 'Adresse Entreprise ou Atelier'); ?>

        <?php echo Form::text('adressea', null, ['class' => 'form-control']);; ?>

</div>
<div class="form-group">
        <?php echo Form::label('nf', 'Niveau langue francaise'); ?>

        <div>
    <input type="radio" name="nf" value="passable">
    <label for="contactChoice1">Passable</label>
    <input type="radio" name="nf" value="moyen">
    <label for="contactChoice2">Moyen</label>
    <input type="radio" name="nf" value="assezbien">
    <label for="contactChoice3">Assez bien</label>
    <input type="radio" name="nf" value="bien">
    <label for="contactChoice4">Bien</label>
  </div>
</div>
<div class="form-group">
        <?php echo Form::label('em', 'Avez vous participer a un evenement de mode( defilé ou fashion-week )'); ?>

         <div>
    <input type="radio" name="em" value="oui">
    <label for="contactChoice1">Oui</label>
    <input type="radio" name="em" value="non">
    <label for="contactChoice2">Non</label>
    
  
</div>
</div>
<div class="form-group">
        <?php echo Form::label('nin', "Numero d'identité national"); ?>

        <?php echo Form::text('nin', null, ['class' => 'form-control']);; ?>

</div>
<div class="form-group">
        <?php echo Form::label('nd', 'Intitule du dernier diplome obtenu'); ?>

        <?php echo Form::text('nd', null, ['class' => 'form-control']);; ?>

</div>
  

<div class="clone hide">

<div class="hdtuto control-group lst input-group" id="removed" style="margin-top:10px">

  <input type="file" name="file[]" class="myfrm form-control">

  <div class="input-group-btn"> 

    <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>

  </div>

</div>

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

<script>
    $('#dak').hide();
    $('#thie').hide();
    $('#loug').hide();
    $('#saint').hide();
    $('#fatik').hide();
    $('#kaol').hide();
    $('#zi').hide();

$('#dakar').click(function(){
        $('#dak').show();
        $('#thie').hide();
        $('#loug').hide();
        $('#saint').hide();
        $('#fatik').hide();
        $('#kaol').hide();
        $('#zi').hide();
        });
$('#thies').click(function(){
        $('#dak').hide();
        $('#thie').show();
        $('#loug').hide();
        $('#saint').hide();
        $('#fatik').hide();
        $('#kaol').hide();
        $('#zi').hide();
});
$('#louga').click(function(){
        $('#dak').hide();
        $('#thie').hide();
        $('#loug').show();
        $('#saint').hide();
        $('#fatik').hide();
        $('#kaol').hide();
        $('#zi').hide();
});
$('#saint-l').click(function(){
        $('#dak').hide();
        $('#thie').hide();
        $('#loug').hide();
        $('#saint').show();
        $('#fatik').hide();
        $('#kaol').hide();
        $('#zi').hide();
});
$('#fatick').click(function(){
        $('#dak').hide();
        $('#thie').hide();
        $('#loug').hide();
        $('#saint').hide();
        $('#fatik').show();
        $('#kaol').hide();
        $('#zi').hide();
});
$('#kaolack').click(function(){
        $('#dak').hide();
        $('#thie').hide();
        $('#loug').hide();
        $('#saint').hide();
        $('#fatik').hide();
        $('#kaol').show();
        $('#zi').hide();
});
$('#zig').click(function(){
        $('#dak').hide();
        $('#thie').hide();
        $('#loug').hide();
        $('#saint').hide();
        $('#fatik').hide();
        $('#kaol').hide();
        $('#zi').show();
});

</script>
<?php $__env->stopSection(); ?>
	
	
	
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>