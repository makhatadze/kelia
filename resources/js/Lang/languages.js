/* Flags */
import flagEn from "@/Lang/Flags/flagEn";
import flagFr from "@/Lang/Flags/flagFr";

const flags = {
    flagEn: flagEn,
    flagFr: flagFr,
};

/* Languages */
const languages = [
    {id: "en", name: "English", flag: "flagEn"},
    {id: "fr", name: "Français", flag: "flagFr"},
];

/* Translates */

/* Auth Translates */
import authLangEn from "@/Lang/en/auth_lang_en";
import authLangFr from "@/Lang/fr/auth_lang_fr";
const authTranslates = {
    en: authLangEn,
    fr: authLangFr,
};

/*Side Menu Translates*/
import mainMenuLangEn from "@/Lang/en/main_menu_lang_en";
import mainMenuLangFr from "@/Lang/fr/main_menu_lang_fr";
const mainMenuTranslates = {
    en: mainMenuLangEn,
    fr: mainMenuLangFr,
};

/*User Menu Translates*/
import userMenuLangEn from "@/Lang/en/user_menu_lang_en";
import userMenuLangFr from "@/Lang/fr/user_menu_lang_fr";
const userMenuTranslates = {
    en: userMenuLangEn,
    fr: userMenuLangFr,
};

export {
    languages,
    flags,
    authTranslates,
    mainMenuTranslates,
    userMenuTranslates
};
