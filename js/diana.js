var app = angular.module("dianaApp", []);
angular.module("dianaApp", ["ngCookies", "ngSanitize"]).controller("dianaController", function($scope, $http, $cookies, $sce, $window) {
    const website = this;
    website.title = "cartomanzia interattiva gratuita";
    website.sender = "diana@mail.dianaveggenza.com";
    website.limitCard = 12;
    website.cardSelected = [];
    website.step = 0;
    website.error = true;
    website.nameWarning = true;
    website.surnameWarning = true;
    website.genderWarning = true;
    website.leadComplete = false;
    website.counter = [5, 60];
    website.score = 0;
    website.hideCookieBar = false;
    website.c_privacy = false;
    website.c_marketing = false;
    website.requestError = false;
    website.pixel = "";
    lead = { StatoCivile: "", Nome: "", Cognome: "", Email: "", DataNascita: "", GiornoNascita: "", MeseNascita: "", AnnoNascita: "", CheckAdultOk: "", Validate: "", };
    website.cards = [{ "name": "La morte", "img": "tarocchi/il_carro.jpg", score: 0, selected: false, hide: false }, { "name": "Gli amanti", "img": "tarocchi/il_diavolo.jpg", score: 0, selected: false, hide: false }, { "name": "Il diavolo", "img": "tarocchi/il_giudizio.jpg", score: 0, selected: false, hide: false }, { "name": "La giustizia", "img": "tarocchi/il_mago.jpg", score: 1, selected: false, hide: false }, { "name": "L\'imperatrice", "img": "tarocchi/il_matto.jpg", score: 1, selected: false, hide: false }, { "name": "Il matto", "img": "tarocchi/il_mondo.jpg", score: 1, selected: false, hide: false }, { "name": "Il papa", "img": "tarocchi/il_papa.jpg", score: 2, selected: false, hide: false }, { "name": "Il carro", "img": "tarocchi/il_sole.jpg", score: 2, selected: false, hide: false }, { "name": "Il mago", "img": "tarocchi/l_appeso.jpg", score: 2, selected: false, hide: false }, { "name": "Ll sole", "img": "tarocchi/l_arcano_senza_nome.jpg", score: 3, selected: false, hide: false }, { "name": "La fortuna", "img": "tarocchi/l_eremita.jpg", score: 3, selected: false, hide: false }, { "name": "La forza", "img": "tarocchi/l_imperatore.jpg", score: 3, selected: false, hide: false }];
    website.days = [{ "day": 1 }, { "day": 2 }, { "day": 3 }, { "day": 4 }, { "day": 5 }, { "day": 6 }, { "day": 7 }, { "day": 8 }, { "day": 9 }, { "day": 10 }, { "day": 11 }, { "day": 12 }, { "day": 13 }, { "day": 14 }, { "day": 15 }, { "day": 16 }, { "day": 17 }, { "day": 18 }, { "day": 19 }, { "day": 20 }, { "day": 21 }, { "day": 22 }, { "day": 23 }, { "day": 24 }, { "day": 25 }, { "day": 26 }, { "day": 27 }, { "day": 28 }, { "day": 29 }, { "day": 30 }, { "day": 31 }];
    website.months = [{ "month": "January", "value": "01" }, { "month": "Febuary", "value": "02" }, { "month": "March", "value": "03" }, { "month": "April", "value": "04" }, { "month": "May", "value": "05" }, { "month": "June", "value": "06" }, { "month": "July", "value": "07" }, { "month": "August", "value": "08" }, { "month": "September", "value": "09" }, { "month": "October", "value": "10" }, { "month": "November", "value": "11" }, { "month": "December", "value": "12" }];
    website.messageActive = "";
    website.messagiNegativi = ["Ho sperato fino all’ultimo secondo di vedere un accenno di positività per la sua attuale situazione, ma purtroppo le carte che ha scelto hanno dato l’ennesima conferma… Non demorda, però; dopo la tempesta torna sempre il sole ed io la aiuterò in questo percorso tortuoso che la aspetta.", "C’è qualcosa che non va attorno a lei. Sento una forte energia che influisce negativamente sulla sua vita. Bisogna intervenire IMMEDIATAMENTE per riportare l’equilibrio alla normalità. Mi conceda di intromettermi tra lei e questa energia; deve solo volerlo e chiederlo."];
    website.messagiMedi = ["Le carte non mentono: c’è qualcosa che la turba molto e disturba la sua quotidianità, portandola a provare insoddisfazione per la sua vita. Ma a tutto c’è un rimedio, deve solo trovare la strada giusta da percorrere. Io ho lo chiave per aprire la porta verso la felicità e la realizzazione, la vuole? La scelta è sua.", "Sta camminando sul filo del rasoio: basta un passo falso e tutto quello che ha ora svanirà. Non faccia questo errore, non ora che ne è al corrente! Segua i miei consigli, sono molto in pensiero per lei…", "Ben fatto! Ora mi è più chiara la sua situazione: queste carte conducono ad una verità che la lascerà a bocca aperta! Vedo, però, dei blocchi emotivi che non aiutano affatto questo percorso incredibile che la attende. Le svelerò di più nella mia prossima email…"];
    website.messagiPositivi = ["Sono incredula; sentivo della forte positività attorno a lei ma non pensavo a questi livelli! Sicuramente lei non ne è ancora a conoscenza ma degli eventi, uno in particolare, stanno per stravolgere in meglio il suo avvenire. Le farò avere tutti i dettagli al più presto.", "E’ sbalorditivo come le carte che ha scelto la portino esattamente dove l’avevo immaginata; vedo qualcosa di unico e raro che le sta per accadere in ambito finanziario, qualcosa che le cambierà la vita! Vuole scoprire qual è questa grande novità?!"];
    website.init = function() { if ($cookies.get("last-visit")) { website.hideCookieBar = true; } };
    website.init();
    website.acceptCookie = function() {
        website.hideCookieBar = true;
        $cookies.put("last-visit", new Date());
    };
    website.scrollToTop = function() { window.scroll(0, 0); };
    $window.onscroll = function() { if (!website.hideCookieBar) { website.acceptCookie(); } };
    website.yearsRange = function(min, max, step) { step = step || 1; var input = []; for (var i = min; i <= max; i += step) input.push(i); return input; };

    function shuffle(a) {
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [a[i], a[j]] = [a[j], a[i]];
        }
        return a;
    }
    shuffle(website.cards);
    $scope.random = function() { return 0.5 - Math.random(); };
    website.cardChose = function(card, index, event) {
        event.preventDefault();
        if (website.cardSelected.length === 0 && website.step === 0) {
            website.cards[index].selected = true;
            website.cardSelected.unshift(card);
            setTimeout(function() {
                website.nextStep();
                website.addScore(website.cards[index].score);
            }, 1000);
            setTimeout(function() { $scope.$apply(function() { website.cards[index].hide = true; }); }, 2000);
        } else if (website.cardSelected.length === 1 && website.step === 2) {
            website.cards[index].selected = true;
            website.cardSelected.unshift(card);
            setTimeout(function() {
                website.nextStep();
                website.addScore(website.cards[index].score);
            }, 1000);
            setTimeout(function() { $scope.$apply(function() { website.cards[index].hide = true; }); }, 2000);
        } else if (website.cardSelected.length === 2 && website.step === 4) {
            website.cards[index].selected = true;
            website.cardSelected.unshift(card);
            setTimeout(function() {
                website.nextStep();
                website.addScore(website.cards[index].score);
            }, 1000);
            setTimeout(function() { $scope.$apply(function() { website.cards[index].hide = true; }); }, 2000);
        } else {}
    };
    website.addScore = function(score) { website.score = website.score + score; };
    website.nextStep = function() {
        setTimeout(function() { $scope.$apply(function() { website.step = website.step + 1; }); }, 1000);
        website.scrollToTop();
    };
    website.checkDate = function() {
        if (website.day && website.month && website.year) {
            let monthSelected = website.months.filter(obj => { return obj.month === website.month; });
            lead.DataNascita = website.year + "-" + monthSelected[0].value + "-" + website.day;
            lead.GiornoNascita = website.day;
            lead.MeseNascita = monthSelected[0].value;
            lead.AnnoNascita = website.year;
            website.nextStep();
        } else {}
    };
    website.checkName = function() {
        if (website.firstName && website.secondName && website.genere) {
            lead.Nome = website.firstName;
            lead.Cognome = website.secondName;
            lead.StatoCivile = website.genere;
            website.nextStep();
        } else {
            website.error = true;
            website.nameWarning = false;
            website.surnameWarning = false;
            website.genderWarning = false;
            website.nameWarningMessage = "";
            website.surnameWarningMessage = "";
            website.genderWarningMessage = "";
            if (!website.firstName) {
                website.nameWarning = true;
                website.nameWarningMessage = "Enter Your Name";
            } else if (!website.secondName) {
                website.surnameWarning = true;
                website.surnameWarningMessage = "Enter Your Surname";
            } else if (!website.genere) {
                website.genderWarning = true;
                website.genderWarningMessage = "Select Your Gender";
            } else {}
        }
    };
    website.counting = function() {
        if (website.counter[1] > 0) {
            setTimeout(function() {
                $scope.$apply(function() { website.counter[1]--; });
                website.counting();
            }, 1000);
        } else if (website.counter[0] != 0 && website.counter[1] === 0) {
            setTimeout(function() {
                website.counter[1] = 60;
                website.counter[0]--;
                website.counting();
            }, 1000);
        } else if (website.counter[0] == 0 && website.counter[1] === 0) {
            setTimeout(function() {
                website.counter[1] = 60;
                website.counter[0]++;
                website.counting();
            }, 1000);
        } else {}
    };
    website.counting();
    website.showMessage = function() { if (website.score <= 3) { setTimeout(function() { $scope.$apply(function() { website.messageActive = website.messagiNegativi[Math.floor(Math.random() * website.messagiNegativi.length)]; }); }, 1000); } else if (3 < website.score <= 7) { setTimeout(function() { $scope.$apply(function() { website.messageActive = website.messagiMedi[Math.floor(Math.random() * website.messagiMedi.length)]; }); }, 1000); } else { setTimeout(function() { $scope.$apply(function() { website.messageActive = website.messagiPositivi[Math.floor(Math.random() * website.messagiPositivi.length)]; }); }, 1000); } };
    website.validationConfirm = function() {
        if (website.mail.length < 1 || (!website.mail.includes("@") && !website.mail.includes("."))) {
            website.error = true;
            website.errorMSG = "Enter the correct Email Address";
        } else if (!website.c_privacy) {
            website.error = true;
            website.errorMSG = "Accept the privacy terms";
        } else {
            website.error = false;
            website.errorMSG = "";
            lead.Email = website.mail;
            lead.CheckAdultOk = website.c_privacy;
            lead.Validate = 1;
            website.leadComplete = true;
            website.sendLead();
        }
    };
    website.confirm = function() {
        website.getPixel();
        website.showMessage();
        website.nextStep();
        $cookies.put("lead", JSON.stringify(lead));
    };
    website.sendLead = function() {
        let nome = "nome=" + lead.Nome;
        let cognome = "cognome=" + lead.Cognome;
        let email = "email=" + lead.Email;
        let giornoNascita = "giorno_nascita=" + lead.GiornoNascita;
        let meseNascita = "mese_nascita=" + lead.MeseNascita;
        let annoNascita = "anno_nascita=" + lead.AnnoNascita;
        let statoCivile = "sesso=" + lead.StatoCivile;
        let checkAdultOk = "c_privacy=" + lead.CheckAdultOk;
        let validate = "validate=" + lead.Validate;
        let data = "&" + cognome + "&" + nome + "&" + email + "&" + giornoNascita + "&" + meseNascita + "&" +
            annoNascita + "&" + statoCivile + "&" + checkAdultOk + "&" + validate;
        $http({ method: "POST", url: "action.php", headers: { "Content-type": "application/x-www-form-urlencoded" }, data: data, }).then(function successCallback(response) {
            if (response.data == 1) {
                if (lead.Validate == 1) {
                    lead.Validate = 0;
                    website.sendLead();
                } else { website.confirm(); }
            } else {
                website.requestError = true;
                let intError = parseInt(response.data);
                switch (intError) {
                    case -5:
                        alert("DEVI SPECIFICARE IL SESSO");
                        break;
                    case -6:
                        alert("SESSO SPECIFICATO NON VALIDO");
                        break;
                    case -7:
                        alert("INSERISCI IL NOME");
                        break;
                    case -8:
                        alert("INSERISCI IL COGNOME");
                        break;
                    case -9:
                        alert("INSERISCI L'INDIRIZZO E-MAIL");
                        break;
                    case -10:
                        alert("INDIRIZZO E-MAIL NON VALIDO");
                        break;
                    case -11:
                        alert("L'INDIRIZZO E-MAIL SPECIFICATO RISULTA GIÀ ISCRITTO");
                        break;
                    case -12:
                        alert("DEVI SPECIFICARE LA DATA DI NASCITA");
                        break;
                    case -13:
                        alert("DATA DI NASCITA NON VALIDA");
                        break;
                    case -14:
                        alert("ISCRIZIONE RISERVATA AI MAGGIORENNI DI 18 ANNI");
                        break;
                    case -1:
                    case -2:
                    case -3:
                    case -4:
                    case -15:
                    case -16:
                    case -17:
                    default:
                        alert("E' AVVENUTO UN ERRORE");
                        break;
                }
            }
        }, function errorCallback(response) {
            website.requestError = true;
            console.log("errorCallback");
            console.log(response.status + " " + response.statusText);
        });
    };
    website.getPixel = function() {
        $http({ method: "GET", url: "get-pixel.php", headers: { "Content-type": "application/x-www-form-urlencoded" }, }).then(function successCallback(response) { document.getElementsByClassName("pixel").appendChild(response.data); }, function errorCallback(response) {
            website.requestError = true;
            console.log("errorCallback");
            console.log(response.status + " " + response.statusText);
        });
    };
});