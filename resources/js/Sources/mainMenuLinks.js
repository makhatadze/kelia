/*Import FontAwesomeIcon*/
import {library} from "@fortawesome/fontawesome-svg-core";
import {
    faTv,
    faPlug,
    faWindowRestore,
    faChartBar,
    faTable,
    faWindowMaximize,
    faLayerGroup,
    faGripHorizontal,
    faEdit,
    faRetweet,
    faClock,
    faCode,
    faQuestion,
    faCog,
    faStar
} from "@fortawesome/free-solid-svg-icons";

library.add(faTv, faPlug, faWindowRestore, faChartBar, faTable, faWindowMaximize, faLayerGroup, faGripHorizontal, faEdit, faRetweet, faClock, faCode, faQuestion, faCog, faStar)

/* Multi-language */
import {useI18n} from "vue-i18n";
import {mainMenuTranslates} from "@/Lang/languages";
import {computed} from "vue";

export default function () {

    const {tm} = useI18n({
        inheritLocale: true,
        messages: mainMenuTranslates
    })

    /*Main Menu Links*/
    const mainMenuLinks = computed(()=>{
        return [
            {
                id: "contentPages",
                label:  "Content",
                icon: "tv",
                link: null,
                type: "dropdown",
                items: [
                    {
                        id:"Texts",
                        label:  "Texts",
                        icon: null,
                        link: "content-text.index",
                        type: "route"
                    },
                    {
                        id:"Images",
                        label:  "Images",
                        icon: null,
                        link: "content-image.index",
                        type: "route"
                    },
                ]
            },
            {
                id: "Service",
                label:  "Service",
                icon: "star",
                link: "service.index",
                type: "route",
            },
            {
                id: "QuestionSection",
                label:  "Question Section",
                icon: "question",
                link: "question-section.index",
                type: "route",
            },
            {
                id: "Question",
                label:  "Question",
                icon: "question",
                link: "question.index",
                type: "route",
            },
            {
                id: "Packet",
                label:  "Packet",
                icon: "edit",
                link: "packet.index",
                type: "route",
            },
            {
                id: "Contact",
                label:  "Contact",
                icon: "plug",
                link: "contact.index",
                type: "route",
            },
        ]
    });

    /*Main Menu Footer*/
    const mainMenuFooterLinks = computed(()=>{
        return [
            {
                id: "footerSettings",
                label:  tm("footerSettings"),
                showWhenFolded: true,
                linkType: "route",
                link: "settings",
                icon: "cog"
            }
        ]
    });

    return {mainMenuLinks, mainMenuFooterLinks}

};
