@extends('templates.master')

@section('content')


    <h2>Ajouter un Enseignant</h2>
    <hr/>
    <a class="btn btn-primary" href="/enseignants" style="margin-bottom: 15px;">Revenir à la liste</a>
    
    
     
    
    <form method="post" action="{{route('enseignants.store')}}" enctype="multipart/form-data" style="width:350px; text-align:center; margin-left:430px;">

  {{csrf_field()}}
   <div class="form-group" >
        {!! Form::label('prenom', 'Prenom'); !!}  
        {!! Form::text('prenom', null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('nom', 'Nom'); !!}
        {!! Form::text('nom', null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('age', 'Age'); !!}
        {!! Form::text('age', null, ['class' => 'form-control']); !!}
    </div>
    <div class="form-group">
        {!! Form::label('mobile', 'Telephone'); !!}
        {!! Form::text('mobile', null, [ 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', null, ['class' => 'form-control']); !!}
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
<div class="form-group"  id="dakar" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>D1</option>
        <option>D2</option>
        <option>D3</option>
        <option>D4</option> 
       </select> 
 </div>
 <div class="form-group"  id="thies" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>T1</option>
        <option>T2</option>
        <option>T3</option>
        <option>T4</option> 
       </select> 
 </div>
 <div class="form-group"  id="louga" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>L1</option>
        <option>L2</option>
        <option>L3</option>
        <option>L4</option> 
       </select> 
 </div>
 <div class="form-group"  id="saint" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>S1</option>
        <option>S2</option>
        <option>S3</option>
        <option>S4</option> 
       </select> 
 </div>
 <div class="form-group"  id="fatick" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>F1</option>
        <option>F2</option>
        <option>F3</option>
        <option>F4</option> 
       </select> 
 </div>
 <div class="form-group"  id="kaolack" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>K1</option>
        <option>K2</option>
        <option>K3</option>
        <option>K4</option> 
       </select> 
 </div>
 <div class="form-group"  id="zig" >
        {!! Form::label('ville', 'Ville') !!}
        <select class="form-control m-bot15" name="ville">
        <option>Z1</option>
        <option>Z2</option>
        <option>Z3</option>
        <option>Z4</option> 
       </select> 
 </div>
<!-----------------------------------ville-fin--------------------------->   
   <div class="form-group">
        {!! Form::label('renseigner votre derniere diplome', 'Renseigner votre derniere Diplôme'); !!}
       
    <select class="form-control m-bot15" name="deniere_diplome">
        
      <option>CAEM</option> 
      <option>CAES</option>  
      <option>Doctorat</option> 
     
     </select>
</div>
<div class="form-group" >
        {!! Form::label('combien d année d expérience', 'Combien d année d expérience'); !!}
       
        {!! Form::text('année_exper', null, ['class' => 'form-control']); !!}

</div>

<div class="form-group" >
        {!! Form::label('Avez-vous une expérience en fos, fle, français professionel: oui ou non', 'Avez-vous une expérience en FOS, FLE, Français professionel: Oui ou Non'); !!}
       <div style="display:flex; margin-left:120px;">
     <p> Oui:<input type="radio" style="width:25px" id="ocp" name="experience" class="myfrm form-control" value="Oui"></p>
      <p style="margin-left:20px;"> Non:<input type="radio"  style="width:25px" ocp="opc" name="experience" class="myfrm form-control" Value="Non"></p>
       </div>
</div>

    <div class="form-group" >
{!! Form::label('numéro de la carte d identité national', 'Numéro de la carte d identité national'); !!}

<input type="number" name="num_cni" class="myfrm form-control"><br>


</div>

<div class="form-group">
{!! Form::label('votre cv en pdf', 'Votre CV en PDF'); !!}
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


</script>
@endsection()
	
	
	
