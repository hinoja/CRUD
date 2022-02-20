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
       <h1 style="color: rgb(138, 207, 9);text-shadow:2px 2px 2px black; text-align:center"> 
        
       
         Editer  Les Données</h1>
        <div class="container">
            @if ($errors->any())
                        @foreach ($errors->all() as $erro )
                            <span class="alert alert-danger "  style="font-size: 15px,text-align:center ; margn:auto 0" role="alert">
                                {{ $erro }}
                            </span><br>
                        @endforeach
            @endif
            
            <form action="{{ route('page.update',$item->id) }}" method="POST" class="form group col-md-12">
                @csrf
            
                    <br>
                    <label for="name"> NOM </label>
                <input type="text" name="name"  value="{{ old('name') ?? $item->name }}" id="name" class="form-control">
                 
                <label for="email"> email </label>
                <input type="email" name="email" id="email" value="{{ $item->email }}" class="form-control">

                <label for="password"> Mot de Passe</label>
                <input type="password" value="{{ $item->password }}"  name="password" id="password" class="form-control">

                <label for="adresse"> Adresse </label>
                <input type="text" name="adresse" value="{{ $item->adresse }}"  id="adresse" class="form-control">
    
                <label for="pays"> Pays</label>
                <input type="text" name="pays" value="{{ $item->pays }}"  id="pays" class="form-control">

                <label for="birthDay"> Date De Naissance : </label>
                <input type="date" name="birthDay" value="{{ $item->birthDay }}" id="birthDay" class="form-control">
               
                <br>
                  
                <input type="submit" value="Modifier"   class="btn btn-primary">
            </form>
           
    

               
        </div>

         
   @endsection
