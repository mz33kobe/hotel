<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Hotel.Com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css/style.css"rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="margin-top:50px;">
<?php
      include('Menu Bar.php')
  ?><br>
<div class="container-fluid text-center">
<div class="container"> 
  <div class="row content">
    <div class="col-sm-12">
      <h1 id="font">{ Hotel.com }</h1><br>
      <p class="text-justify">We have 72 comfortably equipped rooms, including two suites: The President Suite and the Ambassador Suite, with over one hundred metres of surface area, which are sure to awe even the most demanding Guests. We offer 7 rooms, where we have been preparing family and business meetings already for 15 years.

The Europa Hotel is not merely the building but, above all, its people. We are a team of professionals, who can organise every event end-to-end.

We have many years of experience, extensive conference facilities, as well as technical and catering equipment, and we will be more than happy to organise your meeting – both in our building, in a tent at the hotel's patio, as well as in any other place of your choosing.<h1 align="center"id="font">[ Services ]</h1><br>
<p class="text-justify">Full-service hotels often provide a wide array of guest services and on-site facilities. Commonly found amenities may include: on-site food and beverage (room service and restaurants), meeting and conference services and facilities, fitness center, and business center. Full-service hotels range in quality from mid-scale to luxury. This classification is based upon the quality of facilities and amenities offered by the hotel. [8] Examples include: Holiday Inn, Kimpton Hotels, Hilton, Marriott, and Hyatt Regency brands.</p>
    </div>
  </div><br><br>
  <div class="row"align="center">
  <!--map Start Here-->
  <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
      <a href="#" type="button" data-toggle="modal" data-target="#myModal"><img src="image/icon/icon-01.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
  </div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <iframe class="frame"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.9012415990155!2d77.37085911440647!3d28.602739392180986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce57ca5ff4435%3A0x6de631b7a5bfdacb!2sUnion+Bank+Of+India!5e0!3m2!1sen!2sin!4v1555502551059!5m2!1sen!2sin" width="550"height="300" frameborder="0" style="border:1" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>      
<!--Map Close Here-->
        <div class="col-sm-2">
          <h4><b>Address</b></h4>
          <b>NAIROBI KENYA</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-02.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Phone</b></h4>
              <b>+254710931961</b>
        </div>
        <div class="col-sm-2"style="background-color:#27303b;height:80px;width:100px;">
            <a href="#"><img src="image/icon/icon-03.png"width="60px;"height="50px;"style="margin-top:15px;"></a>
        </div>
         <div class="col-sm-2">
          <h4><b>Email-Id</b></h4>
              <b>vikins@gmail.com</b>
        </div>
  </div><br><br>
</div>
</div>
<?php
  include('Footer.php')
?>
</body>
</html>
