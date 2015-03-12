function confirmationImport()
{
    var check1 = confirm("###Voulez vous remplacer votre base de données par votre fichier Excel ?###");
    if (check1)
    {
        var check2 = confirm("###Etes-vous sûr ? La base de données sera effacée !###");
        if (check2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}

function confirmationExport()
{
    if (confirm("###Voulez vous exporter votre base de données ?###"))
    {
        return true;
    }
    return false;
}

function ConfirmationSuppression()
{
    var check1 = confirm("###Voulez vous vraiment SUPRIMER l'étudiant de votre base de données ?###");
    if (check1)
    {
        var check2 = confirm("###Etes-vous sûr ? L'étudiant sera SUPPRIME définitivement !###");
        if (check2)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}

function ConfirmationModification()
{
    if (confirm("###Voulez vous vraiment MODIFIER l'étudiant ?###"))
    {
        return true;
    }
    return false;
}