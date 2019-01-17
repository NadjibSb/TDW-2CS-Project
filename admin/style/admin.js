$(document).ready( function () {



    // select categorie 1 change
    $("#select_categorie1").change(function(){

        var obj = $("option", this).filter(":selected"), 
            id = obj.get(0).id, 
            n = id.slice(1), // numéro
            v = obj.val(), // value
            categorie = obj.text(); // texte
        console.log(v);
        getEcoleByCategorie(v,1);

    });

    // select ecole 1 change
    $("#selectEcole1").change(function(){

        var obj = $("option", this).filter(":selected"), 
            id = obj.get(0).id, 
            n = id.slice(1), // numéro
            v = obj.val(), // value
            categorie = obj.text(); // texte
        console.log(v);
        
        getInfoByEcole(v,1);
        $("#suppEcole").show();

        getModifierEcole(v);
        $("#update-form").show();
        
    });

    function getEcoleByCategorie(categ,selectId){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("#selectEcole"+selectId).html(this.responseText);
                console.log(this.responseText);
            }
        };
        xhttp.open("GET", "../app/controller/gestionEcole.php?categ="+categ, true);
        xhttp.send();
    }

    function getInfoByEcole(ecole,selectId){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("#infoEcole").html(this.responseText);
                console.log(this.responseText);
            }
        };
        xhttp.open("GET", "../app/controller/gestionEcole.php?infoId="+ecole, true);
        xhttp.send();
    }


    $("#suppEcole").click(function(e){

        var obj = $("#ecoleId"), 
            id = obj.attr("id"), 
            v = obj.attr("value"); // value
        console.log("id "+id+" val "+v);
        supprimerEcole(v);
    });

    function supprimerEcole(ecole){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                alert("Ecole supprimé avec succes");
                $("#infoEcole").html("");
                $("#suppEcole").hide();
            }
        };
        xhttp.open("GET", "../app/controller/gestionEcole.php?ecoleId="+ecole+"&action=supp", true);
        xhttp.send();
    }


    function getModifierEcole(ecole){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
                $("#form-content").html(this.responseText);
            }
        };
        xhttp.open("GET", "../app/controller/gestionEcole.php?ecoleId="+ecole+"&action=modif", true);
        xhttp.send();
    }









    $("#update-form").hide();

    $("#suppEcole").hide();



    






} );