function mascara_telefone ()
{
    var tel_formatodo = document.getElementById("telefone").value
    if (tel_formatodo[0]!="(")
    {
        if (tel_formatodo[0]!=undefined){
            document.getElementById("telefone").value="("+tel_formatodo[0];
        }
    }

    if (tel_formatodo[3]!=")")
    {
        if (tel_formatodo[3]!=undefined){
            document.getElementById("telefone").value=tel_formatodo.slice(0,3)+")"+tel_formatodo[3];
        }
    }

    if (tel_formatodo[9]!="-")
    {
        if (tel_formatodo[9]!=undefined){
            document.getElementById("telefone").value=tel_formatodo.slice(0,9)+"-"+tel_formatodo[9];
        }
    }
}