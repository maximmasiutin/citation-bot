<?php
declare(strict_types=1);
const LC_SMALL_WORDS = array(/* The following will be automatically updated to alphabetical order */
          " AAOHN ", " AAP ", " AAUP ", " ABC ", " AC ", " ACM ", " AGU ", " AI ", " AIAA ", 
          " AIChE ", " AIP ", " AJHG ", " al ", " an ", " and ", " and then ", " AOAC ", 
          " APMIS ", " as ", " ASLIB ", " at ", " at ", " aus ", " av ", " BBA ", " BBC ", 
          " be ", " bei ", " BJPsych ", " BJU ", " BMC ", " BMJ ", " but ", " by ", " CBC ", 
          " CJEM ", " CNS ", " d'un ", " d'une ", " D.C. ", " D.C.L. ", " D.D.S. ", " D.Div. ", 
          " D.M.D. ", " D.P.M. " , " M.S. ", " D.Sc. ", " da ", " dans ", " das ", " DC ", 
          " de ", " dei ", " del ", " della ", " delle ", " dem ", " den ", " der ", " des ", 
          " di ", " die ", " DNA ", " do ", " du ", " e ", " ed ", " ee ", " eEarth ", 
          " EFORT ", " ein ", " eine ", " einen ", " EJNMMI ", " el ", " else ", " EMBO ", 
          " en ", " EPJ ", " ESMO ", " et ", " EURASIP ", " FASEB ", " FDA ", " FEBS ", 
          " FEMS ", " for ", " from ", " för ", " før ", " für ", " GSA ", " HIV ", 
          " HLA ", " HortScience ", " HTMLGIANT ", " IBM ", " ICES ", " IEEE ", " IETF ", 
          " if ", " ILR ", " in ", " INFLIBNET ", " into ", " is ", " its ", " IUCN ", 
          " JAMA ", " JAMA: ", " la ", " las ", " le ", " les ", " los ", " LRTAP ", " M.A. ", 
          " M.D. ", " medRxiv ", " mit ", " MNRAS ", " mot ", " N.Y. ", " N.Y.) ", " N.Z. ", 
          " N.Z.) ", " NASA ", " NEJM ", " NIH ", " non ", " nor ", " NRC ", " NY ", " NY) ", 
          " NYC ", " NYT ", " NZ ", " NZ) ", " och ", " OECD ", " of ", " off ", " og ", 
          " on ", " or ", " over ", " P.E. ", " PC ", " PCR ", " per ", " Ph.D. ", " PMLA ", 
          " PNAS ", " PS: ", " R&D ", " RNA ", " RTÉ ", " S&P ", " SAE ", " SciPost ", 
          " SMPTE ", " SPIE ", " SpringerPlus ", " SSRN ", " TAPPI ", " TCI: ", " te ", 
          " TESOL ", " the ", " TheMarker ", " then ", " till ", " to ", " UCLA ", " UK ", 
          " um ", " und ", " unserer ", " up ", " USA ", " van ", " vir ", " von ", " voor ", 
          " when ", " with ", " within ", " woor ", " y ", " zu ", " zum ", " zur ", /* The above will be automatically updated to alphabetical order */ 
          // After this line we list exceptions that need re-capitalizing after they have been decapitalized.
          " El Dorado ", " Las Vegas ", " Los Angeles ", " N Y ", " U S A ");
const UC_SMALL_WORDS = array(/* The following will be automatically updated to alphabetical order */
          " Aaohn ", " Aap ", " Aaup ", " Abc ", " Ac ", " Acm ", " Agu ", " Ai ", " Aiaa ", 
          " Aiche ", " Aip ", " Ajhg ", " Al ", " An ", " And ", " and Then ", " Aoac ", 
          " Apmis ", " As ", " Aslib ", " At ", " At ", " Aus ", " Av ", " Bba ", " Bbc ", 
          " Be ", " Bei ", " Bjpsych ", " Bju ", " Bmc ", " Bmj ", " But ", " By ", " Cbc ", 
          " Cjem ", " Cns ", " D'un ", " D'une ", " D.c. ", " D.c.l. ", " D.d.s. ", " D.div. ", 
          " D.m.d. ", " D.p.m. " , " M.s. ", " D.sc. ", " Da ", " Dans ", " Das ", " Dc ", 
          " De ", " Dei ", " Del ", " Della ", " Delle ", " Dem ", " Den ", " Der ", " Des ", 
          " Di ", " Die ", " Dna ", " Do ", " Du ", " E ", " Ed ", " Ee ", " Eearth ", 
          " Efort ", " Ein ", " Eine ", " Einen ", " Ejnmmi ", " El ", " Else ", " Embo ", 
          " En ", " Epj ", " Esmo ", " Et ", " Eurasip ", " Faseb ", " Fda ", " Febs ", 
          " Fems ", " For ", " From ", " För ", " Før ", " Für ", " Gsa ", " Hiv ", 
          " Hla ", " Hortscience ", " Htmlgiant ", " Ibm ", " Ices ", " Ieee ", " Ietf ", 
          " If ", " Ilr ", " In ", " Inflibnet ", " Into ", " Is ", " Its ", " Iucn ", 
          " Jama ", " Jama: ", " La ", " Las ", " Le ", " Les ", " Los ", " Lrtap ", " M.a. ", 
          " M.d. ", " Medrxiv ", " Mit ", " Mnras ", " Mot ", " N.y. ", " N.y.) ", " N.z. ", 
          " N.z.) ", " Nasa ", " Nejm ", " Nih ", " Non ", " Nor ", " Nrc ", " Ny ", " Ny) ", 
          " Nyc ", " Nyt ", " Nz ", " Nz) ", " Och ", " Oecd ", " Of ", " Off ", " Og ", 
          " On ", " Or ", " Over ", " P.e. ", " Pc ", " Pcr ", " Per ", " Ph.d. ", " Pmla ", 
          " Pnas ", " Ps: ", " R&d ", " Rna ", " Rté ", " S&p ", " Sae ", " Scipost ", 
          " Smpte ", " Spie ", " Springerplus ", " Ssrn ", " Tappi ", " Tci: ", " Te ", 
          " Tesol ", " The ", " Themarker ", " Then ", " Till ", " To ", " Ucla ", " Uk ", 
          " Um ", " Und ", " Unserer ", " Up ", " Usa ", " Van ", " Vir ", " Von ", " Voor ", 
          " When ", " With ", " Within ", " Woor ", " Y ", " Zu ", " Zum ", " Zur ", /* The above will be automatically updated to alphabetical order */ 
          // After this line we list exceptions that need re-capitalizing after they have been decapitalized.
          " el Dorado ", " las Vegas ", " los Angeles ", " N y ", " U S a ");
          // For ones that start with lower-case, include both ELife and Elife versions in misspelled array
const JOURNAL_ACRONYMS = array(/* The following will be automatically updated to alphabetical order */
          " (and the Middle East) ", " (BBA) ", " (online ed.) ", " AAPOS ", " AAPS ", 
          " ACM SIGGRAPH ", " ACS ", " Acta medico-historica Adriatica ", " Acta medico-historica Adriatica ", 
          " AIDS & Behavior ", " AIDS and Behavior ", " AIDS Care ", " AIDS Research ", 
          " AIMS Microbiology ", " AJNR. ", " Algebra i Analiz ", " Algebra i Logika ", 
          " Amphibian Species of the World: An Online ", " Amphibian Species of the World: an Online Reference. ", 
          " Angew Chem Int Ed ", " AOAC International ", " AoB Plants ", " AoB Plants ", 
          " AoB Plants ", " AORN J ", " AORN J. ", " AORN Journal ", " Applied ", " APS Division ", 
          " Arch Dis Child Fetal Neonatal Ed ", " Arctic ", " Arhiv za slovensku filologiju ", 
          " Arhivski vjesnik ", " ASAIO ", " ASME AES ", " ASME MTD ", " Avtomatika i Telemekhanika ", 
          " B/gcvs ", " B/gcvs ", " B/gcvs ", " Bibliotheca Enrico Damiani diretta da Nullo Minissi ", 
          " Bibliotheca Enrico Damiani diretta da Nullo Minissi ", " Bild am Sonntag ", 
          " BioEssays ", " BioMed Research International ", " bioRxiv ", " bioRxiv ", " BJOG ", 
          " BJOG: ", " BMJ ", " Bogoslovni vestnik ", " Bogoslovska smotra ", " Bulletin za likovne umjetnosti Jugoslavenske akademije ", 
          " CBD Ubiquitin ", " CFSK-DT ", " ChemBioChem ", " ChemCatChem ", " ChemElectroChem ", 
          " ChemistryOpen ", " ChemistrySelect ", " ChemistryViews ", " ChemMedChem ", 
          " ChemPhotoChem ", " ChemPhysChem ", " ChemPlusChem ", " ChemSusChem ", " ChemSystemsChem ", 
          " Chest ", " CHIMIA ", " CHINOPERL ", " CLA Journal ", " CMAJ ", " Combinatorial Math. and Combinatorial ", 
          " CommLaw ", " Crkva na svijetu ", " Croatia sacra ", " Croatica Christiana periodica ", 
          " Croatica et Slavica Iadertina ", " CrystEngComm ", " Cultura i Literatura ", 
          " Cutter IT Journal ", " CytoJournal ", " Danica ilirska ", " de la Plata ", 
          " de la Plata ", " de la Plata ", " de la Plata, ", " de la Plata, ", " de la Plata, ", 
          " dell'Accademia ", " Des. ", " Disease-a-Month ", " Drug Des Deliv ", " Drug Des Devel ", 
          " Dtsch ", " Dtsch. ", " e-Collaboration ", " e-Health ", " e-Journal ", " e-Journal ", 
          " e-Neuroforum ", " e-Neuroforum ", " e-Print ", " e-Print ", " e-Prints ", " e-Prints ", 
          " e-Scripta ", " e-Scripta ", " e-SPEN ", " e-SPEN ", " e-SPEN, ", " e-SPEN, ", 
          " E. M. Museum ", " E: ", " Early Modern Japan: an Interdisciplinary Journal ", 
          " EBioMedicine ", " ecancermedicalscience ", " eClinicalMedicine ", " eClinicalMedicine ", 
          " eCrypt ", " eCrypt ", " eEarth ", " Eesti ja ", " EFSA ", " eGEMs ", " eGEMs ", 
          " eJournal ", " eJournal ", " Eksperimental'naia i Klinicheskaia ", " Eksperimental'noi i Teoreticheskoi ", 
          " El Salvador ", " ELH ", " eLife ", " eLife ", " eLS ", " eLS ", " EMBO J ", 
          " EMBO J. ", " EMBO Journal ", " EMBO Rep ", " EMBO Rep. ", " EMBO Reports ", 
          " eNeuro ", " eNeuro ", " eNeurologicalSci ", " eNeurologicalSci ", " eNeurologicalSci ", 
          " engrXiv ", " EPA Journal ", " ePlasty ", " ePlasty ", " ePrint ", " ePrint ", 
          " ePrints ", " ePrints ", " ePub ", " ePub ", " ePub) ", " ESC Heart Failure ", 
          " eScholarship ", " eScripta ", " eScripta ", " EuroIntervention ", " eVolo ", 
          " eVolo ", " eWeek ", " eWeek ", " FASEB J ", " FASEB J. ", " FEBS J ", " FEBS J. ", 
          " FEBS Journal ", " Fizika Goreniya i Vzryva ", " Folia onomastica Croatica ", 
          " For. Bull. ", " Föreningen i Stockholm ", " für anorganische und allgemeine ", 
          " GigaScience ", " Gigiena i Sanitariia ", " Glagoljski rukopisi ", " Glas Srp. kr. akademije ", 
          " Građa za povijest knjiž. hrv. ", " Građa za povijest knjiž. hrv. ", " HannahArendt.net ", 
          " hessenARCHÄOLOGIE ", " hessenARCHÄOLOGIE ", " Historická revue: vedecko-populárny časopis o dejinách ", 
          " Historická revue: vedecko-populárny časopis o dejinách ", " Historická revue: vedecko-populárny časopis o dejinách ", 
          " History of Science; An Annual Review of Literature ", " HIV & AIDS ", " HIV and AIDS ", 
          " HIV/AIDS ", " HIV/AIDS ", " HOAJ biology ", " Hoppe-Seyler's ", " hprints ", 
          " Hylli i Dritës ", " i ee ", " i ee ", " i Teplovoznaja ", " i-Perception ", 
          " iConference ", " IDCases ", " IEEE/ACM ", " IEEE/ACM ", " IFAC Proceedings ", 
          " IFAC-PapersOnLine ", " iJournal ", " iJournal ", " im Gesundheitswesen ", " InfoWorld ", 
          " Inside Higher Ed ", " iPhone ", " iScience ", " iScience ", " ISME ", " ISRN AIDS ", 
          " ISRN Genetics ", " J Gerontol A Biol Sci Med Sci ", " J Sch Nurs ", " J SIAM ", 
          " J. SIAM ", " JABS : Journal of Applied Biological Sciences ", " JAK-STAT ", 
          " JAMA Psychiatry ", " JAZU u Zadru ", " JAZU u Zadru ", " Jezik in slovstvo ", 
          " JMIR ", " JNCI: Journal ", " Journal of e-Learning ", " Journal of Materials Chemistry A ", 
          " Journal of the A.I.E.E. ", " Journal of the IEST ", " Journal sur ", " Jpn ", 
          " Jpn. ", " Katorga i Ssylka ", " Keel ja ", " Krčki zbornik: godišnjak Povijesnog društva otoka Krka ", 
          " Krčki zbornik: godišnjak Povijesnog društva otoka Krka ", " l'IHÉS ", " l'IHÉS ", 
          " l'IHÉS ", " l'IHÉS ", " L. Sch. L. ", " La Trobe ", " Latina/o ", " Le chemin de fer ", 
          " Le chemin de fer ", " Le chemin de fer ", " Le Monde artiste ", " Ltd ", " MAA Focus ", 
          " mAbs ", " mAbs ", " Marion E. Wade ", " mBio ", " mBio ", " Med Sch ", " MedChemComm ", 
          " Meddelelser om Grønland ", " Meddelelser om Grønland, ", " medRxiv ", " Medscape ", 
          " MERIP ", " Methods in Molecular Biology ", " mHealth ", " mHealth ", " MicrobiologyOpen ", 
          " Mikologiya i Fitopatologiya ", " MIS Quarterly ", " mLife ", " mLife ", " Molecular and Cellular Biology ", 
          " Montana The Magazine of Western History ", " mSphere ", " mSphere ", " mSystems ", 
          " mSystems ", " MycoKeys ", " n.paradoxa ", " Narodna starina ", " NASA Tech Briefs ", 
          " Nast. vjesnik ", " Nastavni vjesnik ", " Nauka i Zhizn ", " NBER ", " NDT & E International ", 
          " NeuroImage ", " NeuroReport ", " Newspaper for IT Leaders ", " Notes of the AAS ", 
          " Novye i Maloizvestnye ", " Now and Then: ", " npj Aging ", " Ny Forskning i Grammatik ", 
          " Nyt Tidsskrift ", " Obsidian II ", " Ocean Science Journal : Osj ", " PAJ: A Journal of Performance and Art ", 
          " PALAIOS ", " PalAsiatica ", " PalZ ", " PeerJ ", " PharmSci ", " PhD ", " PhytoKeys ", 
          " Pis'ma v Astronomicheskii ", " PLOS ", " PLOS ", " PLOS ", " PLOS ", " PLOS ", 
          " PLOS ONE ", " PNAS ", " Posebna izdanja ", " Povijesni prilozi ", " Prilozi povijesti otoka Hvara ", 
          " Problemi sjevernog Jadrana ", " Proceedings of the IRE ", " Protein Eng Des Sel ", 
          " Prz ", " Prz. ", " Publikacije Staroslavenske akademije na Krku ", " Published in: ", 
          " Radovi Instituta Jugoslavenske akademije znanosti i umjetnosti u Zadru ", " Radovi Instituta Jugoslavenske akademije znanosti i umjetnosti u Zadru ", 
          " Radovi Instituta Jugoslavenske akademije znanosti i umjetnosti u Zadru ", " Radovi Staroslav. instituta ", 
          " Radovi Staroslavenskog instituta ", " Radovi Staroslavenskog instituta ", " Radovi Staroslavenskog zavoda ", 
          " Radovi za slovensku filologiju ", " Radovi Zavoda za povijesne znanosti HAZU u Zadru ", 
          " Radovi Zavoda za povijesne znanosti HAZU u Zadru ", " Radovi Zavoda za povijesne znanosti HAZU Zadru ", 
          " Radovi Zavoda za povijesne znanosti HAZU Zadru ", " Rev Sci Tech Off Int Epiz ", 
          " Revista del Museo de La Plata ", " Ricerche slavistiche ", " RNA ", " S.A.P.I.EN.S ", 
          " S.A.P.I.EN.S. ", " Saggiatore musicale ", " Sbornik' Otd. russ. jazyka i slovesnosti ", 
          " SCALACS ", " Sch ", " Scr. ", " SIAM Journal on ", " SIAM Review ", " SICOT-J ", 
          " SPUMS J ", " Srp Arh Celok Lek ", " Star Trek: The Official Monthly Magazine ", 
          " Stari pisci hrvatski ", " Starine Jugoslavenske akademije znanosti i umjetnosti ", 
          " Starine Jugoslavenske akademije znanosti i umjetnosti ", " Starine Jugoslavenske akademije znanosti i umjetnosti ", 
          " STD & AIDS ", " STDs ", " Swiss express: the Swiss Railways Society journal ", 
          " Série A ", " Séries A et B ", " Tae Kwon Do ", " TAPPI Journal ", " Tech off Int Epiz ", 
          " Tellus A ", " Terra plana ", " Texte du Sacre ", " Thai For Bull ", " The ALAN Review ", 
          " The Annals of the American Academy ", " The De Paulia ", " The EMBO Journal ", 
          " The La Salle Collegian ", " The New Yorker ", " Tidsskr Nor Laegeforen ", " Tidsskr Nor Lægeforen ", 
          " Time Off Magazine ", " Time Out London ", " tot de ", " Transactions and archaeological record of the Cardiganshire Antiquarian Society ", 
          " u Krku za ", " U.S. ", " U.S.A. ", " U.S.A. ", " UBV Data ", " uHealth ", " uHealth ", 
          " UNED Research Journal ", " USGS ", " v Astronomicheskii Zhurna ", " van het ", 
          " van het ", " Vjesnik historijskih arhiva u Rijeci i Pazinu ", " Vjesnik historijskih arhiva u Rijeci i Pazinu ", 
          " Vjesnik Hrv. dalm. zem. arkiva ", " Vjesnik Hrv. dalm. zem. arkiva ", " Vjesnik Kr. Drž. arkiva u Zagrebu ", 
          " Vjesnik Kr. Drž. arkiva u Zagrebu ", " Vjesnik kr. Hrvatsko-slavonsko-dalmatinskog zemaljskog arkiva ", 
          " Vjesnik kr. hrvatsko-slavonsko-dalmatinskoga Zemaljskog arhiva ", " Vjesnik kr. hrvatsko-slavonsko-dalmatinskoga Zemaljskog arhiva ", 
          " Vjesnik Povijesnog arhiva Rijeka ", " Vjesnik Staroslavenske akademije ", " Vjesnik Staroslavenske akademije u Krku ", 
          " Vjesnik Staroslavenske akademije u Krku ", " Vjesnik Staroslavenske akademije u Krku za god. ", 
          " Vjesnik za arheologiju i historiju dalmatinsku ", " Vjesnik za arheologiju i historiju dalmatinsku ", 
          " Vjesnik Zemaljskog arhiva ", " Vjesnik zemaljskog arkiva ", " Vjestnik Kr. hrvatsko-slavonsko-dalmatinskog zemaljskog arkiva ", 
          " Vjestnik Kr. hrvatsko-slavonsko-dalmatinskog zemaljskog arkiva ", " voor de geschiedenis der Nederlanden ", 
          " voor de geschiedenis der Nederlanden ", " VTK/UCT ", " We Proceeded On ", " WRIR ", 
          " z/Journal ", " z/Journal ", " za g. ", " za g. ", " za likovne umjetnosti ", 
          " zbMATH ", " Zeitschrift für Geologische Wissenschaften ", " Zeitschrift für Physik A Hadrons and Nuclei ", 
          " Zeitschrift für Physik A: Hadrons and Nuclei ", " Znanosti i Umjetnosti ", 
          " ZooKeys ", " Zprávy o zasedání Král. čes. společnosti nauk v Praze ", 
          " Zprávy o zasedání Král. čes. společnosti nauk v Praze ", " Zprávy o zasedání Král. čes. společnosti nauk v Praze ", 
          " Des Moines ", " ESAIM: PS ",
          " Ргасе filologiczne ", /* The above will be automatically updated to alphabetical order */ 
);
const UCFIRST_JOURNAL_ACRONYMS = array(/* The following will be automatically updated to alphabetical order */
          " (And the Middle East) ", " (Bba) ", " (online Ed.) ", " Aapos ", " Aaps ", 
          " ACM Siggraph ", " Acs ", " Acta Medico-Historica Adriatica ", " Acta Medico-historica Adriatica ", 
          " Aids & Behavior ", " Aids and Behavior ", " Aids Care ", " Aids Research ", 
          " Aims Microbiology ", " Ajnr. ", " Algebra I Analiz ", " Algebra I Logika ", 
          " Amphibian Species of the World: an Online ", " Amphibian Species of the World: An Online Reference. ", 
          " Angew Chem Int ed ", " AOAC INTERNATIONAL ", " AoB PLANTS ", " Aob PLANTS ", 
          " Aob Plants ", " Aorn J ", " Aorn J. ", " Aorn Journal ", " Appiled ", " Aps Division ", 
          " Arch Dis Child Fetal Neonatal ed ", " ARCTIC ", " Arhiv Za Slovensku Filologiju ", 
          " Arhivski Vjesnik ", " Asaio ", " Asme Aes ", " Asme MTD ", " Avtomatika I Telemekhanika ", 
          " B/GCVS ", " B/Gcvs ", " b/gcvs ", " Bibliotheca Enrico Damiani Diretta Da Nullo Minissi ", 
          " Bibliotheca Enrico Damiani Diretta da Nullo Minissi ", " Bild Am Sonntag ", 
          " Bioessays ", " Biomed Research International ", " BioRxiv ", " Biorxiv ", " Bjog ", 
          " Bjog: ", " Bmj ", " Bogoslovni Vestnik ", " Bogoslovska Smotra ", " Bulletin Za Likovne Umjetnosti Jugoslavenske Akademije ", 
          " Cbd Ubiquitin ", " CFSK-Dt ", " Chembiochem ", " Chemcatchem ", " Chemelectrochem ", 
          " Chemistryopen ", " Chemistryselect ", " Chemistryviews ", " Chemmedchem ", 
          " Chemphotochem ", " Chemphyschem ", " Chempluschem ", " Chemsuschem ", " Chemsystemschem ", 
          " CHEST ", " Chimia ", " Chinoperl ", " Cla Journal ", " Cmaj ", " Combinatorial Math. And Combinatorial ", 
          " Commlaw ", " Crkva Na Svijetu ", " Croatia Sacra ", " Croatica Christiana Periodica ", 
          " Croatica Et Slavica Iadertina ", " Crystengcomm ", " Cultura I Literatura ", 
          " Cutter It Journal ", " Cytojournal ", " Danica Ilirska ", " De La Plata ", 
          " De la Plata ", " de La Plata ", " De La Plata, ", " De la Plata, ", " de La Plata, ", 
          " Dell'Accademia ", " des. ", " Disease-A-Month ", " Drug des Deliv ", " Drug des Devel ", 
          " DTSCH ", " DTSCH. ", " E-Collaboration ", " E-Health ", " E-Journal ", " E-journal ", 
          " E-Neuroforum ", " E-neuroforum ", " E-Print ", " E-print ", " E-Prints ", " E-prints ", 
          " E-Scripta ", " E-scripta ", " E-SPEN ", " E-Spen ", " E-SPEN, ", " E-Spen, ", 
          " e. M. Museum ", " e: ", " Early Modern Japan: An Interdisciplinary Journal ", 
          " Ebiomedicine ", " Ecancermedicalscience ", " EClinicalMedicine ", " Eclinicalmedicine ", 
          " ECrypt ", " Ecrypt ", " EEarth ", " Eesti Ja ", " Efsa ", " EGEMs ", " Egems ", 
          " EJournal ", " Ejournal ", " Eksperimental'naia I Klinicheskaia ", " Eksperimental'noi I Teoreticheskoi ", 
          " el Salvador ", " Elh ", " ELife ", " Elife ", " ELS ", " Els ", " Embo J ", 
          " Embo J. ", " Embo Journal ", " Embo Rep ", " Embo Rep. ", " Embo Reports ", 
          " ENeuro ", " Eneuro ", " ENeurologicalSci ", " ENeurologicalsci ", " Eneurologicalsci ", 
          " EngrXiv ", " Epa Journal ", " EPlasty ", " Eplasty ", " EPrint ", " Eprint ", 
          " EPrints ", " Eprints ", " EPub ", " Epub ", " EPub) ", " Esc Heart Failure ", 
          " Escholarship ", " EScripta ", " Escripta ", " Eurointervention ", " EVolo ", 
          " Evolo ", " EWeek ", " Eweek ", " Faseb J ", " Faseb J. ", " Febs J ", " Febs J. ", 
          " Febs Journal ", " Fizika Goreniya I Vzryva ", " Folia Onomastica Croatica ", 
          " for. Bull. ", " Föreningen I Stockholm ", " Für Anorganische und Allgemeine ", 
          " Gigascience ", " Gigiena I Sanitariia ", " Glagoljski Rukopisi ", " Glas SRP. Kr. Akademije ", 
          " Građa Za Povijest Knjiž. HRV. ", " Građa za povijest knjiž. HRV. ", " Hannaharendt.net ", 
          " HessenARCHÄOLOGIE ", " Hessenarchäologie ", " Historická Revue: Vedecko-Populárny Časopis O Dejinách ", 
          " Historická Revue: Vedecko-populárny Časopis O Dejinách ", " Historická revue: Vedecko-populárny časopis o dejinách ", 
          " History of Science; an Annual Review of Literature ", " HIV & Aids ", " HIV and Aids ", 
          " HIV/Aids ", " Hiv/Aids ", " Hoaj Biology ", " Hoppe-Seyler´s ", " Hprints ", 
          " Hylli I Dritës ", " I Ee ", " I ee ", " I Teplovoznaja ", " I-Perception ", 
          " Iconference ", " Idcases ", " IEEE/Acm ", " Ieee/Acm ", " Ifac Proceedings ", 
          " Ifac-Papersonline ", " IJournal ", " Ijournal ", " Im Gesundheitswesen ", " Infoworld ", 
          " Inside Higher ed ", " Iphone ", " IScience ", " Iscience ", " Isme ", " Isrn Aids ", 
          " Isrn Genetics ", " J Gerontol a Biol Sci Med Sci ", " J SCH Nurs ", " J Siam ", 
          " J. Siam ", " Jabs : Journal of Applied Biological Sciences ", " Jak-Stat ", 
          " Jama Psychiatry ", " JAZU U Zadru ", " Jazu U Zadru ", " Jezik in Slovstvo ", 
          " Jmir ", " Jnci: Journal ", " Journal of E-Learning ", " Journal of Materials Chemistry A ", 
          " Journal of the A.i.i.e ", " Journal of the Iest ", " Journal Sur ", " JPN ", 
          " JPN. ", " Katorga I Ssylka ", " Keel Ja ", " Krčki Zbornik: Godišnjak Povijesnog Društva Otoka Krka ", 
          " Krčki zbornik: Godišnjak Povijesnog društva otoka Krka ", " L'Ihés ", " L'ihés ", 
          " l'Ihés ", " l'ihés ", " L. SCH. L. ", " la Trobe ", " Latina/O ", " Le Chemin De Fer ", 
          " Le Chemin de Fer ", " le Chemin de Fer ", " Le Monde Artiste ", " LTD ", " Maa Focus ", 
          " MAbs ", " Mabs ", " Marion e. Wade ", " MBio ", " Mbio ", " Med SCH ", " Medchemcomm ", 
          " Meddelelser Om Grønland ", " Meddelelser Om Grønland, ", " MedRxiv ", " MedScape ", 
          " Merip ", " Methods in Molecular Biology (Clifton, N.j.) ", " MHealth ", " Mhealth ", 
          " Microbiologyopen ", " Mikologiya I Fitopatologiya ", " Mis Quarterly ", " MLife ", 
          " Mlife ", " Molecular and Cellular Biology ", " Montana the Magazine of Western History ", 
          " MSphere ", " Msphere ", " MSystems ", " Msystems ", " Mycokeys ", " N.Paradoxa ", 
          " Narodna Starina ", " Nasa Tech Briefs ", " Nast. Vjesnik ", " Nastavni Vjesnik ", 
          " Nauka I Zhizn ", " Nber ", " NDT & e International ", " Neuroimage ", " Neuroreport ", 
          " Newspaper for It Leaders ", " Notes of the Aas ", " Novye I Maloizvestnye ", 
          " Now and then: ", " NPJ Aging ", " NY Forskning I Grammatik ", " NYT Tidsskrift ", 
          " Obsidian Ii ", " Ocean Science Journal : Osj ", " Paj: A Journal of Performance and Art ", 
          " Palaios ", " Palasiatica ", " Palz ", " Peerj ", " Pharmsci ", " PHD ", " Phytokeys ", 
          " Pis'ma V Astronomicheskii ", " PLoS ", " PLos ", " PloS ", " Plos ", " plos ", 
          " PLOS One ", " Pnas ", " Posebna Izdanja ", " Povijesni Prilozi ", " Prilozi Povijesti Otoka Hvara ", 
          " Problemi Sjevernog Jadrana ", " Proceedings of the Ire ", " Protein Eng des Sel ", 
          " PRZ ", " PRZ. ", " Publikacije Staroslavenske Akademije Na Krku ", " Published In: ", 
          " Radovi Instituta Jugoslavenske Akademije Znanosti I Umjetnosti U Zadru ", " Radovi Instituta Jugoslavenske Akademije Znanosti I Umjetnosti U Zadru ", 
          " Radovi Instituta Jugoslavenske Akademije Znanosti i Umjetnosti U Zadru ", " Radovi Staroslav. Instituta ", 
          " Radovi Staroslavenskog Instituta ", " Radovi Staroslavenskog Instituta ", " Radovi Staroslavenskog Zavoda ", 
          " Radovi Za Slovensku Filologiju ", " Radovi Zavoda Za Povijesne Znanosti HAZU U Zadru ", 
          " Radovi Zavoda Za Povijesne Znanosti Hazu U Zadru ", " Radovi Zavoda Za Povijesne Znanosti HAZU Zadru ", 
          " Radovi Zavoda Za Povijesne Znanosti Hazu Zadru ", " Rev Sci Tech off Int Epiz ", 
          " Revista del Museo de la Plata ", " Ricerche Slavistiche ", " Rna ", " S.a.p.i.en.s ", 
          " S.a.p.i.en.s. ", " Saggiatore Musicale ", " Sbornik' Otd. Russ. Jazyka I Slovesnosti ", 
          " Scalacs ", " SCH ", " SCR. ", " Siam Journal on ", " Siam Review ", " Sicot-J ", 
          " Spums J ", " SRP Arh Celok Lek ", " Star Trek: The Official Monthly Magazine ", 
          " Stari Pisci Hrvatski ", " Starine Jugoslavenske Akademije Znanosti I Umjetnosti ", 
          " Starine Jugoslavenske Akademije Znanosti i Umjetnosti ", " Starine jugoslavenske akademije znanosti i umjetnosti ", 
          " STD & Aids ", " STDS ", " Swiss Express: The Swiss Railways Society Journal ", 
          " Série a ", " Séries a et B ", " Tae Kwon do ", " Tappi Journal ", " Tech off int Epiz ", 
          " Tellus a ", " Terra Plana ", " Texte Du Sacre ", " Thai for Bull ", " The Alan Review ", 
          " The ANNALS of the American Academy ", " The de Paulia ", " The Embo Journal ", 
          " The la Salle Collegian ", " The New Yorker (Serial) ", " Tidsskr nor Laegeforen ", 
          " Tidsskr nor Lægeforen ", " Time off Magazine ", " Time Out London ", " Tot de ", 
          " Transactions and Archaeological Record of the Cardiganshire Antiquarian Society ", 
          " U Krku Za ", " U.s. ", " U.S.a. ", " U.s.a ", " Ubv Data ", " UHealth ", " Uhealth ", 
          " Uned Research Journal ", " Usgs ", " V Astronomicheskii Zhurna ", " Van Het ", 
          " van Het ", " Vjesnik Historijskih Arhiva U Rijeci I Pazinu ", " Vjesnik Historijskih Arhiva U Rijeci I Pazinu ", 
          " Vjesnik HRV. Dalm. Zem. Arkiva ", " Vjesnik Hrv. Dalm. Zem. Arkiva ", " Vjesnik Kr. Drž. Arkiva U Zagrebu ", 
          " Vjesnik Kr. Drž. Arkiva u Zagrebu ", " Vjesnik Kr. Hrvatsko-slavonsko-dalmatinskog Zemaljskog Arkiva ", 
          " Vjesnik Kr. Hrvatsko-Slavonsko-Dalmatinskoga Zemaljskog Arhiva ", " Vjesnik Kr. Hrvatsko-slavonsko-dalmatinskoga Zemaljskog Arhiva ", 
          " Vjesnik Povijesnog Arhiva Rijeka ", " Vjesnik Staroslavenske Akademije ", " Vjesnik Staroslavenske Akademije U Krku ", 
          " Vjesnik Staroslavenske akademije U Krku ", " Vjesnik Staroslavenske akademije u Krku za God. ", 
          " Vjesnik Za Arheologiju I Historiju Dalmatinsku ", " Vjesnik Za Arheologiju i Historiju Dalmatinsku ", 
          " Vjesnik Zemaljskog Arhiva ", " Vjesnik Zemaljskog Arkiva ", " Vjestnik Kr. Hrvatsko-Slavonsko-Dalmatinskog Zemaljskog Arkiva ", 
          " Vjestnik Kr. Hrvatsko-slavonsko-dalmatinskog Zemaljskog Arkiva ", " Voor de Geschiedenis der Nederlanden ", 
          " voor de Geschiedenis der Nederlanden ", " VTK/Uct ", " We Proceeded on ", " Wrir ", 
          " Z/Journal ", " Z/journal ", " Za G. ", " za G. ", " Za Likovne Umjetnosti ", 
          " ZbMATH ", " Zeitschrift Für Geologische Wissenschaften ", " Zeitschrift für Physik a Hadrons and Nuclei ", 
          " Zeitschrift Für Physik a: Hadrons And Nuclei ", " Znanosti I Umjetnosti ", 
          " Zookeys ", " Zprávy O Zasedání Král. Čes. Společnosti Nauk V Praze ", 
          " Zprávy O Zasedání Král. čes. Společnosti Nauk V Praze ", " Zprávy o zasedání Král. čes. Společnosti nauk v Praze ", 
          " des Moines ", "  Esaim: Ps ",
          " Ргасе Filologiczne ", /* The above will be automatically updated to alphabetical order */ 
);
const OBVIOUS_FOREIGN_WORDS = array(" Abhandlungen ", " Actes ", " Annales ", " Archiv ", " Archives de ",
           " Archives du ", " Archives des ", " Beiträge ", " Berichten ", " Blätter ", " Bulletin de ",
           " Bulletin des ", " Bulletin du ", " Cahiers ", " canaria ", " Carnets ", " Comptes rendus ",
           " Fachberichte ", " Historia ",
           " Jahrbuch ", " Journal du ", " Journal de ", " Journal des ", " Journal für ", " Mitteilungen ",
           " Monatshefte ", " Monatsschrift ", " Mémoires ", " Notizblatt ", " Recueil ", " Revista ",
           " Revue ", " Travaux ",
           " Studien ", " Wochenblatt ", " Wochenschrift ", " Études ", " Mélanges ", " l'École ",
           " Française ", " Estestvoznaniya ",
           " Voprosy ", " Istorii ", " Tekhniki ", " Matematika ", " Shkole ", " Ruch ", " Prawniczy ",
           " Ekonomiczny ", " Socjologiczny ", " Rivista ", " degli ", " studi ", " orientali ", " met den ",
           " Textes ", " pour nos ", " élèves ", " Lettre ", " Zeitschrift ", " für ", " Physik ", " Phonetik ",
           " allgemeine ", " Sprachwissenschaft ", " Maître ", " Phonétique ", " Arqueología ", " Códices ",
           " prehispánicos ", " coloniales ", " tempranos ", " Catálogo ",
           " Ekolist ", " revija ", " okolju ", " geographica ", " Slovenica ", " Glasnik ",
           " Muzejskega ", " Društva ", " Slovenijo ", " razgledi ", " Istorija ", " Mokslo ", " darbai ",
           " amžius ", " humanitarica ", " universitatis ", " Saulensis ", " oftalmologija ", " dienos ",
           " Lietuvos ", " muziejų ", " rinkiniai ", " Traduction ", " Terminologie ", " Rédaction ",
           " Etudes ", " irlandaises ", " Studia ", " humaniora ", " Estonica ",
           " Archiwa ", " Biblioteki ", " Muzea ", " Kościelne ", " Zbornik ",
           " Radova ", " Filozofskog ", " Fakulteta ", " Prištini ", " Mém. ", " Elektriceskaja ",
           " Teplovoznaja ", " Tjaga ", " Aarbøger ",  " Oldkyndighed ", " Histori ", " Les Publications ",
           "ische ", "histoire ", " ancienne ", " d'", "http://", "www.", "www-", " Mikologiya ", " Fitopatologiya ",
           " filmski ", " ljetopis ", " Saggiatore ", " musicale ", " artiste ", " Le Monde ",
           " univerzitet ", " Pravni ", " Fakultet ", " Gazeta ", " Caminhos ", " de Ferro ",
           " Jornal ", " comboios ", " Público ", " Revista ", " Olhar ", " Soudobé ", " dějiny ", " Maandblad ",
           " geschiedenis ", " voor de ", " Tiede ", " ja ase ", " Jezik ", " slovstvo ");
const MAP_DIACRITICS = array("À"=>"A", "Á"=>"A", "Â"=>"A", "Ã"=>"A",
    "Ä"=>"A", "Å"=>"A", "Æ"=>"AE", "Ç"=>"C", "È"=>"E", "É"=>"E",
    "Ê"=>"E", "Ë"=>"E", "Ì"=>"I", "Í"=>"I", "Î"=>"I", "Ï"=>"I",
    "Ð"=>"ETH", "Ñ"=>"N", "Ò"=>"O", "Ó"=>"O", "Ô"=>"O", "Õ"=>"O",
    "Ö"=>"O", "Ø"=>"O", "Ù"=>"U", "Ú"=>"U", "Û"=>"U", "Ü"=>"U",
    "Ý"=>"Y", "Þ"=>"THORN", "ß"=>"s", "à"=>"a", "á"=>"a", "â"=>"a",
    "ã"=>"a", "ä"=>"a", "å"=>"a", "æ"=>"ae", "ç"=>"c", "è"=>"e",
    "é"=>"e", "ê"=>"e", "ë"=>"e", "ì"=>"i", "í"=>"i", "î"=>"i",
    "ï"=>"i", "ð"=>"eth", "ñ"=>"n", "ò"=>"o", "ó"=>"o", "ô"=>"o",
    "õ"=>"o", "ö"=>"o", "ø"=>"o", "ù"=>"u", "ú"=>"u", "û"=>"u",
    "ü"=>"u", "ý"=>"y", "þ"=>"thorn", "ÿ"=>"y", "Ā"=>"A", "ā"=>"a",
    "Ă"=>"A", "ă"=>"a", "Ą"=>"A", "ą"=>"a", "Ć"=>"C", "ć"=>"c",
    "Ĉ"=>"C", "ĉ"=>"c", "Ċ"=>"C", "ċ"=>"c", "Č"=>"C", "č"=>"c",
    "Ď"=>"D", "ď"=>"d", "Đ"=>"D", "đ"=>"d", "Ē"=>"E", "ē"=>"e",
    "Ĕ"=>"E", "ĕ"=>"e", "Ė"=>"E", "ė"=>"e", "Ę"=>"E", "ę"=>"e",
    "Ě"=>"E", "ě"=>"e", "Ĝ"=>"G", "ĝ"=>"g", "Ğ"=>"G", "ğ"=>"g",
    "Ġ"=>"G", "ġ"=>"g", "Ģ"=>"G", "ģ"=>"g", "Ĥ"=>"H", "ĥ"=>"h",
    "Ħ"=>"H", "ħ"=>"h", "Ĩ"=>"I", "ĩ"=>"i", "Ī"=>"I", "ī"=>"i",
    "Ĭ"=>"I", "ĭ"=>"i", "Į"=>"I", "į"=>"i", "İ"=>"I", "ı"=>"i",
    "Ĵ"=>"J", "ĵ"=>"j", "Ķ"=>"K", "ķ"=>"k", "ĸ"=>"kra", "Ĺ"=>"L",
    "ĺ"=>"l", "Ļ"=>"L", "ļ"=>"l", "Ľ"=>"L", "ľ"=>"l", "Ŀ"=>"L",
    "ŀ"=>"l", "Ł"=>"L", "ł"=>"l", "Ń"=>"N", "ń"=>"n", "Ņ"=>"N",
    "ņ"=>"n", "Ň"=>"N", "ň"=>"n", "ŉ"=>"n", "Ŋ"=>"ENG", "ŋ"=>"eng",
    "Ō"=>"O", "ō"=>"o", "Ŏ"=>"O", "ŏ"=>"o", "Ő"=>"O", "ő"=>"o",
    "Ŕ"=>"R", "ŕ"=>"r", "Ŗ"=>"R", "ŗ"=>"r", "Ř"=>"R", "ř"=>"r",
    "Ś"=>"S", "ś"=>"s", "Ŝ"=>"S", "ŝ"=>"s", "Ş"=>"S", "ş"=>"s",
    "Š"=>"S", "š"=>"s", "Ţ"=>"T", "ţ"=>"t", "Ť"=>"T", "ť"=>"t",
    "Ŧ"=>"T", "ŧ"=>"t", "Ũ"=>"U", "ũ"=>"u", "Ū"=>"U", "ū"=>"u",
    "Ŭ"=>"U", "ŭ"=>"u", "Ů"=>"U", "ů"=>"u", "Ű"=>"U", "ű"=>"u",
    "Ų"=>"U", "ų"=>"u", "Ŵ"=>"W", "ŵ"=>"w", "Ŷ"=>"Y", "ŷ"=>"y",
    "Ÿ"=>"Y", "Ź"=>"Z", "ź"=>"z", "Ż"=>"Z", "ż"=>"z", "Ž"=>"Z",
    "ž"=>"z", "ſ"=>"s", "ƀ"=>"b", "Ɓ"=>"B", "Ƃ"=>"B", "ƃ"=>"b",
    "Ƅ"=>"SIX", "ƅ"=>"six", "Ɔ"=>"O", "Ƈ"=>"C", "ƈ"=>"c", "Ɖ"=>"D",
    "Ɗ"=>"D", "Ƌ"=>"D", "ƌ"=>"d", "ƍ"=>"delta", "Ǝ"=>"E",
    "Ə"=>"SCHWA", "Ɛ"=>"E", "Ƒ"=>"F", "ƒ"=>"f", "Ɠ"=>"G",
    "Ɣ"=>"GAMMA", "ƕ"=>"hv", "Ɩ"=>"IOTA", "Ɨ"=>"I", "Ƙ"=>"K",
    "ƙ"=>"k", "ƚ"=>"l", "ƛ"=>"lambda", "Ɯ"=>"M", "Ɲ"=>"N", "ƞ"=>"n",
    "Ɵ"=>"O", "Ơ"=>"O", "ơ"=>"o", "Ƣ"=>"OI", "ƣ"=>"oi", "Ƥ"=>"P",
    "ƥ"=>"p", "Ƨ"=>"TWO", "ƨ"=>"two", "Ʃ"=>"ESH", "ƫ"=>"t", "Ƭ"=>"T",
    "ƭ"=>"t", "Ʈ"=>"T", "Ư"=>"U", "ư"=>"u", "Ʊ"=>"UPSILON", "Ʋ"=>"V",
    "Ƴ"=>"Y", "ƴ"=>"y", "Ƶ"=>"Z", "ƶ"=>"z", "Ʒ"=>"EZH", "Ƹ"=>"EZH",
    "ƹ"=>"ezh", "ƺ"=>"ezh", "Ƽ"=>"FIVE", "ƽ"=>"five", "Ǆ"=>"DZ",
    "ǅ"=>"D", "ǆ"=>"dz", "Ǉ"=>"LJ", "ǈ"=>"L", "ǉ"=>"lj", "Ǌ"=>"NJ",
    "ǋ"=>"N", "ǌ"=>"nj", "Ǎ"=>"A", "ǎ"=>"a", "Ǐ"=>"I", "ǐ"=>"i",
    "Ǒ"=>"O", "ǒ"=>"o", "Ǔ"=>"U", "ǔ"=>"u", "Ǖ"=>"U", "ǖ"=>"u",
    "Ǘ"=>"U", "ǘ"=>"u", "Ǚ"=>"U", "ǚ"=>"u", "Ǜ"=>"U", "ǜ"=>"u",
    "ǝ"=>"e", "Ǟ"=>"A", "ǟ"=>"a", "Ǡ"=>"A", "ǡ"=>"a", "Ǣ"=>"AE",
    "ǣ"=>"ae", "Ǥ"=>"G", "ǥ"=>"g", "Ǧ"=>"G", "ǧ"=>"g", "Ǩ"=>"K",
    "ǩ"=>"k", "Ǫ"=>"O", "ǫ"=>"o", "Ǭ"=>"O", "ǭ"=>"o", "Ǯ"=>"EZH",
    "ǯ"=>"ezh", "ǰ"=>"j", "Ǳ"=>"DZ", "ǲ"=>"D", "ǳ"=>"dz", "Ǵ"=>"G",
    "ǵ"=>"g", "Ƕ"=>"HWAIR", "Ƿ"=>"WYNN", "Ǹ"=>"N", "ǹ"=>"n",
    "Ǻ"=>"A", "ǻ"=>"a", "Ǽ"=>"AE", "ǽ"=>"ae", "Ǿ"=>"O", "ǿ"=>"o",
    "Ȁ"=>"A", "ȁ"=>"a", "Ȃ"=>"A", "ȃ"=>"a", "Ȅ"=>"E", "ȅ"=>"e",
    "Ȇ"=>"E", "ȇ"=>"e", "Ȉ"=>"I", "ȉ"=>"i", "Ȋ"=>"I", "ȋ"=>"i",
    "Ȍ"=>"O", "ȍ"=>"o", "Ȏ"=>"O", "ȏ"=>"o", "Ȑ"=>"R", "ȑ"=>"r",
    "Ȓ"=>"R", "ȓ"=>"r", "Ȕ"=>"U", "ȕ"=>"u", "Ȗ"=>"U", "ȗ"=>"u",
    "Ș"=>"S", "ș"=>"s", "Ț"=>"T", "ț"=>"t", "Ȝ"=>"YOGH", "ȝ"=>"yogh",
    "Ȟ"=>"H", "ȟ"=>"h", "Ƞ"=>"N", "ȡ"=>"d", "Ȣ"=>"OU", "ȣ"=>"ou",
    "Ȥ"=>"Z", "ȥ"=>"z", "Ȧ"=>"A", "ȧ"=>"a", "Ȩ"=>"E", "ȩ"=>"e",
    "Ȫ"=>"O", "ȫ"=>"o", "Ȭ"=>"O", "ȭ"=>"o", "Ȯ"=>"O", "ȯ"=>"o",
    "Ȱ"=>"O", "ȱ"=>"o", "Ȳ"=>"Y", "ȳ"=>"y", "ȴ"=>"l", "ȵ"=>"n",
    "ȶ"=>"t", "ȷ"=>"j", "ȸ"=>"db", "ȹ"=>"qp", "Ⱥ"=>"A", "Ȼ"=>"C",
    "ȼ"=>"c", "Ƚ"=>"L", "Ⱦ"=>"T", "ȿ"=>"s", "ɀ"=>"z", "Ɂ"=>"STOP",
    "ɂ"=>"stop", "Ƀ"=>"B", "Ʉ"=>"U", "Ʌ"=>"V", "Ɇ"=>"E", "ɇ"=>"e",
    "Ɉ"=>"J", "ɉ"=>"j", "Ɋ"=>"Q", "ɋ"=>"q", "Ɍ"=>"R", "ɍ"=>"r",
    "Ɏ"=>"Y", "ɏ"=>"y", "ɐ"=>"a", "ɑ"=>"alpha", "ɒ"=>"alpha",
    "ɓ"=>"b", "ɔ"=>"o", "ɕ"=>"c", "ɖ"=>"d", "ɗ"=>"d", "ɘ"=>"e",
    "ə"=>"schwa", "ɚ"=>"schwa", "ɛ"=>"e", "ɜ"=>"e", "ɝ"=>"e",
    "ɞ"=>"e", "ɟ"=>"j", "ɠ"=>"g", "ɡ"=>"script", "ɣ"=>"gamma",
    "ɤ"=>"rams", "ɥ"=>"h", "ɦ"=>"h", "ɧ"=>"heng", "ɨ"=>"i",
    "ɩ"=>"iota", "ɫ"=>"l", "ɬ"=>"l", "ɭ"=>"l", "ɮ"=>"lezh", "ɯ"=>"m",
    "ɰ"=>"m", "ɱ"=>"m", "ɲ"=>"n", "ɳ"=>"n", "ɵ"=>"barred",
    "ɷ"=>"omega", "ɸ"=>"phi", "ɹ"=>"r", "ɺ"=>"r", "ɻ"=>"r", "ɼ"=>"r",
    "ɽ"=>"r", "ɾ"=>"r", "ɿ"=>"r", "ʂ"=>"s", "ʃ"=>"esh", "ʄ"=>"j",
    "ʅ"=>"squat", "ʆ"=>"esh", "ʇ"=>"t", "ʈ"=>"t", "ʉ"=>"u",
    "ʊ"=>"upsilon", "ʋ"=>"v", "ʌ"=>"v", "ʍ"=>"w", "ʎ"=>"y", "ʐ"=>"z",
    "ʑ"=>"z", "ʒ"=>"ezh", "ʓ"=>"ezh", "ʚ"=>"e", "ʞ"=>"k", "ʠ"=>"q",
    "ʣ"=>"dz", "ʤ"=>"dezh", "ʥ"=>"dz", "ʦ"=>"ts", "ʧ"=>"tesh",
    "ʨ"=>"tc", "ʩ"=>"feng", "ʪ"=>"ls", "ʫ"=>"lz", "ʮ"=>"h", "ʯ"=>"h");
