$(document).ready(function(){

    // select categorie 1 change
    $("#select_categorie1").change(function(){

        var obj = $("option", this).filter(":selected"), 
            id = obj.get(0).id, 
            n = id.slice(1), // numéro
            v = obj.val(), // value
            categorie = obj.text(); // texte
        console.log(v);
        $("#table1").children().remove();
        $("#comment1").children().remove();
        getEcoleByCategorie(v,1);
    });

    // select categorie 2 change
    $("#select_categorie2").change(function(){

        var obj = $("option", this).filter(":selected"), 
            id = obj.get(0).id, 
            n = id.slice(1), // numéro
            v = obj.val(), // value
            categorie = obj.text(); // texte
        console.log(v);
        $("#table2").children().remove();
        $("#comment2").children().remove();
        getEcoleByCategorie(v,2);
    });



    // select ecole 1 change
    $("#selectEcole1").change(function(){

        var obj = $("option", this).filter(":selected"), 
            id = obj.get(0).id, 
            n = id.slice(1), // numéro
            v = obj.val(), // value
            categorie = obj.text(); // texte
        console.log(v);
        $("#table1").children().remove();
        $("#comment1").children().remove();
        getFormationsByEcole(v,1);
        getCommentaireByEcole(v,1);
    });

    // select ecole 2 change
    $("#selectEcole2").change(function(){

        var obj = $("option", this).filter(":selected"), 
            id = obj.get(0).id, 
            n = id.slice(1), // numéro
            v = obj.val(), // value
            categorie = obj.text(); // texte
        console.log(v);
        $("#table2").children().remove();
        $("#comment2").children().remove();
        getFormationsByEcole(v,2);
        getCommentaireByEcole(v,2);

    });







    function getEcoleByCategorie(categ,selectId){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("#selectEcole"+selectId).html(this.responseText);
                console.log(this.responseText);
            }
        };
        xhttp.open("GET", "../app/controller/comparer.php?categ="+categ, true);
        xhttp.send();
    }

    function getFormationsByEcole(ecole,selectId){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                $("#table"+selectId).html(this.responseText);
                // $("#comment"+selectId).html(this.responseText);
                // console.log(this.responseText+"aaa");
            }
        };
        xhttp.open("GET", "../app/controller/comparer.php?ecole1="+ecole, true);
        xhttp.send();
    }

    function getCommentaireByEcole(ecole,selectId){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 //$("#table"+selectId).html(this.responseText);
                $("#comment"+selectId).html(this.responseText);
                // console.log(this.responseText+"zz");
            }
        };
        xhttp.open("GET", "../app/controller/comparer.php?ecole2="+ecole, true);
        xhttp.send();
    }

});