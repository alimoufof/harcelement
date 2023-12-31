
<!DOCTYPE html>
<html lang="en">

<head>

    @include('layouts.partials.head')

</head>
<body>

<!-- Prealoder -->
<div class="spinner_body">
   <div class="spinner"></div>  
</div>

<!-- Prealoder -->


<!--====== Start Header Section======-->
    @include('layouts.partials.navbar')
<!--====== End Header Section======-->


<!--====== Start Left Sidebar Section======-->
    @include('layouts.partials.sidebar')
<!--====== End Left Sidebar Section======-->


<!--====== Start Main Wrapper Section======-->
<section class="d-flex" id="wrapper">
  


    <div class="page-content-wrapper">
       <!--  Header BreadCrumb -->
        <div class="content-header">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="material-icons">home</i>Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('institution.index') }}">Institution</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $institution->user->prenom }} {{ $institution->user->nom }}</li>
              </ol>
            </nav>
            <div class="create-item">
                <a href="{{ route('institution.edit', $institution) }}" class="theme-primary-btn btn btn-primary"><i class="material-icons">add</i>Modifier l'institution</a>
                <a href="{{ route('institution.index') }}" class="btn btn-secondary"><i class="material-icons md-18">arrow_back</i>Retour à la liste des institutions</a>
            </div>
        </div>
          <!--  Header BreadCrumb -->   
          <!-- Create New User -->   
        <div class="main-content">

            <div class="card bg-white">
                <div class="card-body mt-5 mb-5">
                    
                    <div class="viewuser row">
                        
                        <div class="col-md-6">
                            <div class="form-group row">
                                <div class="col-md-4">Utilisateur</div>
                                <div class="col-md-8">
                                    {{ $institution->user->prenom }} {{ $institution->user->nom }}

                                 </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">Type d'institution</div>
                                <div class="col-md-8">
                                    {{ $institution->type }}
                                 </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">Nom</div>
                                <div class="col-md-8">
                                    {{ $institution->nom }}
                                 </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">Grade</div>
                                <div class="col-md-8">
                                    {{ $institution->grade }}
                                 </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">Email</div>
                                <div class="col-md-8">
                                    {{ $institution->email }}
                                 </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">Adresse</div>
                                <div class="col-md-8">
                                    {{ $institution->adresse }}
                                 </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">Description</div>
                                <div class="col-md-8">
                                    {{ $institution->description }}

                                 </div>
                            </div>

                            <div class="col-md-6">
                                <div class="user-thumb">
                                    <img id="profile-photo" src="{{ asset('storage/' . $institution->image) }}"  alt="">
                                </div>
    
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
         <!-- Create New User-->   


        </div>  
        <!--  main-content -->   
    </div> 

</section>
<!--====== End Main Wrapper Section======-->

    @include('layouts.partials.footer')

</body>
</html>