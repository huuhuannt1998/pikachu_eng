![](https://img.shields.io/badge/webSafety-Shooting range-PTEST)
![](https://img.shields.io/badge/version-1.0-success)
![](https://img.shields.io/github/stars/zhuifengshaonianhanlu/pikachu.svg)
![](https://img.shields.io/github/forks/zhuifengshaonianhanlu/pikachu.svg)
![](https://img.shields.io/github/license/zhuifengshaonianhanlu/pikachu.svg)

“If you want to understand a vulnerability，A good way is：You can first create this vulnerability yourself（Written in code），Then exploit it，Finally fix it”。

<br>
# pikachu

PikachuIs a vulnerableWebApplication system，Here contains commonwebSafetyVulnerability。 If you are aWebPenetration testing learners who are worried about not having a suitableShooting rangeto practice，ThenPikachuMay be what you want。<br>

## PikachuThe list of vulnerability types on it is as follows：<br>
* Burt Force(Brute force vulnerability)<br>
* XSS(Cross-site scripting vulnerability)<br>
* CSRF(Cross-site request forgery)<br>
* SQL-Inject(SQLInjection vulnerability)<br>
* RCE(Remote command/Code execution)<br>
* Files Inclusion(File inclusion vulnerability)<br>
* Unsafe file downloads(NotSafetyfile download)<br>
* Unsafe file uploads(NotSafetyfile upload)<br>
* Over Permisson(Privilege escalation vulnerability)<br>
* ../../../(Directory traversal)<br>
* I can see your ABC(Sensitive information leakage)<br>
* PHPDeserialization vulnerability<br>
* XXE(XML External Entity attack)<br>
* NotSafetyOfURLRedirect<br>
* SSRF(Server-Side Request Forgery)<br>
* Management tool<br>
* More...(Take a look?..There are easter eggs!)<br>

Management toolInside provides a simplexssManagement background,For you to test phishing and fishingcookie,You can also do keyboard recording！~<br>
Subsequent updates will continue to bring in some new vulnerabilities,You are also welcome to submit vulnerability cases to me,Please pay attention to the latest versionpikachu<br>
Each CategoryVulnerabilityAccording toNotSameOfDifferent situations have been designedNotSameOfSubcategory<br>
At the same time,To make theseVulnerabilityChangeOfMore interesting,InPikachuOn the platform, eachVulnerabilitySome have been designedSmallOfScenario,ClickVulnerabilityTop right corner of the pageOf"Tip"You can see the help information。<br>


## How to install and use
PikachuUse the best language in the worldPHPDevelop-_-<br>
The database used ismysql，So runPikachuYou need to install in advance"PHP+MYSQL+Middleware（Such asapache,nginxand so on）"OfBasic environment，RecommendInYouOfTest environment directlyUse Some integrated software to build these basic environments,ComparedSuch asXAMPP,WAMPand so on,As aEngageSafetyOfPerson,These things toYouShould beNotWhat is difficult。Next:<br>
-->PutDownloadedOfpikachuFolder towebServer root directory;<br>
-->Modify according to actual conditionsinc/config.inc.phpInsideOfDatabase connection configuration;<br>
-->Visith ttp://x.x.x.x/pikachu,There will be oneRedOfPassionTip"Welcome to use,pikachuNot yet initialized，Click to initialize and install!",Click to complete the installation。<br>
<br>
<br>

Such asIf you havePikachuUseOnWhatQuestion，CanInQQGroup：532078894（Full），973351978（Not full） Consult，AlthoughConsultHas，AlsoNotMust havePersonAnswer-_-。

## Docker

UseExisting build：
```bash
docker run -d -p 8765:80 8023/pikachu-expect:latest
```

Local build：
```bash
Such asResultYouFamiliardocker,AlsoCanUse directlydockerDeploy
docker build -t "pikachu" .
docker run -d -p 8080:80 pikachu
```

## Remember

"Less is more,Slow is fast"


## WIKI
[ClickEnter](https://github.com/zhuifengshaonianhanlu/pikachu/wiki/01:%E6%89%AF%E5%9C%A8%E5%89%8D%E9%9D%A2)




