
 Das www.technikum29.de Inhalts-Reposity
 =======================================
 
 Der Logeintrag der ersten Revision beschreibt sehr
 passend, wobei es sich hier handelt:
 
 > This reposity is supposed to contain the whole content of
 > http://www.technikum29.de. You can read about the progress
 > of the SVN migration in our wiki at http://dev.technikum29.de/
 >
 > The first import only contains the /en subdirectory, to test
 > the SVN directory autoversioning and post-commit-auto-update
 > features in an area where heribert, the main user, usually
 > doesn't write or - when he writes - never writes something
 > important (only width/height things of images, etc.).
 >
 > Please note: In later use/when this reposity finally gets
 > used on every day life, the commit comments won't be in
 > english any more.
 > 
 > --Sven, on his balcony computer at 24. July 2008.
 
 Es macht daher momentan nur Sinn, das Unterverzeichnis /en
 aus diesem Reposity auszuschecken:
 
 $ svn checkout svn://technikum29.de/technikum29-www/en
 
 Unter http://privat.technikum29.de/~sven/svn/technikum29-www
 kann der stets aktuelle Inhalt des Reposities betrachtet
 werden. Dies geht auf http://privat.technikum29.de/,
 weil unter http://privat.technikum29.de/shared
 auch das /shared-Verzeichnis der Homepage anzutreffen ist.
 
 -- Sven, auf dem Balkon-Computer am 25. Juli 08.