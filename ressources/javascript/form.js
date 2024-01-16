//###############################Programme de vérification et de soumission du formulaire de contact######################################//
//****************************************************************************************************************************************//

var send = document.getElementById("send");                                         // On récupère notre boutton "Envoyer"

send.addEventListener('click', function(e){                                         // On écoute l'évènement "click"

    // e.preventDefault();                                                             // On annule le rafraichissement par defaut de la page
    var prenom              =   document.getElementById("prenom").value,            // On récupère le prenom saisi par l'internaut
        nom                 =   document.getElementById("nom").value,               // On récupère le nom saisi par l'internaut
        email               =   document.getElementById("email").value,             // On récupère l'e-mail saisi par l'internaut
        message             =   document.getElementById("message").value;           // On récupère le message saisi par l'internaut
            
    if (prenom != "" && nom != "" && email != "" && message != "") {                               // On vérifie que tous les champs sont remplis 

        var tooltip_prenom  =   document.getElementById("lb_prenom"),               // On récupère la span du message d'erreur
            tool_p_style    =   tooltip_prenom.style;                               // On récupère le style de la span du message d'erreur

        if (prenom.length >= 2) {                                                   // On vérifie la longueur du prenom

            tool_p_style.display    =   "none";                                     // On rend invisible la span du message d'erreur (PRENOM)
            var tooltip_nom         =   document.getElementById("lb_nom"),
                tool_n_style        =   tooltip_nom.style;                          // On récupère le style de la span du message d'erreur

            if (nom.length >= 2) {                                                  // On vérifie la longueur du nom

                tool_n_style.display    =   "none";                                 // On rend invisible la span du message d'erreur (NOM)
                var tooltip_message     =   document.getElementById("lb_message"),  // On récupère la span du message d'erreur
                    tool_m_style        =   tooltip_message.style;                  // On récupère le style de la span du message d'erreur

                if (message.length >= 50) {                                         // On vérifie la longueur du message

                    tool_m_style.display  =   "none";                               // On rend invisible le span du message d'erreur (MESSAGE)
                    var tooltip_email     =   document.getElementById("lb_email"),  // On récupère la span du message d'erreur
                        tool_em_style     =   tooltip_email.style;                  // On récupère le style de la span du message d'erreur

                    if (/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(email)) {    // On vérifie la conformité syntaxique de l'adresse email

                            //alert( "Adresse e-mail valide ! ");
                            tool_em_style.display    =   "none";                    // On rend invisible la span du message d'erreur (E-MAIL)
                            var enc_prenom = encodeURIComponent(prenom),            // On encode le prenom avant l'envoi
                                enc_nom = encodeURIComponent(nom),                  // On encode le nom avant l'envoi
                                enc_email = encodeURIComponent(email),              // On encode l'adresse e-mail avant l'envoi
                                enc_message = encodeURIComponent(message),          // On encode le message avant l'envoi
                                xhr = new XMLHttpRequest();

                            xhr.open('GET', 'form.php?message=' + enc_message + '&nom=' + enc_nom + '&email=' + enc_email + '&prenom=' + enc_prenom);
                            xhr.onreadystatechange = function(){
                                if (xhr.readyState == 4 && xhr.status == 200) {
                                    location = "index.php";
                                    //displayResults(xhr.responseText);

                                }
                             } ;
                             xhr.send(null);
                    } 
                    else {                                                          // Si l'adresse email n'est pas correctement saisie
                        alert( "Adresse e-mail invalide ! ") ;

                        var tooltip_text_email = document.createTextNode(
                                "L'adresse e-mail saisie est incorrecte"
                            );
        
                        if (!tooltip_email.hasChildNodes()) {                        // Si la span du message d'erreur est vide
        
                            tooltip_email.appendChild(tooltip_text_email);           // On ajoute le message d'erreur à la span
                            alert(
                                    "L'adresse e-mail saisie est incorrecte"
                            );
                        }
                    }
                }
                else{                                                               // Si la champ du message n'est pas bien rempli

                    var tooltip_text_message = document.createTextNode(
                        "Votre message ne doit pas faire moins de 50 caractères"
                    );

                    if (!tooltip_nom.hasChildNodes()) {                             // Si la span du message d'erreur est vide

                        tooltip_message.appendChild(tooltip_text_message);          // On ajoute le message d'erreur à la span
                        alert(
                            "Le message ne doit pas faire moins de 50 caractères"
                        );

                    }
                }
            }
            else{                                                                   // Si le champ du nom n'est pas bien rempli

                var tooltip_text_nom = document.createTextNode(
                    "Le nom ne doit pas faire moins de 2 caractères"
                    );

                if (!tooltip_nom.hasChildNodes()) {                                 // Si la span du message d'erreur est vide

                    tooltip_nom.appendChild(tooltip_text_nom);                      // On ajoute le message d'erreur à la span
                    alert("Le nom ne doit pas faire moins de 2 caractères");        // On affiche le message d'erreur dans une boite de dialogue

                }
            }
        }
        else{                                                                       // Si le champ du prenom n'est pas bien rempli

            var tooltip_text_prenom = document.createTextNode(
                "Le prenom ne doit pas faire moins de 2 caractères"
            );

            if (!tooltip_prenom.hasChildNodes()) {                                  // Si la span du message d'erreur est vide          

                tooltip_prenom.appendChild(tooltip_text_prenom);                    // On ajoute le message d'erreur à la span
                alert("Le prenom ne doit pas faire moins de 2 caractères");         // On affiche le message d'erreur dans une boite de dialogue
            }
        }
    }
    else{                                                                           // Si tous les champs doivent être remplis

        alert(
            "Veuillez-remplir tous les champs du formulaire avant de le soumettre"
        );

    }

    function displayResults(response){
        var results = document.getElementById('results');
        results.style.display = response.length ? 'block' : 'none';
        if (response.length){
            results_text = document.createTextNode(response);
            
            alert(response)

            if (!results.hasChildNodes()) {                                         // Si la balise p du message d'erreur est vide
        
                results.appendChild(results_text);                                 // On ajoute le message d'erreur à la balise p
            
            }

        }
    }

}, false);