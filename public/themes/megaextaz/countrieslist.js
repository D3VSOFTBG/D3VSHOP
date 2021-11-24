var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

(function() {
    'use strict';
    window.countryList = {
        ru: {
            name: 'Россия',
            code: 'ru',
            price: 2990,
            oldPrice: 5980,
            labelPrice: ' руб.',
            phoneHelper: 'Например +7 9031234567',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения',
            isDefault: true
        },
        ua: {
            name: 'Украина',
            code: 'ua',
            price: 399,
            oldPrice: 798,
            labelPrice: ' грн.',
            phoneHelper: 'Например +380 123456789',
            nameHelper: 'Анастасія Кравчук',
            nameError: 'Імя обовязково для заповнення',
            phoneError: 'Телефон обовязковий для заповнення',
            countryError: 'Країна обовязковий для заповнення'
        },
         kz: {
            name: 'Казахстан',
            code: 'kz',
            price: 5390,
            oldPrice: 10780,
            labelPrice: ' тг.',
            phoneHelper: 'Например +77 123456789',
            nameHelper: 'Айжаксым Омарова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения'
        },
         by: {
            name: 'Беларусь',
            code: 'by',
            price: 29,
            oldPrice: 58,
            labelPrice: ' руб',
            phoneHelper: 'Например +375 123456789',
            nameHelper: 'Маргарыта Концява',
            nameError: 'Імя абавязковы для запаўнення',
            phoneError: 'Тэлефон абавязковы для запаўнення',
            countryError: 'Краіна абавязковы для запаўнення'
        },
        md: {
            name: 'Молдавия',
            code: 'md',
            price: 299,
            oldPrice: 598,
            labelPrice: ' лей',
            phoneHelper: 'Например +373 12345678',
            nameHelper: 'Elena Ionescu',
            nameError: 'Numele dorit pentru a umple',
            phoneError: 'Telefon necesare pentru a umple',
            countryError: 'Țara este necesară pentru a umple'
        },
          kg: {
            name: 'Киргизия',
            code: 'kg',
            price: 1399,
            oldPrice: 2798,
            labelPrice: 'сом',
            phoneHelper: 'Например +996 123456789',
            nameHelper: 'Жазгуль Кирдякова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения'
        },
        uz: {
            name: 'Узбекистан',
            code: 'uz',
            price: 99,
            oldPrice: 198,
            labelPrice: ' т.сум',
            phoneHelper: 'Например +998 123456789',
            nameHelper: 'Гультапчан Наркисова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения'
        },
        ee: {
            name: 'Эстония',
            code: 'ee',
            price: 24,
            oldPrice: 48,
            labelPrice: ' евро',
            phoneHelper: 'Например +372 12345678',
            nameHelper: 'София Йуримаа',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения'
        },
        az: {
            name: 'Азербайджан',
            code: 'az',
            price: 24,
            oldPrice: 48,
            labelPrice: ' манат',
            phoneHelper: 'Например + 994 0001234567',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения',
            isDefault: true
        },
        lv: {
            name: 'Латвия',
            code: 'lv',
            price: 24,
            oldPrice: 48,
            labelPrice: ' евро',
            phoneHelper: 'Например +371 12345678',
            nameHelper: 'Санита Берзиньш',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения'
        },
        lt: {
            name: 'Литва',
            code: 'lt',
            price: 24,
            oldPrice: 48,
            labelPrice: ' евро',
            phoneHelper: 'Например +370 12345678',
            nameHelper: 'Лайма Дауканте',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения'
        },
		am: {
            name: 'Армения',
            code: 'am',
            price: 13990,
            oldPrice: 27980,
            labelPrice: ' драм',
            phoneHelper: 'Например +374 0001234567',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения',
            isDefault: true
        },
        be: {
            name: 'Бельгия',
            code: 'be',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +32 12345678',
            nameHelper: 'Маргарыта Концява',
            nameError: 'Името е задължително',
            phoneError: 'Телефонният номер е задължителен',
            countryError: 'Страната е задължителна'
        },
        at: {
            name: 'Австрия',
            code: 'at',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +43 123456789',
            nameHelper: 'Мари Штайн',
            nameError: 'Der name erforderlich',
            phoneError: 'Numéro incorrectement spécifié',
            countryError: 'Nummer falsch angegeben'
        },
        gb: {
            name: 'Великобритания',
            code: 'gb',
            price: 39,
            oldPrice: 78,
            labelPrice: 'фунт',
            phoneHelper: 'Например +44 123456789',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            emailError: 'E-mail incorrect',
            emailSuccess: 'Thanks, e-mail sended',
            countryError: 'Страна обязательна для заполнения'
        },
        lu: {
            name: 'Люксембург',
            code: 'lu',
            price: 39,
            oldPrice: 78,
            labelPrice: 'евро',
            phoneHelper: 'Например +352 123456789',
            nameHelper: 'Лайма Дауканте',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            emailError: 'E-mail incorrect',
            emailSuccess: 'Thanks, e-mail sended',
            countryError: 'Страна обязательна для заполнения'
        },
         nl: {
            name: 'Нидерланды',
            code: 'nl',
            price: 39,
            oldPrice: 78,
            labelPrice: 'евро',
            phoneHelper: 'Например +31 123456789',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            emailError: 'E-mail incorrect',
            emailSuccess: 'Thanks, e-mail sended',
            countryError: 'Страна обязательна для заполнения'
        },
           fi: {
            name: 'Финляндия',
            code: 'fi',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +358 123456789',
            nameHelper: 'Айжаксым Омарова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения'
        },
            no: {
            name: 'Норвегия',
            code: 'no',
            price: 490,
            oldPrice: 980,
            labelPrice: 'крон',
            phoneHelper: 'Например +47 123456789',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            emailError: 'E-mail incorrect',
            emailSuccess: 'Thanks, e-mail sended',
            countryError: 'Страна обязательна для заполнения'
        },
         se: {
            name: 'Швеция',
            code: 'se',
            price: 490,
            oldPrice: 980,
            labelPrice: 'крон',
            phoneHelper: 'Например +46 123456789',
            nameHelper: 'Анна Мишкина',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            emailError: 'E-mail incorrect',
            emailSuccess: 'Thanks, e-mail sended',
            countryError: 'Страна обязательна для заполнения'
        },
		ge: {
            name: 'Грузия',
            code: 'ge',
            price: 50,
            oldPrice: 100,
            labelPrice: ' лари',
            phoneHelper: 'Например +374 0001234567',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            countryError: 'Страна обязательна для заполнения',
            isDefault: true
        },
        al: {
            name: 'Албания',
            code: 'al',
            price: 3990,
            oldPrice: 7980,
            labelPrice: ' лек',
            phoneHelper: 'Например +355 123456789"',
            nameHelper: 'Мария Цони',
            nameError: 'Име је обавезно',
            phoneError: 'Број телефона је обавезан',
            countryError: 'Држава је обавезна'
        },
          bg: {
            name: 'Болгария',
            code: 'bg',
            price: 59,
            oldPrice: 118,
            labelPrice: ' лева',
            phoneHelper: 'Например +359 12345678',
            nameHelper: 'Маргарыта Концява',
            nameError: 'Името е задължително',
            phoneError: 'Телефонният номер е задължителен',
            countryError: 'Страната е задължителна'
        },
        ba: {
            name: 'Босния и Герцеговина',
            code: 'ba',
            price: 49,
            oldPrice: 98,
            labelPrice: ' KM',
            phoneHelper: 'Например +387 12345678',
            nameHelper: 'Маргарыта Концява',
            nameError: 'Име је обавезно',
            phoneError: 'Број телефона је обавезан',
            countryError: 'Држава је обавезна'
        },
        hu: {
            name: 'Венгрия',
            code: 'hu',
            price: 8900,
            oldPrice: 17800,
            labelPrice: ' Ft',
            phoneHelper: 'Например +36 12345678',
            nameHelper: 'Анна Гизелла',
            nameError: 'A név kötelezően kitöltendő',
            phoneError: 'A telefonszám kötelezően kitöltendő',
            countryError: 'Az ország kötelezően kitöltendő'
        },
        de: {
            name: 'Германия',
            code: 'de',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +490 123456789',
            nameHelper: 'Анна Штайн',
            nameError: "Der name erforderlich",
            phoneError: "Numéro incorrectement spécifié",
            countryError: "Nummer falsch angegeben",
        },
        gr: {
            name: 'Греция',
            code: 'gr',
            price: 29,
            oldPrice: 58,
            labelPrice: ' евро',
            phoneHelper: 'Например +30 1234567890',
            nameHelper: 'Анна Бенаки',
            nameError: 'Απαιτείται όνομα',
            phoneError: 'Εσφαλμένα καθορισμένο αριθμό',
            countryError: 'Απαιτείται χώρα'
        },
        es: {
            name: 'Испания',
            code: 'es',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +34 123456789',
            nameHelper: 'Кассандра Мерино',
            nameError: 'Nombre (campo obligatorio)',
            phoneError: 'Número incorrectamente especificado',
            countryError: 'Debe introducir un país',
        },
        it: {
            name: 'Италия',
            code: 'it',
            price: 39,
            oldPrice: 78,
            labelPrice: 'евро',
            phoneHelper: 'Например +39 1234567890',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            emailError: 'E-mail incorrect',
            emailSuccess: 'Thanks, e-mail sended',
            countryError: 'Страна обязательна для заполнения'
        },
        cy: {
            name: 'Кипр',
            code: 'cy',
            price: 29,
            oldPrice: 58,
            labelPrice: ' евро',
            phoneHelper: 'Например +357 12345678',
            nameHelper: 'Анна Бенаки',
            nameError: 'Απαιτείται όνομα',
            phoneError: 'Εσφαλμένα καθορισμένο αριθμό',
            countryError: 'Απαιτείται χώρα'
        },
        li: {
            name: 'Лихтенштейн',
            code: 'li',
            price: 60,
            oldPrice: 120,
            labelPrice: ' CHF',
            phoneHelper: 'Например +423 1234567',
            nameHelper: 'Анна Штайн',
            nameError: 'Die Angabe des Namens ist erforderlich',
            phoneError: 'Falsch angegebene Anzahl',
            countryError: 'Das Land ist eine Pflichtangabe'
        },
        mk: {
            name: 'Македония',
            code: 'mk',
            price: 1990,
            oldPrice: 3980,
            labelPrice: ' ден.',
            phoneHelper: 'Например +389 12345678',
            nameHelper: 'Маргарыта Концява',
            nameError: 'Име је обавезно',
            phoneError: 'Број телефона је обавезан',
            countryError: 'Држава је обавезна'
        },
        pl: {
            name: 'Польша',
            code: 'pl',
            price: 159,
            oldPrice: 318,
            labelPrice: ' zł',
            phoneHelper: 'Например +373 12345678',
            nameHelper: 'Тома Черняк',
            nameError: 'Imię (wymagane)',
            phoneError: 'Błędnie podany numer',
            countryError: 'Kraj (wymagany)'
        },
        pt: {
            name: 'Португалия',
            code: 'pt',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +351 123456789',
            nameHelper: 'Рейчел Диаз',
            nameError: 'Nome obrigatório',
            phoneError: 'Número especificado incorretamente',
            countryError: 'País obrigatório'
        },
        ro: {
            name: 'Румыния',
            code: 'ro',
            price: 139,
            oldPrice: 278,
            labelPrice: ' RON',
            phoneHelper: 'Например +44 123456789',
            nameHelper: 'Карла Бонотто',
            nameError: 'Este necesar să indicaţi numele',
            phoneError: 'Este necesar să indicaţi numărul de telefon',
            countryError: 'Este necesar să indicaţi ţara'
        },
        rs: {
            name: 'Сербия',
            code: 'rs',
            price: 2190,
            oldPrice: 4380,
            labelPrice: ' din.',
            phoneHelper: 'Например +381 123456789',
            nameHelper: 'Майя Войнович',
            nameError: 'Име је обавезно',
            phoneError: 'Број телефона је обавезан',
            countryError: 'Држава је обавезна'
        },
        sk: {
            name: 'Словакия',
            code: 'sk',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +421 123456789',
            nameHelper: 'Майя Войнович',
            nameError: 'Meno je povinné',
            phoneError: 'Nesprávne zadaný počet',
            countryError: 'Krajina je povinná'
        },
        si: {
            name: 'Словения',
            code: 'si',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +386 12345678',
            nameHelper: 'Майя Войнович',
            nameError: 'Ime zahtevano',
            phoneError: 'Nepravilno določeno število',
            countryError: 'Država zahtevano'
        },
        fr: {
            name: 'Франция',
            code: 'fr',
            price: 39,
            oldPrice: 78,
            labelPrice: ' евро',
            phoneHelper: 'Например +33 123456789',
            nameHelper: 'Мари Бриард',
            nameError: 'Le nom obligatoire',
            phoneError: 'Numéro incorrectement spécifié',
            countryError: 'Nom du pays obligatoire'
        },
        hr: {
            name: 'Хорватия',
            code: 'hr',
            price: 299,
            oldPrice: 598,
            labelPrice: ' HRK',
            phoneHelper: 'Например +385 12345678',
            nameHelper: 'Мария Новак',
            nameError: 'Potrebno ime',
            phoneError: 'Potreban broj telefona',
            countryError: 'Potrebna država'
        },
        me: {
            name: 'Черногория',
            code: 'me',
            price: 29,
            oldPrice: 58,
            labelPrice: ' евро',
            phoneHelper: 'Например +382 12345678',
            nameHelper: 'Майя Войнович',
            nameError: 'Име је обавезно',
            phoneError: 'Број телефона је обавезан',
            countryError: 'Држава је обавезна'
        },
        cz: {
            name: 'Чехия',
            code: 'cz',
            price: 790,
            oldPrice: 1580,
            labelPrice: ' CZK',
            phoneHelper: 'Например +420 123456789',
            nameHelper: 'Мария Хладкова',
            nameError: 'Povinné jméno',
            phoneError: 'Nesprávně zadaný počet',
            countryError: 'Povinná země'
        },
         tr: {
            name: 'Турция',
            code: 'tr',
            price: 149,
            oldPrice: 298,
            labelPrice: 'лир',
            phoneHelper: 'Например +30 0123456789',
            nameHelper: 'Екатерина Самойлова',
            nameError: 'Имя обязательно для заполнения',
            phoneError: 'Телефон обязателен для заполнения',
            emailError: 'E-mail incorrect',
            emailSuccess: 'Thanks, e-mail sended',
            countryError: 'Страна обязательна для заполнения'
        },
        ch: {
            name: 'Швейцария',
            code: 'ch',
            price: 60,
            oldPrice: 120,
            labelPrice: ' CHF',
            phoneHelper: 'Например +41 123456789',
            nameHelper: 'Анна Штайн',
            nameError: 'Le nom obligatoire',
            phoneError: 'Numéro incorrectement spécifié',
            countryError: 'Nom du pays obligatoire'
        }
    };
})();

}
/*
     FILE ARCHIVED ON 06:40:13 Feb 11, 2017 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 14:42:32 Nov 24, 2021.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  cdx.remote: 0.16
  esindex: 0.02
  exclusion.robots.policy: 0.51
  load_resource: 125.592
  LoadShardBlock: 205.98 (3)
  captures_list: 274.021
  CDXLines.iter: 33.737 (3)
  PetaboxLoader3.resolve: 45.655
  exclusion.robots: 0.535
  PetaboxLoader3.datanode: 218.313 (4)
*/
