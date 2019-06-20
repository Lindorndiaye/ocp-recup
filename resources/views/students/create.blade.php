@extends('templates.master')

@section('content')

   
    <h2>Ajouter un étudiant</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Revenir à la liste</a>
    
    

    
    <form method="post" action="{{route('students.store')}}" enctype="multipart/form-data" style="width:350px; text-align:center; margin-left:430px;">

  {{csrf_field()}}
   <div class="form-group" >
        {!! Form::label('prenom', 'Prenom'); !!}  
        {!! Form::text('prenom', null, ['required','class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('nom', 'Nom'); !!}
        {!! Form::text('nom', null, ['required','class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('age', 'Age'); !!}
        {!! Form::number('age', null, ['required','class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('mobile', 'Telephone'); !!}
        {!! Form::text('mobile', null, ['required','class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['required','class' => 'form-control']); !!}
    </div>
    

   {{-- {{ count($students) }} --}}
   <div class="form-group">
        {!! Form::label('specialite', 'Specialité'); !!}
       
    <select class="form-control m-bot15" name="specialite">
        
      <option >Stylisme</option> 
      <option >Couture</option>  
      <option >Creation de mode</option> 
      <option >Manager mode</option>  
      
     </select>
    </div>
    <div class="form-group">
        {!! Form::label('region', 'Région'); !!}
       
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
<div id="vil">
<div class="form-group"  id="dakar" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Dakar</option>
        <option>Pikine</option>
        <option>Guediawaye</option>
        <option>Rufisque</option> 
       </select> 
 </div>
 <div class="form-group"  id="thies" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Thies</option>
        <option>Mbour</option>
        <option>Tivaouane</option>
       </select> 
 </div>
 <div class="form-group"  id="louga" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Louga</option>
        <option>Kebemer</option>
        <option>Linguere</option>
       </select> 
 </div>
 <div class="form-group"  id="saint" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Saint-Louis</option>
        <option>Dagana</option>
        <option>Podor</option> 
       </select> 
 </div>
 <div class="form-group"  id="fatick" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Fatick</option>
        <option>Foundiougne</option>
        <option>Gossas</option>
       </select> 
 </div>
 <div class="form-group"  id="kaolack" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Kaolack</option>
        <option>Guinguinéo</option>
        <option>Nioro du Rip</option>
       </select> 
 </div>
 <div class="form-group"  id="zig" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Ziguinchor</option>
        <option>Bignona</option>
        <option>Oussouye</option>
       </select> 
 </div>
 </div>
<!-----------------------------------ville-fin--------------------------->    

   <div class="form-group">
        {!! Form::label('diplome', 'Diplôme'); !!}
       
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
        {!! Form::label('diplomem', 'Diplôme en mode'); !!}
       
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
        {!! Form::label('adressed', 'Adresse Domicile') !!}
        {!! Form::text('adressed', null, ['required','class' => 'form-control']); !!}
</div>
<div class="form-group">
        {!! Form::label('adressea', 'Adresse Entreprise ou Atelier') !!}
        {!! Form::text('adressea', null, ['required','class' => 'form-control']); !!}
</div>
<div class="form-group">
        {!! Form::label('nf', 'Niveau langue francaise') !!}
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
        {!! Form::label('em', 'Avez vous participer a un evenement de mode( defilé ou fashion-week )') !!}
         <div>
    <input type="radio" name="em" value="oui">
    <label for="contactChoice1">Oui</label>
    <input type="radio" name="em" value="non">
    <label for="contactChoice2">Non</label>
    
  
</div>
</div>
<div class="form-group">
        {!! Form::label('nin', "Numero d'identité national") !!}
        {!! Form::text('nin', null, ['required','class' => 'form-control']); !!}
</div>
<div class="form-group">
        {!! Form::label('nd', 'Intitule du dernier diplome obtenu') !!}
        {!! Form::text('nd', null, ['required','class' => 'form-control']); !!}
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
$( document ).ready(function() {
        $('#dakar').hide();
        $('#thies').hide();
        $('#louga').hide();
        $('#saint').hide();
        $('#fatick').hide();
        $('#kaolack').hide();
        $('#zig').hide();
   
});

// $(window).on('load', function(){
//         alert( "ready!" );
// });

   


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


</script>
@endsection()
	
	
	