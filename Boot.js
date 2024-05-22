let xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200){
        try{
            let responseJSON = JSON.parse(this.responseText)
                
            if(responseJSON.IsSuccess){
                window.location.pathname = "Zeta/UI/View/Login.html";
            }else{
                window.location.pathname = "Zeta/UI/View/ConnectionFail.html";
            }
        }catch{
            window.location.pathname = "Zeta/UI/View/ConnectionFail.html";
        }
    }
};

xhttp.open("GET","tests/ConnectionTests/databaseConnTest.php",true);
xhttp.send();

