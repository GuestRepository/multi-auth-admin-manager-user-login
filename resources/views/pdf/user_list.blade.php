<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    #main{
        width: 700px;
        height:auto;
        }

    .title-and-img-container{
        width:700px;
        height:110px;
        /* background-color:#121222; */
    }    
    .container-border-header{
        width:700px;
        height:15px;
        /* background-color:blue; */
    }    
    .leftTitle{
        width:500px;
        height:110px;
        /* background-color:red; */
        position: relative;
        float:left;
    }

    .profileImg{
        width:180px;
        height:110px;
        float:right;
        position: relative;
        /* background-color:blue; */
    }

    .aboutMe{
        width: 700px;
        height:2ss00px;
        /* background-color:pink; */
    }

    .companyDetails-container{
        width:700px;
        height:auto;
        /* background-color:#8754; */
    }

    .companyleft{
        width:700px;
        height:110px;
        padding: 5px;
    }
    .companyleft1{
        width:700px;
        height:110px;
        padding: 5px;
    }
    .companyleft2{
        width:700px;
        height:110px;
        padding: 5px;
    }
    
    .keySkill{
        width:700px;
        height:110px;
        padding: 5px;
    }
    .companyright{
        width:350px;
        height:110px;
        position: relative;
        /* background-color:#875122; */
        float:left;
    }
   
    .header-main{
        width:700px;
        height:200px;
        /* background-color:gray; */
    }

    .addressleft{
        width:700px;
        height:110px;
        float:left;
        /* background-color:red; */
    }

    table{
        width:100%;
        border-collapse:collapse;
    }

    th,td{
        padding:8px;
        text-align:left;
    }
    
</style>


<body>
    <div id="main">
        <div class="title-and-img-container">
        
        <div class="leftTitle"> <h2> {{$users->name}} </h2>
            <b>Email : </b> {{$users->email}}
            <b>Mobile : </b> {{$users->phone}}
            <b>Qualification : </b> {{$users->course}}
        </div>  
        <div class="profileImg"> <img src="{{ public_path('studentImage/'.$users->image) }}" style="height:110px;width:110px"></div>
        
        </div>
        <div class="aboutMe">
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis quisquam ipsum. Consectetur obcaecati necessitatibus ipsam asperiores veritatis fugiat, animi ea nesciunt laborum impedit voluptatum reprehenderit deserunt accusamus maiores omnis. </p>
        
            <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque blanditiis quisquam ipsum. Consectetur obcaecati necessitatibus ipsam asperiores veritatis fugiat, animi ea nesciunt laborum impedit voluptatum reprehenderit deserunt accusamus maiores omnis. </p>
        </div>

        <!-- <div class="container-border-header">IBM </div>
        <div class="title-and-img-container">SOftware Enginear </div>
        <div class="header-main">Cognigent</div> -->

        <div class="companyDetails-container"> 
        <hr>
            <div class="companyleft">
                <h3>Software Developer 2020 to 2023</h3>
                <span>Compnay Name:</span>  IBM <br>
                <span>Designation:</span>  Software Developer <br>

                <span>Team Size:</span>  10    <br>
                <span>Project Name:</span>  PIzza Hurt <br>
            </div>
            
            <div class="companyleft1">
             <br>   
            <hr>
            <h3>Software Developer 2018 to 2020</h3> 
            <span>Compnay Name:</span>  ACCENTURE   <br>
                <span>Designation:</span>  Software Developer <br>
                <span>Team Size:</span>  10 <br>
                <span>Project Name:</span>  PIzza Hurt <br><br>
            </div>
            
            
            <div class="companyleft2">
            <br> 
            <br>   
            <br> 
            <hr>
            <h3>Software Developer 2016 to 2018</h3>
            <span>Compnay Name:</span>  INFOSYS   <br>
                <span>Designation:</span>  Software Developer <br>
                <span>Team Size:</span>  10 <br>
                <span>Project Name:</span>  PIzza Hurt <br><br> 
                <br> 
            </div>
            <br>   
            <br>
            <div class="keySkill">
            <br> 
            <br>   
            <br> 
            <hr>
            <h3>Key Skill</h3>
            <span>Serve:</span>  Linux   <br>
                <span>Tolls:</span>  GitHub,Bitbucket <br>
                <span>operating System:</span>  Linux,Window <br>
                <span>Language:</span>  PHP,JAVA,C++ <br><br> 
                <br> 
            </div>

        </div> 
        <!-- company one close -->
       
        <div class="header-main">
                <br> 
                <br>   
                <br> 
            <div class="addressleft">
                <br> 
                <br>   
                <br>        
                <br> 
                <br>   
                <br>        
            <hr>
                    <h3>Address</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>House Number : </th>
                                <td>{{ $users->name }}</td>
                                
                            </tr>
                                <th>LandMark : </th>    
                                <td>{{ $users->email }}</td>
                            <tr>    
                                <th>Near : </th>
                                <td>{{ $users->phone }}</td>
                            </tr>
                            
                            <tr>
                        
                                <th>POST OFFICE :</th>
                                <td>{{ $users->name }}</td>
                            </tr>
                            
                            <tr>
                                <th>PIN NUMBER :</th>
                                <td>{{ $users->email }}</td>
                            </tr>   
                                <th>DIST</th>
                                <td>{{ $users->phone }}</td>
                            </tr>
                            
                            <tr>
                                <th>POLICE STATION :</th>
                                <td>{{ $users->name }}</td>
                            </tr>

                            <tr>
                                <th>STATE :</th>
                                <td>{{ $users->email }}</td>
                            </tr> 
                            <tr>   
                                <th>CITY :</th>
                                <td>{{ $users->phone }}</td>
                            </tr>
                        </thead>

                        
                    </table>
            </div>
        </div>
      
       
        

    </div>
</body>
</html>