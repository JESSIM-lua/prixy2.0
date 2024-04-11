// scriptDash.js

$(document).ready(function(){
    // Lorsque vous cliquez sur un lien du menu
    $(".sidebar ul li a").click(function(){
        // Supprimez la classe active de tous les liens du menu
        $(".sidebar ul li a").removeClass("active");
        // Ajoutez la classe active uniquement à l'élément cliqué
        $(this).addClass("active");
        // Afficher le texte de l'élément cliqué dans la console pour déboguer
        console.log("Element cliqué:", $(this).text());
    });
});
