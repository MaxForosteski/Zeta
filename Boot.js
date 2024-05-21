let xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200){
        console.log("Valor retornado do php: ", this.response);
    }
};

xhttp.open("GET","tests/ConnectionTests/databaseConnTest.php",true);
xhttp.send();

window.location.pathname = "Zeta/UI/View/Login.html";