<!DOCTYPE html>
<html>
  <head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: black;
      }
      h1 {
      margin: 0;
      font-weight: 400;
      }
      h3 {
      margin: 12px 0;
      color: black;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url(./images/background/bg1.webp);
      background-size:cover;
      }
      form {
      width: 83%;
      padding: 80px;
      }
      .f1{
        background:rgba(0,0,0,0.1);
      }
      fieldset {
      border: none;
      border-top: 1px solid pink;
      }
      .address-details, .add2-details {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .address-details >div, .add2-details >div >div {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
      }
      .address-details >div, .add2-details >div, input, label {
      width: 100%;
      }
      label {
      padding: 0 5px;
      text-align: right;
      vertical-align: middle;
      }
      input {
      padding: 5px;
      vertical-align: middle;
      }
      .checkbox {
      margin-bottom: 10px;
      }
      .checkbox input {
      width: auto;
      margin: -2px 10px 0 0;
      }
      .checkbox a {
      color: blue;
      }
      .checkbox a:hover {
      color: white;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: pink; 
      font-size: 14px;
      font-weight: 600;
      color:black;
      }
      button:hover {
      background: white;
      }
      @media (min-width: 568px) {
      .address-details >div, .add2-details >div {
      width: 50%;
      }
      label {
      width: 40%;
      }
      input {
      width: 60%;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div>
    <form action="/" name="addform">
      <div class="f1">
      <h1><center>Address Details</center></h1>
      <fieldset>
        <legend>
          <h3>Address Details</h3>
        </legend>
        <div  class="address-details">
          <div><label>Add1*</label><input type="text" name="add1" required placeholder="Flat,House no,Buliding,Comapny,Apartment"></div>
          <div><label>Add2*</label><input type="text" name="add2" required placeholder="Eg. near Morya hospital"></div>
          <div><label>Add3*</label><input type="text" name="add3" required placeholder="Area,Street,Sector,Village"></div>
          <div><label>City*</label><input type="text" name="city" required placeholder="Town/City"></div>
        </div>
      </fieldset>
      <fieldset>
        <legend>
          <h3>Address2 Details</h3>
        </legend>
        <div  class="add2-details">
            <div>
                <div><label>State*</label><input type="text" name="state" required placeholder=""></div>    
            </div>
            <div>
                <div><label>Pincode*</label><input type="text" name="name" required placeholder=""></div>
            </div>
    </div>
      <fieldset>
        <legend>
          <h3>Terms and Mailing</h3>
        </legend>
        <div  class="terms-mailing">
          <div class="checkbox">
            <input type="checkbox" name="checkbox"><span>I accept the <a href="  ">Privacy Policy and terms.</a></span>
          </div>
          <div class="checkbox">
            <input type="checkbox" name="checkbox"><span>I want to recelve personallzed offers by your site</span>
          </div>
      </fieldset>
      <button type="submit" href="/">Submit</button>
    </div>
    </form>
    </div>
    </div> 
  </body>
</html>