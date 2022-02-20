@extends('layouts.Master')

@section('content')


        <div class=" pt-5 pb-4 ">
                
                 @include('layouts.navbar')
            

                  <table class="table-bordered table-striped table-resized container pl-2 col-md-12">
                      <thead>
                          <tr>
                              <th> N° </th> 
                              <th>Noms</th>
                              <th>Email </th>
                              <th>MOt de Pase</th>
                              <th>Pays</th>
                              <th>Age</th>
                              <th>Actions</th>
                          </tr>
                      </thead>
                      
                      <tbody>
                           @if ($actors->count() >0)
                                    @foreach ($actors as $actor )
                                                
                                        <tr>
                                                <td scope="row"> <span class="badge badge-success">{{ $loop->iteration }}</span></td>
                                                <td> {{ $actor->name }}</td>
                                                <td> {{ $actor->email }}</td>
                                                <td> {{ $actor->password }}</td>
                                                <td> {{ $actor->pays }}</td>
                                                <td>
                                                    {{   
                                                       now()->diffInYears(Carbon::parse(->birthDay))
                                                    }}
                                                 </td>
                                                <td> 
                                                    <a href="{{ route('page.edit',$actor->id) }}" class="btn btn-primary">Edit </a>
                                                    <a href="{{ route('page.delete',$actor->id) }}" class="btn btn-danger">Delete </a>
                                                </td>
                                        </tr>
                                    @endforeach
                           @else
                               <h3 style="color: purple"> Any Data </h3>
                           @endif
                           
                      </tbody>
                  </table>
                  
                  {{ $actors->links() }}
             

        </div>


      <div class="container pt-8 pb-5">
        <a href=" " class="btn btn-secondary " > Liste Des comptes Disponibles </a>
      </div>
@endsection

