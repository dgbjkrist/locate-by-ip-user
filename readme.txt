GÃ©olocalisation par IP (via API)--------------------------------
Url     : http://codes-sources.commentcamarche.net/source/101395-geolocalisation-par-ip-via-apiAuteur  : arguiotDate    : 11/03/2016
Licence :
=========

Ce document intitulé « GÃ©olocalisation par IP (via API) » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

J'ai beaucoup chercher sur le web et aucun des premiers resultat google me
<br 
/>redirigeais vers un site permettant de geolocaliser quelqu'un avec son IP depu
is
<br />script PHP.
<br />C'est seulement aprÃ¨s plusieurs semaine de recherc
he que j'ai trouvÃ© un systeme
<br />permettant d'avoir un tas d'info avec une 
simple IP et un petit script PHP.
<br />J'ai donc adapter ce script pour PHP 7 
et je dois dire qu'il marche plutÃ´t bien.
<br />
<br />Lien de l'API : <a hre
f='http://ip-api.com' rel='nofollow' target='_blank'>http://ip-api.com</a>
<br 
/>
<br />L'api va renvoyer des variables :
<br />Region : <pre class="code inl
ine inline-code" data-mode="php">$query['region']</pre>
<br />Ville : <pre clas
s="code inline inline-code" data-mode="php">$query['city']</pre>
<br />Organisa
tion : <pre class="code inline inline-code" data-mode="php">$query['org']</pre>

<br />Identifiant AS : <pre class="code inline inline-code" data-mode="php">$qu
ery['as']</pre>
<br />Longitude : <pre class="code inline inline-code" data-mod
e="php">$query['lon']</pre>
<br />Lattitude : <pre class="code inline inline-co
de" data-mode="php">$query['lat']</pre>
<br />ISP : <pre class="code inline inl
ine-code" data-mode="php">$query['isp']</pre>
<br />ZIP : <pre class="code inli
ne inline-code" data-mode="php">$query['zip']</pre>
<br />Timezone : <pre class
="code inline inline-code" data-mode="php">$query['timezone']</pre>
<br />Pays 
: <pre class="code inline inline-code" data-mode="php">$query['country']</pre>

<br />Code du pays : <pre class="code inline inline-code" data-mode="php">$query
['countryCode']</pre>
<br />Nom de la region : <pre class="code inline inline-c
ode" data-mode="php">$query['regionName']</pre>
