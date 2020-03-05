function usun(id){
    document.getElementById("form_usun").value = id; 
    var frm=document.getElementById("form_submit_usun");
    frm.submit();
}