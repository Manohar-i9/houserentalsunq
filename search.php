<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
    <head>
        
        <meta charset="utf-8" />
        <title> Search - House Rentals</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    
<body>
    
    <div class="navbar explore">
        <img src="logo.png" class="logo">
            <ul>
                <font color="#778899" size="4"> Welcome </font>
                <font color="#778899" size="5"> <b><?php echo $_SESSION['username']; ?></b>...</font>
                <li><a href="logout.php"> LOGOUT </a></li>
            </ul>
    </div>
    
    <div class="searchbox">
         <input id="myinput" type="text" placeholder="     Search by Address..." onkeyup="searchfun()">
    </div>
    
    
    <table id=information>
        
        <tr>
            <th class="owidth"> OWNER NAME </th>
            <th class="rwidth"> RENT </th>
            <th class="twidth"> TYPE </th>    
            <th class="awidth"> ADDRESS </th>
            <th class="mwidth"> MORE DETAILS </th>
        </tr>    
    
        <tr>
            <td class="owidth"> Manohar Tippireddy </td>
            <td class="rwidth"> 6500 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Srinivasa nagar,Near Sun School,100ft Ring road,Plot No:159,Vizianagaram,Andhra Pradesh,535002 </td>
            <td class="mwidth hover"><a href="535002A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>    
        </tr>
        
        <tr>
            <td class="owidth"> Aneesh Sama</td>
            <td class="rwidth"> 8500 </td>
            <td class="twidth"> 3BHK </td>
            <td class="awidth"> MIG Phase I,Lingampally,Bharat Heavy Electricals Limited,Hyderabad,Telangana,502032</td>
            <td class="mwidth hover"><a href="502032A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>  
        </tr>
        
        <tr>
            <td class="owidth"> Pavan Ajmeera </td>
            <td class="rwidth"> 6000 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Gudimalgapuram,New Colony,Door No:3-51/11,Chintalapalem,Suryapet,Telangana,508246</td>
            <td class="mwidth hover"><a href="508256A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>
        </tr>
        
        <tr>
            <td class="owidth"> Rajesh Khetavath </td>
            <td class="rwidth"> 8500 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Sarangapur,HouseNo:2-94,Nizamabad,Nijamabad,Nijamabad,Telangana,503186 </td>
            <td class="mwidth hover"><a href="503186A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>
        </tr>
    
        <tr>
            <td class="owidth"> Pavan Konisetty </td>
            <td class="rwidth"> 7000 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Siri Heights,Flat:406,Ram Nagar,6th Road,Revenue Colony,Anantapur,Telangana,515004 </td>
            <td class="mwidth hover"><a href="515004A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>
        </tr>
        
        <tr>
            <td class="owidth"> Manohar Tippireddy </td>
            <td class="rwidth"> 6500 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Srinivasa nagar,Near Sun School,100ft Ring road,Plot No:159,Vizianagaram,Andhra Pradesh,535002 </td>
            <td class="mwidth hover"><a href="535002A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>    
        </tr>
        
        <tr>
            <td class="owidth"> Aneesh Sama</td>
            <td class="rwidth"> 8500 </td>
            <td class="twidth"> 3BHK </td>
            <td class="awidth"> MIG Phase I,Lingampally,Bharat Heavy Electricals Limited,Hyderabad,Telangana,502032</td>
            <td class="mwidth hover"><a href="502032A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>  
        </tr>
        
        <tr>
            <td class="owidth"> Pavan Ajmeera </td>
            <td class="rwidth"> 6000 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Gudimalgapuram,New Colony,Door No:3-51/11,Chintalapalem,Suryapet,Telangana,508246</td>
            <td class="mwidth hover"><a href="508256A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>
        </tr>
        
        <tr>
            <td class="owidth"> Rajesh Khetavath </td>
            <td class="rwidth"> 8500 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Sarangapur,HouseNo:2-94,Nizamabad,Nijamabad,Nijamabad,Telangana,503186 </td>
            <td class="mwidth hover"><a href="503186A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>
        </tr>
    
        <tr>
            <td class="owidth"> Pavan Konisetty </td>
            <td class="rwidth"> 7000 </td>
            <td class="twidth"> 2BHK </td>
            <td class="awidth"> Siri Heights,Flat:406,Ram Nagar,6th Road,Revenue Colony,Anantapur,Telangana,515004 </td>
            <td class="mwidth hover"><a href="515004A00more.html"> <img src="clicklogo.png" class="logo"> </a></td>
        </tr>
        
              
    </table>
    <br><br><br> 
    
    
    
    <script> 
    
        const searchfun = () => {
            
            let filter = document.getElementById('myinput').value.toUpperCase();
            let informartion = document.getElementById('information');
            let tr = information.getElementsByTagName('tr');
            for(var i=0; i<tr.length;i++)
                {
                    let td=tr[i].getElementsByTagName('td')[3];
                
            if(td){
                let textvalue = td.textContent||td.innerHTML;
                if(textvalue.toUpperCase().indexOf(filter) > -1){
                    tr[i].style.display="";
                }else 
                {tr[i].style.display="none";}
                    }
                }
        }
    </script>
    
    
</body>
</html>