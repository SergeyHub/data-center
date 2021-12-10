<?php

$redirects = [
    '/ru' => '/',
    '/about-us/policies/' => '/press-room/documents#policies',
    '/contract/' => '/documents',
    '/press-room/documents' => '/documents',
    '/about-us/' => '/documents',
    '/about-us/documents/' => '/documents',

//    'ru.admindatacenter.com/contract/' => 'https://ru.admindatacenter.com/documents',
//    'www.admindatacenter.ru/contract/' => 'https://ru.admindatacenter.com/documents',
    '/certificates/' => '/about/certificates',
/*    '/about-us/documents/' => '/press-room/documents',
    '/careers/' => '/about/careers',
    '/cloud/' => '/services/cloud-solutions/secure-cloud-152-fz',
    '/cloud/152' => '/services/network-services/dcc',
    '/cloud/dcc/' => '/services/network-services/dcc',
    '/cloud/hyperflex/' => '/services/data-center-services/hyperflex',
    '/cloud/IaaS/' => '/services/cloud-solutions/iaas',
    '/cloud/individual/' => '/services/information-security/152-fz-individual',
    '/cloud/veeam/' => '/services/cloud-solutions/backup-veeam',
    '/contacts/feedback.php' => '/contacts/feedback',
    '/contacts/support/' => '/contacts',
    '/dc/modernisation/' => '/services/data-center-services/outsourcing-of-data-center',
    '/DDoS/' => '/services/information-security/ddos',
    '/kubernetes/' => '/services/cloud-solutions/kubernetes',
    '/loyalty/' => '/about/loyalty',
    '/network/' => '/services/network-services/network-infrastructure',
    '/networkbackup/' => '/services/network-services/network-infrastructure-backup',
    '/press-room/events' => '/about/events',
    '/press-room/events/capacity-europe/' => '/about/events/capacity-europe',
    '/press-room/events/carlt/' => '/about/events/carlt',
    '/press-room/events/icu-amsterdam/' => '/about/events/icu-amsterdam',
    '/press-room/news/development-of-competencies-in-admindatacenter-s-team-aws-certification/' =>
        '/press-room/news/sobytiya/development-of-competencies-in-admindatacenter-s-team-aws-certification',
    '/press-room/news/experts-enforcement-of-152-fz-requirements-is-strengthened/' =>
        '/press-room/news/sobytiya/experts-enforcement-of-152-fz-requirements-is-strengthened',
    '/press-room/news/experts-personal-data-will-be-the-main-target-of-cybercriminals-in-the-foreseeable-future/' =>
        '/press-room/news/sobytiya/experts-personal-data-will-be-the-main-target-of-cybercriminals-in-the-foreseeable-future',
    '/press-room/news/is-there-a-future-for-data-centers-in-northern-russia/' =>
        '/press-room/news',
    '/press-room/news/admindatacenter-connects-to-the-cloud-for-free-during-the-outbreak/' =>
        '/press-room/news/sobytiya/admindatacenter-connects-to-the-cloud-for-free-during-the-outbreak',
    '/press-room/news/admindatacenter-ensured-that-hubex-and-myqrcards-services-comply-with-federal-law-152/' =>
        '/press-room/news/sobytiya/admindatacenter-ensured-that-hubex-and-myqrcards-services-comply-with-federal-law-152',
    '/press-room/news/admindatacenter-entered-the-cnews-rating-largest-it-companies-of-russia-2018/' =>
        '/press-room/news/sobytiya/admindatacenter-entered-the-cnews-rating-largest-it-companies-of-russia-2018',
    '/press-room/news/admindatacenter-entered-the-top-30-providers-rating-of-it-solutions-for-telecom-operators-according-t/' =>
        '/press-room/news/reytingi/admindatacenter-entered-the-top-30-providers-rating-of-it-solutions-for-telecom-operators-according-t',
    '/press-room/news/admindatacenter-entered-the-top-30-russian-it-service-providers-according-to-tadviser/' =>
        '/press-room/news/reytingi/admindatacenter-entered-the-top-30-russian-it-service-providers-according-to-tadviser',
    '/press-room/news/admindatacenter-entered-the-top-5-data-center-service-providers-in-russia-in-2020-according-to-cnews-/' =>
        '/press-room/news',
    '/press-room/news/admindatacenter-enters-the-cnews-ranking-top-50-it-providers-in-the-industrial-sector-for-the-first-t/' =>
        '/press-room/news/sobytiya/admindatacenter-enters-the-cnews-ranking-top-50-it-providers-in-the-industrial-sector-for-the-first-t',
    '/press-room/news/admindatacenter-has-become-cisco-capital-s-partner-of-the-year-in-russia-and-the-cis-countries/' =>
        '/press-room/news/spetsifikatsiya/admindatacenter-has-become-cisco-capital-s-partner-of-the-year-in-russia-and-the-cis-countries',
    '/press-room/news/admindatacenter-has-become-the-gold-partner-of-lenovo-/' =>
        '/press-room/news/spetsifikatsiya/admindatacenter-has-become-the-gold-partner-of-lenovo',
    '/press-room/news/admindatacenter-has-entered-the-ranking-tadviser100-largest-it-companies-of-russia-2019/' =>
        '/press-room/news/reytingi/admindatacenter-has-entered-the-ranking-tadviser100-largest-it-companies-of-russia-2019',
    '/press-room/news/admindatacenter-has-summed-up-the-operational-results-of-2017/' =>
        '/press-room/news',
    '/press-room/news/admindatacenter-introduces-it-tools-for-remote-work-during-pandemic-and-beyond-/' =>
        '/press-room/news/sobytiya/admindatacenter-introduces-it-tools-for-remote-work-during-pandemic-and-beyond',
    '/press-room/news/admindatacenter-launches-new-network-solutions/' =>
        '/press-room/news/novye-uslugi/admindatacenter-launches-new-network-solutions',
    '/press-room/news/admindatacenter-launches-secure-cloud-based-on-the-152-fz-requirements/' =>
        '/press-room/news/novye-uslugi/admindatacenter-launches-secure-cloud-based-on-the-152-fz-requirements',
    '/press-room/news/admindatacenter-podtverdil-kachestvo-operatsionnogo-upravleniya-tsoda-v-sankt-peterburge-poluchiv-man/' =>
        'press-room/news',
    '/press-room/news/admindatacenter-received-a-license-from-the-federal-security-service-of-russia-to-work-on-encryption-/' =>
        '/press-room/news/sobytiya/admindatacenter-received-a-license-from-the-federal-security-service-of-russia-to-work-on-encryption',
    '/press-room/news/admindatacenter-rises-in-the-cnews-ranking-of-russian-cloud-providers/' =>
        '/press-room/news/reytingi/admindatacenter-rises-in-the-cnews-ranking-of-russian-cloud-providers',
    '/press-room/news/admindatacenter-s-hyperconvergent-cloud-named-the-best-cloud-solution-for-dc-/' =>
        '/press-room/news/sobytiya/admindatacenter-s-hyperconvergent-cloud-named-the-best-cloud-solution-for-dc',
    '/press-room/news/admindatacenter-saint-petersburg-confirms-its-compliance-with-the-requirements-of-management-operation/' =>
        '/press-room/news',
    '/press-room/news/admindatacenter-stala-pobeditelem-natsionalnoy-premii-tsody-rf/' =>
        '/press-room/news',
    '/press-room/news/admindatacenter-tallies-up-the-annual-results-new-solutions-new-expertise-and-expansion-plans-for-202/' =>
        '/press-room/news/novye-uslugi/admindatacenter-tallies-up-the-annual-results-new-solutions-new-expertise-and-expansion-plans-for-202',
    '/press-room/news/admindatacenter-voshel-v-top-5-provayderov-uslug-tsod-v-rf-v-2020-godu-po-versii-cnews-/' =>
        '/press-room/news',
    '/press-room/news/admindatacenter-zapuskaet-hypercloud-pervoe-v-rossii-giperkonvergentnoe-oblachnoe-reshenie-na-baze-ci/' =>
        '/press-room/news',
    '/press-room/news/novye-uslugi/megaport-and-admindatacenter-partner-to-deliver-direct-cloud-connectivity-to-russia' =>
        '/press-room/news',
    '/press-room/news/research-80-of-managers-in-russia-plan-to-invest-in-digital-transformation-/' =>
        '/press-room/news/sobytiya/research-80-of-managers-in-russia-plan-to-invest-in-digital-transformation',
    '/press-room/news/rukovoditeli-tsod-admindatacenter-akkreditovany-uptime-institute-kak-attestovannye-spetsialisty-po-op/' =>
        '/press-room/news',
    '/press-room/news/the-cloud-of-admindatacenter-is-certified-by-sap/' =>
        '/press-room/news/spetsifikatsiya/the-cloud-of-admindatacenter-is-certified-by-sap',
    '/press-room/smi-about-us/citic_telecom/' =>
        '/press-room/smi-about-us/citic-telecom',
    '/press-room/smi-about-us/cloud-service-provider-chooses-cisco-hyperflex-to-fuel-growth-/' =>
        '/press-room/smi-about-us/cloud-service-provider-chooses-cisco-hyperflex-to-fuel-growth',
    '/press-room/smi-about-us/CloudswithaRussian/' =>
        '/press-room/smi-about-us/cloudswitharussian',
    '/press-room/smi-about-us/demand-for-digital-transformation-grows-in-russian-business-trading-partners-admindatacenter/' =>
        '/press-room/smi-about-us/demand-for-digital-transformation-grows-in-russian-business-trading-partners-admindatacenter',
    '/press-room/smi-about-us/edgeconnex-expands-european-footprint-by-entering-cee-data-centre-market/' =>
        '/press-room/smi-about-us/edgeconnex-expands-european-footprint-by-entering-cee-data-centre-market',
    '/press-room/smi-about-us/From-Russia-with-love/' =>
        '/press-room/smi-about-us/from-russia-with-love',
    '/press-room/smi-about-us/gsom-mba-students-visited-the-admindatacenter-data-center/' =>
        '/press-room/smi-about-us/gsom-mba-students-visited-the-admindatacenter-data-center',
    '/press-room/smi-about-us/admindatacenter-connects-russian-companies-to-main-clouds-via-megaport-alliance/' =>
        '/press-room/smi-about-us/admindatacenter-connects-russian-companies-to-main-clouds-via-megaport-alliance',
    '/press-room/smi-about-us/Negotiate-the-legal-minefield-in-Russia/' =>
        '/press-room/smi-about-us/negotiate-the-legal-minefield-in-russia',
    '/press-room/news/-admindatacenter-management-operations-stamp-of-approval-uptime-institute-/' =>
        '/press-room/news',
    '/press-room/blog/zashchita-oblachnykh-servisov-office-365-testirovanie-check-point-cloud-guard-saas-/' =>
        '/press-room',
    '/press-room/blog/davlenie-v-norme-zachem-tsodu-kontrol-podpora-vozdukha-/' =>
        '/press-room',
    '/remotetools/' =>
        '/services/cloud-solutions/remotetools',
    '/utilization/' =>
        '/services/data-center-services/utilization',
    '/vas/' =>
        '/services/data-center-services/additional-services',
    '/vas/value-added-services/' =>
        '/services/data-center-services/additional-services',
    '/library/' =>
        '/press-room/knowledge-base',
    '/library/antivirusnaya-zashchita/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/rukovodstvo-po-nastroyke-zashchishchyennogo-oblaka-152-fz/antivirusnaya-zashchita',
    '/library/virtualnaya-infrastruktura-iaas/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas',
    '/library/virtualnye-mashiny-i-vapp/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/virtualnye-mashiny-i-vapp',
    '/library/globalnie-oblachnye-platformy/' =>
        '/press-room/knowledge-base/oblachnye-resheniya/globalnie-oblachnye-platformy',
    '/library/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director',
    '/library/instruktsiya-po-ustanovke-i-ispolzovaniyu-rasshireniya-vmware-container-service-extension/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ustanovke-i-ispolzovaniyu-rasshireniya-vmware-container-service-extension',
    '/library/informatsiya-o-vdc/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/informatsiya-o-vdc',
    '/library/ispolzovanie-katalogov-vdc/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/ispolzovanie-katalogov-vdc',
    '/library/kratkoe-opisanie/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/rukovodstvo-po-nastroyke-zashchishchyennogo-oblaka-152-fz/kratkoe-opisanie',
    '/library/upravlenie-setyu/nastroyka-dostupa-v-internet-iz-seti-data-tsentra/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu/nastroyka-dostupa-v-internet-iz-seti-data-tsentra',
    '/library/nastroyka-kriptozashchishchyennogo-podklyucheniya/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/rukovodstvo-po-nastroyke-zashchishchyennogo-oblaka-152-fz/nastroyka-kriptozashchishchyennogo-podklyucheniya',
    '/library/upravlenie-setyu/nastroyka-ipsec-vpn/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu/nastroyka-ipsec-vpn',
    '/library/upravlenie-setyu/nastroyka-veg-dlya-dostupa-v-internet/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu/nastroyka-veg-dlya-dostupa-v-internet',
    '/library/oblachnye-resheniya/' =>
        '/press-room/knowledge-base/oblachnye-resheniya',
    '/library/osnovnye-stsenarii-ispolzovaniya/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ustanovke-i-ispolzovaniyu-rasshireniya-vmware-container-service-extension/osnovnye-stsenarii-ispolzovaniya',
    '/library/panel-upravleniya/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/rukovodstvo-po-nastroyke-zashchishchyennogo-oblaka-152-fz/panel-upravleniya',
    '/library/upravlenie-setyu/perenapravlenie-portov/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu/perenapravlenie-portov',
    '/library/upravlenie-setyu/rezhimy-raboty-veg/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu/rezhimy-raboty-veg',
    '/library/skaner-uyazvimostey/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/rukovodstvo-po-nastroyke-zashchishchyennogo-oblaka-152-fz/skaner-uyazvimostey',
    '/library/sozdanie-virtualnoy-mashiny/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/sozdanie-virtualnoy-mashiny',
    '/library/sozdanie-pustogo-vapp/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/sozdanie-pustogo-vapp',
    '/library/upravlenie-setyu/sozdanie-seti-data-tsentra/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu/sozdanie-seti-data-tsentra',
    '/library/upravlenie-setyu/sozdanie-seti-vapp/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu/sozdanie-seti-vapp',
    '/library/sozdanie-vapp-iz-shablona/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/sozdanie-vapp-iz-shablona',
    '/library/sozdanie-vm-iz-shablona/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/sozdanie-vm-iz-shablona',
    '/library/spisok-osnovnykh-komand-i-primery-ispolzovaniya/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ustanovke-i-ispolzovaniyu-rasshireniya-vmware-container-service-extension/spisok-osnovnykh-komand-i-primery-ispolzovaniya',
    '/library/aws-direct-connect/spisok-tochek-razmeshcheniya-aws/' =>
        '/press-room/knowledge-base/oblachnye-resheniya/globalnie-oblachnye-platformy/chastnyy-dostup-v-globalnye-oblaka/aws-direct-connect/spisok-tochek-razmeshcheniya-aws',
    '/library/spravochnye-materialy/' =>
        '/press-room/knowledge-base/oblachnye-resheniya/globalnie-oblachnye-platformy/chastnyy-dostup-v-globalnye-oblaka/spravochnye-materialy',
    '/library/topologiya-podklyucheniya-vm-v-zashchishchyennom-oblake-152-fz-demo/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/rukovodstvo-po-nastroyke-zashchishchyennogo-oblaka-152-fz/topologiya-podklyucheniya-vm-v-zashchishchyennom-oblake-152-fz-demo',
    '/library/upravlenie-setyu/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/upravlenie-setyu',
    '/library/ustanovka-klienta-cse/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ustanovke-i-ispolzovaniyu-rasshireniya-vmware-container-service-extension/ustanovka-klienta-cse',
    '/library/ustanovka-os-na-primere-windows-server-2016/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/ustanovka-os-na-primere-windows-server-2016',
    '/library/ustanovka-kubectl/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ustanovke-i-ispolzovaniyu-rasshireniya-vmware-container-service-extension/ustanovka-kubectl',
    '/library/ustanovka-vcd-cli/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ustanovke-i-ispolzovaniyu-rasshireniya-vmware-container-service-extension/ustanovka-vcd-cli',
    '/library/ustanovka-vmware-tools/' =>
        '/press-room/knowledge-base/virtualnaya-infrastruktura-iaas/instruktsiya-po-ispolzovaniyu-vmware-vcloud-director/ustanovka-vmware-tools',
    '/library/chastnyy-dostup-v-globalnye-oblaka/' =>
        '/press-room/knowledge-base/oblachnye-resheniya/globalnie-oblachnye-platformy/chastnyy-dostup-v-globalnye-oblaka',
    '/library/aws-direct-connect/' =>
        '/press-room/knowledge-base/oblachnye-resheniya/globalnie-oblachnye-platformy/chastnyy-dostup-v-globalnye-oblaka/aws-direct-connect',
    '/library/azure-express-route/' =>
        '/press-room/knowledge-base/oblachnye-resheniya/globalnie-oblachnye-platformy/chastnyy-dostup-v-globalnye-oblaka/azure-express-route',
    '/library/google-cloud-interconnect/' =>
        '/press-room/knowledge-base/oblachnye-resheniya/globalnie-oblachnye-platformy/chastnyy-dostup-v-globalnye-oblaka/google-cloud-interconnect',
    '/press-room/events/lenovo-admindatacenter-nadezhnye-it-resheniya-dlya-vashego-biznesa/' =>
        '/about/events/lenovo-admindatacenter-nadezhnye-it-resheniya-dlya-vashego-biznesa',
    '/press-room/video/instruktsii/' =>
        '/press-room',
    '/press-room/video/intervyu/' =>
        '/press-room',
    '/press-room/video/meropriyatiya/' =>
        '/press-room/news/sobytiya',
    '/press-room/smi-about-us/vysokiy-spros-i-rost-nagruzki-kak-rabotayut-it-kompanii-s-perekhodom-biznesa-na-udalenku-/' =>
        '/press-room/smi-about-us/vysokiy-spros-i-rost-nagruzki-kak-rabotayut-it-kompanii-s-perekhodom-biznesa-na-udalenku',
    '/press-room/smi-about-us/rynok-tsod-dalek-ot-nasyshcheniya-/' =>
        '/press-room/smi-about-us/rynok-tsod-dalek-ot-nasyshcheniya',
    '/press-room/smi-about-us/it-/' =>
        '/press-room/smi-about-us/it',
    '/press-room/smi-about-us/hr-negativ-v-seti-pravila-igry/' =>
        '/press-room/smi-about-us/hr-negativ-v-seti-pravila-igry',
    '/services/informatsionnaya-bezopasnost/sootvetsvie-po-152-fz-individualnoe-proektnoe-reshenie' =>
        '/services/information-security/152-fz-individual',
    '/services/uslugi-na-baze-data-tsentra/chastnaya-servernaya-infrastuktura-hyperflex' =>
        '/services/data-center-services/hyperflex',
    '/services/oblachnye-servisy/virtualnaya-infrastruktura-iaas' =>
        '/services/cloud-solutions/iaas',
    '/remotetools' => '/services/cloud-solutions/remotetools',
    'press-room/news/admindatacenter-voshel-v-reyting-cnews-krupneyshie-it-kompanii-rossii-2018/' =>
        '/press-room/news/sobytiya/admindatacenter-entered-the-cnews-rating-largest-it-companies-of-russia-2018',
    '/press-room/news/admindatacenter-zapuskaet-novye-setevye-resheniya/' =>
        '/press-room/news/novye-uslugi/admindatacenter-launches-new-network-solutions',
    '/press-room/news/admindatacenter-zapuskaet-zashchishchennoe-oblako-na-baze-trebovaniy-152-fz/' =>
        '/press-room/news/novye-uslugi/admindatacenter-launches-secure-cloud-based-on-the-152-fz-requirements',
    '/cloud/152/' =>
        '/services/cloud-solutions/secure-cloud-152-fz',
    '/action/' =>
        '/services',
    '/press-room/news/admindatacenter-voshel-v-reyting-tadviser-50-samykh-dokhodnykh-predstavitelstv-inostrannykh-it-kompan/' =>
        '/press-room/news/reytingi/admindatacenter-has-entered-the-ranking-tadviser100-largest-it-companies-of-russia-2019',
    '/certificates/' =>
        '/about/certificates',
    '/dc/colocation/' =>
        '/services/data-center-services/colocation',
    '/press-room/news/eksperty-personalnye-dannye-budut-glavnoy-mishenyu-kiberprestupnikov-v-blizhayshie-gody-/' =>
        '/press-room/news/sobytiya/experts-personal-data-will-be-the-main-target-of-cybercriminals-in-the-foreseeable-future',
    '/press-room/smi-about-us/%20https://www.comnews.ru/standart/issue/411' =>
        '/press-room/smi-about-us',
    '/press-room/news/rasshirenie-kompetentsiy-v-komande-admindatacenter-sertifikatsiya-aws/' =>
        'press-room/news/sobytiya/development-of-competencies-in-admindatacenter-s-team-aws-certification',
    '/research/' =>
        '/press-room/research',
    '/vas/dcc/' =>
        '/services/network-services/dcc',
    '/vas/cloud/' =>
        '/services/cloud-solutions/cloud',
    '/vas/IaaS/' =>
        '/services/cloud-solutions/iaas',
    'cloud/individual/' =>
        '/services/information-security/152-fz-individual',
    '/dt-global/?utm_source=techhq&utm_medium=editorial&utm_campaign=editorial3' =>
        '/services', //Not found old site
    '/press-room/news/development-of-competencies-in-admindatacenter-s-team-aws-certification-/' =>
        '/press-room/news/sobytiya/development-of-competencies-in-admindatacenter-s-team-aws-certification',
    '/colocation/' =>
        '/services',
    '/dt-global/' =>
        '/press-room/research',
    '/contract/' =>
        '/press-room/documents',
    '/checkpoint/' =>
        '/services/information-security/check-point-security-checkup',
    '/services/network-services/dcc/' =>
        '/services/cloud-solutions/dcc',
    '/about-us/policies/' => '/press-room/documents#policies',
    '/press-room/news/why-doing-it-business-in-russia-is-a-good-idea/' =>
        '/press-room/smi-about-us/why-doing-it-business-in-russia-is-a-good-idea'*/
];

foreach ($redirects as $from => $to) {
    Route::get($from, function () use ($to) {
        return redirect($to, 301);
    });
}
