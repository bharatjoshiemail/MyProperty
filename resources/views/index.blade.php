@extends('welcome')

@section('content') 
        <div class="links">

           <ul id = "myTab" class = "nav nav-tabs">
                <li class = "active">
                   <a href = "#agentdiv" data-toggle = "tab">Agents</a>
                </li>

                <li><a href = "#propertydiv" data-toggle = "tab">Properties</a></li>
            </ul>

             <div id = "myTabContent" class = "tab-content">
                <div class = "tab-pane fade in active" id = "agentdiv">                   
                    
                    <style>
                        .carousel-inner > .item active > img ,
                        .carousel-inner > .item > img{
                            width: 30%;
                            height:150px;
                            margin: auto;                            
                        }
                        h3, h4{
                            color:white;
                        }
                        .carousel-inner > .item active > li > a ,
                        .carousel-inner > .item >  li > a {
                        color:black;
                        text-decoration: none;
                        }
                        #myCarouselAgent{
                            background-color:black;
                            padding:20px;
                        }
                        </style>
                    <div class="container">
                        <br>
                        <div id="myCarouselAgent" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                              <?php for($i=0;$i<count($agents);$i++){ ?>
                                <li data-target="#myCarouselAgent" data-slide-to="<?php echo $i;?>" <?php if($i==0){?> class="active" <?php } ?> ></li>
                              <?php } ?>
                          </ol>

                         <div class="carousel-inner" role="listbox">
                              <!-- Wrapper for slides --> 
                              <?php $i=1; ?>
                              @foreach($agents as $agent)
                                      <div <?php if($i==1){?> class="item active"  <?php }else{  ?> class="item" <?php } ?>>
                                          <h4>{{ $agent['AgencyName'] }} : {{ $agent['contact'] }}</h4>
                                          <img src="public/images/<?php echo strtolower($agent['AgencyName']); ?>.png" alt="{{ $agent['AgencyName'] }}" >                                            
                                      </div> 
                              <?php $i++; ?>
                              @endforeach
                          </div>                        

                          <!-- Left and right controls -->
                          <a class="left carousel-control" href="#myCarouselAgent" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarouselAgent" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div> 
                        
                </div>

                <div class = "tab-pane fade" id = "propertydiv">
                  
                    <style>
                        .carousel-inner > .item active > img ,
                        .carousel-inner > .item > img{
                            width: 70%;
                            height:400px;
                            
                            background-color:darkblue;
                        }
                        h3, h4{
                            color:white;
                        }
                        .carousel-inner > .item active > a ,
                        .carousel-inner > .item >  a {
                        color:white;
                        text-decoration: none;
                        }
                       #myCarouselProp{
                            background-color:black;
                            padding: 8px 0 12px;
                        }
                        .carousel-indicators {                            
                            margin: 0 3px 31px -346px;
                        }
                        .leftp{
                           font-size: 21px;
                           margin: 7px 0px 0px 166px;
                           color:white;
                           float:left;
                           position:relative;
                           
                        }
                        .rightp{
                           font-size:16px;
                           color:white;
                           float:right;
                           margin:12px 171px 0px 0px;
                           position:relative;
                        }
                        .btn-primary {
                            color: #fff;
                            margin:15px 0px 0px 12px;
                            position:relative;
                        }
                        </style>
                    <div class="container">
                        <br>
                        <div id="myCarouselProp" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                              <?php for($i=0;$i<count($properties);$i++){ ?>
                                <li data-target="#myCarouselProp" data-slide-to="<?php echo $i;?>" <?php if($i==0){?> class="active" <?php } ?> ></li>
                              <?php } ?>
                          </ol>

                            <div class="carousel-inner" role="listbox">
                                 <!-- Wrapper for slides -->
                                 <?php $i=1; ?>
                                 @foreach($properties as $property)
                                         <div <?php if($i==1){?> class="item active"  <?php }else{  ?> class="item" <?php } ?>>
                                             <h4>{{ $property['address'] }} {{ $property['postcode'] }},   £{{ $property['price'] }}</h4>
                                             <img src="public/images/property<?php echo $i; ?>.jpg" alt="property1" >
                                             <div class="leftp">{{ $property['description'] }}</div>
                                             <div class="rightp" >Contact : {{ $property['owner'] }} on {{ $property['contact'] }}</div>
                                             <br><a class='btn btn-primary' href="plumbers/{{ $property['postcode'] }}">Find Plumber near {{ $property['postcode'] }}</a>
                                         </div>
                                 <?php $i++; ?>
                                 @endforeach
                             </div>                        

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarouselProp" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarouselProp" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>                    
                </div>
                 
             </div>
        </div>
@endsection