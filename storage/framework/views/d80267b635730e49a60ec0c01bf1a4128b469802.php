

<?php $__env->startSection('content'); ?>

<!-- 
    <h2>Ajouter un Enseignant</h2>
    <hr/>
    <a class="btn btn-primary" href="/enseignants" style="margin-bottom: 15px;">Revenir à la liste</a>
     -->
    
     
    
    <form method="post" action="<?php echo e(route('enseignants.store')); ?>" enctype="multipart/form-data" style="width:350px; text-align:center; margin-left:430px;">

  <?php echo e(csrf_field()); ?>

  <h1>Formulaire pour la candidature des professeurs</h1><br>
   <div class="form-group" >
        <?php echo Form::label('prenom', 'Prenom');; ?>  
        <?php echo Form::text('prenom', null, ['required','class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('nom', 'Nom');; ?>

        <?php echo Form::text('nom', null, ['required','class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('age', 'Age');; ?>

        <?php echo Form::text('age', null, ['required','class' => 'form-control']);; ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('mobile', 'Telephone');; ?>

        <?php echo Form::text('mobile', null, ['required','class' => 'form-control']);; ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('email', 'Email'); ?>

        <?php echo Form::email('email', null, ['required','class' => 'form-control']);; ?>

    </div>
      
    <div class="form-group">
        <?php echo Form::label('region', 'Région');; ?>

       
    <select class="form-control m-bot15" name="region" id="region">
      <option id="n">-- --</option>
      <option id="d">Dakar</option> 
      <option id="t">Thies</option>  
      <option id="l">Louga</option> 
      <option id="s">Saint-louis</option>  
      <option id="f">Fatick</option>
      <option id="k">Kaolack</option>
      <option id="z">Ziguinchor</option>
     </select>
</div>
<!-----------------------------------ville---------------------------->
<div class="form-group"  id="dakar" >
        <?php echo Form::label('ville', 'Ville'); ?>

        <select class="form-control m-bot15" name="ville">
        <option>Dakar</option>
        <option>Pikine</option>
        <option>Guediawaye</option>
        <option>Rufisque</option> 
       </select> 
 </div>
 <div class="form-group"  id="thies" >
        <?php echo Form::label('ville', 'Ville'); ?>

        <select class="form-control m-bot15" name="ville">
        <option>Thies</option>
        <option>Mbour</option>
        <option>Tivaouane</option>
       </select> 
 </div>
 <div class="form-group"  id="louga" >
        <?php echo Form::label('ville', 'Ville'); ?>

        <select class="form-control m-bot15" name="ville">
        <option>Louga</option>
        <option>Kebemer</option>
        <option>Linguere</option>
       </select> 
 </div>
 <div class="form-group"  id="saint" >
        <?php echo Form::label('ville', 'Ville'); ?>

        <select class="form-control m-bot15" name="ville">
        <option>Saint-Louis</option>
        <option>Dagana</option>
        <option>Podor</option> 
       </select> 
 </div>
 <div class="form-group"  id="fatick" >
        <?php echo Form::label('ville', 'Ville'); ?>

        <select class="form-control m-bot15" name="ville">
        <option>Fatick</option>
        <option>Foundiougne</option>
        <option>Gossas</option>
       </select> 
 </div>
 <div class="form-group"  id="kaolack" >
        <?php echo Form::label('ville', 'Ville'); ?>

        <select class="form-control m-bot15" name="ville">
        <option>Kaolack</option>
        <option>Guinguinéo</option>
        <option>Nioro du Rip</option>
       </select> 
 </div>
 <div class="form-group"  id="zig" >
        <?php echo Form::label('ville', 'Ville'); ?>

        <select class="form-control m-bot15" name="ville">
        <option>Ziguinchor</option>
        <option>Bignona</option>
        <option>Oussouye</option>
       </select> 
 </div>
<!-----------------------------------ville-fin--------------------------->   
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

       
        <?php echo Form::text('année_exper', null, ['required','class' => 'form-control']);; ?>


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

        <input required type="file" name="cv_file" class="myfrm form-control">
    </div>



    

   
   <button type="submit" class="btn btn-success" style="margin-top:10px" id="ok">S'inscrire</button>
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

    $('#dakar').hide();
    $('#thies').hide();
    $('#louga').hide();
    $('#saint').hide();
    $('#fatick').hide();
    $('#kaolack').hide();
    $('#zig').hide();


$('#n').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#d').click(function(){
        $('#dakar').show();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
        });
$('#t').click(function(){
        $('#dakar').hide();
        $('#thies').show();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#l').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').show();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#s').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').show();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#f').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').show();
        $('#kaolack').hide();
        $('#zig').hide();
});
$('#k').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').show();
        $('#zig').hide();
});
$('#z').click(function(){
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').show();
});
$('#ok').click(function(){
  alert("Nous vous remercions d'avoir rempli notre formulaire. Nous vous contacterons dans les plus brefs délais.");
}); 

</script>
<style>
body {
 background-image: src="images/logo.jpeg";

}
</style>
<?php $__env->stopSection(); ?>
	
	
	

<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>