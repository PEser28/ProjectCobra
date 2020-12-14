




function setErrorFor(input, tooltip, message){
    document.getElementById(input).className = "form-control is-invalid";
    var fieldNameElement = document.getElementById(tooltip);
    fieldNameElement.innerHTML = message;
    document.getElementById(tooltip).style.display = "block";
}



function setSuccessFor(input, tooltip){
    document.getElementById(input).className = "form-control is-valid";
    document.getElementById(tooltip).style.display = "none";
}


function main(){

 
    var letters = /^[A-Za-z]+$/;
    var mobile = /^[0-9]+$/;
    var letterss = /^[A-Za-z ,]+$/;
    var email = /[/@/.]/;
  
   

    var lnameValue = document.getElementById('familyname').value;
    var fnameValue = document.getElementById('firstname').value;
    var mnameValue = document.getElementById('middlename').value;
    var aliasValue = document.getElementById('alias').value
    var mobileValue = document.getElementById('mobilenumber').value
    var birthplaceValue = document.getElementById('birthplace').value
    var nationalityValue = document.getElementById('nationality').value
    var religionValue = document.getElementById('religion').value
    var facemarksValue = document.getElementById('facemarks').value
    var spnameValue = document.getElementById('spname').value
    var spoccuValue = document.getElementById('spoccu').value
    var cityaddValue = document.getElementById('cityadd').value
    var  provaddValue = document.getElementById('provadd').value
    var  emailaddValue = document.getElementById('emd').value
    

    
   

  

    //Last NAme
    if (lnameValue == "") {
        setErrorFor('familyname', 'familyname-Invalid', 'Family Name cannot be blank');
       
        return false;
    }else{
        if (letterss.test(lnameValue)){
            setSuccessFor('familyname', 'familyname-Invalid');
          
          }else  {
            setErrorFor('familyname', 'familyname-Invalid', 'Family Name must not contain Numbers and Special Character');
             return false; 
           }      
    }

    //First Name
    if (fnameValue == "") {
        setErrorFor('firstname', 'firstname-Invalid', 'First Name cannot be blank');
        return false;
    }else{
        if (letters.test(fnameValue)){
            setSuccessFor('firstname', 'firstname-Invalid');
          
          }else  {
            setErrorFor('firstname', 'firstname-Invalid', 'First Name must not contain Number and Specail Characters');
             return false; 
           }      
    }

    //Middle Name 
    if (mnameValue == "") {
        setSuccessFor('middlename', 'middlename-Invalid');

    }else{
        if (letters.test(mnameValue)){
            setSuccessFor('middlename', 'middlename-Invalid');
          
          }else  {
            setErrorFor('middlename', 'middlename-Invalid', 'Middle Name Name must not contain Number and Specail Characters');
             return false; 
           }   
    }

    //ALIAS
    if (aliasValue == "") {
        setSuccessFor('alias', 'alias-Invalid');
        
    }else{
        if (letters.test(aliasValue)){
            setSuccessFor('alias', 'alias-Invalid');
          
          }else  {
            setErrorFor('alias', 'alias-Invalid', 'Alias  must not contain Number and Specail Characters');
             return false; 
           }   
    }

    //MOBILE 
    if(mobileValue == ""){
        setErrorFor('mobilenumber', 'mobile-Invalid', 'Mobile Must not be Blank');
             return false; 
    }
    else{
      if (mobile.test(mobileValue )){
         if (mobileValue.length != 11){
            setErrorFor('mobilenumber', 'mobile-Invalid', 'Mobile Number must be greater or less than 11');
            return false;
        }else{
            setSuccessFor('mobilenumber', 'mobile-Invalid' );
        }
      }else{
        setErrorFor('mobilenumber', 'mobile-Invalid', 'Mobile Number must not contain Letters and Special charater');
        return false;
      }
    }
    //BIRTH PLACE
    if (birthplaceValue== "") {
        setErrorFor('birthplace', 'birthplace-Invalid', 'Birth Place must not blank');
        return false;

    }else{
        if (letterss.test(birthplaceValue)){
          setSuccessFor('birthplace', 'birthplace-Invalid');
          }else  {
            setErrorFor('birthplace', 'birthplace-Invalid', 'Birth Place must not contain Numbers and Special Character');
             return false; 
           }      
    }



    //Nationality 
    if (nationalityValue == "") {
        setErrorFor('nationality', 'nationality-Invalid', 'Nationality cannot be blank');
        return false;

    }else{
        if (letters.test(nationalityValue)){
            setSuccessFor('nationality', 'nationality-Invalid');
          
          }else  {
            setErrorFor('nationality', 'nationality-Invalid', 'Nationality must not contain Numbers and Special Character');
             return false; 
           }      
    }




    // Religion 

    if (religionValue == "") {
        setErrorFor('religion', 'religion-Invalid', 'Religion cannot be blank');
        return false;

    }else{
        if (letters.test(religionValue)){
            setSuccessFor('religion', 'religion-Invalid');
          
          }else  {
            setErrorFor('religion', 'religion-Invalid', 'Religion  must not contain Numbers and Special Character');
             return false; 
           }      
    }


    //Face MArks 
    if (facemarksValue == "") {
        setSuccessFor('facemarks', 'facemarks-Invalid');
      
        
    }else{
        if (letters.test(facemarksValue)){
            setSuccessFor('facemarks', 'facemarks-Invalid');
          
          }else  {
            setErrorFor('facemarks', 'facemarks-Invalid', 'Face Marks  must not contain Number and Specail Characters');
             return false; 
           }   
    }

    //Spouse Name
    if (spnameValue == "") {
        setErrorFor('spname', 'spousename-Invalid', 'Spouse Name cannot be blank');
        return false;

    }else{
        if (letters.test(spnameValue)){
            setSuccessFor('spname', 'spousename-Invalid');
          
          }else  {
            setErrorFor('spname', 'spousename-Invalid', 'Spouse Name  must not contain Numbers and Special Character');
             return false; 
           }      
    }

    //spouse occu 
    


    //Spouse Name
    if (spoccuValue == "") {
        setErrorFor('spoccu', 'spoccu-Invalid', 'Spouse Occupation cannot be blank');
        return false;

    }else{
        if (letters.test(spoccuValue)){
            setSuccessFor('spoccu', 'spoccu-Invalid');
          
          }else  {
            setErrorFor('spoccu', 'spoccu-Invalid', 'Spouse occupation  must not contain Numbers and Special Character');
             return false; 
           }      
    }

    //
    if (cityaddValue == "") {
        setErrorFor('cityadd', 'cityadd-Invalid', 'City address cannot be blank');
        return false;

    }else{
        if (letters.test(cityaddValue)){
            setSuccessFor('cityadd', 'cityadd-Invalid');
          
          }else  {
            setErrorFor('cityadd', 'cityadd-Invalid', 'City Address  must not contain Numbers and Special Character');
             return false; 
           }      
    }


    //
    if (provaddValue == "") {
        setErrorFor('provadd', 'provadd-Invalid', 'Provincial address cannot be blank');
        return false;

    }else{
        if (letters.test(provaddValue)){
            setSuccessFor('provadd', 'provadd-Invalid');
          
          }else  {
            setErrorFor('provadd', 'provadd-Invalid', 'Provincial Address  must not contain Numbers and Special Character');
             return false; 
           }      
    }

    //
         //email  nEmail
         if(emailaddValue== ""){
            setErrorFor('emd', 'emd-Invalid','PUT YOUR EMAIL ADDRESS');
            return false
          }if (email.test(emailaddValue)){
            if (emailaddValue.length < 15){
                setErrorFor('emd','emd-Invalid', 'Please enter full  Email Address');
                return false;
            }
            setSuccessFor('emd', 'emd-Invalid');
        } else {
            setErrorFor('emd','emd-Invalid', 'Please enter valid  Email Address');
            return false;
        }













}


















