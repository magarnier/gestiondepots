

CREATE TABLE IF NOT EXISTS `employe` (
  `idemploye` int(11) NOT NULL AUTO_INCREMENT,
  `profilgithub` varchar(50) NOT NULL,
  `nombredepot` int(11) NOT NULL,
  `fkentreprise` int(11) NOT NULL,
  `fkequipe` int(11) NOT NULL,
  PRIMARY KEY (`idemploye`),
  KEY `FK_employe_entreprise` (`fkentreprise`),
  KEY `FK_employe_equipe` (`fkequipe`)
) ;



CREATE TABLE IF NOT EXISTS `entreprise` (
  `identreprise` int(11) NOT NULL AUTO_INCREMENT,
  `nomentreprise` varchar(50) NOT NULL,
  PRIMARY KEY (`identreprise`)
  ) ;



CREATE TABLE IF NOT EXISTS `equipe` (
  `idequipe` int(11) NOT NULL AUTO_INCREMENT,
  `nomequipe` varchar(50) NOT NULL,
  PRIMARY KEY (`idequipe`)
) ;




ALTER TABLE `employe`
  ADD CONSTRAINT `FK_employe_entreprise` FOREIGN KEY (`fkentreprise`) REFERENCES `entreprise` (`identreprise`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_employe_equipe` FOREIGN KEY (`fkequipe`) REFERENCES `equipe` (`idequipe`) ON DELETE CASCADE ON UPDATE CASCADE;


