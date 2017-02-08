/* JavaScript login_senha */

window.onload = function()
{


    var  x = document.forms["cadastro"].onsubmit = validation;
    //alert(x);
    

}


function validation()
{

    var login  = document.forms["cadastro"]["user"].value;
    var senha  = document.forms["cadastro"]["senha"].value;
    

    //alert(info);
   

    if( login === null || login === "" )
    {
        var textLogin = " * campo login vazio";
        
        //textLogin.style.color = "red"; 
        //alert(textLogin);
       document.getElementById("info").innerHTML =  textLogin ;
        
        return false;
    }

    if( senha === null || senha === "" )
    {
       // alert("campo senha vazio");
        document.getElementById("info").innerHTML = " * campo senha vazio";

       return false;
    }





}

