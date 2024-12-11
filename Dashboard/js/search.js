function Search(){ 
    
    var search = document.getElementById("ToSearch").value;

    if(search.toLowerCase() == "view header"){
        location.href="view_header.php"; 
        return false;

    }else if(search.toLowerCase() == "add header"){
        location.href="add_header.php"; 
        return false;

    }else if(search.toLowerCase() == "view footer"){
        location.href="view_footer.php"; 
        return false;

    }else if(search.toLowerCase() == "add footer"){
        location.href="add_footer.php"; 
        return false;

    }else if(search.toLowerCase() == "view slider"){
        location.href="view_slider.php"; 
        return false;

    }else if(search.toLowerCase() == "add slider"){
        location.href="add_slider.php"; 
        return false;

    }else if(search.toLowerCase() == "view under slider"){
        location.href="view_under_slider.php"; 
        return false;

    }else if(search.toLowerCase() == "add under slider"){
        location.href="add_under_slider.php"; 
        return false;

    }else if(search.toLowerCase() == "view specials"){
        location.href="view_specials.php"; 
        return false;

    }else if(search.toLowerCase() == "add specials"){
        location.href="add_specials.php"; 
        return false;

    }else if(search.toLowerCase() == "view about"){
        location.href="view_about.php"; 
        return false;

    }else if(search.toLowerCase() == "add about"){
        location.href="add_about.php"; 
        return false;

    }else if(search.toLowerCase() == "view mneu cart desserts"){
        location.href="view_mneu_cart_desserts.php"; 
        return false;

    }else if(search.toLowerCase() == "add mneu cart desserts"){
        location.href="add_mneu_cart_desserts.php"; 
        return false;

    }else if(search.toLowerCase() == "view mneu cart drinks"){
        location.href="view_mneu_cart_drinks.php"; 
        return false;

    }else if(search.toLowerCase() == "add mneu cart drinks"){
        location.href="add_mneu_cart_drinks.php"; 
        return false;

    }else if(search.toLowerCase() == "view mneu cart main"){
        location.href="view_mneu_cart_main.php"; 
        return false;

    }else if(search.toLowerCase() == "add mneu cart main"){
        location.href="add_mneu_cart_main.php"; 
        return false;

    }else if(search.toLowerCase() == "view mneu cart starters"){
        location.href="view_mneu_cart_starters.php"; 
        return false;

    }else if(search.toLowerCase() == "add mneu cart starters"){
        location.href="add_mneu_cart_starters.php"; 
        return false;

    }else if(search.toLowerCase() == "view contact"){
        location.href="view_contact.php"; 
        return false;

    }else if(search.toLowerCase() == "add contact"){
        location.href="add_contact.php"; 
        return false;

    }else if(search.toLowerCase() == "form contact"){
        location.href="form_conact.php"; 
        return false;

    }else{
        alert("not found page !")
    }
}