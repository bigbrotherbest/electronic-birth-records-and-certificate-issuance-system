<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Urbanist:wght@900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="firstform.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birth Registration</title>
    <link rel="stylesheet" href="<link rel=" stylesheet"
        href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">">
</head>

<body>
  
 
    <form action="forma.php" method="post" class="form" name="submit" id="birthregistrationform">
      <div class="top">
      <img class="coatofarms" src="Coat_of_arms_of_Nigeria.png" alt="">
      <h1 class="text-center">Live Birth Registration</h1>


      </div>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Basic Registration"
        ></div>
        <div class="progress-step" data-title="Particulars of Child"></div>
        <div class="progress-step" data-title="Particulars of Mother"></div>
        <div class="progress-step" data-title="Particulars of Father"></div>
        <div class="progress-step" data-title="Particulars of Informant"></div>
      </div>


      <!-- Steps -->
      <div class="form-step form-step-active">

      <div class="Fullcontent">
      
            Basic Registration

            <div class="ruler">

            </div>

      </div>
        <div class="pack">
        <div class="input-group">
          <label for="username">Registration Centre</label>
          <input type="text" name="RegistrationCentre" id="Registration Centre" />
        </div>
        <div class="input-group">
          <label for="position">Village/Town</label>
          <input type="text" name="Town" id="Village/Town" />
        </div>
        <div class="input-group">
          <label for="position">Local Government Area</label>
          <input type="text" name="LocalGovernmentArea" id="Local Government Area" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">State</label>
          <input type="text" name="State" id="State" />
        </div>
        <div class="input-group">
          <label for="position">Birth Certificate Number</label>
          <input type="text" name="BirthCertificateNumber" id="Birth Certificate Number" />
        </div>
        <div class="input-group">
          <label for="position">Birth Register Volume</label>
          <input type="text" name="BirthRegisterVolume" id="BirthRegisterVolume"  placeholder="" class='readonly' readonly value=""/>
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">Entry Number</label>
          <input type="number" name="EntryNumber" id="EntryNumber" placeholder="" class='readonly'readonly value=""/>
        </div>
        <div class="input-group">
          <label for="position">Date Of Registration</label>
          <input type="date" name="DateOfRegistration" id="position" />
        </div>
        <div class="input-group">
          <label for="position">Staff's Name</label>
          <input type="text" name="StaffName" id="position" />
        </div>

        </div>
       
        <div class="">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
      </div>
      <div class="form-step">
      <div class="Fullcontent">
      
      Particulars of Child
      <div class="ruler">
              
              </div>

</div>
      <div class="pack">
        <div class="input-group">
          <label for="username">First Name</label>
          <input type="text" name="FirstName" id="First Name" />
        </div>
        <div class="input-group">
          <label for="position">Middle Name</label>
          <input type="text" name="MiddleName" id="Middle Name" />
        </div>
        <div class="input-group">
          <label for="position">Last Name</label>
          <input type="text" name="LastName" id="Last Name" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">Date Of Birth</label>
          <input type="date" name="DateOfBirth" id="Date Of Birth" />
        </div>
        <div class="input-group">
          <label for="position">Birth Order</label>
          <input type="text" name="BirthOrder" id="Birth Order" />
        </div>
        <div class="input-group">
          <label for="position">Sex</label>
          <input type="text" name="Sex" id="Sex" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">Place of Occurence</label>
          <input type="text" name="PlaceOfOccurrence" id="Place of Occurence" />
        </div>
        <div class="input-group">
          <label for="position">Village / Town</label>
          <input type="text" name="Town" id="position" />
        </div>
        <div class="input-group">
          <label for="position">Type Of Birth</label>
          <input type="text" name="TypeOfBirth" id="TypeOfBirth" />
        </div>

        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
      <div class="Fullcontent">
      
      Particulars of Mother

      <div class="ruler">
              
              </div>

</div>
      <div class="pack">
        <div class="input-group">
          <label for="username">First Name</label>
          <input type="text" name="FirstNameM" id="FirstName" />
        </div>
        <div class="input-group">
          <label for="position">Middle Name</label>
          <input type="text" name="MiddleNameM" id="MiddleName" />
        </div>
        <div class="input-group">
          <label for="position">Last Name</label>
          <input type="text" name="LastNameM" id="LastName" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">Age at Birth Of Child</label>
          <input type="text" name="AgeatBirthOfChild" id="AgeatBirthOfChild" />
        </div>
        <div class="input-group">
          <label for="position">Marital Status</label>
          <input type="text" name="MaritalStatus" id="MaritalStatus" />
        </div>
        <div class="input-group">
          <label for="position">Phone Number</label>
          <input type="number" name="PhoneNumber" id="PhoneNumber" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">NIN Number</label>
          <input type="text" name="NINNumber" id="NINNumber" />
        </div>
        <div class="input-group">
          <label for="position">Nationality</label>
          <input type="text" name="Nationality" id="Nationality" />
        </div>
        <div class="input-group">
          <label for="position">If Nigerian, State Of Origin</label>
          <input type="text" name="StateOfOrigin" id="StateOfOrigin" />
        </div>
        

        </div>
        <div class="pack">
        <div class="input-group">
          <label for="username">  Literate/Illetrate</label>
          <input type="text" name="LorI" id="LorI" />
        </div>
        <div class="input-group">
          <label for="position">Occupation</label>
          <input type="text" name="Occupation" id="Occupation" />
        </div>
        <div class="input-group">
          <label for="position">Addres of Residence</label>
          <input type="text" name="AoR" id="AoR" />
        </div>
        

        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
      <div class="Fullcontent">
      
      Particulars of Father
      <div class="ruler">
              
              </div>

</div>
<div class="pack">
        <div class="input-group">
          <label for="username">First Name</label>
          <input type="text" name="FirstNameF" id="FirstName" />
        </div>
        <div class="input-group">
          <label for="position">Middle Name</label>
          <input type="text" name="MiddleNameF" id="MiddleName" />
        </div>
        <div class="input-group">
          <label for="position">Last Name</label>
          <input type="text" name="LastNameF" id="LastName" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">Age at Birth Of Child</label>
          <input type="text" name="AgeatBirthOfChildF" id="AgeatBirthOfChild" />
        </div>
        <div class="input-group">
          <label for="position">Marital Status</label>
          <input type="text" name="MaritalStatusF" id="MaritalStatus" />
        </div>
        <div class="input-group">
          <label for="position">Phone Number</label>
          <input type="number" name="PhoneNumberF" id="PhoneNumber" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">NIN Number</label>
          <input type="text" name="NINNumberF" id="NINNumber" />
        </div>
        <div class="input-group">
          <label for="position">Nationality</label>
          <input type="text" name="NationalityF" id="Nationality" />
        </div>
        <div class="input-group">
          <label for="position">If Nigerian, State Of Origin</label>
          <input type="text" name="StateOfOriginF" id="StateOfOrigin" />
        </div>
        

        </div>
        <div class="pack">
        <div class="input-group">
          <label for="username">  Literate/Illetrate</label>
          <input type="text" name="LorIF" id="LorI" />
        </div>
        <div class="input-group">
          <label for="position">Occupation</label>
          <input type="text" name="OccupationF" id="Occupation" />
        </div>
        <div class="input-group">
          <label for="position">Address of Residence</label>
          <input type="text" name="AoRF" id="AoR" />
        </div>
        

        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
      <div class="Fullcontent">
      
      Particulars of Informant
      <div class="ruler">
              
              </div>

</div>
<div class="pack">
        <div class="input-group">
          <label for="username">First Name</label>
          <input type="text" name="FirstNameI" id="FirstName" />
        </div>
        <div class="input-group">
          <label for="position">Middle Name</label>
          <input type="text" name="MiddleNameI" id="MiddleName" />
        </div>
        <div class="input-group">
          <label for="position">Last Name</label>
          <input type="text" name="LastNameI" id="LastName" />
        </div>

        </div>


        <div class="pack">
        <div class="input-group">
          <label for="username">Date Of Birth</label>
          <input type="text" name="DOBI" id="DOB" />
        </div>
        <div class="input-group">
          <label for="position">Address of Residence </label>
          <input type="text" name="AoRI" id="AoR" />
        </div>
        <div class="input-group">
          <label for="position">Sex</label>
          <input type="text" name="SexI" id="Sex" />
        </div>

        </div>

        <div class="pack">
        <div class="input-group">
          <label for="username">Relationship to Child</label>
          <input type="text" name="RoCI" id="RoC" />
        </div>
        <div class="input-group">
          <label for="position">Phone Number</label>
          <input type="number" name="phonenumberI" id="position" />
        </div>
        <div class="input-group">
          <label for="position">NIN Number</label>
          <input type="text" name="ninnumberI" id="ninnumber" />
        </div>

        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <input type="submit" id="btn1" value="submit" class="btn"/>
        </div>
      </div>
    </form>
    
    
  </body>
  <script src="firstfirm.js"> </script>

  <script>
  $(document).ready(function () {
   
    function registerBirth() {
        $.ajax({
            type: "POST",
            url: "forma.php",
            data: $("#birthregistrationform").serialize(),
            success: function (response) {
                if (response === 'Success') {
                    alert('Birth registration successful');
                    window.location.href = 'dashboard.php'; // Redirect on success
        
                } else {
                    alert(response);
                }
            }
        });
    }

    $("#birthregistrationform").submit(function (event) {
        event.preventDefault();
        registerBirth();
    });

   
});

</script>
</html>