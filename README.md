# mvw_skin_default
The default skin for http://multiversewarriors.com/

##**Skin Requirements**

 1. All skins must contain the following files.
	 - [before.html](https://github.com/MultiverseGames/mvw_skin_default/blob/master/before.html)
	 - [after.html](https://github.com/MultiverseGames/mvw_skin_default/blob/master/after.html)
	
	These are simple html files used to include all needed CSS and JavaScript content to be used in the skin. Either may be left empty if unneeded, but both files must exist.

	As the names may suggest, the game will include before.html near the top of the page, in the `<head>` element. after.html will be included at the bottom of the page, after the `<body>`

 2. No cross-site requests
 
	 Custom skins may not send nor receive data with other sites. All skin content must exist within the provided folder. This is for the protection of our users and to ensure skin reliability does not depend on external sources.
 
 3. No Server Code
	
	This should not be possible regardless, but to be clear, any attempts to execute server side code will not be permitted. This restriction does not prohibit the use of, for example, AJAX requests utilizing functionality we have provided for that purpose.

##**Skin Recommendations**
1. File Versioning
	
    Any resources used by a skin should contain version numbers in the filename. Using the default skin as an example, this means that say, production.js could instead be production.1.0.0.js. 
    How you choose to determining version numbers is up to you, this is partially so that the administrative team can identify that your skin has changed, and primarily so that our player's browsers can properly cache these files, and grab new versions when needed.