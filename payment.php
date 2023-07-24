<html>
  <head>
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <title>
    HBM
  </title>
  <style>
    .header{
  background-image: url("hbm.jpg ");
  min-height: 600px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;   
  }
h1{
  font-size: xx-large;
}
  .navbar {
    overflow: hidden;
    background-color: rgb(104, 103, 103);
    font-style: bold;
    }
    .navbar a {
    float: left;
    display: block;
    color: rgb(255, 255, 255);
    text-align: center;
    padding: 10px 20px;
    font-size: 25px;
    text-decoration: none;
    width:13%;
    font-family: 'Times New Roman';  
    }
    .navbar:hover{
      background-color:  rgb(104, 103, 103);
    }
    .dropdown {
      float: left;
      overflow: hidden;
      font-style: bold;
    }
    
    .dropdown .dropbtn { 
      border: none;
      outline: none;
      color: rgb(255, 255, 255);
      padding: 10px 20px;
      background-color: inherit;
      font-family: inherit;
      font-size: 25px;
      margin: 0;
      
    }
    
    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: rgb(175, 171, 171);
    }
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {
      background-color: #ddd;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
    .grey{
      background-color:rgb(197, 194, 194);
      margin:0;
    }
    .corner {
      border-radius: 0px;
      background:rgb(197, 194, 194);
      padding: 20px; 
      width: 600;
      height: 400;  
     
    }
    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 25px;
    }
    table {
  width: 100%;
}
td {
  text-align: center;
}
th {
  height: 70px;
}
  </style>
  </head>
  <body>
    <div class="navbar">
      <b>
      <a href="" class="right">HOME</a>
      <div class="dropdown">
        <button class="dropbtn">SERVICES
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="build.html">Build</a>
          <a href="">Reconstruct</a>
        </div>
      </div> 
      <a href="monitor.php" class="right">MONITER</a>
      <a href="" class="right">PAYMENTS</a>
      <a href="" class="right">ABOUT US</a>
      <a href="contact.html" class="right">CONTACT US</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fa fa-fw fa-user"></i><i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="">PROFILE</a>
          <a href="">LOGOUT</a>
        </div>
      </div> 
    </b>   
  </div>
 


    </body>
    </html>