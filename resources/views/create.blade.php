@extends('layouts.Master')

   @section('content')
   @if ($errors->any())
   @foreach ($errors->all() as $erro )
       <span class="alert alert-danger "  style="font-size: 15px,text-align:center ; margn:auto 0" role="alert">
           {{ $erro }}
       </span><br>
   @endforeach
    
@else
    
@endif
       <h1 style="color: greenyellow;text-shadow:2px 2px 2px black; text-align:center"> 
        
       
        Creer Un compte Acteur </h1>
        <div class="container">
            
            <form action=" {{ route('page.store') }}" method="POST" class="form group col-md-12">
                @csrf
               
                    <br>
                    <label for="name"> NOM </label>
                <input type="text" name="name" id="name" class="form-control">
                 
                <label for="email"> email </label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="password"> Mot de Passe</label>
                <input type="password" name="password" id="password" class="form-control">

                <label for="adresse"> Adresse </label>
                <input type="text" name="adresse" id="adresse" class="form-control">
    
                <label for="pays"> Pays</label>
                <input type="text" name="pays" id="pays" class="form-control">

                <label for="birthDay"> Date De Naissance : </label>
                <input type="date" name="birthDay" id="birthDay" class="form-control">
               
                <br>
                  
                <input type="submit" value="Envoyer"   class="btn btn-primary">
            </form>
           
    

               
        </div>

         
   @endsection
